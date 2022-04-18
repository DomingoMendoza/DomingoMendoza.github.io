  <?php
  require "index.php";
 
  require 'conexion.php';
   
$username = "root"; 
$password = ""; 
$database = "crud"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM usuarios";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">   Codigo </font> </td> 
          <td> <font face="Arial">   Nombre </font> </td> 
          <td> <font face="Arial">   Correo </font> </td> 
          <td> <font face="Arial">   Telefono </font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["cod"];
        $field2name = $row["nom"];
        $field3name = $row["correo"];
        $field4name = $row["tel"];
        

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>| 