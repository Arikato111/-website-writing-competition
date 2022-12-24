<?php
if(isset($_GET['poll_id'])) return require('./com/poll/ShowPoll.php');
?>

<title>แบบประเมิน</title>
<?php FrameStart(); ?>
<h3 class="bg-white rounded shadow-sm p-3 my-3 text-center">แบบประเมิน</h3>
<?php
$allPoll=$db->query("SELECT * FROM poll ORDER BY poll_id DESC");
while($poll=fetch($allPoll)):
    $sur_poll=fetch($db->query("SELECT * FROM member WHERE mem_id = " . $poll['mem_id']));
?>
    <div class="bg-white rounded shadow-sm p-3 my-3">
        <div>
            <span><?php echo $sur_poll['mem_name'] ?? 'ไม่พบผู้ใช้งาน';  ?></span>
            <span class="text-secondary"> โพสเมื่อ <?php echo $poll['poll_date']; ?></span>
        </div>
        <div class="p-3 fs-4">
            <?php echo $poll['poll_name']; ?>
        </div>
        <div class="text-end m-3">
            <span><?php echo $poll['poll_view']; ?> รับชม</span>
        </div>
        <div class="text-end">
            <a class="btn btn-primary" href="?poll_id=<?php echo $poll['poll_id']; ?>">ตอบแบบประเมิน</a>
        </div>
    </div>
<?php
endwhile;
FrameEnd(); ?>