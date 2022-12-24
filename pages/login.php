<?php
if(isset($_GET['logout'])) {
    session_unset();
    header("Location: /11pdln/login");die;
}
if(isset($_POST['getLogin'])) {
    $usr=fetch($db->query("SELECT * FROM member WHERE 
    `mem_username` = '{$_POST['mem_username']}' AND 
    `mem_password` = MD5('{$_POST['mem_password']}') "));
    if($usr) {
        $_SESSION['usr'] = $usr['mem_id'];
        $_SESSION['status'] = $usr['mem_status'];
        header("Location: /11pdln/");die;
    } else {
        getAlert("ขื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง", 'danger');
    }
}
?>
<title>เข้าสู่ระบบ</title>
<?php FrameStart(); ?>
<h3 class="bg-white rounded shadow-sm p-3 my-3 text-center">เข้าสู่ระบบ</h3>
<form method="post" class="bg-white rounded shadow-sm p-3 my-3">
    <input type="text" name="mem_username" class="form-control mb-3" id="" placeholder="ชื่อผู้ใช้" required>
    <input type="password" name="mem_password" class="form-control mb-3" required placeholder="รหัสผ่าน" id="">
    <div class="text-end">
        <button name="getLogin" class="btn btn-primary">เข้าสู่ระบบ</button>
    </div>
</form>
<?php FrameEnd(); ?>