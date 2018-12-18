<?php
 namespace App\Http\Controllers;
 use App\Post;



 class PagesController extends Controller{
 	public function getWelcome(){
 		$posts = Post::orderBy('created_at','desc')->limit(4)->get();
 		return view('pages.welcome')->withPosts($posts); 
 	}

 	
 	public function getAbout(){
 		$first='Kajol';
 		$last='Rauniyar';
 		$fullname=$first." ".$last;
 		$email='rauniyarkajol2608@gmail.com';
 		$data=[];
 		$data['email']=$email;
 		$data['fullname']=$fullname;
 		return view('pages.about')->withData($data);

 	}
 
 	public function getContact(){
 	/*	$first='Kajol';
 		$last='Rauniyar';
 		$full=$first." ".$last;
 		return view ('welcome')->with("fullname",$full);*/
 		return view ("pages.contact");


 	}

 }



?>