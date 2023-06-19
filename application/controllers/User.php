<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
      // print task list/

   

    function index()
    {
      
       $this->load->model('User_Model');
       $users=$this->User_Model->all();
       $data=array();
       $data['users']=$users;
       $this->load->view('list',$data);

    }
    
    function create(){
        $this->load->model('User_Model');
       $this->load->helper ('url','form');
       $this->load->library('form_validation');

        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('task','task','required');   // name name validatiom set

              
        if($this->form_validation->run()==false){    // false anle then load create ,or false allel  to store data
            $this->load->view('Create');
        }
        else
        {

          $formArry=array();
          $formArry['task']=$this->input->post('task');
          $formArry['name']=$this->input->post('name'); ///['key in array'//    task mathre illu input ayit value.
        //   $formArry['name']=$this->input->post('name');
                //   $formArry['email']=$this->input->post('eamil'); input ivde kodka

          $this->User_Model->Create($formArry);   // create create fucnction an 
          $this->session->set_flashdata('success','Reccord successfully');
            redirect(base_url().'User/index');
        
        }
   
    }
    function Edit($userid){
        $this->load->model('User_Model');
     $user=$this->User_Model->getuser($userid);
     $data=array();
     $data['user']=$user;

     $this->form_validation->set_rules('task','task','required');

     if($this->form_validation->run()==false)
     {
        $this->load->view('edit',$data);
     }
        else
        {    //update record
            $formArry=array();
             $formArry['task']=$this->input->post('task');
             $this->User_Model->Updatuser($formArry,$userid);
             $this->session->set_flashdata('success','Reccord update successfully');
              redirect(base_url().'User/index');
        }  
        
     }

     function Delete($userid)
     {
        $this->load->model('User_Model');
        $user=$this->User_Model->getuser($userid);
        if(empty($user))
        {
            $this->session->set_flashdata('failure','data not found');
            redirect(base_url().'User/index');
        }

        $this->User_Model->deleteuser($userid);
        $this->session->set_flashdata('success','successfully deleted');
        redirect(base_url().'User/index');

     }
    }
  

?>