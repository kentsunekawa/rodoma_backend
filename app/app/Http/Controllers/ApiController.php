<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

use App\Models\Sns;
use App\Models\Profile;
use App\Models\User;

class ApiController extends Controller
{
    public function index()
    {
        return new JsonResponse('You are authorized user');
    }

    public function sns() {
        $items = Sns::all();
        return $items;
    }

    public function profiles() {
        $items = Profile::all();
        return $items;
    }

    public function users() {
        $users = User::all();
        return $users;
    }
}
