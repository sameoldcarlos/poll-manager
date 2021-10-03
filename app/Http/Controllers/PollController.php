<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;
use App\Models\Option;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PollController extends Controller
{
    private $objUser;
    private $objPoll;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objPoll = new Poll();
    }

    public function index()
    {
        $polls = $this->objPoll->where('user_id', Auth::id())->paginate(10);
        return view('app.polls.index', ['polls' => $polls]);
    }

    public function create()
    {
        return view('app.polls.new-poll');
    }

    public function store(Request $request)
    {

        $poll = new Poll([
            'title' => $request->title,
            'question' => $request->question,
            'user_id' => Auth::id()
        ]);

        if ($poll->save()) {
            foreach ($request->option_field as $answer) {
                $option = new Option([
                    'answer' => $answer,
                    'num_votes' => 0
                ]);
                $poll->options()->save($option);
            }
        }

        
    }

    public function edit($id)
    {
        
    }

    public function vote($id) {
        $poll = Poll::findOrFail($id);
        return view('vote-poll', ['poll' => $poll]);
    }

    public function confirmVote(Request $request, $id) {
        $option = Option::findOrFail($request->poll_option);
        $option->num_votes += 1;
        $option->save();
    }
}
