<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use JWTAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::all();
        return response()->json(['status'=>'success','data'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function signup(Request $request)
    {
        return auth('api')->factory()->getTTL();
        $token="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2NvYWNoXC9hcGlcL2F1dGhcL2xvZ2luIiwiaWF0IjoxNjAzMTIzNzYzLCJleHAiOjE2MDMxMjczNjMsIm5iZiI6MTYwMzEyMzc2MywianRpIjoiMEVFOW9DWTRzd0l4TVd2MyIsInN1YiI6MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.TW1rsMTtcEb9QO7HQWqYkbMpazNsyEBhJiy4mIxayXg";
        // return JWTAuth::toUser($token);
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'role' => $request->role,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'address' => $request->address,
            'bio' => $request->bio,
            'experties' => $request->experties,
            'status' => '1',
        ]);
        return response()->json(['status'=>'success','data'=>$user]);
    }

    public function login(Request $request){
        // return $request->password;
        $token=Str::random(10);
        $login=auth::attempt(array('email' => $request->email, 'password' => $request->password ));
        $user=User::where('email',"r@r.com")->first();
        if($login){
            User::where('email',$request->email)->update([ 'token'=>$token ]);
            return response()->json(['status'=>'success','data'=>$user]);
        }
        else {
            return response()->json(['status'=>'fail']);
        }
    }
    public function send_code(Request $request){
        $email_send=User::where('email',$request->email)->first();
        if(is_null($email_send)){
            return response()->json('null');
        }
        else{
            $random_code = mt_rand(1000,9999);
        $email_submit=User::where('id',$email_send->id)->update([
        'code'=>$random_code,
        ]);

        $to      = $request->email;
         $subject = "Password Reset";

        $message = "
        <html>
        <head>
        <title>Reset Password</title>
        </head>
        <body>
        <h2>Your Code!</h2>
        <h1 style=color:#f50000>$random_code</h1>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: rashidbuttuog@gmail.com' . "\r\n";
        $headers .= 'Cc: rashidbuttuog@gmail.com' . "\r\n";

        mail($to, $subject, $message, $headers);
        return response()->json(['status'=>'success','data'=>'Code Sent to your Email']);
        }
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function code(Request $request)
    {
        // $user=User::where('token',$request->token)->first();
        $code=User::where('code',$request->code)->first();
        if(!is_null($code)){
            return response()->json(['status'=>'success','data'=>'Authentic Code']);
        }
        else{
            return response()->json(['status'=>'fail','data'=>'Your Code is wrong']);
        }
    }
    
    public function reset_Password(Request $request){
        $email_submit=User::where('token',$request->token)->update([
            'password'=>Hash::make($request->password),
            ]);
            return response()->json(['status'=>'success','data'=>'Password Reset Successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
