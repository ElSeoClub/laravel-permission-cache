<?php

namespace Elseoclub\Permission\Tests\TestModels;

class RuntimeRole extends \Elseoclub\Permission\Models\Role {
    protected $visible = [
        'id',
        'name',
    ];
}
