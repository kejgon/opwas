<?php


////! CUSTOM FUNCTIONS

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
                            <a class="btn btn-primary"  href="cart.php?add={$row['drug_id']}">ADD TO CART</a>
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

    $query = query("SELECT * FROM drugs WHERE drug_category_id = " . escape_string($_GET['id']) . " ");
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
                            <a class="btn btn-primary"  href="cart.php?add={$row['drug_id']}">ADD TO CART</a>
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
                            <a class="btn btn-primary" href="cart.php?add={$row['drug_id']}">ADD TO CART</a>
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
