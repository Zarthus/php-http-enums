<?php
declare(strict_types=1);

namespace Zarthus\Http\Method;

enum HttpMethod: string
{
    /**
     * The GET method requests a representation of the specified resource. Requests using GET should only retrieve data.
     */
    case Get = 'GET';
    /**
     * The HEAD method asks for a response identical to a GET request, but without the response body.
     */
    case Head = 'HEAD';
    /**
     * The POST method submits an entity to the specified resource, often causing a change in state or side effects on the server.
     */
    case Post = 'POST';
    /**
     * The PUT method replaces all current representations of the target resource with the request payload.
     */
    case Put = 'PUT';
    /**
     * The DELETE method deletes the specified resource.
     */
    case Delete = 'DELETE';
    /**
     * The CONNECT method establishes a tunnel to the server identified by the target resource.
     */
    case Connect = 'CONNECT';
    /**
     * The OPTIONS method describes the communication options for the target resource.
     */
    case Options = 'OPTIONS';
    /**
     * The TRACE method performs a message loop-back test along the path to the target resource.
     */
    case Trace = 'TRACE';
    /**
     * The PATCH method applies partial modifications to a resource.
     */
    case Patch = 'PATCH';
}
