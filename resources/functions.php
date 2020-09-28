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
        <div class="swiper-slide">
            <div class="slider-box">
                <div class="img-box">
                    <img src="../resources/uploads/{$row['drug_image']}">
                </div>
                <p class="detail"><a href="item.php?id={$row['drug_id']}">{$row['drug_name']}</a>
                    <a href="#" class="price">Ksh {$row['drug_price']}</a>
                </p>
                <div class="cart">
                    <a href="../resources/cart.php?add={$row['drug_id']}">Add To Cart</a>
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


    if (mysqli_num_rows($query) > 0) {
        while ($row = fetch_Array($query)) {

            $drugs_Cat = <<<DElIMETER
            <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="swiper-slide">
                <div class="slider-box">
                    <div class="img-box">
                        <img src="../resources/uploads/{$row['drug_image']}">
                    </div>
                    <p class="detail"><a href="item.php?id={$row['drug_id']}">{$row['drug_name']}</a>
                        <a href="#" class="price">Ksh {$row['drug_price']}</a>
                    </p>
                    <div class="cart">
                        <a href="../resources/cart.php?add={$row['drug_id']}">Add To Cart</a>
                    </div>
                </div>
            </div>
            </div>
            DElIMETER;
            echo $drugs_Cat;
        }
    } else {
        echo "<div class='container'> 
        <h2>Sorry! These category is out of stocks</h2>
        
        </div>";
    }
}



function get_Drugs_In_Shop()
{

    $query = query("SELECT * FROM drugs");
    confirm($query);


    //Pagaination process
    $rows = mysqli_num_rows($query); // Get total of mumber of rows from the database


    if (isset($_GET['page'])) { //get page from URL if its there

        $page = preg_replace('#[^0-9]#', '', $_GET['page']); //filter everything but numbers



    } else { // If the page url variable is not present force it to be number 1

        $page = 1;
    }


    $perPage = 6; // Items per page here 

    $lastPage = ceil($rows / $perPage); // Get the value of the last page


    // Be sure URL variable $page(page number) is no lower than page 1 and no higher than $lastpage

    if ($page < 1) { // If it is less than 1

        $page = 1; // force if to be 1

    } elseif ($page > $lastPage) { // if it is greater than $lastpage

        $page = $lastPage; // force it to be $lastpage's value

    }



    $middleNumbers = ''; // Initialize this variable

    // This creates the numbers to click in between the next and back buttons


    $sub1 = $page - 1;
    $sub2 = $page - 2;
    $add1 = $page + 1;
    $add2 = $page + 2;



    if ($page == 1) {

        $middleNumbers .= '<li class="page-item active"><a>' . $page . '</a></li>';

        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $add1 . '">' . $add1 . '</a></li>';
    } elseif ($page == $lastPage) {

        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $sub1 . '">' . $sub1 . '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' . $page . '</a></li>';
    } elseif ($page > 2 && $page < ($lastPage - 1)) {

        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $sub2 . '">' . $sub2 . '</a></li>';

        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $sub1 . '">' . $sub1 . '</a></li>';

        $middleNumbers .= '<li class="page-item active"><a>' . $page . '</a></li>';

        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $add1 . '">' . $add1 . '</a></li>';

        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $add2 . '">' . $add2 . '</a></li>';
    } elseif ($page > 1 && $page < $lastPage) {

        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page= ' . $sub1 . '">' . $sub1 . '</a></li>';

        $middleNumbers .= '<li class="page-item active"><a>' . $page . '</a></li>';

        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $add1 . '">' . $add1 . '</a></li>';
    }


    // This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query


    $limit = 'LIMIT ' . ($page - 1) * $perPage . ',' . $perPage;




    // $query2 is what we will use to to display products with out $limit variable

    $query2 = query(" SELECT * FROM drugs $limit");
    confirm($query2);


    $outputPagination = ""; // Initialize the pagination output variable


    // if($lastPage != 1){

    //    echo "Page $page of $lastPage";


    // }


    // If we are not on page one we place the back link

    if ($page != 1) {


        $prev  = $page - 1;

        $outputPagination .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $prev . '">Back</a></li>';
    }

    // Lets append all our links to this variable that we can use this output pagination

    $outputPagination .= $middleNumbers;


    // If we are not on the very last page we the place the next link

    if ($page != $lastPage) {


        $next = $page + 1;

        $outputPagination .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $next . '">Next</a></li>';
    }






    while ($row = fetch_Array($query2)) {

        $drugs = <<<DElIMETER
        <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="swiper-slide">
            <div class="slider-box">
                <div class="img-box">
                    <img src="../resources/uploads/{$row['drug_image']}">
                </div>
                <p class="detail"><a href="item.php?id={$row['drug_id']}">{$row['drug_name']}</a>
                    <a href="#" class="price">Ksh {$row['drug_price']}</a>
                </p>
                <div class="cart">
                    <a href="../resources/cart.php?add={$row['drug_id']}">Add To Cart</a>
                </div>
        </div>
        </div>
        </div>
        DElIMETER;
        echo $drugs;
    }
    echo "
    <div class'fuild-container' style='clear:both'>
    <div class='text-center'><ul class='pagination'>{$outputPagination}</ul></div>
    </div>
    ";
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

        $category_name = display_Drugs_Category_name($row['drug_category_id']);

        $drugs = <<<HEREDOC
        <tr>
            <td>{$row['drug_id']}</td>
            <td>
            {$row['drug_name']}<br>
            <a href="index.php?edit_drug&id={$row['drug_id']}"><img src="../../resources/uploads/{$row['drug_image']}" alt="" width="50"></a>
            </td>
            <td>{$row['drug_short_description']}</td>
            <td>{$row['drug_description']}</td>
            <td>{$category_name}</td>
            <td>{$row['drug_price']}</td>
            <td>{$row['drug_quantity']}</td>
            <td><a class="btn btn-danger" href="../../resources/tamplates/back/delete_drug.php?id={$row['drug_id']}"><span class="glyphicon glyphicon-remove"></span></td>
            <td><a class="btn btn-warn" href="index.php?edit_drug&id={$row['drug_id']}"><span class="glyphicon glyphicon-edit"></span></td>
        </tr>
        HEREDOC;

        echo $drugs;
    }
}

//??******************* DRUGS Category *********************??/
function display_Drugs_Category_name($drug_category_id)
{
    $category = query("SELECT * FROM categories WHERE cat_id = '{$drug_category_id}' ");
    confirm($category);

    while ($row = fetch_Array($category)) {
        return $row['cat_title'];
    }
}






//??*********************** ADDING DRUGS *************************??/
function add_drugs()
{
    if (isset($_POST['publish'])) {

        $drug_name         = escape_string($_POST['drug_name']);
        $drug_short_desc   = escape_string($_POST['drug_short_descr']);
        $drug_description  = escape_string($_POST['drug_description']);
        $drug_price        = escape_string($_POST['drug_price']);
        $drug_quantity     = escape_string($_POST['drug_quantity']);
        $drug_category_id  = escape_string($_POST['drug_category_id']);
        $drug_image        = escape_string($_FILES['pictures']['name']);
        $drug_image_temp_location = escape_string($_FILES['pictures']['tmp_name']);

        $uploads_Directory = '../../resources/uploads/';
        move_uploaded_file($_FILES["pictures"]["tmp_name"], $uploads_Directory  . basename($drug_image)); // moving media documents  to uploads folder!

        $inert_drug = query("INSERT INTO drugs(drug_name, drug_category_id, drug_price, drug_quantity, drug_short_description, drug_description,drug_image) VALUES('{$drug_name}','{$drug_category_id}','{$drug_price}','{$drug_quantity}','{$drug_short_desc}','{$drug_description}','{$drug_image}')");
        confirm($inert_drug);
        set_Message("The Drug have been Added!");
        redirect("index.php?drugs");
    }
}

function display_categories_on_add_Drug()
{

    $query = query("SELECT * FROM categories");
    confirm($query);

    while ($row = fetch_Array($query)) {

        $categoris_options  = <<<HEREDOC
        <option value="{$row['cat_id']}">{$row['cat_title']}</option>
        HEREDOC;
        echo $categoris_options;
    }
}


//***************************** Updating Drugs******************************** ??*/
function update_Drugs()
{
    if (isset($_POST['update'])) {

        $drug_name        = escape_string($_POST['drug_name']);
        $drug_short_desc  = escape_string($_POST['drug_short_descr']);
        $drug_description = escape_string($_POST['drug_description']);
        $drug_price       = escape_string($_POST['drug_price']);
        $drug_quantity    = escape_string($_POST['drug_quantity']);
        $drug_category_id = escape_string($_POST['drug_category_id']);
        $drug_image       = escape_string($_FILES['pictures']['name']);
        $drug_image_temp_location = escape_string($_FILES['pictures']['tmp_name']);


        $uploads_Directory = '../../resources/uploads/';
        move_uploaded_file($_FILES["pictures"]["tmp_name"], $uploads_Directory  . basename($drug_image)); // moving media documents  to uploads folder!


        if (empty($drug_image)) {
            $get_Image = query("SELECT drug_image FROM drugs WHERE drug_id = " . escape_string($_GET['id']) . " ");
            confirm($get_Image);
            while ($img_row = fetch_Array($get_Image)) {
                $drug_image = $img_row['drug_image'];
            }
        }


        $update_drug_query = "UPDATE drugs SET ";
        $update_drug_query .= "drug_name               = '{$drug_name}'         , ";
        $update_drug_query .= "drug_short_description  = '{$drug_short_desc}'   , ";
        $update_drug_query .= "drug_description        = '{$drug_description}'  , ";
        $update_drug_query .= "drug_price              = '{$drug_price}'        , ";
        $update_drug_query .= "drug_quantity           = '{$drug_quantity}'     , ";
        $update_drug_query .= "drug_category_id        = '{$drug_category_id}'  , ";
        $update_drug_query .= "drug_image              = '{$drug_image}'          ";
        $update_drug_query .= "WHERE drug_id = " . escape_string($_GET['id']);

        confirm(query($update_drug_query));

        set_Message("The Drug have been updated");
        redirect("index.php?drugs");
    }
}


//***************************** Drug Categories ******************************** ??*/
function display_drug_categories()
{
    $query = query("SELECT * FROM categories");
    confirm($query);
    while ($row = fetch_Array($query)) {
        $cat_id = $row['cat_id'];
        $cat_name = $row['cat_title'];

        $categories = <<<HEREDOC
        <tr>
           <td>{$cat_id}</td>
           <td>{$cat_name}</td>
           <td><a class="btn btn-danger" href="../../resources/tamplates/back/delete_category.php?id={$row['cat_id']}"><span class="glyphicon glyphicon-remove"></span></td>
        </tr>
        HEREDOC;
        echo $categories;
    }
}

//***************************** Add Categories ******************************** ??*/
function add_categories()
{
    if (isset($_POST['submit'])) {

        $category_name = escape_string($_POST['category_name']);

        if (empty($category_name) || $category_name == " ") {
            echo "<p class='bg-danger'>Please fill in the field</p>";
        } else {

            $insert_query = query("INSERT INTO categories (cat_title) VALUES ('{$category_name}')");
            confirm($insert_query);
            set_Message("The Category have been Added");
        }
    }
}



//***************************** USERS ******************************** ??*/
function display_users()
{
    $query = query("SELECT * FROM users");
    confirm($query);
    while ($row = fetch_Array($query)) {
        $user_id = $row['user_id'];
        $user_name = $row['user_name'];
        $user_password = $row['user_password'];
        $user_email = $row['user_email'];

        $categories = <<<HEREDOC
        <tr>
           <td>{$user_id}</td>
           <td>{$user_name}</td>
           <td>{$user_password}</td>
           <td>{$user_email}</td>
           <td><a class="btn btn-danger" href="../../resources/tamplates/back/delete_user.php?id={$row['user_id']}"><span class="glyphicon glyphicon-remove"></span></td>
           <td><a class="btn btn-warn" href="index.php?edit_users&id={$row['user_id']}"><span class="glyphicon glyphicon-edit"></span></td>
           </tr>
        HEREDOC;
        echo $categories;
    }
}

//***************************** ADD USERS ******************************** ??*/
function add_Users()
{
    if (isset($_POST['add_user'])) {

        $user_name         = escape_string($_POST['username']);
        $user_email        = escape_string($_POST['email']);
        $user_password     = escape_string($_POST['password']);

        if (
            (empty($user_name) || $user_name == " ")
            && (empty($user_email) || $user_email == " ")
            && (empty($user_password) || $user_password == " ")
        ) {
            echo "<p class='bg-danger'>Please fill in the field</p>";
        } else {

            $inert_users = query("INSERT INTO users(user_name, user_password, user_email) VALUES('{$user_name}','{$user_password}','{$user_email}')");
            confirm($inert_users);
            set_Message("A new users have been Added!");
            redirect("index.php?users");
        }
    }
}

//***************************** Updating Users******************************** ??*/
function update_users()
{
    if (isset($_POST['update_user'])) {

        $user_name        = escape_string($_POST['username']);
        $user_email       = escape_string($_POST['email']);
        $user_password    = escape_string($_POST['password']);



        $update_users_query = "UPDATE users SET ";
        $update_users_query .= "user_name         = '{$user_name}'        , ";
        $update_users_query .= "user_password     = '{$user_password}'    , ";
        $update_users_query .= "user_email        = '{$user_email}'         ";
        $update_users_query .= "WHERE user_id = " . escape_string($_GET['id']);

        confirm(query($update_users_query));

        set_Message("The user have been updated");
        redirect("index.php?users");
    }
}


//??******************* DRUGS REPORTS *********************??/
function display_Reports()
{
    $query = query("SELECT * FROM reports");
    confirm($query);

    while ($row = fetch_Array($query)) {

        $reports = <<<HEREDOC
        <tr>
            <td>{$row['report_id']}</td>
            <td>
            {$row['drug_id']}<br>
            </td>
            <td>{$row['order_id']}</td>
            <td>{$row['drug_price']}</td>
            <td>{$row['drug_name']}</td>
            <td>{$row['drug_quantity']}</td>
            <td><a class="btn btn-danger" href="../../resources/tamplates/back/delete_report.php?id={$row['drug_id']}"><span class="glyphicon glyphicon-remove"></span></td>
        </tr>
        HEREDOC;

        echo $reports;
    }
}


//??******************* SEARCH FOR DRUGS *********************??/

function search_all_drugs()
{

    if (isset($_POST['search'])) {
        $search = $_POST['keyword'];
        $search = preg_replace("#[^0-9a-z]#i", "", $search);

        $query = query("SELECT * FROM drugs WHERE drug_name LIKE '%$search%' OR drug_short_description LIKE '%$search%'");
        confirm($query);

        $count = mysqli_num_rows($query);

        if ($count == 0) {
            echo "<h1>
            Sorry the drug is not avaiable!
            </h1>
            <p>Please contact our pharmacist!!</p>
            ";
        } else {

            while ($row = fetch_Array($query)) {

                $drugs = <<<DElIMETER
                <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="swiper-slide">
                    <div class="slider-box">
                        <div class="img-box">
                            <img src="../resources/uploads/{$row['drug_image']}">
                        </div>
                        <p class="detail"><a href="item.php?id={$row['drug_id']}">{$row['drug_name']}</a>
                            <a href="#" class="price">Ksh {$row['drug_price']}</a>
                        </p>
                        <div class="cart">
                            <a href="../resources/cart.php?add={$row['drug_id']}">Add To Cart</a>
                        </div>
                </div>
                </div>
                </div>
                DElIMETER;
                echo $drugs;
            }
        }
    }
}


////** ///////////////////sign$SignUp///////////////////  **////

function customer_registration()
{

    if (isset($_POST['register-submit'])) {

        $customer_name         = escape_string($_POST['fname']);
        $customer_email   = escape_string($_POST['email']);
        $custome_phone  = escape_string($_POST['phone']);
        $customer_password        = escape_string($_POST['password']);

        $register = query("INSERT INTO customer(customer_name, customer_email, customer_phone, customer_password) VALUES('{$customer_name}','{$customer_email}','{$custome_phone}','{$customer_password}')");
        confirm($register);
        set_Message("Registerd successfully ");
        redirect("signin.php");
    }
}

function customer_login()
{

    if (isset($_POST['login-submit'])) {
        $customer_name =  escape_string($_POST['fname']);
        $customer_password =  escape_string($_POST['password']);

        $query = query("SELECT * FROM customer WHERE customer_name = '{$customer_name}' AND customer_password = '{$customer_password}'");
        confirm($query);

        if (mysqli_num_rows($query) == 0) {
            set_Message("Your username or  password are incorrect!");
            redirect("signin.php");
        } else {

            $_SESSION['customer_name'] = $customer_name;
            //set_Message("Welcome to Admin panel" . $username);
            redirect("index.php");
        }
    }
}
