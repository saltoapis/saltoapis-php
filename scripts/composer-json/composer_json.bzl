"""
This file contains rules used to generate the `composer.json` file.
"""

def _get_dependency_template(repo, version):
    return '''\t\t"%s": "%s"''' % (repo, version)

def _get_autoloading_template(ns, custom_prefix = ''):
    # ns: //src/Saltoapis/Nebula/User/V1
    # => "Saltoapis\\Nebula\\User\\V1\\": "src/Saltoapis/Nebula/User/V1",
    # if custom_prefix is set, then
    # => "custom_prefix\\Saltoapis\\Nebula\\User\\V1\\": "src/custom_prefix/Saltoapis/Nebula/User/V1",

    path = ns.removeprefix("//")
    php_ns = ns.removeprefix("//src/").replace("/", "\\\\") + "\\\\"

    if custom_prefix != '':
        path = path.replace("src/", "src/%s/" % custom_prefix)
        php_ns = custom_prefix + "\\\\" + php_ns
    
    return [
        '''\t\t\t"%s": "%s"''' % (php_ns, path),
    ]

def _composer_json(ctx):
    name = ctx.attr.package

    dependencies = ctx.attr.external_deps
    external_dependencies = []
    for repo in dependencies:
        version = dependencies[repo]
        external_dependencies.append(_get_dependency_template(repo, version))

    autoloading = []
    for ns in ctx.attr.namespaces:
        autoloading += _get_autoloading_template(ns)

    for ns in ctx.attr.metadata_namespaces:
        autoloading += _get_autoloading_template(ns, 'GPBMetadata')

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
        "metadata_namespaces": attr.string_list(
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
