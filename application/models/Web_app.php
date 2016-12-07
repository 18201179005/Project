<?php
class Web_app extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getInfoToLists(){
        $this->db->select('id, cid, name, type, status');
        $this->db->order_by('id DESC');
        $query = $this->db->get('web_app');
        $result = $query->result_array();
        return $result;
    }

    public function getBannerToLists(){
        $this->db->select('id, cid');
        $this->db->order_by('id DESC');
        $query = $this->db->get_where('web_app', array('isBanner' => 1));
        $result = $query->result_array();
        return $result;
    }
}