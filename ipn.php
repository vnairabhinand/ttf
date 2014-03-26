<?php
include("include/config.php");
saveIpn();
    
    function saveIpn(){
	
		$verify_ipn =  verify_ipn($_POST);
                if($verify_ipn == "valid")
                {
                   $ipn_data = check_charset($_POST);
                        if(isset($_POST['txn_type'])){
                            $data = init_ipn($ipn_data);
							$r = serialize($data);
							mail("abhinand.riseteam@gmail.com","save Ipn",$r);
                            insertIPN($data);
                            updateUser($data);
                        }
                   
                }
                
                
			
		
			
    }
    
    function verify_ipn($post_data)
    {
                 
                 $environment = PAYPAL_ENVIRONMENT;
                 
                 if(array_key_exists('test_ipn', $post_data) && 1 === (int) $post_data['test_ipn'])
                 {
                     if("sandbox" === $environment || "beta-sandbox" === $environment) {
                       $url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
                      }
                      else{
                      $url = 'https://www.paypal.com/cgi-bin/webscr';    
                      }
                 }
                 // Set up request to PayPal
                $request = curl_init();
                curl_setopt_array($request, array
                (
                    CURLOPT_URL => $url,
                    CURLOPT_POST => TRUE,
                    CURLOPT_POSTFIELDS => http_build_query(array('cmd' => '_notify-validate') + $post_data),
                    CURLOPT_RETURNTRANSFER => TRUE,
                    CURLOPT_HEADER => FALSE
                    
                ));

                // Execute request and get response and status code
                $response = curl_exec($request);
                $status   = curl_getinfo($request, CURLINFO_HTTP_CODE);

                // Close connection
                curl_close($request);

                if($status == 200 && $response == 'VERIFIED')
                {
                    return "valid";
                }
                else
                {
                    return "invalid";
                }
          
         
    }
    
    
    function check_charset($ipn_data)
    {
        if(array_key_exists('charset', $ipn_data) && ($charset = $ipn_data['charset']))
        {
            // Ignore if same as our default
        if($charset == 'utf-8')
        {
        return $ipn_data;
        }
            // Otherwise convert all the values
            foreach($ipn_data as $key => &$value)
            {
                $value = mb_convert_encoding($value, 'utf-8', $charset);
            }

            // And store the charset values for future reference
            $ipn_data['charset'] = 'utf-8';
            $ipn_data['charset_original'] = $charset;
            
            return $ipn_data;
       }
    }
    
    
    function init_ipn($res){
    	$insert_data ="";
    	
    	$data['data'] = serialize($res);
    	if(isset($res['payment_gross'])){
    		$data['payment_gross'] = $res['payment_gross'];
    	}
		
		if(isset($res['option_selection1'])){
    		$data['option_selection1'] = $res['option_selection1'];
    	}
		
		if(isset($res['subscr_id'])){
    		$data['subscriber_id'] = $res['subscr_id'];
    	}
    	
    	if(isset($res['recurring_payment_id'])){
    		$data['subscriber_id'] = $res['recurring_payment_id'];
    	}
    	
    	
    	if(isset($res['payer_id'])){
    		$data['payer_id'] = $res['payer_id'];
    	}
    	
    	if(isset($res['payment_status'])){
    		$data['payment_status'] = $res['payment_status'];
    	}
    	
    	if(isset($res['txn_id'])){
    		$data['txn_id'] = $res['txn_id'];
    	}
    	
    	if(isset($res['receiver_id'])){
    		$data['receiver_id'] = $res['receiver_id'];
    	}
    	
    	if(isset($res['verify_sign'])){
    		$data['verify_sign'] = $res['verify_sign'];
    	}
    	
    	if(isset($res['subscr_date'])){
    		$data['subscr_date'] = date('Y-m-d',strtotime($res['subscr_date']));
    	}
    	
    	if(isset($res['time_created'])){
    		$data['time_created'] = date('Y-m-d',strtotime($res['time_created']));
    	}
    	
    	if(isset($res['next_payment_date'])){
    		$data['next_payment_date'] = date('Y-m-d',strtotime($res['next_payment_date']));
    	}
    	
    	if(isset($res['txn_type'])){
    		$data['txn_type'] = $res['txn_type'];
    	}
    	
    	if(isset($res['ipn_track_id'])){
    		$data['ipn_track_id'] = $res['ipn_track_id'];
    	}
    	
    	if(isset($res['payment_date'])){
    		$data['payment_date'] = date('Y-m-d',strtotime($res['payment_date']));
    	}
    	
    	if(isset($res['payer_status'])){
    		$data['payer_status'] = $res['payer_status'];
    	}
    	
    	return $data;
    }
    
	
	function insertIPN($data)
	{
	    
	    $r = serialize($data);
		mail("abhinand.riseteam@gmail.com","insert Ipn",$r);
		
		$subscriber_id = $data['subscriber_id'];
		$payer_id = $data['payer_id'];
		$payment_date = $data['payment_date'];
		$payment_status = $data['payment_status'];
		$payer_status = $data['payer_status'];
		$txn_id = $data['txn_id'];
		$txn_type = $data['txn_type'];
		$subscr_date = $data['subscr_date'];
		$time_created = $data['time_created'];
		$next_payment_date = $data['next_payment_date'];
		$ipn_track_id = $data['ipn_track_id'];
		$receiver_id = $data['receiver_id'];
		$verify_sign = $data['verify_sign'];
		$data    = $data['data'];
		$payment_gross = $data['payment_gross'];
		
		$insert = "INSERT INTO `handa123_ETF`.`ipn_history` (
		`id`, 
		`subscriber_id`, 
		`payer_id`, 
		`payment_date`, 
		`payment_status`, 
		`payer_status`, 
		`txn_id`, 
		`txn_type`, 
		`subscr_date`, 
		`time_created`, 
		`next_payment_date`, 
		`ipn_track_id`, 
		`receiver_id`, 
		`verify_sign`, 
		`data`, 
		`created_at`
		) VALUES (
		NULL, 
		'$subscriber_id', 
		'$payer_id', 
		'$payment_date', 
		'$payment_status', 
		'$payer_status', 
		'$txn_id', 
		'$txn_type', 
		'$subscr_date', 
		'$time_created', 
		'$next_payment_date', 
		'$ipn_track_id', 
		'$receiver_id', 
		'$verify_sign', 
		'$data', 
		CURRENT_TIMESTAMP
		)";
		
	mail("abhinand.riseteam@gmail.com","insert query",$insert);	
	$rs = mysql_query($insert);
	
	}
	
    
    function updateUser($data){
    	
		$payer_id = $data['payer_id'];
		$payment_date = $data['payment_date'];
		$payment_status = $data['payer_status'];
		$payer_status = $data['payer_status'];
		$txn_type = $data['txn_type'];
		$subscr_date = $data['subscr_date'];
		$time_created = $data['time_created'];
		$next_payment_date = $data['next_payment_date'];
		$ipn_track_id = $data['ipn_track_id'];
		$receiver_id = $data['receiver_id'];
		$verify_sign = $data['verify_sign'];
		$txn_id = $data['txn_id'];
		$subscriber_id = $data['subscriber_id'];
		$payment_gross = $data['payment_gross'];
		if($data['option_selection1'] == "Monthly Premium")
		{
		$plan =1; //monthly
		}
		else{
		$plan =2; //yearly
		}
		   
           if(($data['txn_type'] == 'recurring_payment' || ( $data['txn_type']=="subscr_payment") )&& $data['payment_status'] == 'Completed'){
    		
                //update payment profiles page
				
				$select = "SELECT * FROM payment_history WHERE txn_id = '$txn_id' AND subscribr_id = '$subscriber_id'";
				$rs = mysql_query($select);
				$num_rows = mysql_num_rows($rs);
				
				if($num_rows > 0)
				{  
				    //update payment history
				    $update = "UPDATE payment_history SET payment_date = '$payment_date', from_date = '$payment_date', to_date = '$next_payment_date', p_status = '1' WHERE txn_id = '$txn_id' AND subscribr_id = '$subscriber_id' ";
					$u = mysql_query($update);
					
					$update_profile = "UPDATE payment_profiles SET payment_date = '$payment_date', from_date = '$payment_date', to_date = '$next_payment_date', payment_status = 'C' WHERE subscriber_id ='$subscriber_id'";
					$u_profile = mysql_query($update_profile);
				}
				else{
				
				
				    $select ="SELECT * FROM payment_profiles WHERE subscriber_id = '$subscriber_id'";
					$rs = mysql_query($select);
					$rows = mysql_fetch_array($rs);
					$donor_id = $rows['donor_id'];
					//insert into payment history
					$insert = "INSERT INTO `handa123_ETF`.`payment_history` (
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
					'', 
					'$donor_id', 
					'$payment_date', 
					'$plan', 
					'$payment_date', 
					'$next_payment_date', 
					'$payment_gross', 
					'1', 
					'$txn_id', 
					'$subscriber_id')";
					
					$ins = mysql_query($insert);
					
					$update_profile = "UPDATE payment_profiles SET payment_date = '$payment_date', from_date = '$payment_date', to_date = '$next_payment_date', payment_status = 'C', txn_id = '$txn_id' WHERE subscriber_id ='$subscriber_id'";
					$u_profile = mysql_query($update_profile);
				
				}
				
				
                
    	} else if($data['txn_type'] == 'recurring_payment' && $data['payment_status'] == 'Failed'){
                
                //update payment status as failed 
    		    $update_profile = "UPDATE payment_profiles SET payment_date = '$payment_date', from_date = '$payment_date', to_date = '$next_payment_date', payment_status = 'F', txn_id = '$txn_id' WHERE subscriber_id ='$subscriber_id'";
			    $u_profile = mysql_query($update_profile); 
        }
        
    }
    
   
	
   
	
?>