<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_FeedbackKonsumen extends CI_Model {
    
    public function getAllFeedback(){

        $this->db->from('tb_feedback a');
        $this->db->join('tb_konsumen b', 'a.Id_Konsumen = b.Id_Konsumen');
	    $query = $this->db->get();
	    return $query->result();
    }
    
    public function getFeedback($id){

        $this->db->from('tb_feedback a');
        $this->db->join('tb_konsumen b', 'a.Id_Konsumen = b.Id_Konsumen');
	    $this->db->where('a.Id_Feedback',$id);
	    $query = $this->db->get();
	    return $query->result();
    }
    
}

?>