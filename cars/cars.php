<?php

$make = $_GET['make'];
switch ($make)
{
   case "Chevy":
      echo "populatemodels('Impala', 'Malibu','Volt')";
      break;
   case "Ford":
      echo "populatemodels('Focus','Fusion','Taurus')";
      break;
   case "Chrysler":
      echo "populatemodels('300','Challenger', 'Charger')";
      break;
   case "Buick":
      echo "populatemodels('Enclave','Lacrosse','Regal')";
}
?>
