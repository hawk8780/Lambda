<table>
        <tr> <th>Origen </th>
             <th>Destino</th>
             <th>Fecha  </th>
             <th>Horario</th>
        </tr>
<h2>Buses de ida</h2>    
<?php

include("con.inc");

$iDate = $_GET["iDate"];
$fDate = $_GET["fDate"];
$iCity = $_GET["iCity"];    
$fCity = $_GET["fCity"];

$queryA = "SELECT *
           FROM recorridos
           WHERE origen = '$iCity' AND destino = '$fCity' AND fecha = '$iDate'";
    
$resultA = mysqli_query($db, $queryA);
    
$queryB = "SELECT *
           FROM recorridos
           WHERE origen = '$fCity' AND destino = '$iCity' AND fecha = '$fDate'";
$resultB = mysqli_query($db, $queryB);    

if ($resultA) 
{
    while($row = mysqli_fetch_object($resultA))
    {
        echo "<tr> 
              <td> $row->origen </td>
              <td> $row->destino</td>
              <td> $row->fecha</td>
              <td> $row->horario_salida</td>
              </tr>";
    }
/*ThisOnlyHappensIfUserInputsAReturnDate##############################################################################*/    
    if ($fDate != "")
    {
        
        
        if ($resultB) 
        {
            
            echo "<table>
                  <tr> <th>Origen </th>
                       <th>Destino</th>
                       <th>Fecha  </th>
                       <th>Horario</th>
                  </tr>";   
            echo "<h2>Buses de vuelta</h2>";
            while($row = mysqli_fetch_object($resultB))
            {
                echo "<tr> 
                      <td> $row->origen </td>
                      <td> $row->destino</td>
                      <td> $row->fecha</td>
                      <td> $row->horario_salida</td>
                      </tr>";
            }
        }   
    }
/*####################################################################################################################*/     
}
else echo "Query couldn't happen";
?>

