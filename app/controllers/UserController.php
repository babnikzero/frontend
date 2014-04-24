<?php
class UserController extends BaseController {

	
	public function get_users($id = null)
	{
		if (is_null($id))
		{
			$url=Config::get('backend.url').'/users';
			$ch=curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$result=curl_exec($ch);
			$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
			if($http_status==200){
				return json_decode($result);
			}else {
				return false;
			}
		}
		else
		{
			$url=Config::get('backend.url').'/users/'.$id;
			$ch=curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$result=curl_exec($ch);
			$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
			if($http_status==200){
				return json_decode($result);
			}else {
				return false;
			}
		}
	}
	
	public function show_users(){
		$users=$this->get_users();
		return View::make('users')->with('users', $users);
	}
	
}