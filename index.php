<?php
require('conn.php');
// echo "smile";
?>

<html>

    <head>
    </head>

        <body>

        <?php /**  $sql = "INSERT INTO p_customer(first_name, last_name, email_id) values ('Cam','Reaves', 'cam7339@gmail.com' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}     */  ?>


          <h1> Order a Pizza </h1>
          <form action="orders.php" method="POST" style="width:81%;">
            <fieldset>
              <legend>Make an Order </legend>
              <!-- User Name/Address/Phone Number -->
              First Name:<input type="text" name="fname" value="">
              Last Name:<input type="text" name="lname" value="">
              Email Address:<input type="text" name="add" value="">
              Phone Number: <input type="text" name="phone" value=""><br>

              <!--Select the Condiments -->
              Type:<br>
              Cheese ($.50)<input type="radio" name="queso" value="1">
              Extra Cheese ($1.00)<input type="radio" name="queso" value="2"> <br>

              Sauce:<br> <!chane the database to match the valus here or your code will explode>
              Cheese (FREE) <input type="radio" name="sauce" value="1">
              Tomato (FREE) <input type="radio" name="sauce" value="2">
              Pesto (FREE) <input type="radio" name="sauce" value="2"> <br>

              Meat:<br>
              Sausage <input type="checkbox" name="meat1" value="4">
              Chicken <input type="checkbox" name="meat2" value="3">
              Peporoni <input type="checkbox" name="meat3" value="5">



              <br>
              <input type="submit" value="Order">
            </fieldset>
          </form>

        </body>

</html>
