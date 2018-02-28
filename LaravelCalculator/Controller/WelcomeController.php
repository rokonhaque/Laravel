<?php
/**
 * Created by PhpStorm.
 * User: rokonkhan
 * Date: 2/27/2018
 * Time: 9:46 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function calculator(){
        return view('calculator');
    }
    public function calc(Request $request){
        $firstnumber=$request->firstnumber;
        $secondnumber=$request->secondnumber;
        $btn=$request->btn;
        if($btn == '+'){
            $result=$firstnumber+$secondnumber;
            echo $result;
        }elseif ($btn == '-'){
            $result=$firstnumber-$secondnumber;
            echo $result;
        }elseif ($btn == '*'){
            $result=$firstnumber * $secondnumber;
            echo $result;
        }elseif ($btn == '/'){
            $result=$firstnumber / $secondnumber;
            echo $result;
        }elseif ($btn == '%'){
            $result=$firstnumber % $secondnumber;
            echo $result;
        }
    }

}