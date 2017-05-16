<?php
  $conn = mysqli_connect('localhost', 'root', '', 'pizza_new');
  if ($conn->error) {
    echo "An error has occurred: " . $conn->error;
  }
?>

<?php /*<table border="1">
    <tr>
        <th>id</th>
        <th>first_name</th>
                <th>last_name</th>
        <th>email</th>
    </tr>


          $sql = "SELECT * FROM p_customer" ;
          if ($result = mysqli_query(mysqli_connect('localhost', 'root', '', 'pizza_new'),$sql) )
          {
            if(mysqli_num_rows($result) > 0)
            {
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "<td>" . $row[3] . "</td>";
        echo "</tr>";
                                              }
    echo "</table>";
            }
            else {
              echo "smile";
            }
          } */
        ?>
