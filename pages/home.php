<?php
if(isset($_POST['likeNews'])) {
    $db->query("INSERT INTO `news_like`(`new_like_id`, `new_id`, `mem_id`) 
    VALUES (NULL,'{$_POST['new_id']}','{$_SESSION['usr']}')");
    header("Refresh:0");die;
}
$allNews=$db->query("SELECT * FROM news ORDER BY new_id DESC LIMIT 100");
?>
<title>ประชาสัมพันธ์</title>
<?php FrameStart(); ?>
<h3 class="bg-white rounded shadow-sm p-3 my-3 text-center">ประชาสัมพันธ์</h3>
<?php while($news=fetch($allNews)):
    if(isset($_SESSION['usr'])) {
        $isLike= $db->query("SELECT * FROM news_like WHERE new_id = {$news['new_id']} AND mem_id = {$_SESSION['usr']}")->num_rows== 0;
    } else {
        $isLike=false;
    }
    $usr_create=fetch($db->query("SELECT * FROM member WHERE mem_id = " . $news['mem_id'])); ?>
<div class="bg-white rounded shadow-sm p-3 my-3">
    <div>
        <span><?php echo $usr_create['mem_name'] ?? "ไม่พบผู้ใช้"; ?></span>
        <span class="text-secondary"> โพสเมื่อ <?php echo $news['new_date']; ?></span>
    </div>
    <h4 class="p-3"><?php echo $news['new_name']; ?></h4>
    <div  class="mx-3 mb-3">
        <?php echo $news['new_detail']; ?>
    </div>
    <div class="card">
        <img src="/11pdln/public/img/<?php echo $news['new_img']; ?>" alt="">
    </div>
    <div class="text-end my-3">
        <span class="mx-3"><?php echo $news['new_view']; ?> รับชม</span>
        <span><?php echo $db->query("SELECT * FROM news_detail WHERE new_id = " . $news['new_id'])->num_rows ?? 0;  ?> ความคิดเห็น</span>
    </div>
    <form method="POST" class="my-3">
        <input type="hidden" name="new_id" value="<?php echo $news['new_id']; ?>">
        <span class="btn btn-outline-primary"><?php echo $db->query("SELECT * FROM news_like WHERE new_id = " . $news['new_id'])->num_rows ?? 0; ?> ถูกใจ</span>
        <button name="likeNews" class="btn btn-primary  <?php echo $isLike ? "" : "disabled"; ?>">กดถูกใจ</button>
        <a class="btn btn-outline-secondary" href="/11pdln/news?new_id=<?php echo $news['new_id']; ?>">ดูความคิดเห็น</a>
    </form>
</div>
<?php
endwhile;
 FrameEnd(); ?>