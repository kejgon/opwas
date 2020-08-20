<?php require_once("../../config.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = query("DELETE FROM drugs WHERE drug_id = " . escape_string($id) . "");
    confirm($query);
    set_Message("The drug is deleted successfully!!");
    redirect("../../../public/admin/index.php?drugs");
} else {
    redirect("../../../public/admin/index.php?drugs");
}
