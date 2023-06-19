<?php
class User_Model extends CI_model{
    function Create($formArry){
        $this->db->insert('userstask',$formArry);//insert values,name etc/
    }
    function all()
    {
      return $users=$this->db->get('userstask')->result_array(); // select * from table
    }

    function getuser($userid)
    {
         $this->db->where('user_id',$userid);
      return $user= $this->db->get('userstask')->row_array();
    }

    function Updatuser($formArry,$userid)
    {
    //   print_r($userid);
      $this->db->where('user_id',$userid);
      $this->db->Update('userstask',$formArry);
    }
    function deleteuser($userid)
    {
     $this->db->where('user_id',$userid);
       return $del=$this->db->delete('userstask');   
    }
}

?>