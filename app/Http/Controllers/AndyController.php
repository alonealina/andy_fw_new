<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Girl;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Mail;

class AndyController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function fp13()
    {
        return view('fp13');
    }

    public function fp14()
    {
        return view('fp14');
    }

    public function yui()
    {
        return view('yui');
    }

    public function miyu()
    {
        return view('miyu');
    }

    public function enrike()
    {
        return view('enrike');
    }

    public function riona()
    {
        return view('riona');
    }

    public function cover()
    {
        return view('cover');
    }

    public function pet()
    {
        return view('pet');
    }

    public function fortune()
    {
        return view('fortune');
    }

    public function fp_about()
    {
        return view('fp_about');
    }

    public function koreahair()
    {
        return view('koreahair');
    }

    public function koreamake()
    {
        return view('koreamake');
    }

    public function contact()
    {
        return view('contact');
    }

    public function send_complete()
    {
        return view('send_complete');
    }


    
    public function mail_send(Request $request)
    {
    	$data = ['name' => $request->name,
                'mail' => $request->mail,
                'tel' => $request->tel,
                'content' => $request->content,];

        $mail = $request->mail;

        Mail::send('mail', $data, function($message) use ($mail){
            $message->to($mail, 'Test')->subject('【Andy】お問い合わせ完了のご案内');
        });

        Mail::send('mail_admin', $data, function($message) {
            $message->to('info@andy-creative.com', 'Test')->subject('【Andy】お問い合わせ受け付けのお知らせ');
        });

        return redirect()->to('contact');
    }

    public function recruit()
    {
        return view('recruit');
    }

    public function anime_test()
    {
        return view('anime_test');
    }

    public function login(Request $request)
    {
        $admin_user = AdminUser::where('login_id', $request->login_id)->first();
        if (isset($admin_user)) {
            if ($request->password == $admin_user->password) {
                // セッション
                session(['login_id' => $admin_user->login_id]);
                return redirect('admin/news_list'); 
            }
        }

        return view('admin/login', ['login_error' => '1']);
    }
    
    public function logout(Request $request)
    {
        session()->forget('login_id');
        return redirect('admin/login');
    }
}
