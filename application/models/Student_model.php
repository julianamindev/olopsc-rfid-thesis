<?php
class Student_model extends CI_Model {

        public $title;
        public $content;
        public $date;


        public function getAllStudent()
        {
                $id = 0;
                $this->db->select('user.*,course.name');
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



        public function addLogStudent($studentno,$data)
        {   

                if($this->checkStudentnoExist($studentno) > 0){

                        $result = $this->db->insert('time_log',$data);
                        return  $result ? true : false ;  
                        
                }else{
                      

                        return false;
                }

               
        }


        public function updateStudent($id,$data)
        {   
                //print_r($id);
                //exit();
                if($this->checkStudentId($id) > 0){

                        $this->db->where('id', $id);
                        $this->db->update('user', $data);
                        return true;         

                }else{
                        return false;
                }

               
        }


        public function updateStudentPassword($id,$data)
        {   
   
                if($this->checkStudentnoExist($id) > 0){

                        $this->db->where('student_no', $id);
                        $this->db->update('user', $data);
                        return true;         

                }else{
                        return false;
                }

               
        }



        public function deleteStudent($id,$ref_rfid)
        {   
                if($this->checkStudentId($id) > 0){
                        
                        $this->db->where('id', $id);
                        $this->db->delete('user');

                        //delete timelog
                      $this->deleteTimeLog($id);

                        //update rfid
                        $rf = array("status" =>0);
                        $this->db->where('rfid_number', $ref_rfid);
                        $this->db->update('rfid', $rf);

                        return true;         

                }else{
                        return false;
                }

               
        }


        public function deleteTimeLog($id){
                $this->db->where('student_ref_id', $id);
                $this->db->delete('time_log');

        }

        public function checkStudentId($data)
        {   
                $this->db->where('id',  $data);
                $query = $this->db->get('user');
                return $query->num_rows();
        }

        
        public function getStudentById($data)
        {   
                $this->db->where('id',  $data);
                $query = $this->db->get('user');
                return $query->result_array();

        }


        public function getStudentByStudentNo($data)
        {   
                $this->db->select('user.*,course.name');
                $this->db->from('user');
                $this->db->join('course', 'user.course = course.id','left');
                $this->db->where('student_no',  $data);
                $query = $this->db->get();
                return $query->row_array();

        }

        public function getStudentByRfid($data)
        {   
                $this->db->select('user.*,course.name');
                $this->db->from('user');
                $this->db->join('course', 'user.course = course.id','left');
                $this->db->where('ref_rfid',  $data);
                $query = $this->db->get();
               
                return $query->row_array();

        }

        public function getStudentLog($date,$student_no)
        {   
                $this->db->where('student_ref_id',  $student_no);
                $this->db->where('time_in >=', $date.' 00:00:00');
                $this->db->where('time_in <=', $date.' 23:59:59');
                $this->db->order_by("log_id", "asc");
                $query = $this->db->get('time_log');

                //print_r($this->db->last_query());exit();
                return $query->result_array();

        }


        public function checkStudentnoExist($data)
        {   
                $this->db->where('student_no',  $data);
                $query = $this->db->get('user');
                return $query->num_rows();
        }


}