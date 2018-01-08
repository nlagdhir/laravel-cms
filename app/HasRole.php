<?php 

namespace App;

trait HasRole
{
	public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function assignRole(Role $role)   
    {
        return $this->roles()->save($role);
    }

    public function hasRole($role)
    {
        if(is_string($role))
        {
            return $this->roles->contains('name',$role);
        }

        foreach ($role as $r) {
            if($this->hasRole($r->name)){
                return true;
            }
        }
        return false;
    }

}