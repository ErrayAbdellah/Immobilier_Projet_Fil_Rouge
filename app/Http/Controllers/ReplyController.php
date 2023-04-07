<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\User;
use App\Notifications\InvoicePaid;
use App\Notifications\ReplyAdded;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    //
    public function index(){
        // dd(Reply::all());
        $reply = Reply::create([
        'title' => 'Test A1'
       ]);
        // dd($reply);
        // $user->notify(new InvoicePaid($reply));
        return 'heelo';
    }
}
