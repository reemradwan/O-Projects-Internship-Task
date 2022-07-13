<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Boxes;
use App\Models\Items;
use App\Models\User;
use App\Models\UserBoxes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class AdminController extends Controller
{
    public function index(){
        $user_id = Auth::id();
        $user = User::find($user_id);
        $boxes = Boxes::all();
        return view('Common.dashboard', compact('user','boxes'));
    }

    public function newBox(){
        $items = Items::whereNull('sold_at')->get();
        return view('Admin.new-box',compact('items'));
    }

    public function createNewBox(){
        $items = Items::whereNull('sold_at')->get();
        $boxItems = $items->inRandomOrder()->limit(3)->get();
        $itemsPrice = $boxItems->sum('price');
        $percentage = (10*$itemsPrice)/100;
        $boxPrice = $itemsPrice + $percentage;


        Boxes::create([
            'numberofitems' => $boxItems->count(),
            'price' => $boxItems->$boxPrice,
            'description'=> $boxItems->name,
        ]);

        return redirect(route('dashboard'))->with('success', 'New box created!');

    }

    public function chooseWinner(){

        $boxItems = $items->inRandomOrder()->limit(3)->get();

        $box->sold_at = now();
        $box->sold_to = $user_id;
    }

    public function newItem(){
        //TODO
    }

}
