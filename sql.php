<?php
$host = 'localhost';
$user = 'user';
$password = 'pass';
$database = 'ekomi';

connectMysql($host,$user,$password,$database);

// Uncomment to fill database
//fillDatabase();

echo showTable(); 

function showTable()
 {
	$result = MYSQL_QUERY("SELECT * FROM sql_task ORDER BY id");
	$counter = MYSQL_NUMROWS($result);

	if($counter>0)
	 {

	$form = '<table>
<tr><td style="width:100px;"><b>Number/2</b></td><td><b>Date (German format)</b></td><tr>
';

		while($row = mysql_fetch_assoc($result))
		 {
			$form .= '<tr><td>'.($row[number]/2).'</td><td>'.date("d.m.Y H:i:s",$row[date]).'</td></tr>
';
		 }

	$form .= '</table>';
	 }

	return $form;	
 }

function fillDatabase()
 {
	for($i=0;$i<100;$i++)
	 {
		mysql_query("INSERT INTO sql_task (`date`,`number`) VALUES ('".time()."','".rand(1000,9999)."')");
	 }
 }

function connectMysql($host,$user,$password,$database)
 {
		mysql_connect($host, $user, $password);
		mysql_select_db($database);
		mysql_query("SET CHARACTER SET utf8");
 }