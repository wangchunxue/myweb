<?phpdefined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function text()
	{
		$this->load->view('helloword');
	}
	public function regist()
	{
		$this->load->view('regist');
	}
	public function save_user()
	{
     $username=$this->input->post('username');
     $password=$this->input->post('password');
     $sex=$this->input->post('sex');
     $realname=$this->input->post('realname');
     $birthday=$this->input->post('birthday');
	}
	/*$this->load->model('user_model');
	$this->user_model->save();*/
}
