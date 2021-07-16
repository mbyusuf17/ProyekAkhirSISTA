<?php

class Penilaian_model extends CI_Model{
    public $_table = 'penilaian';

    public function getAll(){
        return $this->db->get($this->_table)->result_array();
    }

}

?>