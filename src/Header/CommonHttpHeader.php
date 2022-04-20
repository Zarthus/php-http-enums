<?php
declare(strict_types=1);

namespace Zarthus\Http\Header;

enum CommonHttpHeader: string
{
    case Connection = 'Connection';
    case KeepAlive = 'Keep-Alive';
}
