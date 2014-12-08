<?php

class  UserTableSeeder extends DatabaseSeeder {
    public function run()
    {
        $user = new User();
        $user->email = "denali@codeup.com";
        $user->password = Hash::make("password");

        $user->save();

    }
}
