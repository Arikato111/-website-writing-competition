<div class="bg-white rounded shadow-sm p-3 my-3">
    <?php
   
   $pollDetail=fetch_all($db->query("SELECT * FROM poll_detail WHERE poll_id = " . $_GET['poll_id']));

   if(isset($_POST['selectPollDetail'])) {
    if(isset($_SESSION['usr'])) {
        $db->query("UPDATE poll_detail SET `poll_detail_count`=`poll_detail_count`+1 WHERE poll_detail_id = " . $_POST['poll_detail_id']);
        $db->query("INSERT INTO `pollpost`(`pp_id`, `poll_id`, `mem_id`) 
    VALUES (NULL,{$_GET['poll_id']},{$_SESSION['usr']})");
        header("Refresh:0");die;
    } else {
        getAlert("กรุณาเข้าสู่ระบบ", 'danger');
    }
   }

   if(isset($_SESSION['usr'])) {
     $isVote= $db->query("SELECT * FROM pollpost WHERE 
     poll_id = {$_GET['poll_id']} AND 
     mem_id = {$_SESSION['usr']} ")->num_rows==0;
   } else {
    $isVote=false;  
   }

    $total=0;
    foreach($pollDetail as $p) {
        $total += (int) $p['poll_detail_count'];
    }
    foreach($pollDetail as $pd) :
    $p_total = $total == 0? 0: (int)($pd['poll_detail_count'] / $total * 100);
    ?>
    <form class="d-flex" method="post">
        <input type="hidden" name="poll_detail_id" value="<?php echo $pd['poll_detail_id']; ?>">
        <div class="form-control text-break"><?php echo $pd['poll_detail_name']; ?></div>
        <button name="selectPollDetail" class="btn btn-primary <?php echo $isVote? '': "disabled"; ?> mx-2">เลือก</button>
    </form>
        <div class="progress mt-1 mb-3">
            <div class="progress-bar" style="width: <?php echo $p_total; ?>%;"><?php echo $p_total ?>%</div>
        </div>
    <?php endforeach;
    if(sizeof($pollDetail) == 0): ?>
    <div class="fs-4 text-center">
        ตัวเลือกยังไม่พร้อม กรุณาเข้าใหม่ภายหลัง
    </div>
    <?php endif; ?>
</div>