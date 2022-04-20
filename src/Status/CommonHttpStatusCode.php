<?php
declare(strict_types=1);

namespace Zarthus\Http\Status;

/**
 * A shorter list of {@see HttpStatusCode} that omits less frequent enum cases.
 */
enum CommonHttpStatusCode: int
{
    case Ok = 200;
    case Created = 201;
    case Accepted = 202;
    case NoContent = 204;

    case MovedPermanently = 301;
    case Found = 302;
    case NotModified = 304;
    case TemporaryRedirect = 307;
    case PermanentRedirect = 308;

    case BadRequest = 400;
    case Unauthorized = 401;
    case PaymentRequired = 402;
    case Forbidden = 403;
    case NotFound = 404;
    case MethodNotAllowed = 405;
    case NotAcceptable = 406;
    case RequestTimeout = 408;
    case Conflict = 409;
    case Gone = 410;

    case InternalServerError = 500;
    case NotImplemented = 501;
    case BadGateway = 502;
    case ServiceUnavailable = 503;
    case GatewayTimeout = 504;
}
