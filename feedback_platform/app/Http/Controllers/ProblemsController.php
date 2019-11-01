<?php

namespace App\Http\Controllers;
use App\Problem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProblemsController extends Controller
{
    public function index(){

        $problemsKnown = Problem::where('status', 'known')->get();
        $problemsBusy = Problem::where('status', 'busy')->get();
        $problemsDone = Problem::where('status', 'done')->get();
        return view('home', [
            'problemsKnown' => $problemsKnown,
            'problemsBusy' => $problemsBusy,
            'problemsDone' => $problemsDone,
        ]);
    }

    public function create(){
        $problems = Problem::all();
        return view('problems.create', compact('problems'));
    }
    public function store(){

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',

        ]);

        $problem = new Problem();
        $problem->title = request('title');
        $problem->description = request('description');
        $problem->urgent = request('urgent');
        $problem->user_id = Auth::id();

        $problem->save();

        return redirect('/');
    }
    public function show(Problem $problem){

        return view('problems.show', compact('problem'));
    }
    public function edit(Problem $problem){

        return view('problems.edit', compact('problem'));

    }

    public function update(Problem $problem){
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $problem->update($data);
        return redirect('problems/' . $problem->id);
    }
}
