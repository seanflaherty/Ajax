<?php
header("Content-type: text/xml");
if ($_GET["category"] == "home")
  echo 'Welcome to the XYZ website!';
if ($_GET["category"] == "products")
  echo 'Products Page';
if ($_GET["category"] == "downloads")
  echo 'Downloads Page';
if ($_GET["category"] == "forums")
  echo 'Forums Page';
if ($_GET["category"] == "about")
  echo 'About Page';
?>
