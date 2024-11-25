<?php

namespace Elseoclub\Permission\Tests\TestModels;

use Elseoclub\Permission\Traits\HasRoles;

class User extends UserWithoutHasRoles {
    use HasRoles;
}
