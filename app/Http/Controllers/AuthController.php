<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\UsersPeople;
use Illuminate\Http\Request;
use App\Mail\VerifyLawyerMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Notifications\VerifyEmail;

class AuthController extends Controller
{
    //
    //
    public function requestOtp(Request $request)
    {
        Session::forget("error");
        $this->validate($request, [
            'email' => "required",
            'password' => "required",
        ]);

        Session::forget('email');
        Session::forget('otp');

        $otp = rand(1000, 9999);
        Log::info("otp = " . $otp);
        $email = $request->email;
        $password = $request->password;


        $userEdit = User::where([['email', '=', $email], ['role', '=', 0]])->update(['otp' => $otp]);
        $user = User::where([['email', '=', $email], ['role', '=', 0]])->first();
        $admin = User::where([['email', '=', $email], ['role', '=', 1]])->first();

        $client = Client::where([['client_name', '=', $email], ['phone_number', '=',$password ]])->first();


        // $credentials = ['email' => $email, 'password' => $password, 'role' => 0];

        if ($user && Hash::check($password, $user->password)) {
            // send otp in the email
            $mail_details = [
                "title" => "Siteweb Marrakech",
                'subject' => 'Confirmez Votre Adresse Email',
                'body' =>  'Code est: ' .$otp
            ];

            Mail::to($email)->send(new VerifyLawyerMail($mail_details));

            Session::put('email', $email);
            Session::put('otp', $otp);
            return view("auth.confirm");
        } else {
            if ($admin && Hash::check($password, $admin->password)) {
                auth()->login($admin, true);
                return redirect('/admin');
            }elseif($client) {
                // auth()->login($client, true);
                Session::put('id_client', $client->id);

                // ---------------------------
                // change Status
                $people_client = UsersPeople::where('client_id', $client->id)->first();
                $people_client->update([
                    "status" => 1
                ]);
                // ---------------------------

                return redirect('/client');
            }
            return Redirect::back()->withErrors([
                "email" => "invalid credentials"
            ])->onlyInput("email");
        }
    }


    public function verifyOtp(Request $request)
    {
        Session::forget("error");

        $email = Session::get('email');
        $otp = Session::get('otp');
        $user  = User::where([['email', '=', $email], ['otp', '=', $request->otp]])->first();
        if ($user) {
            auth()->login($user, true);
            User::where('email', '=', $email)->update(['otp' => null]);

            Session::forget('email');
            Session::forget('otp');

            // ---------------------------
            // change Status
            $people_user = UsersPeople::where('user_id', $user->id)->first();
            if(!!$people_user) {
                $people_user->update([
                    "status" => 1
                ]);
            }
            // ---------------------------

            // $accessToken = auth()->user()->createToken('authToken')->accessToken;
            return redirect('/lawyer');
        } else {
            // -------------
            // return redirect("/login")->with([
            //     "error" => "Your code is not valid"
            // ]);
            // -------------
            Session::put("error",true);
            return view("auth.confirm");

            // -----------------
        }
    }


    public function logout(){

        if(Session::has('id_client')) {
            // change status client
            $people_client = UsersPeople::where('client_id', Session::get('id_client'))->first();
            if(!!$people_client) {
                $people_client->update([
                    "status" => 0
                ]);
            }

        }elseif(Auth::check()){
            // change status user
            $people_user = UsersPeople::where('user_id', auth()->user()->id)->first();
            if(!!$people_user) {
                $people_user->update([
                    "status" => 0
                ]);
            }
        }

        Session::flush();

        Auth::logout();

        return redirect('/login');
    }
}
