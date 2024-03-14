"""
This file contains rules used to generate the `composer.json` file.
"""

def _get_dependency_template(repo, version):
    return '''\t\t"%s": "%s"''' % (repo, version)

def _get_autoloading_template(ns):
    # ns: //src/Saltoapis/Nebula/User/V1
    # => "Saltoapis\\Nebula\\User\\V1\\": "src/Saltoapis/Nebula/User/V1",
    # => "GPBMetadata\\Saltoapis\\Nebula\\User\\V1\\": "src/GPBMetadata/Saltoapis/Nebula/User/V1",

    path = ns.removeprefix("//")
    php_ns = ns.removeprefix("//src/").replace("/", "\\\\") + "\\\\"
    
    gpb_metadata_path = ns.replace("//src/", "src/GPBMetadata/")
    gpb_metadata_ns = "GPBMetadata\\\\" + php_ns
    
    return [
        '''\t\t\t"%s": "%s"''' % (php_ns, path),
        '''\t\t\t"%s": "%s"''' % (gpb_metadata_ns, gpb_metadata_path),
    ]

def _composer_json(ctx):
    name = ctx.attr.package

    dependencies = ctx.attr.external_deps
    external_dependencies = []
    for repo in dependencies:
        version = dependencies[repo]
        external_dependencies.append(_get_dependency_template(repo, version))

    namespaces = ctx.attr.namespaces
    autoloading = []
    for ns in namespaces:
        autoloading += _get_autoloading_template(ns)

    out = ctx.actions.declare_file('composer.json')
    ctx.actions.expand_template(
        template = ctx.file._template,
        output = out,
        substitutions = {
            '$(package_name)': name,
            '$(dependencies)': ",\n".join(external_dependencies),
            '$(autoloading)': ",\n".join(autoloading),
        }
    )

    return [DefaultInfo(
        files = depset([out])
    )]



composer_json = rule(
    implementation = _composer_json,
    attrs = {
        "package": attr.string(
            mandatory = True,
        ),
        "namespaces": attr.string_list(
            default = [],
        ),
        "external_deps": attr.string_dict(
            default = {},
        ),
        "_template": attr.label(
            allow_single_file = True,
            default = ':composer.json.tmpl',
        )
    },
)
