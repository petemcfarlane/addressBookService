<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {

    public function run()
    {
        $user = new User([
            'name'     => 'Test',
            'email'    => 'test@user.com',
            'password' => Hash::make('password')
        ]);
        $user->save();
    }
}