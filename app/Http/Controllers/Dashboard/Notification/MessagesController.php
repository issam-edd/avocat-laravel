<?php

namespace App\Http\Controllers\Dashboard\Notification;

use App\Models\Client;
use App\Models\Message;
use App\Models\MessageUser;
use App\Models\UsersPeople;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    //
    function index() {
        // if(Auth::check()) {
            $lawyer = Auth::user()->id;
            // $client_id = Client::where("lawyer_id",$lawyer)->pluck("id");
            $client_id = Client::where("lawyer_id",$lawyer)->pluck("id");


            // $UsersPeople = UsersPeople::whereIn('client_id', $client_id)->get();
            $UsersPeople = UsersPeople::whereIn('client_id', $client_id)->paginate(15);
            return view('dashboard.lawyer.managments.notification.home',['users' => $UsersPeople]);
        // }elseif(session()->has("id_client")){
        //     //  ........ client 'lawyer'
        // }
    }


    public function store(Request $request){
        $data = [
            'message_users_id' => $request->convo_id,
            'message' => $request->message
        ];

        $sendMessage = Message::create($data);

        if($sendMessage){
            return "Message Sent";
        }else{
            return "Error sending message.";
        }
    }

    public function load($reciever){
        $boxType = "";
        // $UsersPeople = UsersPeople::whereIn('client_id', $client_id)->get();


        $sender = UsersPeople::where('user_id', auth()->user()->id)->first()->id;
        $reciever1 = UsersPeople::where('client_id', $reciever)->first()->id;


        $id1 = MessageUser::where('sender_id', $sender)->where('reciever_id',$reciever1)->pluck('id');
        $id2 = MessageUser::where('reciever_id', $sender)->where('sender_id',$reciever1)->pluck('id');

        $allMessages = Message::where('message_users_id', $id1)->orWhere('message_users_id', $id2)->orderBy('id', 'asc')->get();


        // foreach($allMessages as $row){
        //     if($id1[0]==$row['message_users_id']){$boxType = "p-2 recieverBox ml-auto";}else{$boxType = "float-left p-2 mb-2 senderBox";}
        //     echo "<div class='p-2 d-flex'>";
        //     echo "<div class='".$boxType."'>";
        //     echo "<p>".$row['message']."</p>";
        //     echo "</div>";
        //     echo "</div>";
        // }
        $tobePassed = [$allMessages, $id1];
        return $tobePassed;
    }

    public function retrieveNew($reciever, $lastId){

        $sender1 = UsersPeople::where('user_id', auth()->user()->id)->first()->id;
        $reciever1 = UsersPeople::where('client_id', $reciever)->first()->id;
        // $reciever1 = UsersPeople::where('client_id', $reciever)->first()->id;


        $id1 = MessageUser::where('sender_id', $sender1)->where('reciever_id',$reciever1)->pluck('id');
        $id2 = MessageUser::where('reciever_id', $sender1)->where('sender_id',$reciever1)->pluck('id');

        $allMessages = Message::where('id','>=',$lastId)->where('message_users_id', $id2)->orderBy('id', 'asc')->get();

        return $allMessages;
    }
}
