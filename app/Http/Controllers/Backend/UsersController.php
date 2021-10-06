<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        echo "User  lIst Show";
    }
    public function show($id)
    {
        echo 'Showing details of user id:  ' . $id;
    }
}
