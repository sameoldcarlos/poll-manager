<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;
use App\Models\Option;
use App\User;
use Illuminate\Support\Facades\Auth;

class PollController extends Controller
{
    private $objPoll;

    public function __construct()
    {
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
            'total_votes' => 0,
            'is_active' => true,
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

        return redirect()->route('index-poll');

        
    }

    public function vote($id) {
        $poll = Poll::findOrFail($id);
        return view('vote-poll', ['poll' => $poll]);
    }

    public function confirmVote(Request $request, $id) {
        $option = Option::findOrFail($request->poll_option);
        $option->num_votes += 1;
        $option->save();

        $poll = Poll::findOrFail($id);
        $poll->total_votes += 1;
        $poll->save();
        
        $vote_again = true;
        return redirect()->route('show-poll-results', ['id' => $id, 'vote_again' => $vote_again]);
    }

    public function showResults($id) {
        $poll = Poll::findOrFail($id);
        return view('show-poll-results', ['poll' => $poll]);
    }

    public function delete($id){
        $poll = Poll::findOrFail($id);

        if(Auth::id()==$poll->user_id) {        
            $poll->delete();
            return redirect()->back()->with('success', 'A enquete foi removida!');

         }
         else {
            return redirect()->back()->with('error', 'Não foi possível remover a enquete');
        }
    }
}
