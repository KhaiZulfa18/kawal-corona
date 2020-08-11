<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corona extends CI_Controller {

	public function index()
	{
		$data['headertitle'] = 'Fck4Covid';

		$this->load->view('v_corona',$data);
	}

	public function get_data(){
		$located = $this->input->post('located');

		if ($located=='indo') {

			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => "https://api.kawalcorona.com/indonesia/",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_TIMEOUT => 30
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
			//echo "cURL Error #:" . $err;
				echo '000';
			} else {
			//echo $response;
				$data = json_decode($response, true);
				$positif = $data[0]['positif'];
				$sembuh = $data[0]['sembuh'];
				$meninggal = $data[0]['meninggal'];
				$location = "Indonesia";

				$response = array(
					'positif' => $positif,
					'sembuh' => $sembuh,
					'meninggal' => $meninggal,
					'location' => $location
				);

				echo json_encode($response);
			}
		}elseif ($located=='global') {

			$positif = curl_init();

			curl_setopt_array($positif, array(
				CURLOPT_URL => "https://api.kawalcorona.com/positif/",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_TIMEOUT => 30
			));

			$positifResp = curl_exec($positif);
			$errPos = curl_error($positif);

			curl_close($positif);

			if ($errPos) {
			//echo "cURL Error #:" . $err;
				echo '000';
			} else {
			//echo $response;
				$data = json_decode($positifResp, true);
				$response['positif'] = $data['value'];
			}

			$sembuh = curl_init();

			curl_setopt_array($sembuh, array(
				CURLOPT_URL => "https://api.kawalcorona.com/sembuh/",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_TIMEOUT => 30
			));

			$sembuhResp = curl_exec($sembuh);
			$errSem = curl_error($sembuh);

			curl_close($sembuh);

			if ($errSem) {
			//echo "cURL Error #:" . $err;
				echo '000';
			} else {
			//echo $response;
				$data = json_decode($sembuhResp, true);
				$response['sembuh'] = $data['value'];
			}

			$meninggal = curl_init();

			curl_setopt_array($meninggal, array(
				CURLOPT_URL => "https://api.kawalcorona.com/meninggal/",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_TIMEOUT => 30
			));

			$meninggalResp = curl_exec($meninggal);
			$errMeninggal = curl_error($meninggal);

			curl_close($meninggal);

			if ($errMeninggal) {
			//echo "cURL Error #:" . $err;
				echo '000';
			} else {
			//echo $response;
				$data = json_decode($meninggalResp, true);
				$response['meninggal'] = $data['value'];
			}

			$response['location'] = "Global";

			echo json_encode($response);
		}
	}
}
