<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;

class ApiController extends Controller
{
    //
    public function getAllPoll(Request $request)
    {
        $poll = Poll::all();

        foreach ($poll as $key => $value) {
            $value->user;
        }
        // return;
        // return $poll->user->name;


        $result = [
            'message' => "succes get poll",
            'data' => $poll
        ];

        return response()->json($result);
    }

    public function createVoting(Request $request, $poll_id, $choice_id) {

        
        return $choice_id;
    }
}
