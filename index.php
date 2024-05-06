<?php
    //pricelist
    $ParesOverload = 99;
    $Mami = 49;
    $LomiOverload =  89;
    if (empty($_POST["quantity"]) || empty($_POST["cash"])) {
    } else {
        //Invalidation if ever they typed a string
        if (is_numeric($_POST["quantity"]) && is_numeric($_POST["cash"])) {
            if ($_POST["order"] == "Pares Overload") {
                $_POST["order"] = $ParesOverload;
            } elseif ($_POST["order"] == "Mami") {
                $_POST["order"] = $Mami;
            } elseif ($_POST["order"] == "Lomi Overload") {
                $_POST["order"] = $LomiOverload;
            }
            $order = $_POST["order"];
            $quantity = ($_POST["quantity"]);
            $cash = ($_POST["cash"]);
            $total_cost = $order * $quantity;
            $change = $cash - $total_cost;
            if ($quantity <= 0) {
                echo"<br>Invalid";
            } elseif ($total_cost <= $cash) {
                echo"<strong><br> The total cost is {$total_cost} <br>";
                echo"Your change is {$change}<br><br></strong>";
                echo"Thank you for ordering!";
            } else {
                echo "<strong><br>You don't have enough money</strong>  ";
            }
        } else {
            echo "<br>Invalid Input";
        }
    }
?>