<title>แก้ไขโปรไฟล์</title>
<?php
if(!isset($_SESSION['usr'])) return require('./pages/_error.php');
$usr_id = $_SESSION['usr'];

if(isset($_POST['regis'])) {
    $db->query("UPDATE `member` SET 
    `mem_name`='{$_POST['mem_name']}',
    `mem_address`='{$_POST['mem_address']}',
    `mem_date`='{$_POST['mem_date']}',
    `mem_email`='{$_POST['mem_email']}',
    `mem_tel`='{$_POST['mem_tel']}'
     WHERE mem_id = " . $usr_id);
     getAlert("บันทึกสำเร็จ", 'success');
}

$mem=fetch($db->query("SELECT * FROM member WHERE mem_id = " . $usr_id));
?>
<?php FrameStart(); ?>
<h3 class="bg-white rounded shadow-sm p-3 my-3 text-center">แก้ไขโปรไฟล์</h3>
<form method="post" class="bg-white rounded shadow-sm p-3 my-3">
    <input type="text" name="mem_name" placeholder="ชื่อ - สกุล" id="" value="<?php echo $mem['mem_name']; ?>" class="form-control mb-3" required>
    <textarea name="mem_address" class="form-control mb-3" placeholder="ที่อยู่" required><?php echo $mem['mem_address']; ?></textarea>
    <div class="mb-3 input-group">
        <label for="" class="input-group-text">วันเกิด</label>
        <input type="date" name="mem_date" required  value="<?php echo $mem['mem_date']; ?>" class="form-control">
    </div>
    <input type="email" name="mem_email" placeholder="อีเมล" class="form-control mb-3" value="<?php echo $mem['mem_email']; ?>" required>
    <input type="number" name="mem_tel" required placeholder="เบอร์โทร" class="form-control mb-3" value="<?php echo $mem['mem_tel']; ?>">

    <div class="text-end">
        <button name="regis" class="btn btn-primary">บันทึก</button>
    </div>
</form>
<?php FrameEnd(); ?>