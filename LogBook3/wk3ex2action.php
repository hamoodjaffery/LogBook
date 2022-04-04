<?php

  //Age
  //Even with the input checks the user can still enter text instead of a number.
  //To fix this issue the html input type has to be changed.
  if ($_POST["txtage"] < 21 && $_POST["txtage"] >= 0)
  {
	   echo "You are under 21 years old<br/>";
  }
  elseif($_POST["txtage"] >= 21 && $_POST["txtage"] < 150)
  {
	   echo "You are  21 years old or over<br/>";
  }
  else{
    echo "Enter valid age";
  }

  echo "<br/>";

  //Gender
  if($_POST["txtgender"] == "male")
  {
    echo "You are a man";
  }
  elseif($_POST["txtgender"] == "female")
  {
    echo "You are a woman";
  }
  else
  {
    echo "Enter your gender as specified!";
  }
?>