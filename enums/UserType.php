<?php

class UserType
{
    const ADMIN = 1;
    const USER = 2;
    public static function getRole($role){
        if($role == 1)
            return "ADMIN";
        if($role == 2)
            return "USER";
    }
}
