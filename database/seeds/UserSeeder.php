<?php
use App\models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

/**
 * Created by PhpStorm.
 * User: 12rom
 * Date: 01.11.2016
 * Time: 22:07
 */
class UserSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'username'=>'kareem3d',
            'email'=>'kareem3d.a@gmail.com',
            'password'=>Hash::make('kareem123'),
        ]);

        User::create([
            'username'=>'mohamed3d',
            'email'=>'mohamed3.a@gmail.com',
            'password'=>Hash::make('mohamed123'),
        ]);
    }
}