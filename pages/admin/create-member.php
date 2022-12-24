<?php
if(isset($_POST['regis'])) {
    if($_POST['mem_password'] == $_POST['mem_password2']) {
        if($db->query("SELECT * FROM member WHERE mem_username = '{$_POST['mem_username']}'")->num_rows == 0) {
            $date=date('Y-m-d');
            $db->query("INSERT INTO `member`(`mem_id`, `mem_name`, `mem_address`, `mem_date`, `mem_email`, `mem_tel`, `mem_username`, `mem_password`, `mem_view`, `mem_status`, `mem_regis_date`) 
            VALUES (NULL,'{$_POST['mem_name']}','{$_POST['mem_address']}','{$_POST['mem_date']}','{$_POST['mem_email']}','{$_POST['mem_tel']}','{$_POST['mem_username']}', MD5('{$_POST['mem_password']}'), 0,'user','$date')");
            getAlert("เพิ่มสำเร็จ กรุณาเข้าสู่ระบบเพื่อใช้งาน", 'success');
        } else {
            getAlert("ชื่อผู้ใช้นี้ถูกใช้งานแล้ว", 'danger');
        }
    } else {
        getAlert("รหัสผ่านไม่ตรงกัน", 'danger');
    }
}
?>

<title>admin | เพิ่มสมาชิก</title>
<?php FrameStart(); ?>
<h3 class="bg-white rounded shadow-sm p-3 my-3 text-center">เพิ่มสมาชิก</h3>
<form method="post" class="bg-white rounded shadow-sm p-3 my-3">
    <input type="text" name="mem_name" placeholder="ชื่อ - สกุล" id="" class="form-control mb-3" required>
    <textarea name="mem_address" class="form-control mb-3" placeholder="ที่อยู่" required></textarea>
    <div class="mb-3 input-group">
        <label for="" class="input-group-text">วันเกิด</label>
        <input type="date" name="mem_date" required  class="form-control">
    </div>
    <input type="email" name="mem_email" placeholder="อีเมล" class="form-control mb-3" required>
    <input type="number" name="mem_tel" required placeholder="เบอร์โทร" class="form-control mb-3">
    <input type="text" name="mem_username" required class="form-control mb-3" placeholder="ชื่อผู้ใช้" required id="">

    <input type="password" name="mem_password" required placeholder="รหัสผ่าน"  class="form-control mb-3">
    <input type="password" name="mem_password2" required placeholder="ยืนยันรหัสผ่าน"  class="form-control mb-3">

    <div class="text-end">
        <button name="regis" class="btn btn-dark">เพิ่ม</button>
        <a href="/11pdln/admin/members" class="btn btn-outline-danger">ย้อนกลับ</a>
    </div>
</form>
<?php FrameEnd(); ?>