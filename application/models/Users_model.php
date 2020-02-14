<?php
class Users_model extends CI_Model {

        public $title;
        public $content;
        public $date;


        public function getAllUser()
        {
                $query = $this->db->get('user');  
                return $query->result_array();
        }


        public function validateUser($data)
        {   
                $this->db->where('username', $data['username']);
                $this->db->where('password',$data['password']);
                $query = $this->db->get('user');
                return $query->row_array();
        }


        public function getUserByUsername($data)
        {   
                $this->db->where('username', $data);
                $query = $this->db->get('user');
                return $query->row_array();
        }

        public function getUserAdmin()
        {   
                $id = 1;
                $this->db->where('isadmin', $id);
                $query = $this->db->get('user');
                return $query->result_array();
        }

        public function getUserStudent()
        {   
                $id = 1;
                $this->db->where('isadmin !=',  $id);
                $query = $this->db->get('user');
                return $query->result_array();
        }


        public function addAdmin($data)
        {   

                if($this->checkUsernameAdmin($data['username']) > 0){
                        return false;
                }else{
                        $result = $this->db->insert('user',$data);
                        return  $result ? true : false ;  
                }

               
        }


        public function checkUsernameAdmin($data)
        {   
                $this->db->where('username',  $data);
                $query = $this->db->get('user');
                return $query->num_rows();
        }




}