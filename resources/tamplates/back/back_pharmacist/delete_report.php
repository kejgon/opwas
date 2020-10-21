<?php require_once("../../config.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = query("DELETE FROM reports WHERE report_id = " . escape_string($id) . "");
    confirm($query);
    set_Message("The report deleted successfully!!");
    redirect("../../../public/admin/index.php?reports");
} else {
    redirect("../../../public/admin/index.php?reports");
}
