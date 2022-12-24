<?php 
$total_webboard_view=( function () use ($db) {
    $total_view=0;
    $allMem=  $db->query("SELECT * FROM webboard");
    while($mem=fetch($allMem)) {
        $total_view += (int) $mem['web_view'];
    }
    return $total_view;
})();
?>

<div class="bg-white rounded shadow-sm p-3 my-3">
    <h4 class="text-center">ระบบรายงานผลกระดานสนทนา</h4>
    <hr>
    <table class="table">
        <tr>
            <td>จำนวนกระทู้ทั้งหมด</td>
            <td><?php
             echo number_format($db->query("SELECT * FROM webboard")->num_rows ?? 0); ?></td>
             <td>กระทู้</td>
            </tr>
            <tr>
                <td>จำนวนคำตอบทั้งหมด</td>
                <td><?php echo number_format($db->query("SELECT * FROM webboard_detail")->num_rows); ?></td>
                <td>คำตอบ</td>
        </tr>
        <tr>
            <td>จำนวนเข้าชมกระดานสนทนาทั้งหมด</td>
            <td><?php echo number_format($total_webboard_view); ?></td>
            <td>ครั้ง</td>
        </tr>
    </table>
</div>