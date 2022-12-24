<?php
if(isset($_POST['createWebboard'])) {
    if(isset($_SESSION['usr'])) {

        $date=date('Y-m-d');
        $db->query("INSERT INTO `webboard`(`web_id`, `web_name`, `web_date`, `mem_id`, `web_view`) 
    VALUES (NULL,'{$_POST['web_name']}','$date','{$_SESSION['usr']}', 0)");
    } else {
        getAlert("กรุณาเข้าสู่ระบบเพื่อใช้งาน", "danger");
    }
}
?>

<form method="post" class="bg-white rounded shadow-sm p-2 my-3 input-group">
    <input class="form-control" type="text" name="web_name" id="" required>
    <button name="createWebboard" class="btn btn-primary">สร้างกระทู้</button>
</form>