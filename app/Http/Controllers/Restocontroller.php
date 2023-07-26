<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\facades\Auth;

class Restocontroller extends Controller
{ 

	function index(){
		return view('home');
	}

	function list(){
		$data = User::all();
		return view('list',["data"=>$data]);
	}
	function delete(Request $req){
		$resto = User::find($req->id)->delete();
		$req->session()->flash('status',"User deleted successfully");
		return redirect('list');
	}
	function edit($id){
		$data = User::find($id);
		return view('edit',["data"=>$data]);
	}
	function update(Request $req){
		$resto = User::find($req->id);
		$resto->name=$req->input('name');
		$resto->email=$req->input('email');
		$resto->address=$req->input('address');
		$resto->save();
		$req->session()->flash('status',"User update successfully");
		return redirect('list');
	}
	function register(Request $req){
		/*return $req->input();*/
		$resto = new User;
		$resto->name=$req->input('name');
		$resto->email=$req->input('email');
		/*$resto->password=bcrypt($req->input('password'));*/
		$resto->password = Hash::make($req->input('password'));
		$resto->address=$req->input('address');
		$resto->save();
		$req->session()->flash('status',"User enter successfully");
		return redirect('login');
	}
	function login(Request $req){
		/*$resto = new User;*/
		if(Auth::attempt(['email' => $req->email, 'password' => $req->password])){
			$data = User::where('email',$req->email)->get(); 
			Session::put('id',$data[0]->id);
			Session::put('name',$data[0]->name);
			Session::put('address',$data[0]->address);
			Session::put('user',$data[0]->email);
			return redirect('/');
		}else{
			$req->session()->flash('status',"Please check your password and email_id again");
			return redirect('login');
		}
	}
	function logout(Request $req){
		$resto = new User;
		$req->session()->flush();
		Auth::logout();
		return redirect('login');
	}
	function profile(){

		$data = User::where('id',Session::get('id'))->get();  
		return view('profile',compact('data'));
	}
}
