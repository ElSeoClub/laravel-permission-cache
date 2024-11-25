<?php

namespace Elseoclub\Permission\Exceptions;

use InvalidArgumentException;

class WildcardPermissionNotImplementsContract extends InvalidArgumentException {
    public static function create() {
        return new static( 'Wildcard permission class must implements Elseoclub\Permission\Contracts\Wildcard contract' );
    }
}
