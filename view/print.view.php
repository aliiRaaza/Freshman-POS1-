<?php 

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

 		$WshShell = new COM("WScript.Shell");
 		///$obj = $WshShell->Run("cmd /c wscript.exe www/public/file.vbs",0, true); 
 		$obj = $WshShell->Run("cmd /c wscript.exe ".ABSPATH."/file.vbs",0, true); 
 		
 		$WshShell = new COM("WScript.Shell");
 		///$obj = $WshShell->Run("cmd /c wscript.exe www/public/file.vbs",0, true); 
 		$obj = $WshShell->Run("cmd /c wscript.exe ".ABSPATH."/file.vbs",0, true); 
  
 	 
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=esc(APP_NAME)?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
	<?php 

		$vars = $_GET['vars'] ?? "";

		$obj = json_decode($vars,true);

	?>
<?php if(is_array($obj)):?>

	<center>
		<h1><?=$obj['company']?></h1>
		<h4>Receipt</h4>
		<div><i><?=date("jS F, Y H:i a")?></i></div>
	</center>

	<table class="table table-striped">
		<tr>
			<th>Qty</th><th>Description</th><th>@</th><th>Amount</th>
		</tr>

		<?php foreach ($obj['data'] as $row):?>
			<tr>
				<td><?=$row['qty']?></td><td><?=$row['description']?></td><td>$<?=$row['amount']?></td><td>$<?=number_format($row['qty'] * $row['amount'],2)?></td>
			</tr>
		<?php endforeach;?>

		<tr>
			<td colspan="2"></td><td><b>Total:</b></td><td><b><?=$obj['gtotal']?></b></td>
		</tr>
		<tr>
			<td colspan="2"></td><td>Amount paid:</td><td><?=$obj['amount']?></td>
		</tr>
		<tr>
			<td colspan="2"></td><td>Change:</td><td><?=$obj['change']?></td>
		</tr>
		
		
	</table>

	<center><p><i>Thanks for shopping with us!</i></p></center>
<?php endif;?>

<script>
	
	window.print();

	var ajax = new XMLHttpRequest();

	ajax.addEventListener('readystatechange',function(){

		if(ajax.readyState == 4)
		{
			//console.log(ajax.responseText);
		}
	});

	ajax.open('POST','',true);
	//ajax.send();

</script>
</body>
</html>