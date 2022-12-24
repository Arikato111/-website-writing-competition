<?php
if(isset($_POST['createcomment'])) {
    if(isset($_SESSION['usr'])) {

        $date=date('Y-m-d');
        $db->query("INSERT INTO `news_detail`(`new_detail_id`, `new_id`, `new_detail_name`, `new_detail_date`, `mem_id`) 
    VALUES (NULL,'{$_GET['new_id']}','{$_POST['new_detail_name']}','$date','{$_SESSION['usr']}')");
        header("Refresh:0");die;
    } else {
        getAlert("กรุณาเข้าสู่ระบบเพื่อใช้งาน", 'danger');
    }
}
?>
<form method="post" class="bg-white rounded shadow-sm p-2 my-3 input-group">
    <input type="text" class="form-control" name="new_detail_name" id="" required>
    <button name="createcomment" class="btn btn-primary">แสดงความคิดเห็น</button>
</form>