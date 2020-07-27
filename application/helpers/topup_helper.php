<?php
function curl_topup()
{
  $code = get_instance();
  $json = $code->db->get('topup_pulsaMP')->result_array();

  $url = "https://testprepaid.mobilepulsa.net/v1/legacy/index";

  $ch  = curl_init();
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $data = curl_exec($ch);
  curl_close($ch);

  print_r($data);
}
