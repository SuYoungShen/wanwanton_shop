<?php
class Product_model extends CI_Model {

  function __construct(){
    $this->load->database();

  }

  function get_limit($table, $start, $end){//取出產品前面幾筆資料
    // return  $this->db->limit($start, $end)->get_compiled_select($table);
    return  $this->db->limit($start, $end)->get($table)->result_array();
  }
  function get_where_limit($table, $where, $start, $end){
    $this->db->limit($end, $start);
    $this->db->where($where);
    // return  $this->db->limit($start, $end)->get_compiled_select($table);
    return  $this->db->get($table)->result_array();

    // return  $this->db->get_where($table, $where)->limit($start, $end)->result_array();
  }
}

?>
