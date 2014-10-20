<?php
header("Content-type: text/xml");
if ($_POST["category"] == "home")
  echo 'Welcome to the XYZ website!';
if ($_POST["category"] == "products")
  echo 'Products Page';
if ($_POST["category"] == "downloads")
  echo 'Downloads Page';
if ($_POST["category"] == "forums")
  echo 'Forums Page';
if ($_POST["category"] == "about")
  echo 'About Page';
?>
