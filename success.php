<?php
$color = "";
$text = "";
$title = "";
if ($_POST["payment_status"] == "rejected" || $_POST["payment_status"] == "failure"){
	$color = "#FF0000";
	$title = "Rechazado";
	$text = "Tu método de pago ha sido rechazado";
}
else if($_POST["payment_status"] == "approved"){
	$color = "#00FF00";
	$title = "Aprobado";
	$text = "Tu pago ha sido aprobado";	
}
else if($_POST["payment_status"] == "pending"){
	$color = "#FF4500";
	$title = "Pendiente";
	$text = "Tu compra se encuentra pendiente de pago";
}
else
{
	echo "Error no identificado";
	exit;
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Dialog - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dialog" ).dialog();
  } );
  </script>
</head>
<body>
 
<div id="dialog" title="<?php echo $title; ?>" style="background-color: <?php echo $color; ?>;">
  <p><?php echo $text; ?></p>
</div>
 
 
</body>
</html>