<?php

$host = 'mysql01.noturnall.hospedagemdesites.ws';
$usuario = 'noturnall';
$pass = 'Auros3011';
$dbname = 'noturnall';

// Create connection
$con=mysqli_connect($host,$usuario,$pass,$dbname);
echo("conectei nessa porra!!!!");

// Check connection
if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "SELECT dts_date, dts_local, dts_city_state FROM dates WHERE dts_active = 1 ORDER BY dts_id desc;";
print($query);

$result = mysql_query($query);

$rows = array();
while ($row = mysql_fetch_assoc($result)) {
  array_push($rows, $row);
}


foreach($rows as $key => $val){
  echo "
  <tr>
    <td>{$val['dts_date']}</td>
    <td>{$val['dts_local']}</td>
    <td>{$val['dts_city_state']}</td>
  </tr>";
}
?>