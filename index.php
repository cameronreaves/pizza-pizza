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
              Cheese (FREE) <input type="radio" name="queso" value="1">
              Extra Cheese ($.50)<input type="radio" name="queso" value="2"> <br><br>

              Sauce:<br>
              Cheese (FREE) <input type="radio" name="sauce" value="13">
              Tomato (FREE) <input type="radio" name="sauce" value="14">
              Pesto (FREE) <input type="radio" name="sauce" value="15"> <br><br>

              Meat:<br>
              Sausage ($0.80)<input type="checkbox" name="meat1" value="4">
              Chicken ($.75)<input type="checkbox" name="meat2" value="3">
              Peporoni ($1.00)<input type="checkbox" name="meat3" value="5">
              Ham ($1.50) <input type="checkbox" name="meat4" value="6">
              Bacon ($1.30) <input type="checkbox" name="meat5" value="7">
              Anchovies ($2.00) <input type="checkbox" name="meat6" value="8">  <br> <br>

              Fruits and Veggies:<br>
              Bell Peppers ($0.30) <input type="checkbox" name="vegg1" value="9">
              Onions ($0.10) <input type="checkbox" name="vegg2" value="10">
              Olives ($0.55) <input type="checkbox" name="vegg3" value="11">
              Pineapple ($1.00) <input type="checkbox" name="vegg3" value="12"> <br>



              <br>
              <input type="submit" value="Order">
            </fieldset>
          </form>

        </body>

</html>
