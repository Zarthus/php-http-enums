<?php
declare(strict_types=1);

namespace Zarthus\Http\Header;

/**
 * Authentication headers, as described by {@link https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers#authentication}
 */
enum AuthenticationHeader: string
{
    case WwwAuthenticate = 'WWW-Authenticate';
    case Authorization = 'Authorization';
    case ProxyAuthenticate = 'Proxy-Authenticate';
    case ProxyAuthorization = 'Proxy-Authorization';
}
