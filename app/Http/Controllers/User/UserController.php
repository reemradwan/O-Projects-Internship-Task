<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Boxes;
use App\Models\User;
use App\Models\UserBoxes;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function myBoxes(){
        $user_id = Auth::id();
        $user = User::find($user_id);
        $boxes = UserBoxes::where('owner_id', $user_id);
        return view('User.my-boxes', compact('user','boxes'));
    }

    public function buyBox($box_price, $box_id){
        $user_id = Auth::id();
        $user = User::find($user_id);
        if ($user->balance < $box_price) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Insufficient balance.'
            ]);
        }
        else
            Boxes::create([
                'boxId' => $box_id,
                'box_price' => $box_price,
                'owner_id'=> $user_id,
                'owner_name'=> $user->firstname + $user->lastname,
            ]);
        $box = Boxes::find($box_id);
        $box->sold_at = now();
        $box->sold_to = $user_id;

        return response()->json([
            'status' => '200',
            'message' => 'Box successfully bought!'
        ]);
    }
}
