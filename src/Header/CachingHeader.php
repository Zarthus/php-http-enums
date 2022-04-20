<?php
declare(strict_types=1);

namespace Zarthus\Http\Header;

/**
 * Caching headers, as described by {@link https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers#caching}
 */
enum CachingHeader: string
{
    case Age = 'Age';
    case CacheControl = 'Cache-Control';
    case ClearSiteData = 'Clear-Site-Data';
    case Expires = 'Expires';
    case Pragma = 'Pragma';
    case Warning = 'Warning';
}
