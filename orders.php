<?php require_once('conn.php') ?>

<html>
<head></head>
<body>
<?php
  /*
 $sql = "INSERT INTO p_customer(first_name, last_name, email_id)
  values ('".$_POST['fname']."','".$_POST['lname']."', '".$_POST['add']."' )";

if ($conn->query($sql) === TRUE) {
echo "New 1 record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql2 = "INSERT INTO p_customer(first_name, last_name, email_id)
  values ('".$_POST['fname']."','".$_POST['lname']."', '".$_POST['add']."' )";

if ($conn->query($sql2) === TRUE) {
echo "New 2 record created successfully";
} else {
echo "Error: " . $sql2 . "<br>" . $conn->error;
}      */


/////////////////////////shit works

/*$d = "super";
$s = 2;
$t = [1,3,5,7];
$price = 0;
$connect = mysqli_connect('localhost', 'root', '', 'pizza_new');

function savePizza($desc,$size,$toppings,$connect){
    $price = 4 * count($toppings);

    $pizza_sql = "INSERT INTO p_pizza (pizza_desc,price) VALUES ('$desc',$price);";
    $result = mysqli_query($connect,$pizza_sql);
//$pizza_id = $result["pizza_id"];
    //var_dump($result);
    $pizza_id = mysqli_insert_id($connect);
    var_dump($pizza_id);

      foreach($toppings as $topping){
        savePizzaTopping($pizza_id,$topping,$connect);
      }
}

function savePizzaTopping($id,$top,$connect)
{
  $pizza_topping_sql = "INSERT INTO p_pizza_toppings (pizza_id,topping_id)
  VALUES ($id,$top)";
  $result1 = mysqli_query($connect,$pizza_topping_sql);
}

savePizza($d,$s,$t,$connect); */
?>

<?php
$connect = mysqli_connect('localhost', 'root', '', 'pizza_new');

//user information
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["add"];
$phone = $_POST["phone"];


//pizza information
$conds = array();

array_push($conds,$_POST["queso"]);  //make queso required
array_push($conds,$_POST["sauce"]);

if (isset($_POST["meat1"])){
 array_push($conds,$_POST["meat1"]);
}

if (isset($_POST["meat2"])){
 array_push($conds,$_POST["meat2"]);
}

if (isset($_POST["meat3"])){
 array_push($conds,$_POST["meat3"]);
}

if (isset($_POST["meat4"])){
 array_push($conds,$_POST["meat4"]);
}

if (isset($_POST["meat5"])){
 array_push($conds,$_POST["meat5"]);
}

if (isset($_POST["meat6"])){
 array_push($conds,$_POST["meat6"]);
}

if (isset($_POST["vegg1"])){
 array_push($conds,$_POST["vegg1"]);
}

if (isset($_POST["vegg2"])){
 array_push($conds,$_POST["vegg2"]);
}

if (isset($_POST["vegg3"])){
 array_push($conds,$_POST["vegg3"]);
}

if (isset($_POST["vegg4"])){
 array_push($conds,$_POST["vegg4"]);
}


//echo $price;
      //gets the price of the pizza by getting the price of each condiment and totaling them
     function getPrice($conds,$connect){
       $price = 0.00;
       //$price_sql = "SELECT topping_price FROM p_toppings WHERE topping_id in $in"; //fixed
       //$price_sql = "SELECT topping_price FROM p_toppings WHERE topping_id IN ('".implode(',',$conds)."')";
           foreach($conds as $cond){
           $price_sql = "SELECT topping_price FROM p_toppings WHERE topping_id = $cond";
             $result = mysqli_query($connect,$price_sql);
             if($result==false) {
               echo "false";
             }
               else
             {
               $rows = mysqli_fetch_array($result, MYSQLI_NUM);
               foreach($rows as $row){
                 $price = $price + $row;
                 //echo $price;
                                     }
             }
           }
             return $price;

         }
    //creates a pizza
     function savePizza($desc,$conds,$connect){

       //gets price and works
         $price = getPrice($conds,$connect);

         $pizza_sql = "INSERT INTO p_pizza (pizza_desc,price) VALUES ('$desc',$price)";
         $result = mysqli_query($connect,$pizza_sql);
         //if($result==true){echo "pizza works";}
     //$pizza_id = $result["pizza_id"];
         //var_dump($result);
         $pizza_id = mysqli_insert_id($connect);
         //var_dump($pizza_id);

           foreach($conds as $cond){
             savePizzaTopping($pizza_id,$cond,$connect);
           }
     }
     //for each topping on the pizza, creates an entry with the corresponding pizza id on the pizza its on
     function savePizzaTopping($id,$top,$connect)
     {
       $pizza_topping_sql = "INSERT INTO p_pizza_toppings (pizza_id,topping_id) VALUES ($id,$top)";
       $result1 = mysqli_query($connect,$pizza_topping_sql);
     }
     //uses the condiments ids and returns an array of the condiment descriptions
     function getCondDesc($connect,$conds){
       $cond_desc = array();


           foreach($conds as $cond){
           $cond_sql = "SELECT topping_desc FROM p_toppings WHERE topping_id = $cond";
             $result = mysqli_query($connect,$cond_sql);
             if($result==false) {
               echo "false";
             }
               else
             {
               $rows = mysqli_fetch_array($result, MYSQLI_NUM);
               foreach($rows as $row){
                 array_push($cond_desc,$row);
                 //echo $price;
                                     }
             }

           }
        return implode(",",$cond_desc);
     }

     //displays the current order of the user that she or he just made on the index page
     function displayOrder($connect,$conds,$fname,$lname)
     {
       $cond_desc = getCondDesc($connect,$conds);
       $price = getPrice($conds,$connect);
       $formatP = number_format($price, 2,'.', ',');

        echo "
        <h1>Your Order</h1>
        <table border='1'>
           <tr>
               <th> Name </th>
               <th> Condiments </th>
               <th> Price </th>
           </tr> ";
        echo "<tr>
            <td> $fname $lname </td>
            <td> $cond_desc </td>
            <td> $"."$formatP </td>
        </tr> ";
     }

     //foreach($conds as $cond){echo $cond;}
      //echo getPrice($conds,$connect);
      savePizza($fname,$conds,$connect);
      displayOrder($connect,$conds,$fname,$lname);

?>

</body>
</html>
