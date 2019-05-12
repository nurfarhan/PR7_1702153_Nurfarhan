<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Web extends CI_Model
 {
   // get table lokomotif
 	public function get_all_lokomotif()
 	{
 	$query = $this->db->order_by('kd_kereta','ASC')->get('lokomotif');
 	return $query->result();
 	}
   // get table gerbong
  public function get_all_gerbong()
 	{
 	$query = $this->db->order_by('kd_gerbong','ASC')->get('gerbong');
 	return $query->result();
 	}
   // get table kursi
  public function get_all_kursi()
 	{
 	$query = $this->db->order_by('kd_kursi','ASC')->get('kursi');
 	return $query->result();
 	}
  // LeftJoin
  public function get_all_LJ()
 	{
 	$query = $this->db->join('kursi','lokomotif.kd_kereta = kursi.kd_kereta','left')->get('lokomotif');
 	return $query->result();
 	}
  //RightJoin
  public function get_all_RJ()
 	{
 	$query = $this->db->join('gerbong','kursi.kd_gerbong = gerbong.kd_gerbong','right')->get('kursi');
 	return $query->result();
 	}
  //RightJoin
  public function get_all_IJ()
 	{
 	$query = $this->db->join('kursi','lokomotif.kd_kereta = kursi.kd_kereta','inner')->join('gerbong','kursi.kd_gerbong = gerbong.kd_gerbong','inner')->get('lokomotif');
 	return $query->result();
 	}
 }
