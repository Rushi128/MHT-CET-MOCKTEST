<?php

class M_Student extends CI_Model
{
    
    public function ins_data($data)
    {
        return $this->db->insert('registration',$data);
    }

    public function studlog($data)
    {        
        $email = $data['email'];
		$pass = $data['pass'];
        return $this->db->query("SELECT stud_id FROM registration WHERE email='$email' and pass='$pass'");
    }
    public function disstexlist()
    {
        // $query = $this->db->get('exam');
        $query = $this->db->query("SELECT * FROM exam WHERE exam_status='active'");
        return $query->result();
    }
    public function stexam($id)
    {
        $query = $this->db->query("SELECT * FROM questions WHERE exam_id=$id");
        return $query->result();
    }
    public function ins_marks($data)
    {
        return $this->db->insert('marks',$data);
    }
    public function disstudres($email)
    {
        $query = $this->db->query("SELECT * FROM marks WHERE email='$email' and status='active'");
        return $query->result();
    }
    public function exdisstudres($mail,$ex_t)
    {
        $query = $this->db->query("SELECT * FROM marks WHERE email='$mail' and exam_title = '$ex_t'");
        return $query->result();
    }
}

?>
