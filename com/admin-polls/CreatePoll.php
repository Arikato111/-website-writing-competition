<?php
if(isset($_POST['createPoll'])) {
    $date=date("Y-m-d");
    $db->query("INSERT INTO `poll`(`poll_id`, `poll_name`, `poll_date`, `mem_id`, `poll_view`)
     VALUES (NULL,'{$_POST['poll_name']}','$date','{$_SESSION['usr']}', 0)");
     getAlert("สร้างแบบประเมินสำเร็จ", "success");
}
?>
<form class="bg-white rounded shadow-sm input-group p-2 my-3" method="post">
    <input type="text" class="form-control" name="poll_name" id="">
    <button name="createPoll" class="btn btn-dark">สร้างแบบประเมิน</button>
</form>