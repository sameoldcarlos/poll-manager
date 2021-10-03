<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $polls = Poll::paginate(10);
        return view('home-page', ['polls'=> $polls]);
    }
}
