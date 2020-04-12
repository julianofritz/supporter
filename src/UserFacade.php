<?php

namespace Supporter\User;


use App\Users;

class UserFacade
{
    public function getUsers()
    {
        return Users::all();
    }
}