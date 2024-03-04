<?php

class Napwc extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod');
        $this->load->helper('url'); 
    }

    // views/webpages

    public function index(){
        $this->load->view('header');
        $this->load->view('landing');
        $this->load->view('footer');
    }

    public function about(){
        $this->load->view('header');
        $this->load->view('about');
        $this->load->view('footer');
    }

    public function explore(){
        $this->load->view('header');
        $this->load->view('explore');
        $this->load->view('footer');
    }

    public function plan(){
        $this->load->view('header');
        $this->load->view('plan');
        $this->load->view('footer');
    }

    public function fieldtrip(){
        $this->load->view('header');
        $this->load->view('fieldtrip');
        $this->load->view('footer');

   
    }

    public function appointment(){
        $this->load->view('header');
        $this->load->view('appointment');
        $this->load->view('footer');
    }

    public function bookfacility(){
        $this->load->view('header');
        $this->load->view('bookfacility');
        $this->load->view('footer');
    }

    public function loginview(){
        $this->load->view('login');
    }

    //NEW NEW NEW
    public function user_profile() {
    $this->load->view('header');
    $this->load->view('user_profile');
    $this->load->view('footer');
    }

    public function reservation() {
    $this->load->view('header');
    $this->load->view('reservation');
    $this->load->view('footer');
    }

    public function sign_up() {
    $this->load->view('header');
    $this->load->view('sign_up');
    $this->load->view('footer');
    }

    public function log_in() {
        $this->load->view('header');
        $this->load->view('log_in');
        $this->load->view('footer');
        }

    public function virtualtour() {
        $this->load->view('header');
        $this->load->view('virtualtour');
        $this->load->view('footer');
        }

    public function e_flora() {
        $this->load->view('header');
        $this->load->view('e_flora');
        $this->load->view('footer');
        }


    public function e_attractions() {
        $this->load->view('header');
        $this->load->view('e_attractions');
        $this->load->view('footer');
        }
    
    public function r_dashboard() {
        $this->load->view('r_dashboard');
        }

    public function cms() {
        $this->load->view('cms');
        }
        
    public function adma() {
        $this->load->view('adma');
        }
            
    

    
    // functions

    // [1] Show Table

    // show fieldtrip table in admin view
    public function loginpro_admin($a = ''){
        $this->load->view('loginpro_admin');

        $data = array(
            'item' => $this->Mod->show_fieldtrip($a)
        );
        
    }


    public function admin_fieldtrip($a = ''){
        $this->load->view('admin_nav');

        $data = array(
            'item' => $this->Mod->show_fieldtrip($a)
        );
        $this->load->view('admin_fieldtrip', $data);
    }

    // show facilities table in admin view

    public function admin_facilities($b= ''){
        $this->load->view('admin_nav');
        $data = array(
            'item' => $this->Mod->show_facilities($b)
        );
        $this->load->view('admin_facilities', $data);
    }

    // show facilities table in admin view

    public function admin_appointment($c= ''){
        $this->load->view('admin_nav');
        $data = array(
            'item' => $this->Mod->show_appointment($c)
        );
        $this->load->view('admin_appointment', $data);
    }


    // [2] Create - Insert Data in Table

    // insert fieldtrip data

    public function add_fieldtrip(){
        if($this->input->post('submit'))
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
    	$this->form_validation->set_rules('contactperson', 'contactperson', 'required');
    	$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
		$this->form_validation->set_rules('date', 'Date', 'required');
    	$this->form_validation->set_rules('time', 'Time', 'required');
        $this->form_validation->set_rules('participants', 'Participants', 'required');
    	$this->form_validation->set_rules('gradelevel', 'GradeLevel', 'required');
        $this->form_validation->set_rules('request', 'Request', 'required');
        if ($this->form_validation->run() == false) 
		{
        	$this->load->view('fieldtrip');
    	} 
		else 
		{
        $data = array(
            'Name' => $this->input->post('name'),
            'contactperson' => $this->input->post('contactperson'),
            'Email' => $this->input->post('email'),
			'Phone' => $this->input->post('phone'),
            'Date' => $this->input->post('date'),
			'Time' => $this->input->post('time'),
            'Participants' => $this->input->post('participants'),
			'GradeLevel' => $this->input->post('gradelevel'),
            'Request' => $this->input->post('request'),
        );

        $this->Mod->add_fieldtrip($data);
        
		$this->load->view('popup');
        $this->load->view('header');
        $this->load->view('fieldtrip');
        $this->load->view('footer');

        }}

        else{
            $this->load->view('header');
            $this->load->view('fieldtrip');
            $this->load->view('footer');
    
        }
        

    }


        
    

    // insert facilities data

    public function add_facilities(){

        if($this->input->post('submit'))
    {
       
        $data['name']=$this->input->post('name');
        $data['contactperson']=$this->input->post('contactperson');
        $data['email']=$this->input->post('email');
        $data['phone']=$this->input->post('phone');
        $data['date']=$this->input->post('date');
        $data['time']=$this->input->post('time');
        $data['type']=$this->input->post('type');
        $data['purpose']=$this->input->post('purpose');
        $data['participants']=$this->input->post('participants');
        $data['request']=$this->input->post('request');

        $this->Mod->add_facilities($data);

        
		$this->load->view('popup');
        $this->load->view('header');
        $this->load->view('bookfacility');
        $this->load->view('footer');

        }
        else{
            $this->load->view('header');
            $this->load->view('bookfacility');
            $this->load->view('footer');
    
        }

    }

    

    // insert appointment data

    public function add_appointment(){

        if($this->input->post('submit'))
    {

        $data['name']=$this->input->post('name');
        $data['organization']=$this->input->post('organization');
        $data['email']=$this->input->post('email');
        $data['phone']=$this->input->post('phone');
        $data['date']=$this->input->post('date');
        $data['time']=$this->input->post('time');
        $data['purpose']=$this->input->post('purpose');
        $data['questions']=$this->input->post('questions');

        $this->Mod->add_appointment($data);

        
		$this->load->view('popup');
        $this->load->view('header');
        $this->load->view('appointment');
        $this->load->view('footer');

    }
    else {
        $this->load->view('header');
        $this->load->view('appointment');
        $this->load->view('footer');
    }
    } 

    // [3] Delete Data

    public function delete_fieldtrip($id)
    {
        $this->Mod->delete_fieldtrip($id);
        $this->admin_fieldtrip();
    }

    public function delete_appointment($id){
        $this->Mod->delete_appointment($id);
        $this->admin_appointment();
    }

    public function delete_facilities($id){
        $this->Mod->delete_facilities($id);
        $this->admin_facilities();
    }

    // [4] Search Data

    public function search_fieldtrip(){
        $keyword = $this->input->post('search_key');
        $data['item'] = $this->Mod->search_fieldtrip($keyword);
        $this->load->view('admin_fieldtrip', $data);

    }

    public function search_facilities(){
        $keyword = $this->input->post('search_key');
        $data['item'] = $this->Mod->search_facilities($keyword);
        $this->load->view('admin_facilities', $data);

    }

    public function search_appointment(){
        $keyword = $this->input->post('search_key');
        $data['item'] = $this->Mod->search_appointment($keyword);
        $this->load->view('admin_appointment', $data);
 
    }

    public function loginpro(){
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $data = array(
                'Email' => $this->input->post('email'),
                'Password' => $this->input->post('password')
            );
            $result = $this->mod->loginpro($data['Email'], $data['Password']);
            if ($result) {
                    //$this->load->view('admin_nav');//
                    $this->load->view('loginpro_admin');
            
            } else {
                $this->load->view('header');
                $this->load->view('login');
            }
        }
    }


}
?>



