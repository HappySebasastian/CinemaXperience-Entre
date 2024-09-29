<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use App\Models\Question;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $quiz = Quiz::where('media_id', $id)->first();
        if (!$quiz) {
            // Handle the case where the quiz is not found
            return redirect()->back()->with('error', 'Quiz not found');
        }
        $questions = Question::where('quiz_id', $quiz->id)->with('answers')->get();


        return view('users.quizPage', compact('quiz', 'questions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

//     public function submitPoints(Request $request)
// {
//     $points = $request->input('points');
//     $user = Auth::user();

//     // Add points to the user's total points
//     $user->total_point += $points;
//     $user->save();

//     return response()->json([
//         'message' => 'Points added successfully',
//         'total_points' => $user->total_point
//     ]);
// }
}
