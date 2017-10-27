<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 26.10.17
 * Time: 21:04
 */
class AccountController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}