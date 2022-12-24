<?php
if(isset($_POST['createChioce'])) {
    $db->query("INSERT INTO `poll_detail`(`poll_detail_id`, `poll_id`, `poll_detail_name`, `poll_detail_count`) 
    VALUES (NULL,'{$_GET['poll_id']}','{$_POST['poll_detail_name']}', 0)");
    header("Refresh:0");die;
}
?>

<form method="post" class="bg-white rounded shadow-sm p-2 my-3 input-group">
    <input type="text" name="poll_detail_name" id="" class="form-control" required> 
    <button name="createChioce" class="btn btn-dark">เพิ่มตัวเลือก</button>
</form>