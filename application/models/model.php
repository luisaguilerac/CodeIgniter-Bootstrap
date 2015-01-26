<?php

class model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->dbutil();
    }

    function get($tabla, $strAtributos, $strInner, $strConsulta) {
        $query = $this->db->query("select " . $strAtributos . " from " . $tabla . " " . $strInner . " where 1=1 " . $strConsulta);
        return $query->result_array();
    }
    
    function update($tabla, $strId, $id, $data) {
        $this->db->where($strId, $id);
        $this->db->update($tabla, $data);
    }

    function insert($tabla, $data) {
        $this->db->insert($tabla, $data);
    }

    function detele($tabla, $strId, $id) {
        $this->db->where($strId, $id);
        return $this->db->delete($tabla);
    }

    function query($strConsulta) {
        $query = $this->db->query($strConsulta);
    }

    function get_database() {
        $query = $this->dbutil->list_databases();
        return $query;
    }

    function create_database($bd) {
        $this->load->dbforge();
        return $this->dbforge->create_database($bd);
    }

    function get_pagination($tabla, $strAtributos, $strInner, $strConsulta, $limit, $start) {
        $query = $this->db->query("select " . $strAtributos . " from " . $tabla . " " . $strInner . " where 1=1 " . $strConsulta . " LIMIT " . $start . "," . $limit . " ");
        return $query->result_array();
    }

    

    function delete_all($tabla) {
        //$this->db->where($strId, $id);
        return $this->db->empty_table($tabla);
    }

    function exists_table($tabla) {
        $bool = 0;
        if ($this->db->table_exists($tabla)) {
            $bool = 1;
        }
        return $bool;
    }

    function exists_database($bd) {
        $this->load->dbutil();
        $bool = 0;
        if ($this->dbutil->database_exists($bd)) {
            $bool = 1;
        }
        return $bool;
    }

}

?>