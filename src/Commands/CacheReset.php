<?php

namespace Elseoclub\Permission\Commands;

use Illuminate\Console\Command;
use Elseoclub\Permission\PermissionRegistrar;

class CacheReset extends Command {
    protected $signature = 'permission:cache-reset';

    protected $description = 'Reset the permission cache';

    public function handle() {
        $permissionRegistrar = app( PermissionRegistrar::class );
        $cacheExists         = $permissionRegistrar->getCacheRepository()->has( $permissionRegistrar->cacheKey );

        if ( $permissionRegistrar->forgetCachedPermissions() ) {
            $this->info( 'Permission cache flushed.' );
        } elseif ( $cacheExists ) {
            $this->error( 'Unable to flush cache.' );
        }
    }
}
