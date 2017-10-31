<?php
require_once (APPPATH.'libraries\vendor\autoload.php');
class Auth extends CI_Controller{


 	public function connection(){
        $collection=(new MongoDB\Client())->loginreg;
        return $collection;
    } 

	public function insert($table,$data){   
		$collection=$this->connection();
		$collectiondata = $collection->$table->insertOne($data);   
		return $collectiondata;    
	}

	public function register(){

		if (isset($_POST['register'])){
			$this->form_validation->set_rules('firstname','Firstname','required');
			$this->form_validation->set_rules('lastname','Lastname','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('pass','Pass','required|min_length[5]');
			$this->form_validation->set_rules('dob','Dob','required');

			if($this->form_validation->run() == TRUE){

				echo "Form Validated";

				$dataa = array(
					'firstname'=>$_POST['firstname'],
					'lastname'=>$_POST['lastname'],
					'email'=>$_POST['email'],
					'pass'=>$_POST['pass'],
					'dob'=>$_POST['dob'],
				);

				//echo $data;

				$this->insert('userdata', $dataa);  // 'userdata' is a collection name

				$this->session->set_flashdata("success","Your account has been registered. You can login now");
				redirect("auth/register","refresh");
			}
		}

		$this->load->view('register');
	}

	public function login(){
		$collection=$this->connection();
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('pass','Pass','required|min_length[5]');

		if($this->form_validation->run() == TRUE){

			$projection = ['email' =>1,'pass'=>1,'firstname'=>1,'lastname'=>1,'dob'=>1];
			$search = ['email'=>$_POST['email'],'pass'=>$_POST['pass']];

			$collectiondata = $collection->userdata->findOne($search,['projection'=>$projection,'sort'=>["_id"=>-1]]);
			
			if($collectiondata != NULL){
			
				$this->session->set_flashdata('success','You are logged in');

				$_SESSION['user_logged'] = TRUE;
				$_SESSION['firstname'] = $collectiondata->firstname;
				$_SESSION['lastname'] = $collectiondata->lastname;
				$_SESSION['dob'] = $collectiondata->dob;

				redirect("user/profile","refresh");
			}
			else{
				$this->session->set_flashdata('error','No such data exists');
				redirect("auth/log","refresh");
			}
		}	

		$this->load->view('login');
	}

	public function logout(){
		unset($_SESSION);
		session_destroy();
		redirect("auth/login","refresh");
	}
} 	