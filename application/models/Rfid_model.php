<?php
class Rfid_model extends CI_Model {

        public function getAllRfid()
        {
                $this->db->select('*');
                $this->db->from('rfid');
                $this->db->join('user', 'rfid.rfid_number = user.ref_rfid','left');
                $query = $this->db->get();
                return $query->result_array();

        }


        public function getAllRfidInactive()
        {   
                $id = 0;
                $this->db->where('status',  $id);
                $query = $this->db->get('rfid');
                return $query->result_array();
        }

        public function addRfid($data)
        {   

                if($this->checkRfidExist($data['rfid_number']) > 0){
                        return false;
                }else{
                        $result = $this->db->insert('rfid',$data);
                        return  $result ? true : false ;  
                }

               
        }


        public function checkRfidExist($data)
        {   
                $this->db->where('rfid_number',  $data);
                $query = $this->db->get('rfid');
                return $query->num_rows();
        }


        public function updateRfid($data,$formdate)
        {   

                $this->db->where('rfid_number', $data);
                $this->db->update('rfid',$formdate);
                return ($this->db->affected_rows() > 0) ? true : false ;  

        }




}