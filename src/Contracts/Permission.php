<?php

namespace Elseoclub\Permission\Contracts;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int|string $id
 * @property string $name
 * @property string|null $guard_name
 *
 * @mixin \Elseoclub\Permission\Models\Permission
 *
 * @phpstan-require-extends \Elseoclub\Permission\Models\Permission
 */
interface Permission {
    /**
     * A permission can be applied to roles.
     */
    public function roles(): BelongsToMany;

    /**
     * Find a permission by its name.
     *
     *
     * @throws \Elseoclub\Permission\Exceptions\PermissionDoesNotExist
     */
    public static function findByName( string $name, ?string $guardName ): self;

    /**
     * Find a permission by its id.
     *
     *
     * @throws \Elseoclub\Permission\Exceptions\PermissionDoesNotExist
     */
    public static function findById( int|string $id, ?string $guardName ): self;

    /**
     * Find or Create a permission by its name and guard name.
     */
    public static function findOrCreate( string $name, ?string $guardName ): self;
}
