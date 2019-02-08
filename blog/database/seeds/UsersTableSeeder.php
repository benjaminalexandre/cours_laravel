<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**Insert Users**/
        $user_1 = DB::table('users')->insertGetId([
            'name' => 'Benjamin',
            'email' => 'benjaminalexandre71@orange.fr',
            'password' => bcrypt('asmrugby71')
        ]);
        $user_2 = DB::table('users')->insertGetId([
            'name' => 'Cyprien',
            'email' => 'vaiss01@gmail.com',
            'password' => bcrypt('bresse')
        ]);
        $user_3 = DB::table('users')->insertGetId([
            'name' => 'Aurélien',
            'email' => 'chatonaurel@gmail.com',
            'password' => bcrypt('marceline')
        ]);

        /**Insert Roles**/
        $role_1 = DB::table('roles')->insertGetId([
            'name' => 'admin'
        ]);
        $role_2 = DB::table('roles')->insertGetId([
            'name' => 'moderator'
        ]);
        $role_3 = DB::table('roles')->insertGetId([
            'name' => 'user'
        ]);

        /**Insert Permissions**/
        $perm_1 = DB::table('permissions')->insertGetId([
            'name' => 'create.user'
        ]);
        $perm_2 = DB::table('permissions')->insertGetId([
            'name' => 'delete.user'
        ]);
        $perm_3 = DB::table('permissions')->insertGetId([
            'name' => 'update.user'
        ]);
        $perm_4 = DB::table('permissions')->insertGetId([
            'name' => 'see.user'
        ]);

        /**Insert Role_User**/
        DB::table('role_user')->insert([
            'role_id' => $role_1,
            'user_id' => $user_1
        ]);

        DB::table('role_user')->insert([
            'role_id' => $role_2,
            'user_id' => $user_2
        ]);

        DB::table('role_user')->insert([
            'role_id' => $role_3,
            'user_id' => $user_3
        ]);

        /**Insert Permission_Role**/
        DB::table('permission_role')->insert([
            'permission_id' => $perm_1,
            'role_id' => $role_1
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => $perm_2,
            'role_id' => $role_1
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => $perm_3,
            'role_id' => $role_1
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => $perm_4,
            'role_id' => $role_1
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => $perm_1,
            'role_id' => $role_2
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => $perm_3,
            'role_id' => $role_2
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => $perm_4,
            'role_id' => $role_3
        ]);

    }
}
