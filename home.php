<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BASIC BANKING SYSTEM</title>
	<?php require 'styles.php'; ?>
        <?php require 'scripts.php'; ?>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/roundstyle" type="text/css"/>
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/de-puntillas-e-tiptoes-squid" type="text/css"/>

</head>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/home1.jpg");
  height:100%;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
</style>
<body>
<div class="hero-image">
<marquee><h1 style="font-size:100px;font-family: 'RoundStyleBookOblique';font-weight: bolder;font-style: italic; color:white"> WELCOME</h1></marquee>
  <div class="hero-text">
    <h1 style="font-size:100px;font-family: 'RoundStyleBookOblique';font-weight: bolder;font-style: italic;">STAR BANK</h1>
    <p style="font-family: 'RoundStyleBookOblique';font-weight: bold;font-style: italic; color:white">GO PAPERLESS GO CASHLESS</p>
    <button onclick="document.location='index.php'">PROCEED</button>
  </div>
</div>
</body>
</html>