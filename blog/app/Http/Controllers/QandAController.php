<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QandAController extends Controller
{
    /**
     * Show the Q&A page with the latest Q&A.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $questions = Question::with('answers')->latest()->paginate(10);
        return view('questions.index', compact('questions'));
    }

    /**
     * Show the Q&A page with a limited number of Q&A.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function all()
    {
        $allQandA = Question::paginate(10);

        return view('qanda.all', compact('allQandA'));
    }
}
