<?php

namespace App\Http\Controllers;

use App\Jnews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jnews=Jnews::OrderBy('id','desc')->get();
        return view('welcome')->with(['jnews'=>$jnews]);
    }
    public function postMessage(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);
        $name=$request['name'];
        $email=$request['email'];
        $subject=$request['subject'];
        $message=$request['message'];

        $mail=new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'sithu237010@gmail.com';                 // SMTP username
            $mail->Password = 'fmhfaugtsuxcljcm';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom($email, $email);
            $mail->addAddress('sithu237010@gmail.com', 'Si Thu Aung');     // Add a recipient

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = "Name:".$name."<br>".$message;
            $mail->send();
            return redirect()->back()->with('info','Message has been successful');
        } catch (Exception $e) {
            return redirect()->back()->with('err','Has not been successful message');
        }
    }


}
