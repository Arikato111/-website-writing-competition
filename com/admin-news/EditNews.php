<?php
if(isset($_POST['editNews'])) {
    $db->query("UPDATE news SET new_name = '{$_POST['new_name']}', 
    new_detail = '{$_POST['new_detail']}' WHERE new_id = " . $_GET['new_id']);
    getAlert("แก้ไขสำเร็จ", "success");
}

if(isset($_POST['changeImg'])) {
    $img_name = md5($_FILES['new_img']['name'] . rand()) . '.jpg';
    move_uploaded_file($_FILES['new_img']['tmp_name'], './public/img/' . $img_name);
    $db->query("UPDATE news SET new_img = '$img_name' WHERE new_id = " . $_GET['new_id']);
    getAlert("แก้ไขรูปภาพสำเร็จ", 'success');
}

$news=fetch($db->query("SELECT * FROM news WHERE new_id = " . $_GET['new_id']));
?>
<title>admin | แก้ไขประชาสัมพันธ์</title>
<?php FrameStart(); ?>
<h3 class="bg-white rounded shadow-sm p-3 my-3 text-center">แก้ไขประชาสัมพันธ์</h3>
<form class="bg-white rounded shadow-sm p-3 my-3" method="post" enctype="multipart/form-data">
    <label for="">หัวข้อ</label>
    <input type="text" name="new_name" id="" class="form-control mb-3" value="<?php echo $news['new_name']; ?>" required>

    <label for="">รายละเอียด</label>
    <textarea name="new_detail"  class="form-control mb-3" required><?php echo $news['new_detail']; ?></textarea>

    
    <div class="text-end">
        <button name="editNews" class="btn btn-dark">บันทึก</button>
        <a href="/11pdln/admin/" class="btn btn-outline-danger">ย้อนกลับ</a>
    </div>
    
</form>
<form class="bg-white rounded shadow-sm p-3 my-3" method="post" enctype="multipart/form-data">
    <label for="">แก้ไขรูปภาพ</label>
    <input type="file" class="form-control mb-3" name="new_img" accept="image/*" id="">
    <div class="text-end">
        <button name="changeImg" class="btn btn-dark">บันทึก</button>
    </div>
</form>
<?php FrameEnd(); ?>