<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.user');
    }

    public function leaderboard()
    {
        $globalUsers = User::orderBy('total_points', 'desc')->get();
        $user = Auth::user();


        $friends = $user->FriendColumn()->wherePivot('status', 'accepted')->get();
        $friendsFromUser = $user->UserColumn()->wherePivot('status', 'accepted')->get();


        $localUsers = $friends->merge($friendsFromUser);

        if (!$localUsers->pluck('id')->contains($user->id)) {
            $localUsers->push($user);
        }

        $localUsers = $localUsers->unique('id')->sortByDesc('total_points');

        $localUsersArray = $localUsers->values()->toArray();
        $globalUsersArray = $globalUsers->toArray();

        return view('users.leaderboardPage', compact('globalUsersArray', 'localUsersArray'));
    }


    public function userPayment(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->role = 'member';
        $user->save();

        return redirect()->route('user.home')->with('success', 'Congratulations! You are now a member.');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
}
