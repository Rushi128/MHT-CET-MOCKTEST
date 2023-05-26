<?php

class M_Faculty extends CI_Model
{
    public function faclog($data)
    {        
        $email = $data['email'];
		$pass = $data['pass'];
        // return $this->db->query("SELECT fac_id FROM faculty WHERE username='$email' and password='$pass'");
        $q=$this->db->where(['username'=>$email,'password'=>$pass])->get('faculty');
        if($q->num_rows())
        {
            return $q->row()->fac_id;
        }
        else
        {
            return false;
        }
    }
    public function facdash()
    {                
        return $this->db->count_all_results('exam');
    }
    public function disexamlist()
    {
        $query = $this->db->get('exam');
        return $query->result();
    }
    public function disexamlistres()
    {
        $query = $this->db->get('exam');
        return $query->result();
    }
    public function add_exam($data)
    {
        return $this->db->insert('exam',$data);
    }
    public function upexam($id)
    {
        $this->db->set('exam_status', 'active');
        $this->db->where('exam_id', $id);
        $this->db->update('exam'); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2
    }
    public function stupexam($id)
    {
        $this->db->set('exam_status', 'inactive');
        $this->db->where('exam_id', $id);
        $this->db->update('exam'); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2
    }
    public function manselex($id)
    {
        $query = $this->db->get_where('exam',['exam_id' => $id]);
        return $query->row();
    }
    public function facaddselque($data)
    {
        return $this->db->insert('questions',$data);
    }
    public function selexques($id)
    {
        // $query = $this->db->get_where('questions',['exam_id' => $id]);
        // return $query->row();
        $query = $this->db->query("SELECT * FROM questions WHERE exam_id=$id");
         return $query->result();
        
    }
    public function updateexam($data, $id)
    {
        return $this->db->update('exam', $data, ['exam_id' => $id]);
    }
    public function delselex($id)
    {
        return $this->db->delete('exam',['exam_id' => $id]);
    }
    public function facshowres($ex_title)
    {
        //return $this->db->delete('exam',['exam_title' => $ex_title]);
        // return $this->db->get_where('marks', ['exam_title' => $ex_title]);
         $query = $this->db->query("SELECT * FROM marks WHERE exam_title='$ex_title'");
         return $query->result();
    }
    public function upque($id)
    {
        $query = $this->db->get_where('questions',['que_id' => $id]);
        return $query->row();
    }
    public function upselque($data, $id)
    {
        return $this->db->update('questions', $data, ['que_id' => $id]);
    }
    public function delselque($id)
    {
        return $this->db->delete('questions',['que_id' => $id]);
    }
    public function numofques($id)
    {
        $q = $this->db->query("SELECT * FROM questions WHERE exam_id=$id");
        return $q->num_rows();
    }
}

?>