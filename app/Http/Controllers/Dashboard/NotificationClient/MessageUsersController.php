<?php

namespace App\Http\Controllers\Dashboard\NotificationClient;

use App\Models\Client;
use App\Models\MessageUser;
use App\Models\UsersPeople;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageUsersController extends Controller
{
    //
    public function check($recieverId){ // client
        // $senderId = Auth::user()->id;
// --------------------------
        $senderId = session()->get("id_client");
// --------------------------
        $client = Client::where('id',$senderId)->first();
        $user_id = $client->user->id;
        $senderId = UsersPeople::where('client_id', $senderId)->first()->id;
        $recieverId1 = UsersPeople::where('user_id', $user_id)->first()->id;
// --------------------------

        $data = [
            'sender_id' => $senderId,
            'reciever_id' => $recieverId1,
            // "type" => "lawyer"
        ];
        $data2 = [
            'sender_id' => $recieverId1,
            'reciever_id' => $senderId,
            // "type" => "lawyer"
        ];

        $checkExist = MessageUser::where([['sender_id', $senderId], ['reciever_id', $recieverId1]])->first();
        // $checkExist = MessageUser::where('sender_id', $senderId)->where('reciever_id', $recieverId1)->first();

        if(!$checkExist){
            $createConvo = MessageUser::create($data);
            $createConvo2 = MessageUser::create($data2);
            return $createConvo->id;
        }else{
            return $checkExist->id;
        }
    }
}
