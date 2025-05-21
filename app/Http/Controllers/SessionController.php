<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\SessionAnswer;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Create new session
     */
    public function getNewSession()
    {
        $newCode = $this->newCode();
        $session = Session::create([
            'code' => $newCode
        ]); //Create new session
     
       return response()->json($newCode);
    }

    private function newCode(){
        $newCode=substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTVWXYZ", 4)), 0, 4); //Creates random code with 4 numbers/letters
        if(Session::where("code", $newCode)->exists()){ //Check if session with this code already exists
            $newCode = $this->newCode(); //If session with code exists, create new code
        }
        return $newCode;
    }

    /**
     * Create existing session
    */
    public function getSession($code)
    {
        $session = Session::where("code", $code)->first();
        return response()->json($session);
    }


    /**
     * Create new session answer
    */
    public function sessionAnswer(Request $request)
    {
        // Check if the session answer already exists
        $session = Session::where("code", $request->sessionCode)->first();
        $sessionAnswer = SessionAnswer::where("sessionId", $session->id)
            ->where("questionId", $request->questionId)
            ->first();

        if ($sessionAnswer) {
            // Update the answer
            $sessionAnswer->update(['answerId' => $request->answerId]);
        } else {
            // Create a new session answer
            $sessionAnswer = SessionAnswer::create([
                'sessionId' => $session->id,
                'questionId' => $request->questionId,
                'answerId' => $request->answerId,
            ]);
        }

        // Return the response with the session answer
        return response()->json($sessionAnswer);
    }
}
