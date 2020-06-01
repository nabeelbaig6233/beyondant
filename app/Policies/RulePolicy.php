<?php

namespace App\Policies;

use App\models\role;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;

class RulePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function add_employee(User $user){
        return $user->role_id===5?true:false;
    }

    public function create_profile(User $user){
        $role=role::where("id",$user->role_id)->first();
        $permissions=json_decode($role->permission);
        if(in_array("createProfile",$permissions)){return true;}
        else{return false;}
    }

    public function create_company(User $user){
        $permissions=json_decode(role::find($user->role_id)->permission);
        if(in_array("createCompany",$permissions)){ return true;}
        else{return false;}
    }

    public function override_permission(User $user){
        return $user->role_id===5?true:false;
    }

}
