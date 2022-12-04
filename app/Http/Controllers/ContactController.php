<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contact = new Contact();
        $contact->setName($_POST['name']);
        $contact->setEmail($_POST['email']);
        $contact->setSubject($_POST['subject']);
        $contact->setMessage($_POST['message']);

        print_r($contact->send());
    }
}
