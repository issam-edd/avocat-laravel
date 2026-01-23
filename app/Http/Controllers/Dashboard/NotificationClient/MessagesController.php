<?php

namespace App\Http\Controllers\Dashboard\NotificationClient;

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
            // $lawyer = Auth::user()->id;
            // $client_id = Client::where("lawyer_id",$lawyer)->pluck("id");
            $client_id = session()->get("id_client");
            $client = Client::find($client_id);

            $user_id = $client->user->id;


            $UsersPeople = UsersPeople::where('user_id', $user_id)->get();
            return view('dashboard.client.managments.notification.home',['users' => $UsersPeople, "user_id" => $user_id]);
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

    public function load(){
        $boxType = "";
        // $UsersPeople = UsersPeople::whereIn('client_id', $client_id)->get();

        // $sender = UsersPeople::where('user_id', auth()->user()->id)->first()->id;

        // $sender = session()->get("id_client");
        // // --------------------------
        // $senderId = session()->get("id_client");
        // // --------------------------
        // $client = Client::where('id',$senderId)->first();
        // $user_id = $client->user->id;


        // --------------------------
        $client_id = session()->get("id_client");
// --------------------------
        $client = Client::where('id',$client_id)->first();
        $user_id = $client->user->id;

        $sender = UsersPeople::where('client_id', $client_id)->first()->id;
        $reciever1 = UsersPeople::where('user_id', $user_id)->first()->id;
// --------------------------

        // $senderId = UsersPeople::where('client_id', $senderId)->first()->id;
        // $recieverId1 = UsersPeople::where('user_id', $user_id)->first()->id;
        // --------------------------
        // $client = Client::find($client_id);


        $id1 = MessageUser::where('sender_id', $sender)->where('reciever_id',$reciever1)->pluck('id');
        $id2 = MessageUser::where('reciever_id', $sender)->where('sender_id',$reciever1)->pluck('id');

        $allMessages = Message::where('message_users_id', $id1)->orWhere('message_users_id', $id2)->orderBy('id', 'asc')->get();
        // $allMessages = Message::whereIn('message_users_id', [...$id1, ...$id2])->orderBy('id', 'asc')->get();

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

    public function retrieveNew($lastId){

        $client_id = session()->get("id_client");
        $sender1 = UsersPeople::where('client_id', $client_id)->first()->id;

        $client = Client::where("id",$client_id)->first();

        $user_id = $client->user->id;
        $reciever = UsersPeople::where('user_id', $user_id)->first()->id;


        $id1 = MessageUser::where('sender_id', $sender1)->where('reciever_id',$reciever)->pluck('id');
        $id2 = MessageUser::where('reciever_id', $sender1)->where('sender_id',$reciever)->pluck('id');

        $allMessages = Message::where('id','>=',$lastId)->where('message_users_id', $id2)->orderBy('id', 'asc')->get();

        return $allMessages;
    }
}
