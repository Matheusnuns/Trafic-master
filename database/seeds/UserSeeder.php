<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->updateOrInsert(
            [
                'email' => 'victor.mussel@mesquita.rj.gov.br'
            ],
            [
                'name' => 'Victor',
                'email' => 'victor.mussel@mesquita.rj.gov.br',
                'password' => '$2y$10$eMMXLkP579E/hf8.oSBJRu.yndQDIU0XrjRsY/R9Sr6hxzjToy0gC', //teste123
                'cpf'   =>  '163.479.927-52',
                'tipo'  => 'Externo'
            ]
        );

        $userId = DB::table('users')
            ->where('email', 'victor.mussel@mesquita.rj.gov.br')
            ->first()
            ->id;

        // Busca o usuário pelo modelo
        $user = User::findOrFail($userId);
        $role = Role::firstOrCreate(['name' => 'TI']);
        $user->assignRole($role);
    }
}
