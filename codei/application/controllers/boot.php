<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class boot extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		
		$this->load->model('students_model','student');
		$this->load->model('course','course');
	}
	public function index()
	{
		//echo 'boot';
		$rs = $this->student->read();

		$data['students']=$rs;
		$header_data['title']="home";
		$this->load->view('include/header',$header_data);
		$this->load->view('students/contents2',$data);
		$this->load->view('include/footer');
	}
	public function add_student(){
	
		$data = array();	
		
		if( $_SERVER['REQUEST_METHOD']=='POST'){ //form was submitted
			//save the new student
			//do some stuff
			// print_r($_POST);
			// Array ( [idno] => 11-111-111 [lname] => Magalpok
			// [fname] => Gorgonia [mname] => Restituto [course] => BSIT 
			// [sex] => F ) 
			
			$validate = array (
				array('field'=>'idno','label'=>'ID No','rules'=>'trim|required|min_length[2]'),
				array('field'=>'lname','label'=>'Last Name','rules'=>'trim|required|min_length[2]'),
				array('field'=>'fname','label'=>'First Name','rules'=>'trim|required|min_length[2]'),
				//array('field'=>'email','label'=>'Email Address','rules'=>'trim|required|is_unique[students.email]|valid_email|min_length[10]'),
			);

			$this->form_validation->set_rules($validate);
			
			if ($this->form_validation->run()===FALSE){
				$data['errors'] = validation_errors();
			}
			else{ //save the form
				
				//check for duplicate
				$record = array(
								'idno'=>$_POST['idno'],
								'lname'=>$_POST['lname'],
								'fname'=>$_POST['fname'],
								'mname'=>$_POST['mname'],
								'course'=>$_POST['course'],
								'sex'=>$_POST['sex'],
							);
							
				$insert_id = $this->student->create($record);
				
				$data['saved'] = TRUE;
				
			}
			
		}
		else{ //display blank form
				
		}
		
		$header_data['title'] = "Add New Student";
		$rs = $this->course->read();
		$data['course']=$rs;
			
		$this->load->view('include/header',$header_data);
		$this->load->view('students/new_student',$data);
		$this->load->view('include/footer');
			
	}
	
	public function students(){
	
		$rs = $this->student->read();

		$data['students']=$rs;
		$header_data['title']="students";
		$this->load->view('include/header',$header_data);
		$this->load->view('students/students',$data);
		$this->load->view('include/footer');
	}
	
	public function profile($id){
		//echo "Display student profile with id=$id";
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
			$this->load->view('students/profile2',$data);
			$this->load->view('include/footer');
		}
		else{
			redirect('boot/');
		}
	}
	public function courses(){
	
		$rs = $this->course->read();

		$data['course']=$rs;
		$header_data['title']="courses";
		$this->load->view('include/header',$header_data);
		$this->load->view('students/courses',$data);
		$this->load->view('include/footer');
	}
	public function add_course(){
	
		$data = array();	
		
		if( $_SERVER['REQUEST_METHOD']=='POST'){ //form was submitted
		
			$validate = array (
				array('field'=>'cno','label'=>'Course ID','rules'=>'trim|required|min_length[2]'),
				array('field'=>'course','label'=>'course','rules'=>'trim|required|min_length[2]'),
				array('field'=>'des','label'=>'Description','rules'=>'trim|required|min_length[2]'),
			);

			$this->form_validation->set_rules($validate);
			
			if ($this->form_validation->run()===FALSE){
				$data['errors'] = validation_errors();
			}
			else{ //save the form
				
				// check for duplicate
				$record = array(
								'cno'=>$_POST['cno'],
								'course'=>$_POST['course'],
								'des'=>$_POST['des'],
							);
							
				$insert_id = $this->course->create($record);
				
				$data['saved'] = TRUE;
				
			}
			
		}
		else{ //display blank form
				
		}
		
		$header_data['title'] = "Add Course";

			
		$this->load->view('include/header',$header_data);
		$this->load->view('students/new_course', $data);
		$this->load->view('include/footer');
			
	}
		
}