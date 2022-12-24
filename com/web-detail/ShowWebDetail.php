<?php
if(isset($_POST['deleteWeb'])) {
    $db->query("DELETE FROM webboard WHERE web_id = " . $_GET['web_id']);
    header('Location: ./webboard');die;
}
$db->query("UPDATE webboard SET `web_view`=`web_view`+1 WHERE web_id = " . $_GET['web_id']);
$allWeb=$db->query("SELECT * FROM webboard WHERE web_id = " . $_GET['web_id']);
$web=fetch($allWeb);
$usr_web=fetch($db->query("SELECT * FROM member WHERE mem_id = " . $web['mem_id']));
FrameStart();
?>
<title>กระดานสนทนา | <?php echo $web['web_name']; ?></title>
    <div class="text-end mt-3">
        <a href="./webboard" class="btn btn-outline-danger">ย้อนกลับ</a>
    </div>
    <div class="bg-white rounded shadow-sm p-3 my-3">
        <div>
            <span><?php echo $usr_web['mem_name'] ?? "ไม่พบผู้ใช้งาน"; ?></span>
            <span class="text-secondary"> โพสเมื่อ <?php echo $web['web_date']; ?></span>
        </div>
        <div class="p-3 fs-4 text-break">
            <?php echo $web['web_name']; ?>
        </div>
        <div class="text-end">
            <span class="mx-3"><?php echo $web['web_view']; ?> รับชม</span>
            <span><?php echo $db->query("SELECT * FROM webboard_detail WHERE web_id = " . $web['web_id'])->num_rows ?? 0; ?> คำตอบ</span>
        </div>
        <?php if(isset($_SESSION['usr']) && $_SESSION['usr'] == $web['mem_id'] || 
        (isset($_SESSION['status']) && $_SESSION['status'] == 'admin')): ?>
            <form method="post" class="text-end my-3">
                <button name="deleteWeb" class="btn btn-danger">ลบ</button>
            </form>
        <?php endif; ?>
    </div>

<?php
require('./com/web-detail/CreateWebDetail.php');
require('./com/web-detail/ShowComment.php');
FrameEnd(); ?>