<?php
/**
 *
 */
 defined('BASEPATH') OR exit('No direct script access allowed');
class Dbase
{

  function __construct()
  {
    $this->CI=& get_instance();
    $this->CI->load->database();
  }
  public function get_all($table,$order=null,$limit=null,$like=null)
  {
    if ($order == null and $limit == null and $like == null) {
      $result=$this->CI->db->get($table)->result();
      return $result;
    }
    if ($order != null and $limit == null and $like == null) {
      $result=$this->CI->db->order_by($order['column'],$order['type'])->get($table)->result();
      return $result;
    }
    if ($order == null and $limit != null and $like == null) {
      $result=$this->CI->db->limit($limit['amount'],$limit['interval'])->get($table)->result();
      return $result;
    }
    if ($order == null and $limit == null and $like != null) {
      $result=$this->CI->db->like($like['column'],$like['key'],$like['position'])->get($table)->result();
      return $result;
    }
    if ($order != null and $limit != null and $like == null) {
      $result=$this->CI->db->order-by($order['column'],$order['type'])->limit($limit['amount'],$limit['interval'])->get($table)->result();
      return $result;
    }
    if ($order != null and $limit == null and $like != null) {
      $result=$this->CI->db->order_by($order['column'],$order['type'])->like($like['column'],$like['key'],$like['position'])->get($table)->result();
      return $result;
    }
    if ($order == null and $limit != null and $like != null) {
      $result=$this->CI->db->limit($limit['amount'],$limit['interval'])->like($like['column'],$like['key'],$like['position'])->get($table)->result();
      return $result;
    }
    if ($order != null and $limit != null and $like != null) {
      $result=$this->CI->db->order_by($order['column'],$order['type'])->limit($limit['amount'],$limit['interval'])->like($like['column'],$like['key'],$like['position'])->get($table)->result();
      return $result;
    }
  }
  public function get_specific($table,$expressions,$order=null,$limit=null,$like=null)
  {
    if ($order == null and $limit == null and $like == null) {
      $result=$this->CI->db->where($expressions)->get($table)->result();
      return $result;
    }
    if ($order != null and $limit == null and $like == null) {
      $result=$this->CI->db->where($expressions)->order_by($order['column'],$order['type'])->get($table)->result();
      return $result;
    }
    if ($order == null and $limit != null and $like == null) {
      $result=$this->CI->db->where($expressions)->limit($limit['amount'],$limit['interval'])->get($table)->result();
      return $result;
    }
    if ($order == null and $limit == null and $like != null) {
      $result=$this->CI->db->where($expressions)->like($like['column'],$like['key'],$like['position'])->get($table)->result();
      return $result;
    }
    if ($order != null and $limit != null and $like == null) {
      $result=$this->CI->db->where($expressions)->order-by($order['column'],$order['type'])->limit($limit['amount'],$limit['interval'])->get($table)->result();
      return $result;
    }
    if ($order != null and $limit == null and $like != null) {
      $result=$this->CI->db->where($expressions)->order_by($order['column'],$order['type'])->like($like['column'],$like['key'],$like['position'])->get($table)->result();
      return $result;
    }
    if ($order == null and $limit != null and $like != null) {
      $result=$this->CI->db->where($expressions)->limit($limit['amount'],$limit['interval'])->like($like['column'],$like['key'],$like['position'])->get($table)->result();
      return $result;
    }
    if ($order != null and $limit != null and $like != null) {
      $result=$this->CI->db->where($expressions)->order_by($order['column'],$order['type'])->limit($limit['amount'],$limit['interval'])->like($like['column'],$like['key'],$like['position'])->get($table)->result();
      return $result;
    }
  }
  public function add($table,$data)
  {
    $result=$this->CI->db->insert($table,$data);
    $last_id=$this->CI->db->insert_id();
    if ($last_id != 0) {
      return true;
    }
    else {
      return false;
    }
  }
  public function delete($table,$expressions)
  {
    $result=$this->CI->db->delete($table,$expressions);
    if ($result) {
      return true;
    }
    else {
      return false;
    }
  }
  public function modify($table,$data,$expressions)
  {
    $result=$this->CI->db->update($table,$data,$expressions);
    if ($result) {
      return true;
    }
    else {
      return false;
    }
  }
}

 ?>
