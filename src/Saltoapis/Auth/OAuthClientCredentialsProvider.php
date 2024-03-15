<?php

namespace Saltoapis\Auth;

interface OAuthClientCredentialsProvider {
    function get_access_token(): string;
    function invalidate_access_token();
}
