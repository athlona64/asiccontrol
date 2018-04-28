<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

	public function asic()
	{
		return view('asic/index');
	}
	public function asicNetwork()
	{
		return view('asic/asicNetwork');
	}
	public function changeMulti()
	{
		return view('asic/changeMulti');
	}
	public function getHash()
	{

		$username = 'root';
		$password = 'root';
		//status
		$loginUrl = 'http://192.168.7.146/cgi-bin/get_miner_status.cgi';
		//reboot
		// $loginUrl = 'http://192.168.7.194/cgi-bin/reboot.cgi';
		 

		error_reporting(E_ALL); 
		ini_set( 'display_errors','1');

		$url = $loginUrl;
		$post_data = array(
		        'fieldname1' => 'value1',
		        'fieldname2' => 'value2'
		  );

		$options = array(
		        CURLOPT_URL            => $url,
		        CURLOPT_HEADER         => false,    
		        CURLOPT_VERBOSE        => true,
		        CURLOPT_RETURNTRANSFER => true,
		        CURLOPT_FOLLOWLOCATION => true,
		        CURLOPT_SSL_VERIFYPEER => false,    // for https
		        CURLOPT_USERPWD        => $username . ":" . $password,
		        CURLOPT_HTTPAUTH       => CURLAUTH_DIGEST,
		        CURLOPT_POST           => true,
		        CURLOPT_POSTFIELDS     => http_build_query($post_data) 
		);

		$ch = curl_init();

		curl_setopt_array( $ch, $options );

		try {
		  $raw_response  = curl_exec( $ch );

		  // validate CURL status
		  if(curl_errno($ch))
		      throw new Exception(curl_error($ch), 500);

		  // validate HTTP status code (user/password credential issues)
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  if ($status_code != 200)
		      throw new Exception("Response with Status Code [" . $status_code . "].", 500);

		} catch(Exception $ex) {
		    if ($ch != null) curl_close($ch);
		    throw new Exception($ex);
		}

		if ($ch != null) curl_close($ch);
		// dd($raw_response);
		// echo $raw_response;
		$response = json_decode($raw_response);
		// echo $response->summary->ghs5s;
		print_r($response);
	}
	public function scanIP()
	{

		$username = 'root';
		$password = 'root';
		//status
		for($a=1;$a<2;$a++)
		{
		// $a=7;
		for($i=0;$i<254;$i++)
		{
			$loginUrl = 'http://192.168.'.$a.'.'.$i.'/cgi-bin/get_network_info.cgi';
			//reboot
			// $loginUrl = 'http://192.168.7.194/cgi-bin/reboot.cgi';
			 

			error_reporting(E_ALL); 
			ini_set( 'display_errors','1');

			$url = $loginUrl;
			$post_data = array(
			        'fieldname1' => 'value1',
			        'fieldname2' => 'value2'
			  );

			$options = array(
			        CURLOPT_URL            => $url,
			        CURLOPT_HEADER         => false,    
			        CURLOPT_VERBOSE        => true,
			        CURLOPT_RETURNTRANSFER => true,
			        CURLOPT_FOLLOWLOCATION => true,
			        CURLOPT_SSL_VERIFYPEER => false,    // for https
			        CURLOPT_USERPWD        => $username . ":" . $password,
			        CURLOPT_HTTPAUTH       => CURLAUTH_DIGEST,
			        CURLOPT_POST           => true,
			        CURLOPT_CONNECTTIMEOUT => 3,
			        CURLOPT_TIMEOUT => 5,
			        CURLOPT_POSTFIELDS     => http_build_query($post_data) 
			);

			$ch = curl_init();

			curl_setopt_array( $ch, $options );

			try {
			  $raw_response  = curl_exec( $ch );

			  // validate CURL status
			  // if(curl_errno($ch))
			      // throw new Exception(curl_error($ch), 500);

			  // validate HTTP status code (user/password credential issues)
			  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			  // if ($status_code != 200)
			      // throw new Exception("Response with Status Code [" . $status_code . "].", 500);

			} catch(Exception $ex) {
			    if ($ch != null) curl_close($ch);
			    throw new Exception($ex);
			}

			if ($ch != null) curl_close($ch);
			// dd($raw_response);
			// echo $raw_response;
			$response = json_decode($raw_response);
			// echo $response->summary->ghs5s;
			// echo $response;
			// print_r($response);
			if(isset($response))
			{
				$data = array(
					'network'=>$response->nettype,
					'mac'=>$response->macaddr,
					'ip'=>$response->ipaddress,
					'hostname'=>$response->conf_hostname
					);

				
				print_r($data);
			}
			}
		}
	}

	public function scanIPGetTemp()
	{

		$username = 'root';
		$password = 'root';
	
		//status
		for($a=7;$a<8;$a++)
		{
		for($i=0;$i<254;$i++)
		{
			// $loginUrl = 'http://192.168.'.$a.'.'.$i.'/cgi-bin/get_miner_status.cgi';
			$loginUrl = 'http://192.168.2.252/cgi-bin/get_miner_status.cgi';
			$temp_string = '';
			$sendLine = 0;
			$loopArray = 0;
			error_reporting(E_ALL); 
			ini_set( 'display_errors','1');

			$url = $loginUrl;
			$post_data = array(
			        'fieldname1' => 'value1',
			        'fieldname2' => 'value2'
			  );

			$options = array(
			        CURLOPT_URL            => $url,
			        CURLOPT_HEADER         => false,    
			        CURLOPT_VERBOSE        => true,
			        CURLOPT_RETURNTRANSFER => true,
			        CURLOPT_FOLLOWLOCATION => true,
			        CURLOPT_SSL_VERIFYPEER => false,    // for https
			        CURLOPT_USERPWD        => $username . ":" . $password,
			        CURLOPT_HTTPAUTH       => CURLAUTH_DIGEST,
			        CURLOPT_POST           => true,
			        CURLOPT_CONNECTTIMEOUT => 3,
			        CURLOPT_TIMEOUT => 5,
			        CURLOPT_POSTFIELDS     => http_build_query($post_data) 
			);

			$ch = curl_init();

			curl_setopt_array( $ch, $options );

			try {
			  $raw_response  = curl_exec( $ch );
			  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		
			} catch(Exception $ex) {
			    if ($ch != null) curl_close($ch);
			    throw new Exception($ex);
			}

			if ($ch != null) curl_close($ch);

			$response = json_decode($raw_response);
			if(isset($response))
			{

				//get freq it text
				$freq = $response->devs[0]->freq;
				//explode with , array
				$temp = explode(',', $freq);

				//temp hashboard
				 $plus = 9;
				 for($z=0;$z<4;$z++)
				 {
				 	$temp_[$z] = $temp[$z+$plus];
				 }

				 //explode name and temp
				 for($j=0;$j<4;$j++)
				 {
				 	$temp_name[$j] = explode('=', $temp_[$j]);
				 }

				 //loop for check more hashboard temp than 79
				 for($i=0;$i<4;$i++)
				 {
				 	for($a=1;$a<5;$a++)
				 	{
					 		if($temp_name[$i][0] == 'temp2_'.$a)
					 		{
					 			if($temp_name[$i][1] > 60)
					 			{
					 				$temp_string .= $temp_[$i];
					 				$sendLine = 1;
					 			}
					 			break;
					 		}
				 	}
				 }

				$data[$loopArray] = array(
					'hostname'=>$response->pools[0]->user,
					'temp'=>$temp_string,
					'sendLine'=>$sendLine
					);
				$loopArray++;
				// print_r($data);
			}
			}
		}

		foreach($data as $value)
		{
			//sendLine if status = 1
			if($value->sendLine == 1)
			{
				echo $hostname."<br>".$temp;
			}
		}
	}
	public function changePool(Request $request)
	{
		$username = 'root';
		$password = 'root';
		$ip = $request->input('_ip');
		//status

		$loginUrl = 'http://'.$ip.'/cgi-bin/set_miner_conf.cgi';
		//reboot
		// $loginUrl = 'http://192.168.7.194/cgi-bin/reboot.cgi';
		 
		 // dd($loginUrl);


		error_reporting(E_ALL); 
		ini_set( 'display_errors','1');

		$url = $loginUrl;
		$post_data = array(
		        '_ant_pool1url' => $request->input('_ant_pool1url'),
		        '_ant_pool1user' => $request->input('_ant_pool1user'),
		        '_ant_pool1pw' => $request->input('_ant_pool1pw'),
		        '_ant_pool2url' => $request->input('_ant_pool2url'),
		        '_ant_pool2user' => $request->input('_ant_pool2user'),
		        '_ant_pool2pw' => $request->input('_ant_pool2pw'),
		        '_ant_pool3url' => $request->input('_ant_pool3url'),
		        '_ant_pool3user' => $request->input('_ant_pool3user'),
		        '_ant_pool3pw' => $request->input('_ant_pool3pw'),
		        '_ant_nobeeper' => $request->input('_ant_nobeeper'),
		        '_ant_notempoverctrl' => $request->input('_ant_notempoverctrl'),
		        '_ant_fan_customize_switch' => $request->input('_ant_fan_customize_switch'),
		        '_ant_fan_customize_value' => $request->input('_ant_fan_customize_value'),
		        '_ant_freq' => $request->input('_ant_freq'),
		        '384' => ''
		  );

		//ตัดตัวสุดท้ายออก เพราะส่งไปตามตัวแปร แต่มีปัญหางงเหมือนกัน เลยต้องทำแบบนี้

		$data_to = substr_replace(http_build_query($post_data),"",-1);
	
		$headers = array(
			'Content-Type:application/json'                            	                         
	    );
		$options = array(
		        CURLOPT_URL            => $url,
		        CURLOPT_HEADER         => false,    
		        CURLOPT_VERBOSE        => true,
		        CURLOPT_RETURNTRANSFER => true,
		        CURLOPT_FOLLOWLOCATION => true,
		        CURLOPT_SSL_VERIFYPEER => false,    // for https
		        CURLOPT_USERPWD        => $username . ":" . $password,
		        CURLOPT_HTTPAUTH       => CURLAUTH_DIGEST,
		        CURLOPT_POST           => true,
		        CURLOPT_POSTFIELDS     => $data_to,
		        CURLOPT_HTTPHEADER     => $headers 
		);


		$ch = curl_init();

		curl_setopt_array( $ch, $options );

		try {
		  $raw_response  = curl_exec( $ch );

		  // validate CURL status
		  if(curl_errno($ch))
		      throw new Exception(curl_error($ch), 500);

		  // validate HTTP status code (user/password credential issues)
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  if ($status_code != 200)
		      throw new Exception("Response with Status Code [" . $status_code . "].", 500);

		} catch(Exception $ex) {
		    if ($ch != null) curl_close($ch);
		    throw new Exception($ex);
		}

		if ($ch != null) curl_close($ch);
		// dd($raw_response);
		// echo $raw_response;
		$response = json_decode($raw_response);
		// echo $response->summary->ghs5s;
		echo json_encode('success');

	}
	public function changeNetwork(Request $request)
	{
		$username = 'root';
		$password = 'root';
		$ip = $request->input('ip_s');
		//status

		$loginUrl = 'http://'.$ip.'/cgi-bin/set_network_conf.cgi';


		error_reporting(E_ALL); 
		ini_set( 'display_errors','1');

		$url = $loginUrl;
		$post_data = array(
		        '_ant_conf_nettype' => $request->input('_ant_conf_nettype'),
		        '_ant_conf_hostname' => $request->input('_ant_conf_hostname'),
		        '_ant_conf_ipaddress' => $request->input('_ant_conf_ipaddress'),
		        '_ant_conf_netmask' => $request->input('_ant_conf_netmask'),
		        '_ant_conf_gateway' => $request->input('_ant_conf_gateway'),
		        '_ant_conf_dnsservers' => $request->input('_ant_conf_dnsservers')
		  );

		//ตัดตัวสุดท้ายออก เพราะส่งไปตามตัวแปร แต่มีปัญหางงเหมือนกัน เลยต้องทำแบบนี้

		// $data_to = substr_replace(http_build_query($post_data),"",-1);
	
		$headers = array(
			'Content-Type:application/json'                            	                         
	    );

	  // dd($data_to);
		$options = array(
		        CURLOPT_URL            => $url,
		        CURLOPT_HEADER         => false,    
		        CURLOPT_VERBOSE        => true,
		        CURLOPT_RETURNTRANSFER => true,
		        CURLOPT_FOLLOWLOCATION => true,
		        CURLOPT_SSL_VERIFYPEER => false,    // for https
		        CURLOPT_USERPWD        => $username . ":" . $password,
		        CURLOPT_HTTPAUTH       => CURLAUTH_DIGEST,
		        CURLOPT_POST           => true,
		        CURLOPT_POSTFIELDS     => http_build_query($post_data),
		        CURLOPT_HTTPHEADER     => $headers 
		);


		$ch = curl_init();

		curl_setopt_array( $ch, $options );

		try {
		  $raw_response  = curl_exec( $ch );

		  // validate CURL status
		  if(curl_errno($ch))
		      throw new Exception(curl_error($ch), 500);

		  // validate HTTP status code (user/password credential issues)
		  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  if ($status_code != 200)
		      throw new Exception("Response with Status Code [" . $status_code . "].", 500);

		} catch(Exception $ex) {
		    if ($ch != null) curl_close($ch);
		    throw new Exception($ex);
		}

		if ($ch != null) curl_close($ch);
		// dd($raw_response);
		// echo $raw_response;
		$response = json_decode($raw_response);
		// echo $response->summary->ghs5s;
		echo json_encode('success');

	}
}
