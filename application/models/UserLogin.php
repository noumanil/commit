
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserLogin extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function matchUsers($username, $password) {
        $query = $this->db->query("SELECT usertype,user_id FROM users where username = '$username' and password='$password'");
        $row = $query->row();
        return $row;
    }

    public function getCategories() {
        $data = array();
        $query = $this->db->get('categories');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    /* public function getLastQuestionId(){
      $this->db->order_by('question_id',"desc");
      $this->db->limit(1);
      $id=  $this->db->get('questions');
      return $id;
      } */

    public function getLastChoiceId($questionId) {

        $query = $this->db->query('SELECT choice_id FROM choices where q_id =' . $questionId . ' order by choice_id desc LIMIT 1');

        $row = $query->row();
        return $row->choice_id;
    }

}
