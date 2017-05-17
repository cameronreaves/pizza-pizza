<html>
<head></head>
<body>
  <?php require('conn.php');
  echo "set";
  ?>


    <?php /*
    $sql="SELECT * FROM p_customer";
    $result=mysql_query($sql);

    // Start looping rows in mysql database.
    while($rows=mysql_fetch_array($result)){
    ?>
    <table width="400" border="1" cellspacing="0" cellpadding="3">
    <tr>
    <td width="10%"><? echo $rows['customer_id']; ?></td>
    <td width="30%"><? echo $rows['first_name']; ?></td>
    <td width="30%"><? echo $rows['last_name']; ?></td>
    <td width="30%"><? echo $rows['email_id']; ?></td>
    </tr>
    </table>

    <?php
    // close while loop
    }

    // close connection
    mysql_close();
  */
  $connect = mysqli_connect('localhost', 'root', '', 'pizza_new');
//displays all the pizza orders currently in the database
  function displayPizzas($connect)
  {
     echo "<table border='1'>
        <tr>
            <th>pizza id</th>
            <th>Name of Pizza </th>
            <th>Price</th>
        </tr> ";

              $sql = "SELECT * FROM p_pizza";
              if ($result = mysqli_query($connect,$sql) )
              {
                if(mysqli_num_rows($result) > 0)
                {
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "<td>" . $row[2] . "</td>";
            echo "</tr>";
                                                  }
        echo "</table>";
                }
                else {
                  echo "smile";
                }
              }
  }
    displayPizzas($connect);

  ?>
</body>
</html>
