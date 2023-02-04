<?php
// session_start();
// ob_start();
/*
 * PHP Kit Name: Layer Payment - Open Payment Gateway
 * Plugin URI: https://open.money/
 * Description: Open's Layer Payment Gateway integration kit 
 * for PHP 5 and 7 compatible mode
 * Version: 1.0.2
 * Author: Openers
 * Author URI: https://open.money/
*/
require_once 'layer_api.php';
require_once 'common.php';


//main logic
$error = '';
$tranid=date("ymd").'-'.rand(1,100000);
$data['tranid']=$tranid;
$data['amount']=$amount;
$data['name']=$name;
$data['last']=$last;
$data['email']=$email;
$data['type']=$type;
$data['phone']=$phone;
$data['pan']=$pan;
$data['checkvalue']=$checkvalue;
$res=$this->db->insert('donation',$data);
// echo $this->db->last_query();die;
// echo $amount;die;
//Sample data
$sample_data = [
    'amount' => $amount,
    'currency' => 'INR',
    'name'  => $name." ".$last,
    'full_name'=>$name,
    'email_id' => $email,
    'contact_number' => $phone,
    'mtx' => ''
];

$sample_data['mtx']=$tranid; //unique transaction id to be passed for each transaction 
$layer_api = new LayerApi($environment,$accesskey,$secretkey);
$layer_payment_token_data = $layer_api->create_payment_token($sample_data);
   
if(empty($error) && isset($layer_payment_token_data['error'])){
	$error = 'E55 Payment error. ' . ucfirst($layer_payment_token_data['error']);  
	if(isset($layer_payment_token_data['error_data']))
	{
		foreach($layer_payment_token_data['error_data'] as $d)
			$error .= " ".ucfirst($d[0]);
	}
}

if(empty($error) && (!isset($layer_payment_token_data["id"]) || empty($layer_payment_token_data["id"]))){				
    $error = 'Payment error. ' . 'Layer token ID cannot be empty.';        
}   

if(!empty($layer_payment_token_data["id"]))
    $payment_token_data = $layer_api->get_payment_token($layer_payment_token_data["id"]);
    
if(empty($error) && !empty($payment_token_data)){
    if(isset($layer_payment_token_data['error'])){
        $error = 'E56 Payment error. ' . $payment_token_data['error'];            
    }

    if(empty($error) && $payment_token_data['status'] == "paid"){
        $error = "Layer: this order has already been paid.";            
    }

    if(empty($error) && $payment_token_data['amount'] != $sample_data['amount']){
        $error = "Layer: an amount mismatch occurred.";
    }

    $jsdata['payment_token_id'] = html_entity_decode((string) $payment_token_data['id'],ENT_QUOTES,'UTF-8');
    $jsdata['accesskey']  = html_entity_decode((string) $accesskey,ENT_QUOTES,'UTF-8');
        
	$hash = create_hash(array(
        'layer_pay_token_id'    => $payment_token_data['id'],
        'layer_order_amount'    => $payment_token_data['amount'],
        'tranid'    => $tranid,
    ),$accesskey,$secretkey);
        
    $html =  "<form action='".base_url('website/response')."'". "method='post' style='display: none' name='layer_payment_int_form'>
		<input type='hidden' name='layer_pay_token_id' value='".$payment_token_data['id']."'>
        <input type='hidden' name='tranid' value='".$tranid."'>
        <input type='hidden' name='layer_order_amount' value='".$payment_token_data['amount']."'>
        <input type='hidden' id='layer_payment_id' name='layer_payment_id' value='".$payment_token_data['id']."'> 
        <input type='hidden' id='fallback_url' name='fallback_url' value=''>
        <input type='hidden' name='hash' value='".$hash."'>
        <input type='hidden' name='full_name' value='".$sample_data['full_name']."'>
        <input type='hidden' name='email' value='".$sample_data['email_id']."'>
        </form>";
    $html .= "<script>";
    $html .= "var layer_params = " . json_encode( $jsdata ) . ';'; 
    
    $html .="</script>";
    // $html .= '<script src="./layer_checkout.js"></script>';
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Make Payment</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700|Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <!--  Custom css -->
    <link rel="stylesheet" href="css/style.css">
      <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>   

<script src="<?php echo $remote_script; ?>"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >

</head>
<style type="text/css">
	.main {
		margin-left:30px;
		font-family:Verdana, Geneva, sans-serif, serif;
	}
	.text {
		float:left;
		width:180px;
	}
	.dv {
		margin-bottom:5px;
        margin-top:5px;
	}
	.logo {
		margin-bottom:20px;
        margin-top:5px;
	}
</style>
<body>

	<body style="background: #23618a;">
<section class="payment-page">  
    <div class="container">
    <div class="row" style='background-color:#23618a;'>
        <div class="col-md-1"></div>
        <div class="col-md-10 p-3">   
            <h3 style="color:#fff;">Make Payment</h3><hr/>   
            <div class="row">
                <div class="col-md-12 card p-3">
                    <div class="row">
                        <div class="col-6 col-md-6">
                        	<div class="main">
	<div class="logo">
		<img src="<?= base_url('assets/website/logo.png'); ?>" height="20" alt="Payment Logo" />
		 <h3><?php echo ucwords($sample_data['name']);?></h3>
	</div>
	
	
</div>
                           
                            <!-- <p class='mb-0' style='font-size:14px'>+91-<?php echo $allrecord['phone'];?></p> -->
                        </div>
                        
                    </div><hr/>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <u><h5>Request Details</h5></u>
                                <div class="form-row">
                                    <label for="" class="col-6 col-md-6">Request No :</label>
                                    <p class='col-6 col-md-6'><?php echo $tranid;?></p>
                                </div>
                                <div class="form-row">
                                    <label for="" class="col-6 col-md-6"> Total Amount:</label>
                                    <p class='col-6 col-md-6 text-danger' style='font-size:20px;font-weight:600'>Rs.<?php echo $sample_data['amount'];?></p>
                                    <!-- <?php echo PRE; print_r($allrecord);?> -->
                                </div>                       
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div id="layerloader">
		
		<?php 
			if(!empty($error)) echo $error;
			if (isset($html)) { ?>
			<div class="dv text-center">
				<input id="submit" name="submit" value="Pay Now" type="button" class="btn btn-md btn-success"  onclick="triggerLayer();">
			</div>
		<?php echo $html;}?>
	</div>
                </div>
            </div>                 
        </div>
        <div class="col-md-1"></div>
    </div>
    
    </div>
</section>

<script type="text/javascript">
	function triggerLayer() {

    Layer.checkout(
        {
            token: layer_params.payment_token_id,
            accesskey: layer_params.accesskey
        },
        function (response) {
            console.log(response)
            if(response !== null || response.length > 0 ){

                if(response.payment_id !== undefined){

                    document.getElementById('layer_payment_id').value = response.payment_id;

                }

            }

            document.layer_payment_int_form.submit();
        },
        function (err) {
            alert(err.message);
        }
    );
}
/* triggerLayer() will be activated by Pay button
var checkExist = setInterval(function() {
	if (typeof Layer !== 'undefined') {
		console.log('Layer Loaded...');
		clearInterval(checkExist);
		triggerLayer();
	}
	else {
		console.log('Layer undefined...');
	}
}, 1000);
*/

</script>
</body>
</html>
