<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    
    
    
    public function createUser($l, $f, $m, $e){
        $data = array('last_name'=>$l, 'first_name'=>$f, 'middle_name'=>$m, 'email'=>$e);
        $sql = $this->db->insert_string('users', $data);
        $query = $this->db->query($sql);
        
        $id = $this->db->insert_id();
        return $id;
    }
    
    public function getUserInformation($i){
        $data = array();
        $sql = "SELECT * FROM users AS u WHERE u.idusers=?";
        $query = $this->db->query($sql, array($i));
        if ($query->num_rows() > 0){
            $result = $query->result();
            $data['info'] = $result[0];
            
            if ($this->isAdmin($i)){
                $data['admin'] = true;   
            } else { $data['admin'] = false; }
            
            $sql = "SELECT * FROM login WHERE users_idusers=?";
            $query = $this->db->query($sql, array($i));
            if ($query->num_rows() > 0){
                $result = $query->result();
                $data['username'] = $result[0]->username;       
            } else { $data['username'] = null; }
            
            $sql = "SELECT * FROM firm_employees AS fe
                    LEFT JOIN firm AS f ON fe.firm_idfirm=f.idfirm
                    WHERE users_idusers=?";
            $query = $this->db->query($sql, array($i));
            if ($query->num_rows() > 0){
                $result = $query->result();
                $data['company'] = $result[0];       
            } else { $data['company'] = null; }
        } else { $data['info'] = null; }
        
        return $data;
    }
    
    public function editUserInformation($i, $l, $f, $m, $e){
        $data = array('last_name'=>$l, 'first_name'=>$f, 'middle_name'=>$m, 'email'=>$e);
        $where = "idusers=".$i;  $sql = $this->db->update_string('users', $data, $where);
        
        $query = $this->db->query($sql);
        return $this->db->affected_rows();
    }
    
    public function getUserIDFromCredentials($username, $password){
        $sql = "SELECT * FROM login WHERE username=? AND password=?";
        $query = $this->db->query($sql, array($username, $password));
        if ($query->num_rows() > 0){
            $result = $query->result();
            $item = $result[0];
            
            return $item->users_idusers;
        } else { return -1; }
    }
    
    public function changeUsername($u, $username){
        $data = array('username'=>$username); $where = "users_idusers=".$u;  
        $sql = $this->db->update_string('login', $data, $where);
        $query = $this->db->query($sql);
        
        return $this->db->affected_rows();       
    }
    
    public function isThisMyUsername($u, $username){
        $sql = "SELECT * FROM login WHERE username=? AND users_idusers=?";
        $query = $this->db->query($sql, array($username, $u));
                                  
        if ($query->num_rows() > 0){
            return true;
        } else { return false; }
    }
    
    public function isUsernameExists($username){
        $sql = "SELECT * FROM login WHERE username=?";
        $query = $this->db->query($sql, array($username));
                                  
        if ($query->num_rows() > 0){
            return true;
        } else { return false; }
    }
    
    public function isPasswordCorrect($i, $p){
        $sql = "SELECT * FROM login WHERE users_idusers=? AND password=?";
        $query = $this->db->query($sql, array($i, md5($p)));
        if ($query->num_rows() > 0){
            return true;
        } else { return false; }       
    }
    
    public function changePassword($u, $password){
        $data = array('password'=> md5($password)); $where = "users_idusers=".$u;  
        $sql = $this->db->update_string('login', $data, $where);
        $query = $this->db->query($sql);
        
        return $this->db->affected_rows();       
    }
    
    public function createLoginCredentials($i, $u, $p){
        $data = array('username'=>$u, 'password'=>md5($p), 'users_idusers'=>$i);
        $sql = $this->db->insert_string('login', $data);
        $query = $this->db->query($sql);
        
        $id = $this->db->insert_id();
        return $id;
    }
    
    public function createRandomPassword($length){
        $password = "";
        
        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        for($i=0; $i<$length; $i++){
            $password .= array_rand($characters);
        }
        
        return $password;
    }
    
    public function createUsername($l, $f, $m){
        $firstname = strtolower(str_replace(' ', '', $f));
        $lasname   = strtolower(str_replace(' ', '', $l));
                                
        return $firstname.".".$lastname;
    }
    
    public function assignToCompany($i, $c){
        $data = array('users_idusers'=>$i, 'firm_idfirm'=>$c);
        $sql  = $this->db->insert_string('firm_employees', $data);
        
        $query = $this->db->query($sql);
        $id = $this->db->insert_id();
        return $id;
    }
    
    public function resignFromCurrentCompany($i){
        $sql = "DELETE FROM firm_employees WHERE users_idusers=?";
        $query = $this->db->query($sql, array($i));
        
        return $this->db->affected_rows();
    }
    
    public function promoteAsAdmin($i){
        $data = array('users_idusers'=>$i);
        $sql = $this->db->insert_string('admins', $data);
        
        $query = $this->db->query($sql);
        $id = $this->db->insert_id();
        return $id;
    }
    
    public function demoteFromAdmin($i){
        $sql = "DELETE FROM admins WHERE users_idusers=?";
        $query = $this->db->query($sql, array($i));
        
        return $this->db->affected_rows();
    }
    
    public function isAdmin($i){
        $sql = "SELECT * FROM admins WHERE users_idusers=?";
        $query = $this->db->query($sql, array($i));
        
        return $query->num_rows() > 0;
    }
    
    
    public function showUsersList($c){
        
    }
    
    public function showAdminsList($c){
        
    }
    
}

?>