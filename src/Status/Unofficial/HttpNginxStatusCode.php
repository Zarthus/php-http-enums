<?php
declare(strict_types=1);

namespace Zarthus\Http\Status\Unofficial;

/**
 * Unofficial status codes provided by Nginx
 */
enum HttpNginxStatusCode: int
{
    case NoResponse = 444;
    case RequestHeaderTooLarge = 494;
    case SslCertificateError = 495;
    case SslCertificateRequired = 496;
    case HttpRequestSentToHttpsPort = 497;
    case ClientClosedRequest = 499;
}
