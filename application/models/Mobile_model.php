<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mobile_model extends CI_model
{
  function __construct()
  {
      parent::__construct();
  }
  
  public function topup_pulsa($data)
  {
    $this->db->insert('topup_pulsaMP', $data)->result_array();
    return $this->db->affected_rows();
  }

  public function postCallback()
  {
    $this->db->insert('mp_callback')->result_array();
  }
}
