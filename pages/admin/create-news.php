<?php
if(isset($_POST['createNews'])) {
    $img_name = md5($_FILES['new_img']['name'] . rand()) . '.jpg';
    move_uploaded_file($_FILES['new_img']['tmp_name'], './public/img/' . $img_name);
    $date=date('Y-m-d');
    $db->query("INSERT INTO `news`(`new_id`, `new_name`, `new_detail`, `new_date`, `mem_id`, `new_view`, `new_img`) 
    VALUES (NULL,'{$_POST['new_name']}','{$_POST['new_detail']}','$date','{$_SESSION['usr']}', 0,'$img_name')");
    getAlert("เพิ่มสำเร็จ", "success");
}
?>
<title>admin | สร้างประชาสัมพันธ์</title>
<?php FrameStart(); ?>
<h3 class="bg-white rounded shadow-sm p-3 my-3 text-center">สร้างประชาสัมพันธ์</h3>
<form class="bg-white rounded shadow-sm p-3 my-3" method="post" enctype="multipart/form-data">
    <label for="">หัวข้อ</label>
    <input type="text" name="new_name" id="" class="form-control mb-3" required>

    <label for="">รายละเอียด</label>
    <textarea name="new_detail"  class="form-control mb-3" required></textarea>

    <label for="">รูปภาพ</label>
    <input type="file" class="form-control mb-3" name="new_img" accept="image/*" id="" required>

    <div class="text-end">
        <button name="createNews" class="btn btn-dark">สร้าง</button>
        <a href="/11pdln/admin/" class="btn btn-outline-danger">ย้อนกลับ</a>
    </div>
    
</form>
<?php FrameEnd(); ?>