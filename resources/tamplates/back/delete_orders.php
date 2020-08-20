<?php require_once("../../config.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = query("DELETE FROM orders WHERE order_id = " . escape_string($id) . "");
    confirm($query);
    set_Message("Order deleted successfully!!");
    redirect("../../../public/admin/index.php?orders");
} else {
    redirect("../../../public/admin/index.php?orders");
}
