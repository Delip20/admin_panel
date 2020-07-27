<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/Midtrans.php';
//require APPPATH . '/libraries/Veritrans.php';
class Snap extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		$params = array('server_key' => 'server_key', 'midtrans_status' => false);
		$this->midtrans->config($params);
		$this->load->helper('url');
		$this->load->model('Pelanggan_model');
		$this->load->library('midtrans');
		$this->veritrans->config($params);
	}

	public function index()
	{

		// Required
		$transaction_details = array(
			'order_id' => $this->db->get_where('transaction_details_Midtrans', 'order_detail'  . uniqid()()),
			'gross_amount' => 10000, // no decimal allowed for creditcard
		);

		// Optional
		$item_details = array(
			'id' => $this->Pelanggan_model->get_data_pelanggan('pelanggan', 'fullnama')->row_array(),
			'price' => $this->db->get_where('item', 'harga_item')->row_array(),
			'kategori_item' => $this->db->get_where('item', 'kategori_item')->row_array(),
			'name' => $this->db->get_where('item', 'nama_item')->row_array()
		);

		// Optional
		$billing_address = array(
			$this->db->get('pelanggan')->result_array()
		);

		// Data yang akan dikirim untuk request redirect_url.
		$credit_card['save_card'] = true;
		//ser save_card true to enable oneclick or 2click
		//$credit_card['save_card'] = true;

		$time = time();
		$custom_expiry = array(
			'start_time' => date("Y-m-d H:i:s O", $time),
			'unit' => 'minute',
			'duration'  => 5
		);

		$transaction_data = array(
			'transaction_details' => $transaction_details,
			'item_details'       => $item_details,
			'customer_details'   => $billing_address,
			'credit_card'        => $credit_card,
			'expiry'             => $custom_expiry
		);

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
	}

	public function finish($result)
	{
		$result = json_decode($this->input->post('result_data'));
		echo 'RESULT <br><pre>';
		var_dump($result);
		echo '</pre>';
	}
}
