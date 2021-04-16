<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserCon extends Controller
{
    public function create(){
        $data=['name'=>'Nahian Islam','email'=>'admin3@gmail.com','password'=>'123456'];
        
        if(User::create($data)){
            echo "Created Successfully";
        }else {
            echo "Error";
        };

        
       
    }

    public function index(){
        $users=User::all();
        echo $users;
    } 
    
    public function show($id){
        $user=User::find($id);
        echo $user;
    }
    
    public function delete($id){
        $user=User::find($id);
        $user->delete();
        echo "Deleted";
    }

}
