<?php
$allWeb=$db->query("SELECT * FROM webboard ORDER BY web_id DESC");
while($web=fetch($allWeb)):
    $usr_web=fetch($db->query("SELECT * FROM member WHERE mem_id = " . $web['mem_id']));
?>
<a class="nav-link" href="?web_id=<?php echo $web['web_id']; ?>">
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
    </div>
</a>
<?php endwhile; ?>