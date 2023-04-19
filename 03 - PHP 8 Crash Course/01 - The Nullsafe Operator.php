<?php

class User
{
    public function profile()
    {
        return new Profile;
    }
}

class Profile
{
    public function employement()
    {
        return 'Web Developer';
    }
}

$user = new User;

//$profile = $user->profile();
//
//if ($profile) {
//    echo $profile->employement();
//}

echo $user->profile()?->employement() ?? 'Not Provided';