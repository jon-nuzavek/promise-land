<?php
if($_POST['formSubmit'] == "Submit")
{
	
	$varEmail = $_POST['EMAIL'];
  $varFirst= $_POST['FNAME'];
  $varLast= $_POST['LNAME'];
  

		$fs = fopen("data.txt","a");
		fwrite($fs,$varEmail . ", " . $varFirst . ", " . $varLast . "\n");
		fclose($fs);
		
		header("Location: tease.html#intro");
		exit;
}
?>
