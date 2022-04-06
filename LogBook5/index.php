<?php include("class_lib.php"); ?>
<?php
    $eman = new person();
    $chicken = new person;

    $eman->set_name("Eman Limbu ");
    $chicken->set_name("Jaffery ");

    echo "eman's full name:" . $eman->get_name();
    echo "<br/>";
    echo "chicken's full name: " . $chicken->get_name();
?>