<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shorcut icon" href="<?php echo base_url().'template/images/logo.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'template/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'template/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'template/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'template/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'template/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'template/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'template/css/style.css'?>" rel="stylesheet">
</head>
<?php
  if ($this->uri->segment('1') == "") {
    $url11 = "Selamat Datang";
  }else if ($this->uri->segment('2') == "") {
      $url11 = ucfirst($this->uri->segment('1'));
  }else{
      $url11 = ucfirst($this->uri->segment('2'));
  }
  $url12 = str_replace("_"," ", $url11);
?>
<title><?php echo "BLUG | ".$url12; ?></title>