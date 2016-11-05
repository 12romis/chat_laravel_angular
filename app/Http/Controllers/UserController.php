<?php
/**
 * Created by PhpStorm.
 * User: 12rom
 * Date: 01.11.2016
 * Time: 22:01
 */

namespace App\Http\Controllers;


use App\models\User;
use Faker\Provider\Base;
use Illuminate\Support\Facades\Auth;

class UserController extends BaseController
{
    /**
     * @param User $users
     */
    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function loginKareem()
    {
        Auth::loginUsingId(1);
    }

    public function loginMohamed ()
    {
        Auth::loginUsingId(2);
    }
}