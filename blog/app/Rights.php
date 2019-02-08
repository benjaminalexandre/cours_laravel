<?php

namespace App;
use Illuminate\Support\Facades\Auth;

class Rights {

    public static function is($user_id, $role_name) {
//$user_id INT, $role_name STRING
//L'utilisateur $user_id possède t-il le rôle $role_name ?

        foreach(User::find($user_id)->roles as $role) {
            if ($role->name === $role_name) {
                return true;
            }
        }
        return false;
    }

    public static function can($user_id, $permission_name) {
//$user_id INT, $permission_name STRING
//L'utilisateur $user_id possède t-il la permission $permission_name ?

        foreach(User::find($user_id)->roles as $role) {
            foreach(Role::find($role->id)->permissions as $permission)
            if ($permission->name === $permission_name) {
                return true;
            }
        }
        return false;
    }

    public static function canAtLeast($user_id, $permissions_names) {
//$user_id INT, $permissions_names ARRAY de STRING
//L'utilisateur $user_id possède t-il au moins une permission du tableau $permission_name ?

        //Pour chaque role
        foreach(User::find($user_id)->roles as $role) {
            //pour chaque permission
            foreach(Role::find($role->id)->permissions as $permission) {
                if (in_array($permission->name, $permissions_names)) {
                    return true;
                }
            }
        }
        return false;
    }

    public static function canAll($user_id, $permissions_names) {
//$user_id INT, $permissions_names ARRAY de STRING
//L'utilisateur $user_id possède t-il toutes les permissions du tableau $permission_name ?
        $cpt=0;
        //Pour chaque role
        foreach(User::find($user_id)->roles as $role) {
            //pour chaque permission
            foreach(Role::find($role->id)->permissions as $permission) {
                if (in_array($permission->name, $permissions_names)) {
                    $cpt++;
                }
            }
        }
        return ($cpt === count($permissions_names));

    }

    public static function authIs($role_name) {
        $id = Auth::user()->getAuthIdentifier();

        return self::is($id, $role_name);
    }

    public static function authCan($permission_name) {
        $id = Auth::user()->getAuthIdentifier();

        return self::can($id, $permission_name);

    }

    public static function authCanAtLeast($permissions_names) {
        $id = Auth::user()->getAuthIdentifier();

        return self::canAtLeast($id, $permissions_names);
    }

    public static function authCanAll($permissions_names) {
        $id = Auth::user()->getAuthIdentifier();
         return self::canAll($id, $permissions_names);

    }
}