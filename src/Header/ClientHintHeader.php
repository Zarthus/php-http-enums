<?php
declare(strict_types=1);

namespace Zarthus\Http\Header;

/**
 * Client hints, as described my {@link https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers#client_hints}
 */
enum ClientHintHeader: string
{
    case WwwAuthenticate = 'WWW-Authenticate';
    case Authorization = 'Authorization';
    case ProxyAuthenticate = 'Proxy-Authenticate';
    case ProxyAuthorization = 'Proxy-Authorization';
}
