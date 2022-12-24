<?php
if(isset($_POST['deletePoll'])) {
    $db->query("DELETE FROM poll WHERE poll_id = " . $_POST['poll_id']);
    getAlert("ลบสำเร็จ", 'success');
}
$allPoll=$db->query("SELECT * FROM poll ORDER BY poll_id DESC");
?>

<div class="bg-white rounded shadow-sm p-3 my-3" style="overflow-x: scroll;">
    <table class="table table-hover">
        <thead>
            <th>ไอดี</th>
            <th>หัวข้อ</th>
            <th>วันที่สร้าง</th>
            <th>ผู้สร้าง</th>
            <th>ผลการประเมิน</th>
            <th>จำนวนผู้เข้าชม</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
        </thead>
        <tbody>
            <?php while($poll=fetch($allPoll)) {
                $usr_c_p = fetch($db->query("SELECT * FROM member WHERE mem_id = " . $poll['mem_id'])); ?>
            <tr>
                <td><?php echo $poll['poll_id']; ?></td>
                <td><?php echo $poll['poll_name']; ?></td>
                <td><?php echo $poll['poll_date']; ?></td>
                <td><?php echo $usr_c_p['mem_name'] ?? "ไม่พบผู้ใช้"; ?></td>
                <td><?php echo fetch($db->query("SELECT * FROM poll_detail WHERE poll_id = {$poll['poll_id']}  ORDER BY poll_detail_count DESC"))['poll_detail_name'] ?? 'ผลการประเมินยังไม่พร้อม'; ?></td>
                <td><?php echo $poll['poll_view']; ?></td>
                <td>
                    <a href="?poll_id=<?php echo $poll['poll_id']; ?>" class="btn btn btn-outline-dark">แก้ไข</a>
                </td>
                <td>
                    <form method="post">
                        <input type="hidden" name="poll_id" value="<?php echo $poll['poll_id']; ?>">
                        <button name="deletePoll" class="btn btn-outline-danger">ลบ</button>
                    </form>
                </td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>