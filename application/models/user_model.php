<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{
public function save(){
$arr=array(
   "username"=>"wangwu",
   "password"=>"1234",
   "sex"=>"男",
   "realname"=>"王五",
   "birthday"=>"2222"
	);
$this->db->insert('user',$arr);
}







}