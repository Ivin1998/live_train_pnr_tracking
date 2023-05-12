<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Welcome extends CI_Controller
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
	public function index()
	{
		$this->load->view('view');
	}
	public function get_status()
	{
		$pnr = $_GET['pnr'];
		$url = 'https://real-time-pnr-status-api-for-indian-railways.p.rapidapi.com/indianrail/' . $pnr;

		$client = new \GuzzleHttp\Client();

		$response = $client->request('GET', $url, [
			'headers' => [
				'X-RapidAPI-Host' => 'real-time-pnr-status-api-for-indian-railways.p.rapidapi.com',
				'X-RapidAPI-Key' => 'b2a00d00a5msh10db23cbb5c7053p10aa46jsn6773b35273e2',
			],
		]);
		echo $response->getBody();
	}
}
?>