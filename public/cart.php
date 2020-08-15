<?php require_once("../resources/config.php"); ?>

<?php

////! Adding a drug into a cart
if (isset($_GET['add'])) {


    $query = query("SELECT * FROM drugs WHERE drug_id =  " . escape_string($_GET['add']) . " ");
    confirm($query);

    while ($row = fetch_Array($query)) {
        if ($row['drug_quantity'] != $_SESSION['drug_' . $_GET['add']]) {
            $_SESSION['drug_' . $_GET['add']] += 1;
            redirect("checkout.php");
        } else {
            set_Message("We only have {$row['drug_quantity']} of {$row['drug_name']} available!");
            redirect("checkout.php");
        }
    }


    // $_SESSION['drug_' . $_GET['add']] += 1;

    // redirect("index.php");
}


////! removing a drug from a cart
if (isset($_GET['remove'])) {

    $_SESSION['drug_' . $_GET['remove']]--;
    if ($_SESSION['drug_' . $_GET['remove']] < 1) {
        unset($_SESSION['item_total']);
        unset($_SESSION['item_quantity']);
        redirect("checkout.php");
    } else {
        redirect("checkout.php");
    }
}



////! delete a drug from a cart
if (isset($_GET['delete'])) {

    $_SESSION['drug_' . $_GET['delete']] = '0';
    unset($_SESSION['item_total']);
    unset($_SESSION['item_quantity']);
    redirect("checkout.php");
}



function cart()
{
    $total = 0;
    $item_quantity = 0;

    //paypal variable
    $item_name = 1;
    $item_number = 1;
    $amount = 1;
    $quantity = 1;

    foreach ($_SESSION as $name => $value) {
        if ($value > 0) {


            if (substr($name, 0, 5) == "drug_") {

                //Pulling out the Ids out of the session
                $lenght = strlen((int)$name - 5);
                $id = substr($name, 5, $lenght);


                $query = query("SELECT * FROM drugs WHERE drug_id =  " . escape_string($id) . " ");
                confirm($query);




                while ($row = fetch_Array($query)) {

                    //Subtotal
                    $sub = $row['drug_price'] * $value;
                    $item_quantity += $value;

                    $cart = <<<HEREDOC
            <tr>
            <td>{$row['drug_name']}</td>
            <td>Ksh {$row['drug_price']}</td>
            <td>{$value}</td>
            <td>Ksh {$sub}</td>
            <td>
            <a class="btn btn-success" href="cart.php?add={$row['drug_id']}"><span class="glyphicon glyphicon-plus"></span></a>
              <a class="btn btn-warning" href="cart.php?remove={$row['drug_id']}"><span class="glyphicon glyphicon-minus"></span></a>
              <a class="btn btn-danger" href="cart.php?delete={$row['drug_id']}"><span class="glyphicon glyphicon-remove"></span></a>
              
            </td>
        </tr>
        <input type="hidden" name="item_name_{$item_name}" value="{$row['drug_name']}">
        <input type="hidden" name="item_number_{$item_number}" value="{$row['drug_id']}">
        <input type="hidden" name="amount_{$amount}" value="{$row['drug_price']}">
        <input type="hidden" name="quantity_{$quantity}" value="{$value}">  
     HEREDOC;
                    echo $cart;
                    $item_name++;
                    $item_number++;
                    $amount++;
                    $quantity++;
                }
                $_SESSION['item_total'] = $total += $sub;
                $_SESSION['item_quantity'] = $item_quantity;
            }
        }
    }


    function show_paypal()
    {
        if (isset($_SESSION['item_quantity']) && $_SESSION['item_quantity'] >= 1) {


            $paypal_btn = <<<HEREDOC
        <input style="float:left;" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="upload" alt="PayPal - The safer, easier way to pay online!">

        HEREDOC;
            return $paypal_btn;
        }
    }
}

?> 