<?php

class Kategori_model extends CI_Model{
    public $_table = 'kategori_seminar';

    public function getAll(){
        return $this->db->get($this->_table)->result_array();
    }
}

?>