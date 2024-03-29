<?php
//Change below accesskey, secretkey to test 
if(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST']=='localhost'){
$accesskey = '5fd77d30-a37c-11ed-a776-adcf2ed2e9b6';
$secretkey = '9039857bdec14bc5b4fc6e383938611bf37e5e11';

//Changing environment to live requires remote_script also to be used for live and change accesskey,secretkey too
$environment = 'test';
}else{
    $accesskey = '40ac4390-a477-11ed-be76-8ff4f19947fb';
    $secretkey = '0eb47814d7252721777906092824a4d83bdedd01';

//Changing environment to live requires remote_script also to be used for live and change accesskey,secretkey too
$environment = 'live';
}

if(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST']=='localhost'){
$remote_script = "https://sandbox-payments.open.money/layer";
}else{
//for production
$remote_script = "https://payments.open.money/layer";
// for test
    // $remote_script = "https://sandbox-payments.open.money/layer";
}

//Hash functions requried in both request and response
function create_hash($data,$accesskey,$secretkey){
    ksort($data);
    $hash_string = $accesskey;
    foreach ($data as $key=>$value){
        $hash_string .= '|'.$value;
    }
    return hash_hmac("sha256",$hash_string,$secretkey);
}

function verify_hash($data,$rec_hash,$accesskey,$secretkey){
    $gen_hash = create_hash($data,$accesskey,$secretkey);
    if($gen_hash === $rec_hash){
        return true;
    }
    return false;
}