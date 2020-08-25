<?php require_once("../../config.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = query("DELETE FROM users WHERE user_id = " . escape_string($id) . "");
    confirm($query);
    set_Message("The User have been deleted successfully!!");
    redirect("../../../public/admin/index.php?users");
} else {
    redirect("../../../public/admin/index.php?users");
}
