<?php include 'config.php'; ?>
<?php include 'check_login.php'; ?>

$id = $_POST['id'];
$position = $_POST['position'];
$prefix = $_POST['prefix'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];

if($id==""){
$conn->query("INSERT INTO for_application(a_position,a_prefix,a_fullname,a_phone)
VALUES('$position','$prefix','$fullname','$phone')");
}else{
$conn->query("UPDATE for_application SET
a_position='$position',
a_prefix='$prefix',
a_fullname='$fullname',
a_phone='$phone'
WHERE a_id=$id");
}

header("Location: index.php");
exit();
