<?php include 'config.php'; ?>
<?php include 'check_login.php'; ?>

$id = $_GET['id'];
$conn->query("DELETE FROM for_application WHERE a_id=$id");

header("Location: index.php");
exit();
