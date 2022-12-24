<?php 
if(isset($_POST['updatePoll'])) {
    $db->query("UPDATE poll SET poll_name = '{$_POST['poll_name']}' WHERE poll_id = " . $_GET['poll_id']);
    getAlert("แก้ไขสำเร็จ", "success");
}
$poll=fetch($db->query("SELECT * FROM poll WHERE poll_id = " . $_GET['poll_id']));
?>

<title>admin | แก้ไขแบบประเมิน</title>
<?php FrameStart(); ?>
<div class="bg-white rounded shadow-sm p-3 my-3 text-center fs-3">แก้ไขแบบประเมิน</div>
<form class="bg-white rounded shadow-sm p-3 my-3" method="post">
    <label for="">แก้ไขหัวข้อแบบประเมิน</label>
    <input type="text" class="form-control mb-3" name="poll_name" value="<?php echo $poll['poll_name']; ?>" id="" required>
    <div class="text-end">
        <button name="updatePoll" class="btn btn btn-dark">บันทึก</button>
        <a href="./polls" class="btn btn-outline-danger">ย้อนกลับ</a>
    </div>
</form>
<?php
     require('./com/admin-polls/CreatePollDetail.php');
     require('./com/admin-polls/ShowPollDetail.php');

FrameEnd(); ?>

