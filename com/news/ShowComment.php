<?php
if(isset($_POST['deleteComment'])) {
    $db->query("DELETE FROM news_detail WHERE new_detail_id = " . $_POST['new_detail_id']);
    header("Refresh:0");die;
}
$allComment=$db->query("SELECT * FROM news_detail WHERE new_id = " . $_GET['new_id']);
while($newDetail=fetch($allComment)):
    $usr_com=fetch($db->query("SELECT * FROM member WHERE mem_id = " . $newDetail['mem_id']));
?>
<div class="bg-white rounded shadow-sm p-3 my-3">
    <div>
        <span><?php echo $usr_com['mem_name'] ?? "ไม่พบผู้ใช้"; ?></span>
        <span class="text-secondary"> โพสเมื่อ <?php echo $newDetail['new_detail_date']; ?></span>
        <div class="p-3 fs-4 text-break">
            <?php echo $newDetail['new_detail_name']; ?>
        </div>
        <?php if(isset($_SESSION['usr']) && $_SESSION['usr'] == $newDetail['mem_id'] ||
        (isset($_SESSION['status']) && $_SESSION['status'] == 'admin')): ?>
        <form method="post">
            <input type="hidden" name="new_detail_id" value="<?php echo $newDetail['new_detail_id']; ?>">
            <button name="deleteComment" class="btn btn-outline-danger">ลบความคิดเห็น</button>
        </form>
        <?php endif; ?>
    </div>
</div>
<?php endwhile;?>