<?php

  //Hidden field
  /*
  $qty = $_POST['selqty'];
  $size = $_POST['selsize'];
  $colour = $_POST['selcolour'];
  switch ($size) {
    case 'Small':
      $total = $qty * 15.75;
      break;
    case 'Medium':
      $total = $qty * 16.75;
      break;
    case 'Large':
      $total = $qty * 17.75;
      break;
    case 'Extra Large':
      $total = $qty * 18.75;
      break;
    default:
      $total = "Undefined";
      break;
  }
  if(isset($_POST['selqty']))
  {
    echo "<h2> Your order qty is " . intval($qty) . ".</h2>";
  }
  if(isset($_POST['selsize']))
  {
    echo "<h2> The size of the ordered widgets are $size.</h2>";
  }
  if(isset($_POST['selcolour']))
  {
    echo "<h2> The selected colour is $colour.</h2>";
  }
  if(isset($total) && $total != "Undefined")
  {
    echo "<h2><hr/> The total price of your purchase is: £" . $total . "</h2>";
  }
  */

  //Cookie
  /*
  $qty = $_COOKIE['selqty'];
  $size = $_COOKIE['selsize'];
  $colour = $_POST['selcolour'];
  switch ($size) {
    case 'Small':
      $total = $qty * 15.75;
      break;
    case 'Medium':
      $total = $qty * 16.75;
      break;
    case 'Large':
      $total = $qty * 17.75;
      break;
    case 'Extra Large':
      $total = $qty * 18.75;
      break;
    default:
      $total = "Undefined";
      break;
  }
  if(isset($_COOKIE['selqty']))
  {
    echo "<h2> Your order qty is " . intval($qty) . ".</h2>";
  }
  if(isset($_COOKIE['selsize']))
  {
    echo "<h2> The size of the ordered widgets are $size.</h2>";
  }
  if(isset($_POST['selcolour']))
  {
    echo "<h2> The selected colour is $colour.</h2>";
  }
  if(isset($total) && $total != "Undefined")
  {
    echo "<h2><hr/> The total price of your purchase is: £" . $total . "</h2>";
  }
  */

  //Session
  session_start();

  $qty = $_SESSION['selqty'];
  $colour = $_POST['selcolour'];
  $size = $_SESSION['selsize'];

  switch ($size) {

    case 'Small':

      $total = $qty * 15.75;
      break;

    case 'Medium':
      $total = $qty * 16.75;
      break;

    case 'Large':
      $total = $qty * 17.75;
      break;

    case 'Extra Large':
      $total = $qty * 18.75;
      break;

    default:
      $total = "Undefined";
      break;
  }

  if(isset($_SESSION['selqty']))
  {
    echo "<h2> Number of widgets: " . intval($qty) . "</h2>";
  }

  if(isset($_SESSION['selsize']))
  {
    echo "<h2> Size of widgets: $size </h2>";
  }

  if(isset($_POST['selcolour']))
  {
    echo "<h2> Selected colour: $colour</h2>";
  }
  if(isset($total) && $total != "Undefined")
  {
    echo "<h2><hr/> Total price: £" . $total . "</h2>";
  }
?>