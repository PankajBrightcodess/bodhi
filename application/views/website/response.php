<?php
// session_start();
// ob_start();

require_once 'layer_api.php';
require_once 'common.php';

$error = "";
$status = "";

if(!isset($_POST['layer_payment_id']) || empty($_POST['layer_payment_id'])){
	$error = "Invalid response.";    
}
try {
    $data = array(
        'layer_pay_token_id'    => $_POST['layer_pay_token_id'],
        'layer_order_amount'    => $_POST['layer_order_amount'],
        'tranid'     			=> $_POST['tranid'],
    );
    echo $accesskey."....";
    echo $secretkey."----";
    echo $_POST['hash'];echo PRE;
    echo $error;
    print_r($data);die;
    if(empty($error) && verify_hash($data,$_POST['hash'],$accesskey,$secretkey) && !empty($data['tranid'])){
        $layer_api = new LayerApi($environment,$accesskey,$secretkey);
        $payment_data = $layer_api->get_payment_details($_POST['layer_payment_id']);
        $data1['amount']=$amount;
        $data1['tranid']=$tranid;
        $data1['pay_token_id']=$pay_token_id; 
        $data1['payment_id']=$payment_id;
        $data1['full_name']=$full_name;
        // $data1['email']=$email;
        // $data1['currency']=$payment_data['currency'];
        $data1['vpa']=$payment_data['vpa'];
        $data1['payment_status']=$payment_data['status'];
        // $data1['error_desc']=$payment_data['error_description'];
        $data1['phone']=$payment_data['customer']['contact_number'];
        $res=$this->db->insert('payment',$data1);
        echo $this->db->last_query();die;
        if(isset($payment_data['error'])){
            $error = "Layer: an error occurred E14".$payment_data['error'];
        }

        if(empty($error) && isset($payment_data['id']) && !empty($payment_data)){
            if($payment_data['payment_token']['id'] != $data['layer_pay_token_id']){
                $error = "Layer: received layer_pay_token_id and collected layer_pay_token_id doesnt match";
            }
            elseif($data['layer_order_amount'] != $payment_data['amount']){
                $error = "Layer: received amount and collected amount doesnt match";
            }
            else {
                switch ($payment_data['status']){
                    case 'authorized':
                    case 'captured':
                        $status = "Payment captured: Payment ID ". $payment_data['id'];
                        break;
                    case 'failed':								    
                    case 'cancelled':
                        $status = "Payment cancelled/failed: Payment ID ". $payment_data['id'];                        
                        break;
                    default:
                        $status = "Payment pending: Payment ID ". $payment_data['id'];
                        exit;
                    break;
                }
            }
        } else {
            $error = "invalid payment data received E98";
        }
    } else {
        $error = "hash validation failed";
    }

} catch (Throwable $exception){

   $error =  "Layer: an error occurred " . $exception->getMessage();
    
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Payment Success</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700|Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <!--  Custom css -->
    <link rel="stylesheet" href="css/style.css">
      <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
    <body style="background: #dff5df;">
    <section class="payment-success">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="payment-success-box">
              <img src="https://img.icons8.com/ios-filled/50/000000/cloud-checked.png"/>
              <div id="alertinfo" class="dv">
    <?php 
        if(!empty($error)){
            echo "<h3>".$error."</h3>";
        }
        else{
            // echo $status;    
            echo "<h3>".$status."</h3>";  
        } 
        if($payment_data['status']=='captured'){
        ?>
            <p style="color:green;">Your Payment has been Successfully Recieved !!!</p>

            <?php
        }
    ?>
    </div>
              <!-- <h3>Payment Successfull !!!</h3> -->
              <!-- <p style="color:green;">Your Payment has been Successfully Recieved !!!</p> -->
              <a href="<?php echo base_url('')?>" class="btn btn-success mt-2">Done</a>
            </div>
          </div>
        </div>
      </div>
    </section>

</body>
</html>