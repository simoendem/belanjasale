<?php

class m_member extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_members() {
        $this->db->select('*');
        $this->db->from('crm_pelanggan');
        $this->db->join('sdm_users', 'crm_pelanggan.sales_id = sdm_users.kary_id');
        $this->db->join('wil_kabupaten', 'crm_pelanggan.kota_id = wil_kabupaten.id');
    	$query = $this->db->get();
    	// echo '<pre>'; print_r($query->result());die;
    	if ($query->num_rows > 0) {
    		return $query->result();
    	} else {
    		return array();
    	}
    }

    function get_member($id) {
        $this->db->select('*');
        $this->db->where('pelanggan_id',$id);
        $this->db->from('crm_pelanggan');
        $query = $this->db->get();
        // echo '<pre>'; print_r($query->result());die;
        if ($query->num_rows > 0) {
            return $query->row();
        } else {
            return array();
        }
    }


    function delete_member($id) {
        $this->db->where('pelanggan_id',$id);
        $delete = $this->db->delete('crm_pelanggan');
        if ($delete) {
            return true;
        }
        else {
            return false;
        }
    }

    function add_member($input) {
        $insert = $this->db->insert('crm_pelanggan',$input);
        if ($insert) {
            return $this->db->insert_id();
        }
        else {
            return false;
        }
    }

    function update_member($id,$input) {
        $this->db->where('member_id',$id);
        $update = $this->db->update('crm_pelanggan',$input);
        if ($update) {
            return $this->db->insert_id();
        }
        else {
            return false;
        }
    }

}
