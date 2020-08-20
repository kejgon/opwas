<?php


////! CUSTOM FUNCTIONS

function last_id()
{
    global $connection;
    return mysqli_insert_id($connection);
}

function set_Message($msg)
{
    if (!empty($msg)) {
        $_SESSION['message'] = $msg;
    } else {
        $msg = "";
    }
}

function display_Message()
{
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function redirect($location)
{
    header("Location: $location");
}



function query($sql)
{
    global $connection;
    return mysqli_query($connection, $sql);
}



function confirm($result)
{
    global $connection;
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}



function escape_string($string)
{
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}




function fetch_Array($result)
{
    return mysqli_fetch_array($result);
}


////!------------------------  FRONT-END FUNCTIONS --------------------------------- ////

//GET DRUGS
function get_Drugs()
{

    $query = query("SELECT * FROM drugs");
    confirm($query);

    while ($row = fetch_Array($query)) {

        $drugs = <<<DElIMETER
        <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="item.php?id={$row['drug_id']}"><img class="drug_img" src="{$row['drug_image']}" alt="{$row['drug_name']} "></a>
                        <div class="caption">
                            <h4 class="pull-right"> Ksh {$row['drug_price']}</h4>
                            <h4><a href="item.php?id={$row['drug_id']}">{$row['drug_name']}</a></h4>
                            <p>{$row['drug_short_description']}</p>
                            <a class="btn btn-primary"  href="../resources/cart.php?add={$row['drug_id']}">ADD TO CART</a>
                        </div>
                    </div>
                </div>
        DElIMETER;
        echo $drugs;
    }
}


function get_Categories()
{
    global $connection;
    $query = query("SELECT * FROM categories");
    confirm($query);

    while ($row = fetch_Array($query)) {
        $categories = <<<DElIMETER
        <a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>
        DElIMETER;
        echo $categories;
    }
}


function get_Drug_Category()
{

    $query = query("SELECT * FROM drugs WHERE drug_category_id = " . escape_string($_GET['id']) . "");
    confirm($query);

    while ($row = fetch_Array($query)) {

        $drugs_Cat = <<<DElIMETER
        <div class="col-md-4 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <a href="item.php?id={$row['drug_id']}"><img src="{$row['drug_image']}" alt="{$row['drug_name']}"></a>
                        <div class="caption">
                            <h4 class="pull-right"> Ksh {$row['drug_price']}</h4>
                            <h4><a href="item.php?id={$row['drug_id']}">{$row['drug_name']}</a></h4>
                            <p>{$row['drug_short_description']}</p>
                            <a class="btn btn-primary"  href="../resources/cart.php?add={$row['drug_id']}">ADD TO CART</a>
                        </div>
                    </div>
                </div>
        DElIMETER;
        echo $drugs_Cat;
    }
}



function get_Drugs_In_Shop()
{

    $query = query("SELECT * FROM drugs");
    confirm($query);

    while ($row = fetch_Array($query)) {

        $drugs = <<<DElIMETER
        <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="item.php?id={$row['drug_id']}"><img src="{$row['drug_image']}" alt="{$row['drug_name']}"></a>
                        <div class="caption">
                            <h4 class="pull-right"> Ksh {$row['drug_price']}</h4>
                            <h4><a href="item.php?id={$row['drug_id']}">{$row['drug_name']}</a></h4>
                            <p>{$row['drug_short_description']}</p>
                            <a class="btn btn-primary" href="../resources/cart.php?add={$row['drug_id']}">ADD TO CART</a>
                        </div>
                    </div>
                </div>
        DElIMETER;
        echo $drugs;
    }
}





function login_User()
{

    if (isset($_POST['submit'])) {
        $username =  escape_string($_POST['username']);
        $password =  escape_string($_POST['password']);

        $query = query("SELECT * FROM users WHERE user_name = '{$username}' AND user_password = '{$password}'");
        confirm($query);

        if (mysqli_num_rows($query) == 0) {
            set_Message("Your username or  password are incorrect!");
            redirect("login.php");
        } else {

            $_SESSION['username'] = $username;
            //set_Message("Welcome to Admin panel" . $username);
            redirect("admin");
        }
    }
}




function send_Message()
{
    if (isset($_POST['submit'])) {
        $to  = "opwas@gmail.com";
        $fullname =  $_POST['contact_name'];
        $email =  $_POST['contact_email'];
        $phone = $_POST['contact_phone'];
        $subject =  $_POST['contact_subject'];
        $message =  $_POST['contact_message'];

        $headers = "From: {$fullname}  {$email} ";

        $result =  mail($to, $subject, $message, $headers);
        if (!$result) {
            echo "Error";
        } else {
            echo " Sent Successfully";
        }
    }
}





////!------------------------  BACK-END FUNCTIONS --------------------------------- ////


//??******************* ORDERS *********************??/
function display_Orders()
{
    $query = query("SELECT * FROM orders");
    confirm($query);

    while ($row = fetch_Array($query)) {

        $orders = <<<HEREDOC
        <tr>
            <td>{$row['order_id']}</td>
            <td>{$row['order_amount']}</td>
            <td>{$row['order_transaction']}</td>
            <td>{$row['order_currency']}</td>
            <td>{$row['order_status']}</td>
            <td><a class="btn btn-danger" href="../../resources/tamplates/back/delete_orders.php?id={$row['order_id']}"><span class="glyphicon glyphicon-remove"></span></td>
        </tr>
        HEREDOC;

        echo $orders;
    }
}


//??******************* DRUGS *********************??/
function display_all_drug()
{
    $query = query("SELECT * FROM drugs");
    confirm($query);

    while ($row = fetch_Array($query)) {

        $drugs = <<<HEREDOC
        <tr>
            <td>{$row['drug_id']}</td>
            <td>
            {$row['drug_name']}<br>
            <a href="index.php?edit_drug&id={$row['drug_id']}"> <img src="{$row['drug_image']}" alt="" width="70"></a>
            </td>
            <td>{$row['drug_short_description']}</td>
            <td>{$row['drug_description']}</td>
            <td>{$row['drug_category_id']}</td>
            <td>{$row['drug_price']}</td>
            <td>{$row['drug_quantity']}</td>
            <td><a class="btn btn-danger" href="../../resources/tamplates/back/delete_drug.php?id={$row['drug_id']}"><span class="glyphicon glyphicon-remove"></span></td>
            <td><a class="btn btn-warn" href="index.php?edit_drug&id={$row['drug_id']}"><span class="glyphicon glyphicon-edit"></span></td>
        </tr>
        HEREDOC;

        echo $drugs;
    }
}

//??******************* ADDING DRUGS *********************??/
function add_drugs()
{
    if (isset($_POST['publish'])) {

        $drug_name = escape_string($_POST['drug_name']);
        $drug_short_desc = escape_string($_POST['drug_short_descr']);
        $drug_description = escape_string($_POST['drug_description']);
        $drug_price = escape_string($_POST['drug_price']);
        $drug_quantity = escape_string($_POST['drug_quantity']);
        $drug_category_id = escape_string($_POST['drug_category_id']);
        // $drug_image = escape_string($_FILES['img']['name']);
        // $drug_image_temp_location = escape_string($_FILES['img']['tmp_name']);
        $image = escape_string($_FILES['image']['name']);;
        // Get text
        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $_FILES['image']['name']);

        // image file directory
        // $target = "uploads/" . basename($image);


        if (move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . basename($_FILES['image']['name']))) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        $inert_drug = query("INSERT INTO drugs(drug_name, drug_category_id, drug_price, drug_quantity, drug_short_description, drug_description,drug_image) VALUES('{$drug_name}','{$drug_category_id}','{$drug_price}','{$drug_quantity}','{$drug_short_desc}','{$drug_description}','{$image}')");
        confirm($inert_drug);
        set_Message($msg);
        redirect("index.php?drugs");


        // $drug_tag = escape_string($_POST['drug_tasg']);
    }
}
