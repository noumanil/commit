<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('vlogin');
        //$this->load->view('/inc/header');
        //$this->load->view('welcome_message');
    }

    public function hasPriv($priv) {
        if ($this->session->userdata("usertype") != $priv) {
            redirect(site_url(), 'refresh');
            exit();
        }
        return true;
    }

    //public function login(){
    /* if($this->input->get("error") != null)
      {
      $error = $this->input->get("error");
      if($error == 1)
      $data['hata'] = "Lütfen tüm alanları doldurunuz.";
      else if($error == 2)
      $data['hata']= "Kullanıcı adınız veya şifreniz hatalıdır.";
      $this->load->view('vlogin',$data);
      }else
      $this->load->view('vlogin');

      } */
    public function do_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->load->model('userLogin');
        $user = $this->userLogin->matchUsers($username, $password);
        if (!empty($user)) {
            $sessData = array(
                'username' => $username,
                'logged_in' => TRUE,
                'usertype' => $user->usertype,
                'user_id' => $user->user_id,
            );
            $this->session->set_userdata($sessData);
            echo 1;
        } else {
            echo 0;
        }
    }

    public function edit_question() {
        $this->load->view('veditquestion');
    }

    public function add_question() {
        // retrieve the categories and add to the data array
        $this->load->model('userLogin');
        $data['categories'] = $this->userLogin->getCategories();
        $this->load->view('vaddquestion', $data);
        //$this->load->view('vaddquestion');
    }

    public function myprofile() {
        $this->load->view('vmyprofile');
    }

    public function gohomepage() {
        if ($this->session->userdata("usertype") == 1)
            $this->load->view('vadminhomepage');
        else {
            $this->load->view('vstaffhomepage');
        }
    }

    public function password() {
        //$this->isLoggedIn();

        $this->load->view('password');
    }

    public function vstaffhomepage() {
        $this->load->view('vstaffhomepage');
    }

    public function vadminhomepage() {
        //$this->isLoggedIn();

        $this->load->view('vadminhomepage');
    }

    public function account_info() {
        //$this->isLoggedIn();


        $this->load->view('account_info');
    }

    public function usersInfo() {
        //$this->isLoggedIn();


        $this->load->view('usersInfo');
    }

    public function permanent() {
        //$this->isLoggedIn();


        $this->load->view('permanent');
    }

    public function temporary() {
        //$this->isLoggedIn();


        $this->load->view('temporary');
    }

    public function createUser() {

        //$this->isLoggedIn();

        $this->load->view('createUser');
    }

    public function add_new_questionJ() {

        $question = $this->input->post('question');
        $data = array(
            'question' => $question,
            'user_id' => $this->session->userdata('user_id'),
        );
        if ($this->db->insert('questions', $data) == 1) { // if it is successfull

            echo $this->db->insert_id();
        } else
            echo 0;
    }

    public function add_new_choiceJ() {
        //Get choice value from textEditor
        $choice = $this->input->post('choice');
        //Get last inserted question id
        $this->load->model('userLogin');
        //$lastQuestionId = (int)$this->userLogin->getLastQuestionId();
        $lastQuestionId = $this->input->post('questionId');

        $this->load->model('userLogin');
        $lastChoiceId = $this->userLogin->getLastChoiceId($lastQuestionId);

        if (!isset($lastChoiceId))
            $lastChoiceId = 0;
        //$data_id = $this->input->post('question');
        $data = array(
            'choice_id' => $lastChoiceId + 1,
            'choice' => $choice,
            'q_id' => $lastQuestionId,
        );

        if ($this->db->insert('choices', $data)) {

            echo $this->db->insert_id();
        } else
            echo "-1";
    }

    public function set_answerJ() {
        $answerId = $this->input->post('answerId');
        $questionId = $this->input->post('questionId');
        $data = array(
            'correct_choice_id' => $answerId
        );
        $this->db->where('question_id', $questionId);
        echo $this->db->update('questions', $data);
    }

    /* if(empty($user))
      }
      {
      redirect(site_url() . '/vlogin?error=2', 'refresh');
      exit();
      } */
    /*
      $this->session->set_userdata("username", $username);
      $this->session->set_userdata('logged_in', "1");
      //$this->session->set_userdata("usertype", $user->usertype);
      //$this->load->view('vhomepage');
      //$this->isLoggedIn();
      /*	if($user->usertype == 1){
      $this->load->view('vhomepage');
      }
      else{
      $this->load->view('vstaff');
      } */
}
