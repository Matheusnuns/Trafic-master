<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class PermissoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::firstOrCreate(['name' => 'LOGIN']);
        Permission::firstOrCreate(['name' => 'CRIAR OCORRENCIA']);
        Permission::firstOrCreate(['name' => 'GERIR OCORRENCIA']);
        Permission::firstOrCreate(['name' => 'GERIR AGENTE']);
        Permission::firstOrCreate(['name' => 'VER AGENTE']);
        Permission::firstOrCreate(['name' => 'VER CONFIGURACAO']);
        Permission::firstOrCreate(['name' => 'CONFIG CARGO']);
        Permission::firstOrCreate(['name' => 'CONFIG OCORRENCIA']);
        Permission::firstOrCreate(['name' => 'VER MULTAS']);
        Permission::firstOrCreate(['name' => 'CADASTRAR MULTAS']);
        Permission::firstOrCreate(['name' => 'GERIR MULTAS']);
        Permission::firstOrCreate(['name' => 'CRIAR LEIS']);

        $role = Role::firstOrCreate(['name' => 'TI']);
        $role->givePermissionTo('LOGIN');
        $role->givePermissionTo('VER CONFIGURACAO');
        $role->givePermissionTo('GERIR AGENTE');
        $role->givePermissionTo('GERIR OCORRENCIA');
        $role->givePermissionTo('CONFIG OCORRENCIA');
        $role->givePermissionTo('CONFIG CARGO');
        $role->givePermissionTo('VER MULTAS');
        $role->givePermissionTo('CADASTRAR MULTAS');
        $role->givePermissionTo('GERIR MULTAS');
        $role->givePermissionTo('CRIAR LEIS');

    }
}
