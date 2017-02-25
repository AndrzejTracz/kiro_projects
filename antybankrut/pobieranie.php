<?php
//include("../templates/".$ust['templates']."/config.php");
//include("../db_connect.php");
//if($indexphp!="ok"){exit();}

/*
echo'

<table width="90%" cellspacing="0" cellpadding="0" style="border: 2px solid #cccccc;">
<tr>

</tr>';
echo'<center>';

$table='ban_dane';
echo $table;



$DB_Server = "localhost";        
$DB_Username = "mergi_admin";                
$DB_Password = "Srebrny@13";                
$DB_DBName = "mergi_antybankrut";                
$DB_TBLName = "ban_dane";            
$sql = "Select * from $DB_TBLName";
 
 

$usersRes = $pdo->query('SELECT * FROM `ban_dane`');
$users = $usersRes->fetchAll(PDO::FETCH_ASSOC);

$data = array();
$data[0]['dane_id'] = 'dane_id';
$data[0]['dane_user'] = 'dane_user';
$data[0]['dane_data'] = 'dane_data';


$datas = array_merge($data,$users);

foreach($datas as $key => $data){
foreach($data as $key_s => $single_data){
$datas[$key][$key_s] = iconv("UTF-8","cp1250", $single_data);
}
}

$filename = 'users.csv';

$FileHandle = fopen($filename, 'w+') or die("can't open file");

foreach($datas as $key => $data) {
fputcsv($FileHandle, $data, ';', '"');
}

fclose($FileHandle);
*/



// Database Connection

$host="localhost";
$uname="mergi_admin";
$pass="Srebrny@13";
$database = "mergi_antybankrut"; 

$connection=mysql_connect($host,$uname,$pass); 

echo mysql_error();

//or die("Database Connection Failed");
$selectdb=mysql_select_db($database) or 
die("Database could not be selected"); 
$result=mysql_select_db($database)
or die("database cannot be selected <br>");

// Fetch Record from Database

$output = "";
$table = "ban_dane"; // Enter Your Table Name 
$sql = mysql_query("select * from $table");
$columns_total = mysql_num_fields($sql);

// Get The Field Name

for ($i = 0; $i <= $columns_total; $i++) {
$heading = mysql_field_name($sql, $i);
$output .= '"'.$heading.'";';
}
$output .="\n";

// Get Records from the table

while ($row = mysql_fetch_array($sql)) {
for ($i = 0; $i < $columns_total; $i++) {
$output .='"'.$row["$i"].'";';
}
$output .="\n";
}

/* Download the file

header('Content-Type: application/csv');
header('Content-Disposition: attachement; filename="plik.csv";');
echo $csv;
exit;
/*
$filename = "dane.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

header("Content-Type: application/csv");
header("Content-Disposition: attachment;filename=yourtitle.csv");
*/

   header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="export-approved.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');

echo $output;
exit;

?>