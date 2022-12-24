<?php
if(isset($_POST['createWebDetail'])) {
    if(isset($_SESSION['usr'])) {

        $date=date('Y-m-d');
        $db->query("INSERT INTO `webboard_detail`(`web_detail_id`, `web_id`, `web_detail_name`, `web_detail_date`, `mem_id`)
     VALUES (NULL,'{$_GET['web_id']}','{$_POST['web_detail_name']}','$date', {$_SESSION['usr']})");
} else {
    getAlert("กรุณาเข้าสู่ระบบเพื่อใช้งาน", 'danger');
}
}
?>

<form class="bg-white rounded shadow-sm p-2 my-3 input-group" method="post">
    <input class="form-control" type="text" name="web_detail_name" id="" required>
    <button name="createWebDetail" class="btn btn-primary">ตอบกระทู้</button>
</form>