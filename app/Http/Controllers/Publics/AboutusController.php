<?php

namespace App\Http\Controllers\Publics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publics\ContactsModel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Lang;
use PHPMailer\PHPMailer\PHPMailer;
use Log;

class AboutusController extends Controller
{

    private $mail;

    public function index()
    {
        return view('publics.aboutus', [
            'cartProducts' => $this->products,
            'head_title' => Lang::get('seo.title_aboutus'),
            'head_description' => Lang::get('soe.descr_aboutus')
        ]);
    }



}
