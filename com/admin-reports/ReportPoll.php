<?php 
$allPoll=$db->query("SELECT * FROM poll ORDER BY poll_id DESC LIMIT 100");
?>

<div class="bg-white rounded shadow-sm p-3 my-3">
    <h4 class="text-center">ระบบรายงานผลสมาชิก</h4>
    <hr>
    <table class="table">
        <tr class="fw-bold">
            <td>หัวข้อ</td>
             <td>ผลการประเมิน</td>
            </tr>
            <?php while($poll=fetch($allPoll)) : ?>
            <tr>
                <td><?php echo $poll['poll_name']; ?></td>
                <td><?php echo fetch($db->query("SELECT * FROM poll_detail WHERE poll_id = {$poll['poll_id']} ORDER BY poll_detail_count DESC "))['poll_detail_name'] ?? "ยังไม่มีผลการประเมิน"; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>