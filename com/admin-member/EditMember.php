<title>admin | แก้ไขสมาชิก</title>
<?php
$usr_id = $_GET['mem_id'];

if(isset($_POST['regis'])) {
    $db->query("UPDATE `member` SET 
    `mem_name`='{$_POST['mem_name']}',
    `mem_address`='{$_POST['mem_address']}',
    `mem_date`='{$_POST['mem_date']}',
    `mem_email`='{$_POST['mem_email']}',
    `mem_tel`='{$_POST['mem_tel']}',
    `mem_status`='{$_POST['mem_status']}'
     WHERE mem_id = " . $usr_id);
     getAlert("บันทึกสำเร็จ", 'success');
}

$mem=fetch($db->query("SELECT * FROM member WHERE mem_id = " . $usr_id));
?>
<?php FrameStart(); ?>
<h3 class="bg-white rounded shadow-sm p-3 my-3 text-center">แก้ไขสมาชิก</h3>
<form method="post" class="bg-white rounded shadow-sm p-3 my-3">
    <input type="text" name="mem_name" placeholder="ชื่อ - สกุล" id="" value="<?php echo $mem['mem_name']; ?>" class="form-control mb-3" required>
    <textarea name="mem_address" class="form-control mb-3" placeholder="ที่อยู่" required><?php echo $mem['mem_address']; ?></textarea>
    <div class="mb-3 input-group">
        <label for="" class="input-group-text">วันเกิด</label>
        <input type="date" name="mem_date" required  value="<?php echo $mem['mem_date']; ?>" class="form-control">
    </div>
    <input type="email" name="mem_email" placeholder="อีเมล" class="form-control mb-3" value="<?php echo $mem['mem_email']; ?>" required>
    <input type="number" name="mem_tel" required placeholder="เบอร์โทร" class="form-control mb-3" value="<?php echo $mem['mem_tel']; ?>">

    <select name="mem_status" class="form-control mb-3" required>
        <option value="admin" <?php echo $mem['mem_status'] == 'admin'? "selected": "" ?>>admin</option>
        <option value="user" <?php echo $mem['mem_status'] != 'admin'? "selected": "" ?>>user</option>
    </select>

    <div class="text-end">
        <button name="regis" class="btn btn-dark">บันทึก</button>
        <a href="/11pdln/admin/members" class="btn btn-outline-danger">ย้อนกลับ</a>

    </div>
</form>
<?php FrameEnd(); ?>