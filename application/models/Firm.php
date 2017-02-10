<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firm extends CI_Model {


    public function updateInformation($name, $str, $city, $state, $ctry, $contact, $web, $email, $c){
        $data = array(
            'firm_name'=>$name, 'firm_address_str'=>$str, 'firm_address_city'=>$city,
            'firm_address_state'=>$state, 'firm_address_ctry'=>$ctry,
            'firm_address_contact'=>$contact, 'firm_address_website'=>$web, 'firm_address_email'=>$email
        ); $where = "idfirm=".$c;

        $sql = $this->db->update_string('firm', $data, $where);
        $query = $this->db->query($sql);

        return $this->db->affected_rows();
    }

    public function getCompanyIDViaUserID($userid){
        $sql = "SELECT * FROM firm_employees WHERE users_idusers=?";
        $query = $this->db->query($sql, array($userid));
        if ($query->num_rows() > 0){
            $result = $query->result();
            $item = $result[0];

            return $item->firm_idfirm;
        } else { return null; }

    }

    public function getAllEmployees($sessionID){
        $companyID = $this->getCompanyIDViaUserID($sessionID);

        $list = array();
        $sql = "SELECT * FROM firm_employees AS fe
                LEFT JOIN users AS u ON fe.users_idusers=u.idusers
                LEFT JOIN login AS l ON l.users_idusers=fe.users_idusers
                WHERE fe.firm_idfirm=?";
        $query = $this->db->query($sql, array($companyID));
        if ($query->num_rows() > 0){
            foreach($query->result() as $r){
                $item = array();
                $item['userid'] = $r->idusers;
                $item['name'] = $r->last_name.", ".$r->first_name." ".$r->middle_name;
                $item['email'] = $r->email;
                $item['username'] = $r->username;
                $item['admin'] = $r->admin;

                /* $sql = "SELECT * FROM admins WHERE users_idusers=?";
                $query0 = $this->db->query($sql, array($r->idusers));
                if ($query0->num_rows() > 0){
                    $item['admin'] = true;
                } else { $item['admin'] = false; } */

                $list[] = $item;
            }
        }

        return $list;
    }

    public function updateLogo($logo, $c){

    }



}

?>
