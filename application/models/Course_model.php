<?php
class Course_model extends CI_Model {

        public function getAllCourse()
        {
                $query = $this->db->get('course');
                return $query->result_array();

        }


   



}