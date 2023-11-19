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
        $this->load->view('footer');
    }

    public function signupview(){
        $this->load->view('signup');
        $this->load->view('footer');
    }


    
    // functions

    // [1] Show Table

    // show fieldtrip table in admin view
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
       
        $data['name']=$this->input->post('name');
        $data['contactperson']=$this->input->post('contactperson');
        $data['email']=$this->input->post('email');
        $data['phone']=$this->input->post('phone');
        $data['date']=$this->input->post('date');
        $data['time']=$this->input->post('time');
        $data['participants']=$this->input->post('participants');
        $data['gradelevel']=$this->input->post('gradelevel');
        $data['request']=$this->input->post('request');
        $response=$this->Mod->add_fieldtrip($data); 

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
        $response=$this->Mod->add_facilities($data); 

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

        $response=$this->Mod->add_appointment($data); 

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


}

?>