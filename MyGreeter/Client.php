<?php 

namespace MyGreeter;

class Client{
	
	public function getGreetingMsg($date){
		$h = date("H",strtotime($date));
		if($h>12 && $h<24){
			return "Good morning";
		}
		if($h>0 && $h<6){
			return "Good afternoon";
		}
		if($h>6 && $h<12){
			return "Good evening";
		}
		throw new Exception("Wrong date format");
	}
	
}