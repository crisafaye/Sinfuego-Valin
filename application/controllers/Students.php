<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class students extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		
		$this->load->model('students_model','student');
		
	}
	public function index()
	{
		
		$header_data['title']="Student Management System";
		//$condition = array('sex'=>'F','course'=>'BSIT');
		$rs = $this->student->read();

		$data['students']=$rs;
		
		$this->load->view('include/header',$header_data);
		$this->load->view('students/view_students',$data);
		$this->load->view('include/footer');
	}
	
	public function profile($id){
		echo "Display student profile with id=$id";
		//call the model
		//$students=$this->student->read(array('idno')=>'$id');
		//find the student record
		//view
		$condition = array('idno'=>$id);
		if($this->student->read($condition)){
			$student = $this->student->read(array('idno'=>$id));
			//find the student record
			$header_data['title'] = "Students: View Student Profile";
			$data['student'] = $student;

			//load the view
			$this->load->view('include/header',$header_data);		
			$this->load->view('students/profile',$data);
			$this->load->view('include/footer');
		}
		else{
			redirect('Students');
		}
	}
}
