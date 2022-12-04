<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;
    private $email      = "";
    
    
    public function setEmail($email){
        $this->email=  $email;
    }
    private function getEmail(){
        return $this->email;
    }

    private function validate(){
       $error = false;
       if(!$this->email){
        $error = true;
       }
        

       return $error;
    }

    public function send(){
        if($this->validate()){
            return "Email é obrigatorio";
        }else{
            return "OK";
        }
    }
    
}
