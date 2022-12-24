<div class="bg-white rounded shadow-sm p-3 my-3">
    <?php
    if(isset($_POST['deletePollDetail'])) {
        $db->query("DELETE FROM poll_detail WHERE poll_detail_id = " . $_POST['poll_detail_id']);
        header("Refresh:0");die;
    }
    if(isset($_POST['updatePollDetail'])) {
        $db->query("UPDATE poll_detail SET poll_detail_name = '{$_POST['poll_detail_name']}' WHERE poll_detail_id = " . $_POST['poll_detail_id']);
        header("Refresh:0");die;
    }

    $pollDetail=fetch_all($db->query("SELECT * FROM poll_detail WHERE poll_id = " . $_GET['poll_id']));
    $total=0;
    foreach($pollDetail as $p) {
        $total += (int) $p['poll_detail_count'];
    }
    foreach($pollDetail as $pd) :
    $p_total = $total == 0? 0: (int)($pd['poll_detail_count'] / $total * 100);
    ?>
    <form class="d-flex" method="post">
        <input type="hidden" name="poll_detail_id" value="<?php echo $pd['poll_detail_id']; ?>">
        <input type="text" class="form-control" name="poll_detail_name" value="<?php echo $pd['poll_detail_name'] ?>" id="" required>
        <button name="updatePollDetail" class="btn btn-dark mx-2">บันทึก</button>
        <button name="deletePollDetail" class="btn btn-outline-danger">ลบ</button>
    </form>
        <div class="progress mt-1 mb-3">
            <div class="progress-bar bg-dark" style="width: <?php echo $p_total; ?>%;"><?php echo $p_total ?>%</div>
        </div>
    <?php endforeach;
    if(sizeof($pollDetail) == 0): ?>
        <div class="fs-4 text-center">
            ตัวเลือกยังไม่ถูกสร้าง
        </div>
        <?php endif; ?>
</div>