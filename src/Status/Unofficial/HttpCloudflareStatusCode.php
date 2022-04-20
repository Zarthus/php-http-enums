<?php
declare(strict_types=1);

namespace Zarthus\Http\Status\Unofficial;

/**
 * Unofficial status codes provided by Cloudflare's Reverse Proxy
 */
enum HttpCloudflareStatusCode: int
{
    case WebServerReturnedAnUnknownError = 520;
    case WebServerIsDown = 521;
    case ConnectionTimedOut = 522;
    case OriginIsUnreachable = 523;
    case TimeoutOccurred = 524;
    case TlsHandshakeFailed = 525;
    case InvalidSslCertificate = 526;
    case RailgunError = 527;
}
