<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 25.10.17
 * Time: 22:57
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class AccountController extends Controller
{
    public function index()
    {
        return view('account.user-index');
    }
}