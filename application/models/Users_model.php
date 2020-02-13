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


}