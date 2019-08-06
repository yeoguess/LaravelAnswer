<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $questions = Question::with('answers')->get();
        // return $questions;
        $questions = [
            'Why is Laravel So Awesome?',
            'Why do we need Routes?',
            'How do I make a model talk to our Database?',
            'Do you like to use Bootstrap with Laravel?'
        ];

        return view('welcome')->with('questions', $questions);
    }

    public function about()
    {
        return "About Us Page";
    }


    public function profile($id)
    {
        // $user = User::findOrFail($id);
        $user = User::with(['questions', 'answers', 'answers.question'])->find($id);
        return view('profile')->with('user', $user);
    }
}
