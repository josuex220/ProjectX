<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function index(){
        $newslatter = new Newsletter();
        $newslatter->setEmail($_POST['email']);

        echo $newslatter->send();
    }
}
