<?php 
if(isset($_POST['deleteComment'])) {
    $db->query("DELETE FROM webboard_detail WHERE web_detail_id = " . $_POST['web_detail_id']);
    header("Refresh:0");die;

}
$allWebDetail=$db->query("SELECT * FROM webboard_detail WHERE web_id = " . $_GET['web_id']);
while($webDetail=fetch($allWebDetail)):
    $usr_comment=fetch($db->query("SELECT * FROM member WHERE mem_id = " . $webDetail['mem_id']));
?>
<div class="bg-white rounded shadow-sm p-3 my-3">
    <div>
        <span><?php echo $usr_comment['mem_name'] ?? "ไม่พบผู้ใช้งาน"; ?></span>
        <span class="text-secondary"> โพสเมื่อ <?php echo $webDetail['web_detail_date']; ?></span>
    </div>
    <div class="fs-4 text-break p-3">
        <?php echo  $webDetail['web_detail_name']; ?>
    </div>
    <?php if(isset($_SESSION['usr']) && $_SESSION['usr'] == $webDetail['mem_id'] || 
        (isset($_SESSION['status']) && $_SESSION['status'] == 'admin')): ?>
            <form method="post" class="text-end my-3">
                <input type="hidden" name="web_detail_id" value="<?php echo $webDetail['web_detail_id']; ?>">
                <button name="deleteComment" class="btn btn-danger">ลบ</button>
            </form>
        <?php endif; ?>
</div>
<?php endwhile; ?>