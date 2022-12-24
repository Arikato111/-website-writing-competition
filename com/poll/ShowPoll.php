<?php FrameStart(); ?>
<div class="text-end">
    <a href="./polls" class="btn btn btn-outline-danger mt-3">ย้อนกลับ</a>
</div>
<h3 class="bg-white rounded shadow-sm p-3 my-3 text-center">แบบประเมิน</h3>
<?php
   $db->query("UPDATE poll SET `poll_view`=`poll_view`+1 WHERE poll_id = " . $_GET['poll_id']);
   
   $allPoll=$db->query("SELECT * FROM poll WHERE poll_id = " . $_GET['poll_id']);
   $poll=fetch($allPoll);
   $sur_poll=fetch($db->query("SELECT * FROM member WHERE mem_id = " . $poll['mem_id']));
   ?>
<title>ตอบแบบประเมิน | <?php echo $poll['poll_name']; ?></title>
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
    </div>
    <?php
    require('./com/poll/ShowPollDetail.php');

FrameEnd(); ?>