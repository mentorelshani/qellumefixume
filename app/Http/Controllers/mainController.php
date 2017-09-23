<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class mainController extends Controller
{
    public function getData(){
    	$i=0;
    	$info = array();
    	while(session()->has($i)){
    		$info[$i]=session()->get($i);
			$i++;
		}
    	return view('welcome')
    		 ->with('info',$info);
    	// dd(session());
    }

    public function postData(Request $request){
    		$a = $request->number;
    		Validator::extend('valid', function($attribute, $value) {
	            if($value[0]==$value[1]||$value[0]==$value[2]||$value[2]==$value[1]){
	            	return false;
	            }
	            return true;
	        });

    		$this->validate($request,[
    			'number' => ["size:3", 'valid'],
    		]);


    		$fix = 0;
    		$qell = 0;

    		$b = session()->get('number');
    		

    		for ($i=0; $i < 3; $i++) { 
    			if($a[$i]==$b[$i]){
    				$fix++;
    			}
    			else if ($a[$i] == $b[0] || $a[$i] == $b[1] || $a[$i] == $b[2] ){
    				$qell++;
    			}
    		}
    		if($fix == 3){
    			$i=0;
		    	$info = array();
		    	while(session()->has($i)){
		    		$info[$i]=session()->get($i);
					$i++;
				}
		    	return view('win')
		    		 ->with('info',$info)
		    		 ->with('tries',$i);
    		}

    		$message = $fix." fixuar dhe ".$qell." qelluar";
    		$array = $request->number.", ". $message;

    		return redirect ('try/'.$array);
    }
}
