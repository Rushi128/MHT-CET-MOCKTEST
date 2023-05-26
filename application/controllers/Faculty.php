<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller {

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
		$this->load->model('M_Faculty');
// 		if(! $this->session->userdata('id'))
// 		{
// 		    return redirect('Fac');
// 		}
	}
	
	public function login()
    {
        if($this->session->userdata('is_faculty_logged_in'))
        {
            redirect('');
            return 0;
        }
        $this->load->view('faculty/login_view');
    }
    
    public  function logout()
    {
        $this->session->unset_userdata('faculty_id'); 
        $this->session->unset_userdata('is_faculty_logged_in');   
        $this->session->unset_userdata('faculty_name');   
        $this->session->unset_userdata('faculty_email');  
        redirect('Fac');
    }

    public function facultyDash()
	{		
		if(! $this->session->userdata('username'))
		{
		    return redirect(base_url('Fac'));
		}
		$this->load->model("M_Faculty");
		$data['row'] = $this->M_Faculty->facdash();	
		$q = $this->db->query("SELECT * FROM registration");
		$data['num'] = $q->num_rows();
		$this->load->view('Faculty/fac_dash',$data);		
	}
	
    public function verifylogin()
    {

        // $_POST = json_decode(file_get_contents('php://input'), true);
        // echo "kishan";exit();
        // if(count($_POST)<=0) echo $result = '{"status" : "failure", "msg" : "Data is required"}';
        // $this->form_validation->set_rules('txtEmail','Email', 'required|trim|valid_email');
        // $this->form_validation->set_rules('txtPassword','Password', 'required|trim');

        // if ($this->form_validation->run() == FALSE)
        // {
        //     $data['status']="validation_error";
        //     if(form_error('txtEmail')!="" && form_error('txtEmail')!=null)
        //         $data['msg']['txtEmail']=form_error('txtEmail');
        //     if(form_error('txtPassword')!="" && form_error('txtPassword')!=null)
        //         $data['msg']['txtPassword']=form_error('txtPassword');
        //     echo json_encode($data);
        // }else
        // {
        //     $response=$this->M_Faculty->check_login_credentials($_POST['txtEmail'],$_POST['txtPassword']);
        //     if($response===true){
        //         echo $result = '{"status" : "success", "msg" : "Login is done successfully"}';
        //     }
        //     else{

        //         echo $result = '{"status" : "failure", "msg" : "'.$response.'"}';
        //     }
        // }
        $this->form_validation->set_rules('loginUser','User Name','required');
		$this->form_validation->set_rules('loginPassword','Password','required');
        if($this->form_validation->run())
        {
            $uname = $this->input->post('loginUser');
            $pass = $this->input->post('loginPassword');
            $sql = $this->db->query("SELECT * FROM faculty WHERE username='$uname' and password='$pass'");
            //echo $sql->row()->fac_id;
            //exit;
            if($sql->row()->fac_id)
            {
                //redirect('Fac');
                $this->session->set_userdata('username', $uname);
                // redirect(base_url('Faculty'));
                $this->facultyDash();
            }
            else
            {
                // $this->session->set_userdata('username', $uname);
                // redirect(base_url('Faculty'));
                redirect('Fac');
            }
        }
    }
	

	public function facultyHome()
	{
	    
		$this->load->view('Faculty/faculty_log');
	}

	public function facaddexam()
	{
		$this->load->view('Faculty/add_exam');
	}
	public function facaddex()
	{
	    $this->form_validation->set_rules('ex_name','Exam Name','required');
		$this->form_validation->set_rules('desc','Exam Description','required');
		if($this->form_validation->run())
		{
		    $data = ['subject'=>$this->input->post('subject'),
			   		 'ex_title'=>$this->input->post('ex_name'),
					 'ex_description'=>$this->input->post('desc'),
					 'exam_status'=>'inactive'];
			$this->load->model('M_Faculty');
			$sql = $this->M_Faculty->add_exam($data);
			redirect(base_url('FacultyExamlist'));
		}
	}
	public function facaddquestion($id)
	{
	   // echo $id;
	   $data['id'] = $id;
		$this->load->view('Faculty/add_question',$data);
	}
	public function facaddque($id)
	{
		$q = $this->db->query("SELECT * FROM exam WHERE exam_id=$id");
		$title = $q->row()->ex_title;
// 		exit;
		$data = ['exam_id' => $id,
		         'exam_title' => $title,
		         'exam_question' => $this->input->post('qname'),
				 'option1' => $this->input->post('op1'),
				 'option2' => $this->input->post('op2'),
				 'option3' => $this->input->post('op3'),
				 'option4' => $this->input->post('op4'),
				 'correct_ans' => $this->input->post('cans'),
				 'marks' => $this->input->post('marks'),
				 'type' => 'normal',
		         'exam_status' => 'inactive'];
		$this->load->model('M_Faculty');
		$this->M_Faculty->facaddselque($data);
// 		$this->load->view('Faculty/add_question',$id);
// 		redirect(base_url('FacultyAddQuestion',$id));
        $data['id'] = $id;
		$this->load->view('Faculty/add_question',$data);
	}
	public function facdelquestion($id)
	{
		$this->load->model('M_Faculty');
		$this->M_Faculty->delselque($id);
// 		redirect(base_url('FacultyExamlist'));
		$this->load->view('Faculty/del_question');
	}
	public function delselexam($id)
	{
		$this->load->model('M_Faculty');
		$this->M_Faculty->delselex($id);
		redirect(base_url('FacultyExamlist'));
// 		$this->load->view('Faculty/delete_sel_exam');
	}
	public function facexamlist()
	{
		$result['data'] = $this->M_Faculty->disexamlist();
		$this->load->view('Faculty/examlist',$result);
	}
	public function facresult()
	{
		$result['data'] = $this->M_Faculty->disexamlistres();
		$this->load->view('Faculty/fac_result',$result);
	}
	public function facshowresult($ex_title)
	{
		$this->load->model("M_Faculty");
		$data['res'] = $this->M_Faculty->facshowres($ex_title);
		$data['ext'] = $ex_title;
		$this->load->view('Faculty/fac_show_result',$data);
	}
	public function facmanselexam($id)
	{
		$this->load->model("M_Faculty");
		$data['exam'] = $this->M_Faculty->manselex($id);
		$data['questions'] = $this->M_Faculty->selexques($id);
		//changes
		$data['num'] = $this->M_Faculty->numofques($id);
		$this->load->view('Faculty/manage_sel_exam1',$data);
	}
	public function updexam($id)
	{		
		$data = ['subject' => $this->input->post('subject'),
				 'ex_title' => $this->input->post('ex_name'),
				 'ex_description' => $this->input->post('desc')];
		$this->load->model("M_Faculty");
		$this->M_Faculty->updateexam($data, $id);
		redirect(base_url('FacultyManSel/'.$id,$data));
	}
	public function facstopupload()
	{
		$this->load->view('Faculty/stop_upload');
	}
	public function exupload($id)
	{
		$this->load->model("M_Faculty");
		$this->M_Faculty->upexam($id);
		// redirect(base_url('FacultyExamlist'));
		redirect(base_url('FacultyUpload'));
	}
	public function stexupload($id)
	{
		$this->load->model("M_Faculty");
		$this->M_Faculty->stupexam($id);
		redirect(base_url('FacultyStopup'));
	}
	public function facupdquest($id)
	{
		$this->load->model("M_Faculty");
		$data['que'] = $this->M_Faculty->upque($id);
		$this->load->view('Faculty/upd_question',$data);
//         $data['qid'] = $qid;
//         echo $qid;
//         exit;
// 		redirect(base_url('FacultyUpdquest/'.$id,$data));
	}
	public function facselupdquest($id)
	{
        $data = ['exam_question' => $this->input->post('qname'),
				 'option1' => $this->input->post('op1'),
				 'option2' => $this->input->post('op2'),
				 'option3' => $this->input->post('op3'),
				 'option4' => $this->input->post('op4'),
				 'correct_ans' => $this->input->post('cans'),
				 'marks' => $this->input->post('marks')];
		$this->load->model("M_Faculty");
		$this->M_Faculty->upselque($data, $id);
		redirect(base_url('FacultyUpdquest/'.$id,$data));
	}
    public function facupload()
	{
		$demo['dem'] = $this->input->post('exam_id');
		$this->load->view('Faculty/upload',$demo);		
	}

	public function log()
	{
		$this->form_validation->set_rules('loginUser','User Name','required');
		$this->form_validation->set_rules('loginPassword','Password','required');
		if($this->form_validation->run())
		{
			$data = ['email'=>$this->input->post('loginUser'),
			   		 'pass'=>$this->input->post('loginPassword')];			
			$this->load->model('M_Faculty');
			$login_id = $this->M_Faculty->faclog($data);
// 			$row = $query->row();
// 			$login_id = $row->fac_id;
			//changes
			if($login_id)
			{
			    $this->load->library('session');
			    $this->session->set_userdata('id',$login_id);
			    redirect(base_url('Faculty'));
			}
			else
			{
			    echo "Session not set";
			}
// 			if($num==1)
// 			{
// 				//echo "Login Successful";
// 				redirect(base_url('Faculty'));
// 			}
// 			else
// 			{
// 				echo "Incorrect username or password";
// 			}
		}
		else
		{
			echo "Not executed";
		}
	}
	public function faclogout()
	{
	    $this->session->unset_userdata('username');  
        //redirect('Fac');
        $this->facultyHome();
	}
	public function upstres($ext)
	{
	    $q = $this->db->query("UPDATE marks SET status='active' WHERE exam_title='$ext'");
	   // redirect(base_url(''))
	   echo "Uploaded successfully";
	}
}
