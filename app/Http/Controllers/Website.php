<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class Website extends Controller
{
    public function index(){

        $data=['name'=>"mansurxon",'data'=>"Salom qaleysiz"];
        $user['to']='habibullohhamidullayev2003@gmail.com';
        Mail::send('mail',$data,function ($message) use ($user){

            $message->to('mansurxonabdurashidovhp@gmail.com');
            $message->subject('SmartSoftWare');

        });

    }
}
