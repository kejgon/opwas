<?php require_once("../../config.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = query("DELETE FROM categories WHERE cat_id = " . escape_string($id) . "");
    confirm($query);
    set_Message("The Category have been deleted successfully!!");
    redirect("../../../public/admin/index.php?categories");
} else {
    redirect("../../../public/admin/index.php?categories");
}
