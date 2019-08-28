<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteQuestionController extends Controller
{
    public function vote(Question $question){
    	$vote = (int) request()->vote;
    	auth()->user()->voteQuestion($question, $vote);
    	return back();

    }
}
