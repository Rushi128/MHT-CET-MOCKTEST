<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Students extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
*/
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_Student');
	}
	
	public function studentsHome()
	{
		$this->load->view('Students/stud_log');
	}
	
	public function studentsReg()
	{
		$this->load->view('Students/stud_register');
	}
	
	public function studentsDash()
	{
// 		if(! $this->session->userdata('username'))
// 		{
// 		    return redirect(base_url('Students'));
// 		}
// 		$this->load->model('M_Student');
// 		$result['data'] = $this->M_Student->disstexlist();
// 		$this->load->view('Students/stud_dash',$result);
        if($this->session->userdata('username'))
		{
		    $this->load->model('M_Student');
		    $result['data'] = $this->M_Student->disstexlist();
		    $this->load->view('Students/stud_dash',$result);
		}
		else
		{
		    return redirect(base_url('Students'));
		}
		
	}
	public function studentsCheck($id)
	{
	   $mail = $this->session->userdata('username');
	   //echo $mail;
	   // exit;
	    
		$result = 0;
		$i = 1;
		$selected = $this->input->post('grp');
		$query = $this->db->query(" SELECT * FROM questions WHERE exam_id=$id");
// 		print_r($query->result_array());
		foreach ($query->result_array() as $row)
		{
		    $checked = $row['correct_ans']==$selected[$i];
		    $marks = $row['marks'];
		    if($checked)
		    {
		        $result = $result + $marks;
		    }
		    $i++;
		}
		$q = $this->db->query("SELECT * FROM exam WHERE exam_id=$id");
		$ex_t = $q->row()->ex_title;
		$sq = $this->db->query("SELECT * FROM registration WHERE email='$mail'");
		$stid = $sq->row()->stud_id;
		$stname = $sq->row()->stud_name;
		$mob = $sq->row()->mobile;
		$data = ['stud_id' => $stid,
		                 'stud_name' => $stname,
		                 'email' => $mail,
		                 'mobile' => $mob,
		                 'exam_title' => $ex_t,
		                 'marks' => $result,
		                 'status' => 'inactive',
		                 'exam_given' => 'yes'];
		 $this->load->model('M_Student');
		 $sql = $this->M_Student->ins_marks($data);    
// 		 Previos comments
// 		 $qry = $this->db->query(" SELECT * FROM marks WHERE email='$mail' and exam_title = '$ex_t'");
		 
// 		 $marks['marks'] = $this->M_Student->exover($mail,$ex_t);
// // 		 $marks['marks'] = $qry->row()->marks;
//  		$this->load->view('Students/stud_check',$marks);

// Changes of current
        // $marks['result'] = $result;
        
        $ex_result['data'] = $this->M_Student->exdisstudres($mail,$ex_t);
        
        $this->load->view('Students/stud_check',$ex_result);
        // redirect(base_url('Students_Dash'));
	}
	public function studentsExam($id)
	{
    	    if(!$this->session->userdata('username'))
    		{
    		   $this->studentsHome();
    		   return 0;
    		}
		$this->load->model('M_Student');
		$data1['exam'] = $this->M_Student->stexam($id);
		$this->load->view('Students/stud_exam',$data1);
	}
	public function studentsResult()
	{
		$this->load->view('Students/stud_result');
	}
	public function studentsshowResult()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('mail','Email Address','required');
		if($this->form_validation->run())
		{
		    $email = $this->input->post('mail');
		  //  echo $email;
		  //  exit;
		    $this->load->model('M_Student');
		    $result['data'] = $this->M_Student->disstudres($email);
		  //  print_r($result);
		  //  exit;
		    $this->load->view('Students/stud_show_result',$result);
		}
	}
	public function studentsVerify($id)
	{
// 		$data['exam'] = $id;
// 		$this->load->view('Students/stud_verify',$data);
//         $this->form_validation->set_rules('name','User Name','required');
// 		$this->form_validation->set_rules('mail','Email Address','required');
// 		if($this->form_validation->run())
// 		{
		    $q = $this->db->query("SELECT * FROM exam WHERE exam_id=$id");
		    $ex_t = $q->row()->ex_title;
		    //echo $ex_t;
		  //  $name = $this->input->post('name');
            $mail = $this->session->userdata('username');
		    $query = $this->db->query("SELECT * FROM marks WHERE email='$mail' and exam_title='$ex_t'");
		    //echo $query->num_rows();
		    if($query->num_rows()>0)
		    {
		        echo "You have already given exam";
		    }
		    else
		    {
		        redirect(base_url('Students_Exam/'.$id));
		    }
// 		}
	}
	
	public function studentsThanks()
	{
		$this->load->view('Students/thankYou');
	}
	public function studentsError()
	{
		$this->load->view('Students/errorpage');
	}

	public function insertStudents()
	{		
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email Address','required');
		$this->form_validation->set_rules('pass','Password','required');
		$this->form_validation->set_rules('cname','College Name','required');
		$this->form_validation->set_rules('phone','Phone Number','required');
		$this->form_validation->set_rules('city','Name','required');
		$this->form_validation->set_rules('state','Name','required');
		$this->form_validation->set_rules('cpass','Name','required');
		$this->form_validation->set_rules('grp','Grouping','required');
		if($this->form_validation->run())
		{
			$p = $this->input->post('pass');
			$data = ['stud_name'=>$this->input->post('name'),
			   		 'email'=>$this->input->post('email'),
				// 	 'pass'=>md5($this->input->post('pass')),
				     'pass'=>password_hash($p,PASSWORD_BCRYPT),
					 'col_name'=>$this->input->post('cname'),
					 'grouping'=>$this->input->post('grp'),
					 'mobile'=>$this->input->post('phone'),
					 'city'=>$this->input->post('city'),
					 'state'=>$this->input->post('state')];
			$this->load->model('M_Student');
			$sql = $this->M_Student->ins_data($data);
			/*if($sql)
			{
				return true;
			}
			else
			{
				echo "Registration Failed";
			}
			redirect(base_url('Students_Register'));*/
			redirect(base_url('Thankyou'));
		}
		else
		{
			//$this->studentsReg();
			redirect(base_url('ErrorPage'));
		}
	}

	public function log()
	{
		$this->form_validation->set_rules('loginUser','User Name','required');
		$this->form_validation->set_rules('loginPassword','Password','required');
		if($this->form_validation->run())
		{
			$data = ['email'=>$this->input->post('loginUser'),
			   		 'pass'=>$this->input->post('loginPassword')];
			// $email = $data['email'];
			// $pass = $data['pass'];
			$this->load->model('M_Student');
			$query = $this->M_Student->studlog($data);			
			$row = $query->row();
			$num = $row->stud_id;
			if($num>0)
			{
				//echo "Login Successful";
				redirect(base_url('Students_Dash'));
			}
			else
			{
			    echo "Invalid username or password".$num;
			}
		}
		else
		{
			echo "Not executed";
		}
	}
	
	
	
	public function stverifyex($id)
	{
	    $this->form_validation->set_rules('name','User Name','required');
		$this->form_validation->set_rules('mail','Email Address','required');
		if($this->form_validation->run())
		{
		    $q = $this->db->query("SELECT * FROM exam WHERE exam_id=$id");
		    $ex_t = $q->row()->ex_title;
		    //echo $ex_t;
		    $name = $this->input->post('name');
            $mail = $this->input->post('mail');
		    $query = $this->db->query("SELECT * FROM marks WHERE email='$mail' and exam_title=$ex_t");
		    //echo $query->num_rows();
		    if($query->num_rows()>0)
		    {
		      //  echo "You have already given exam";
		      //$this->studalgivex();
		        $this->load->view('Students/stud_al_giv');
		    }
		    else
		    {
		        redirect(base_url('Students_Exam/'.$id));
		    }
		}
	}
	
	 public function verifylogin()
    {

        $this->form_validation->set_rules('loginUser','User Name','required');
		$this->form_validation->set_rules('loginPassword','Password','required');
        if($this->form_validation->run())
        {
            $uname = $this->input->post('loginUser');
            $pass = $this->input->post('loginPassword');
            $sql = $this->db->query("SELECT * FROM registration WHERE email='$uname'");
            // $sql = $this->db->query("SELECT * FROM registration WHERE email='$uname' and pass='$pass'");
           
            if($sql->row()->stud_id)
            {
                $db_pass = $sql->row()->pass;
                $pass_decode = password_verify($pass,$db_pass);
                if($pass_decode)
                {
                    $this->session->set_userdata('username', $uname);
                    $this->studentsDash();
                }
                else
                {
                    echo "Password doesn't match";
                }
                // $this->session->set_userdata('username', $uname);
                
                // $this->studentsDash();
            }
            else
            {
               
                redirect('studentsHome');
            }
        }
    }
	public function studalgivex()
	{
	    $this->load->view('Students/stud_al_giv');
	}
	public function studlogout()
	{
	    $this->session->unset_userdata('username');  
        // redirect('Fac');
        $this->studentsHome();
	}
}
