<?php
/**
 * Created by PhpStorm.
 * User: 12rom
 * Date: 01.11.2016
 * Time: 21:37
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    protected function me(){
        return Auth::user();
    }

    /**
     *
     */
    protected function setUpLayout()
    {
        if(!is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }
}