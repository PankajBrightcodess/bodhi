
<!DOCTYPE html>
<html lang="en">

<head>
     <meta name="theme-color" content="#23618a">

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/logo.png') ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- thumbnail-->
    <?php if($title == 'News Description'){ ?>
    <link rel="canonical" href="<?= base_url(); ?>website/detailnewsview/'.$val['slug; ?>/">
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Choicenext" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?= $val['tittle']; ?>" />
    <meta property="og:description" content="<?= $val['tittle']; ?>" />
    <meta property="og:url" content="<?= base_url(); ?>website/detailnewsview/'.$val['slug; ?>" />
    <meta property="og:image" content="<?= file_url($val['image']); ?>" />
    <meta property="og:image:secure_url" content="<?= file_url($val['image']); ?>" />
    <meta property="og:image:width" content="120" />
    <meta property="og:image:height" content="100" />
    <?php } ?>
<!-- end -->

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title style="margin-left: 30%;"><?php if(!empty($title)){ echo $title; }else{ echo 'Bodhiwire'; } ?></title>
    <!-- plugins -->
    <link href="<?php echo base_url('assets/website/css/vendors.css')?>" rel="stylesheet">
    <!--icons-->
    <link href="<?php echo base_url('assets/website/plugins/ionicons4/css/ionicons.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/website/plugins/construction-fonts/flaticon.css')?>" rel="stylesheet">
    <!--master slider-->
    <link rel="stylesheet" href="<?php echo base_url('assets/website/plugins/masterslider/style/masterslider.css')?>" />
       
    <link href="<?php echo base_url('assets/website/plugins/masterslider/skins/default/style.css')?>" rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/website/plugins/cubeportfolio/css/cubeportfolio.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/website/css/style.css')?>" rel="stylesheet">
    <link href="    https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.6.3/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/old-newspaper" rel="stylesheet">
    
    <link href="<?php echo base_url('assets/website/css/lightbox.css')?>" rel="stylesheet" />
    
       <!--  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
        
        <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->
      







        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  
          <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.6.3/css/ionicons.min.css" rel="stylesheet"> -->
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Abel&family=Arvo&family=Cinzel:wght@500&family=Heebo:wght@100;300;400;800&family=Holtwood+One+SC&family=M+PLUS+1p:wght@900&family=Readex+Pro:wght@500;600&display=swap" rel="stylesheet"> -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Arvo&family=Cinzel:wght@500&family=Heebo:wght@100;300;400;800&family=Holtwood+One+SC&family=M+PLUS+1p:wght@900&family=Readex+Pro:wght@500;600&display=swap" rel="stylesheet">
 <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Literata">

          <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
         <!--  <link href="https://fonts.googleapis.com/css2?family=Abel&family=Arvo&family=Cinzel:wght@500&family=Heebo:wght@100;300;400;800&family=M+PLUS+1p:wght@900&family=Readex+Pro:wght@500;600&display=swap" rel="stylesheet"> -->

          <!-- <link href="https://fonts.googleapis.com/css2?family=Abel&family=Arvo&family=Cinzel:wght@500&family=Heebo:wght@100;300;400;800&family=Readex+Pro:wght@500;600&display=swap" rel="stylesheet"> -->
          <!-- <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet"> -->

          <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Arvo&family=Cinzel:wght@500&family=Heebo:wght@100;300;400;800&family=Holtwood+One+SC&family=IM+Fell+English+SC&family=M+PLUS+1p:wght@900&family=Playfair+Display+SC&family=Readex+Pro:wght@500;600&display=swap" rel="stylesheet">


    





</style>
<style type="text/css">
/*a{
   text-decoration: none; 
}*/
    a.hover {
    color: red;
    text-decoration: underline;
}

a.hover:hover {
    text-decoration: none;
}
</style>
<style type="text/css">
            @font-face {
                font-family: "mybodhi";
                src: url("Attic Antique.ttf"); }
           
        </style>


</head>
   

