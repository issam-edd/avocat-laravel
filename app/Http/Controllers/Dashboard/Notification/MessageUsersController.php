<?php

namespace App\Http\Controllers\Dashboard\Notification;

use App\Models\MessageUser;
use App\Models\UsersPeople;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessageUsersController extends Controller
{
    //
    public function check($recieverId){ // client
        // $senderId = Auth::user()->id;

        $senderId = UsersPeople::where('user_id', auth()->user()->id)->first()->id;
        $reciever1 = UsersPeople::where('client_id', $recieverId)->first()->id;

        // $recieverId = UsersPeople::where('client_id', $recieverId)->get();

        $data = [
            'sender_id' => $senderId,
            'reciever_id' => $reciever1,
            // "type" => "lawyer"
        ];
        $data2 = [
            'sender_id' => $reciever1,
            'reciever_id' => $senderId,
            // "type" => "lawyer"
        ];

        // $checkExist = MessageUser::where('sender_id', $senderId)->where('reciever_id', $reciever1)->first();
        $checkExist = MessageUser::where([['sender_id', $senderId], ['reciever_id', $reciever1]])->first();

        if(!$checkExist){
            $createConvo = MessageUser::create($data);
            $createConvo2 = MessageUser::create($data2);
            return $createConvo->id;
        }else{
            return $checkExist->id;
        }
    }
}
