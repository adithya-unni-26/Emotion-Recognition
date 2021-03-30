<html>
<body>
<?php 
$username = "root"; 
$password = ""; 
$database = "customers"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM db1";


echo '<body style="background-color:black;color:white; text-align:center;">
    <div style="margin-top:200px;">
     <h1 style="text-align:center;"> DETAILS OF THOSE IN THE SYSTEM</h1>
     <table border="2" cellspacing="2" cellpadding="2" style="background-color:gray; text-align:center; margin-left:500px; margin-top:100px"> 
      <tr> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Address</font> </td> 
          <td> <font face="Arial">Latitude</font> </td> 
          <td> <font face="Arial">Longitude</font> </td> 
             <td> <font face="Arial">Status</font> </td> 
             <td> <font face="Arial">Emergency.No</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["col1"];
        $field2name = $row["col2"];
        $field3name = $row["col3"];
        $field4name = $row["col4"];
        $field5name = $row["col5"]; 
        $field6name = $row["col6"]; 

           
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td>
                  
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>