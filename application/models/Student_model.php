<?php
class Student_model extends CI_Model {

        public $title;
        public $content;
        public $date;


        public function getAllStudent()
        {
                $id = 0;
                $this->db->select('*,course.name as cname');
                $this->db->from('user');
                $this->db->join('course', 'user.course = course.id','left');
                $this->db->where('user.isadmin',  $id);
                $query = $this->db->get();
                return $query->result_array();


        }



        public function addStudent($data)
        {   

                if($this->checkStudentnoExist($data['student_no']) > 0){
                        return false;
                }else{
                        $result = $this->db->insert('user',$data);
                        return  $result ? true : false ;  
                }

               
        }


        public function checkStudentnoExist($data)
        {   
                $this->db->where('student_no',  $data);
                $query = $this->db->get('user');
                return $query->num_rows();
        }


}