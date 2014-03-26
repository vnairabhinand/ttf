<?php
ob_start();
include("include/config.php");
//echo "<pre>";
//print_r($_GET);

if(isset($_GET['tx']))
{
  $tx = $_GET['tx'];
  $donor_id = $_GET['did'];
  // Further processing
  // Init cURL
	$request = curl_init();

	// Set request options
	curl_setopt_array($request, array
	(
	CURLOPT_URL => PAYPAL_URL,
	CURLOPT_POST => TRUE,
	CURLOPT_POSTFIELDS => http_build_query(array
    (
      'cmd' => '_notify-synch',
      'tx' => $tx,
      'at' => PDT_TOKEN,
    )),
	CURLOPT_RETURNTRANSFER => TRUE,
	CURLOPT_HEADER => FALSE
	// CURLOPT_SSL_VERIFYPEER => TRUE,
	// CURLOPT_CAINFO => 'cacert.pem',
	));

	// Execute request and get response and status code
	$response = curl_exec($request);
	$status   = curl_getinfo($request, CURLINFO_HTTP_CODE);

	// Close connection
	curl_close($request);
  
   if($status == 200 AND strpos($response, 'SUCCESS') === 0)
  {
		// Remove SUCCESS part (7 characters long)
		$response = substr($response, 7);

		// URL decode
		$response = urldecode($response);

		// Turn into associative array
		preg_match_all('/^([^=\s]++)=(.*+)/m', $response, $m, PREG_PATTERN_ORDER);
		$response = array_combine($m[1], $m[2]);

		// Fix character encoding if different from UTF-8 (in my case)
		if(isset($response['charset']) AND strtoupper($response['charset']) !== 'UTF-8')
		{
		  foreach($response as $key => &$value)
		  {
			$value = mb_convert_encoding($value, 'UTF-8', $response['charset']);
		  }
		  $response['charset_original'] = $response['charset'];
		  $response['charset'] = 'UTF-8';
		}

		// Sort on keys for readability (handy when debugging)
		ksort($response);
		
		//echo "<pre>";
		//print_r($response);
		
		//save to payment profiles
		$select = "SELECT * FROM payment_profiles WHERE donor_id ='$donor_id'";	
		$rs = mysql_query($select);
		$numrows = mysql_num_rows($rs);
		if($numrows ==0)
		{
			$current_date = date("Y-m-d");
			if($response['option_selection1'] == "Monthly Premium")
			{
			$plan = 1; //monthly subscription
			}
			else{
			$plan = 2; //yearly subscription
			}
			$subscriber_id = $response['subscr_id'];
			$txn_id = $response['txn_id'];
			$payer_id = $response['payer_id'];
			$mc_gross = $response['mc_gross'];
			$payment_gross = $response['payment_gross'];
			$payer_email = $response['payer_email'];
			$txn_type = $response['txn_type'];
			
			
			//saving into the paymnt profils table
			$insert = "INSERT INTO `handa123_ETF`.`payment_profiles` (
			`id`, 
			`donor_id`, 
			`payment_date`, 
			`plan`, 
			`from_date`, 
			`to_date`, 
			`payment_status`, 
			`subscriber_id`, 
			`mc_gross`, 
			`txn_id`, 
			`payer_id`, 
			`total_amount`, 
			`payer_email`, 
			`txn_type`) VALUES (
			NULL, 
			'$donor_id', 
			'$current_date',
			'$plan', 
			'', 
			'', 
			'', 
			'$subscriber_id', 
			'$mc_gross', 
			'$txn_id', 
			'$payer_id', 
			'$payment_gross', 
			'$payer_email', 
			'$txn_type')";
			$i = mysql_query($insert);
			$invoice_id = mysql_insert_id();
			
			//saving the billing address
			
			$city = $response['address_city'];
			$country = $response['address_country'];
			$country_code = $response['address_country_code'];
			$addr_name = $response['address_name'];
			$state = $response['address_state'];
			$street = $response['address_street'];
			$zip = $response['address_zip'];
			$first_name = $response['first_name'];
			$last_name = $response['last_name'];
			$item_name = $response['item_name'];
			$mc_currency = $response['mc_currency'];
			
			$b_insert = "INSERT INTO `handa123_ETF`.`billing_address` (
			`bill_id`, 
			`invoice_id`, 
			`donor_id`, 
			`city`, 
			`country`, 
			`country_code`, 
			`addr_name`, 
			`state`, 
			`street`, 
			`zip`, 
			`first_name`, 
			`last_name`, 
			`item_name`, 
			`currency`, 
			`subscriber_id`
			) VALUES (
			NULL, 
			'$invoice_id', 
			'$donor_id', 
			'$city', 
			'$country', 
			'$country_code', 
			'$addr_name', 
			'$state', 
			'$street', 
			'$zip', 
			'$first_name', 
			'$last_name', 
			'$item_name', 
			'$mc_currency', 
			'$subscriber_id')";
													  
													//echo $b_insert;	
					$bi = mysql_query($b_insert);	
				
				//die("fsadfdsa");


			//saving to payment history table
			$ph = "INSERT INTO `handa123_ETF`.`payment_history` (
			`p_id`, 
			`invoice_id`, 
			`donor_id`, 
			`payment_date`, 
			`plan`, 
			`from_date`, 
			`to_date`, 
			`amount`, 
			`p_status`, 
			`txn_id`, 
			`subscribr_id`
			) VALUES (
			NULL, 
			'$invoice_id', 
			'$donor_id', 
			'$current_date', 
			'$plan', 
			'', 
			'', 
			'$payment_gross', 
			'', 
			'$txn_id', 
			'$subscriber_id')";
												
			$ph_i = mysql_query($ph);
			
			header("Location:donor_success_register.php?f=set");
			exit;
			
			
		
		}
		
		
	
	 
  }
  else
 {
    // Log the error, ignore it, whatever 
 }
  
  
  
  
  
  
  
}

?>