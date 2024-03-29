<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Make Payment</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700|Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <!--  Custom css -->
    <link rel="stylesheet" href="css/style.css">
      <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- carousel -->
    <!-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
     <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> -->
  </head>
  <body style="background: #569EEA;">
<section class="payment-page">  
    <div class="container">
    <div class="row" style='background-color:#569EEA;'>
        <div class="col-md-1"></div>
        <div class="col-md-10 p-3">   
            <h3 style="color:#fff;">Make Payment</h3><hr/>   
            <div class="row">
                <div class="col-md-12 card p-3">
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <h3><?php echo ucwords($allrecord['name']);?></h3>
                            <!-- <p class='mb-0' style='font-size:14px'>+91-<?php echo $allrecord['phone'];?></p> -->
                        </div>
                        
                    </div><hr/>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <u><h5>Request Details</h5></u>
                                <div class="form-row">
                                    <label for="" class="col-6 col-md-6">Request No :</label>
                                    <p class='col-6 col-md-6'><?php echo $allrecord['orderno'];?></p>
                                </div>
                                <div class="form-row">
                                    <label for="" class="col-6 col-md-6"> Total Amount:</label>
                                    <p class='col-6 col-md-6 text-danger' style='font-size:20px;font-weight:600'>Rs.<?php echo $allrecord['amount'];?></p>
                                    <!-- <?php echo PRE; print_r($allrecord);?> -->
                                </div>
                                <div class="form-row p-2">
                                    <div class="col-1 col-md-2"></div>
                                    <div class="col-10 col-md-8 text-center">
                                        <form action='<?php echo base_url('website/payment_success')?>' id="razorpay-form" method="post">
                                        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
                                        <input type="hidden" name="merchant_order_id" id="merchant_order_id" value="<?php echo $allrecord['merchant_order_id']; ?>"/>
                                        <input type="hidden" name="merchant_trans_id" id="merchant_trans_id" value="<?php echo $allrecord['merchant_trans_id']; ?>"/>
                                        <input type="hidden" name="merchant_product_info_id" id="merchant_product_info_id" value="<?php echo  $allrecord['productinfo']; ?>"/>
                                        <!-- <input type="hidden" name="merchant_surl_id" id="merchant_surl_id" value="<?php echo $surl; ?>"/> -->
                                       <!--  <input type="hidden" name="merchant_furl_id" id="merchant_furl_id" value="<?php echo $furl; ?>"/> -->
                                        <input type="hidden" name="card_holder_name_id" id="card_holder_name_id" value="<?php echo $allrecord['card_holder_name'];?>"/>
                                        <input type="hidden" name="merchant_total" id="merchant_total" value="<?php echo $allrecord['total']; ?>"/>
                                        <input type="hidden" name="merchant_amount" id="merchant_amount" value="<?php echo   $allrecord['amount']; ?>"/>
                                       <!--  <input type="hidden" name="order_id" id="order_id" value="<?php echo $merchant_order_id; ?>"> -->
                                        <input  id="submit-pay" type="button" onclick="razorpaySubmit(this);" value="PAY NOW" class="btn btn-sm btn-success" />
                                        </form>
                                    </div>
                                    <div class="col-1 col-md-2"></div>
                             </div>                            
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    
                </div>
            </div>                 
        </div>
        <div class="col-md-1"></div>
    </div>
    
    </div>
</section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>   
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<?php
function random_number($l){
	$num=range(0,9);
	   shuffle($num);
	   $res="";
	   for ($i=0; $i<$l; $i++) {      
		  $res.=$num[$i];    
	   }    
	   return ($res);
	}
	function random_string1(){
        $length = 20;
		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randstring = '';
		for ($i = 0; $i < $length; $i++) {
			$randstring .= $characters[rand(0, strlen($characters)-1)];
		}
		return $randstring;
	}


?>
     <script>
        debugger;
    var razorpay_options = {
        key: "<?php echo $allrecord['key_id']; ?>",
        amount: "<?php echo $allrecord['total']; ?>",
        name: "<?php echo $allrecord['name']; ?>",
        description: "Order # <?php echo $allrecord['merchant_order_id']; ?>",
        netbanking: true,
        currency: "<?php echo $allrecord['currency_code']; ?>",
        prefill: {
        name:"<?php echo $allrecord['card_holder_name']; ?>",
        contact: "<?php echo $allrecord['phone']; ?>"
        },
        notes: {
        soolegal_order_id: "<?php echo $allrecord['merchant_order_id'];?>",
        },
        handler: function (transaction) {
            document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
            document.getElementById('razorpay-form').submit();
        },
        "modal": {
            "ondismiss": function(){
                location.reload()
            }
        }
    };
    var razorpay_submit_btn, razorpay_instance;

    function razorpaySubmit(el){
        if(typeof Razorpay == 'undefined'){
        setTimeout(razorpaySubmit, 200);
        if(!razorpay_submit_btn && el){
            razorpay_submit_btn = el;
            el.disabled = true;
            el.value = 'Please wait...';  
        }
        } else {
        if(!razorpay_instance){
            razorpay_instance = new Razorpay(razorpay_options);
            if(razorpay_submit_btn){
            razorpay_submit_btn.disabled = false;
            razorpay_submit_btn.value = "Pay Now";
            }
        }
        razorpay_instance.open();
        }
    }  

    </script>
  </body>
</html>