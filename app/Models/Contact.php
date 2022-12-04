<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    private $name       = "";
    private $email      = "";
    private $subject    = "";
    private $message    = "";

    public function setName($name){
        $this->name=  $name;
    }
    private function getName(){
        return $this->name;
    }
    public function setEmail($email){
        $this->email=  $email;
    }
    private function getEmail(){
        return $this->email;
    }
    private function getSubject(){
        return $this->subject;
    }
    public function setSubject($subject){
        $this->subject=  $subject;
    }
    private function getMessage(){
        return $this->message;
    }
    public function setMessage($message){
        $this->message = $message;
    }

    private function validate(){
        $error = false;
       if(!$this->name){
        $error = true;
       }
       if(!$this->email){
        $error = true;
       }
       if(!$this->subject){
        $error = true;
       }
       if(!$this->message){
        $error = true;
       } 

       return $error;
    }

    public function send(){
        if(!$this->validate()){
            return "Todos os campos são obrigatorios";
        }else{
            return "OK";
        }
    }
    
}
