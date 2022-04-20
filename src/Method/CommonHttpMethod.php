<?php
declare(strict_types=1);

namespace Zarthus\Http\Method;

/**
 * A shorter list of {@see HttpMethod} that omits less frequent enum cases.
 */
enum CommonHttpMethod: string
{
    case Get = 'GET';
    case Head = 'HEAD';
    case Post = 'POST';
    case Put = 'PUT';
    case Delete = 'DELETE';
    case Options = 'OPTIONS';
}
