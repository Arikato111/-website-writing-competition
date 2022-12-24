<?php 
$total_new_view=( function () use ($db) {
    $total_view=0;
    $allMem=  $db->query("SELECT * FROM news");
    while($mem=fetch($allMem)) {
        $total_view += (int) $mem['new_view'];
    }
    return $total_view;
})();
?>

<div class="bg-white rounded shadow-sm p-3 my-3">
    <h4 class="text-center">ระบบรายงานผลประชาสัมพันธ์</h4>
    <hr>
    <table class="table">
        <tr>
            <td>จำนวนประชาสัมพันธ์ทั้งหมด</td>
            <td><?php
             echo $db->query("SELECT * FROM news")->num_rows; ?></td>
             <td>โพส</td>
            </tr>
            <tr>
                <td>จำนวนเข้าชมประชาสัมพันธ์ทั้งหมด</td>
                <td><?php echo number_format($total_new_view); ?></td>
                <td>ครั้ง</td>
        </tr>
        <tr>
            <td>จำนวนถูกใจทั้งหมดทั้งหมด</td>
            <td><?php echo number_format($db->query("SELECT * FROM news_like")->num_rows ?? 0); ?></td>
            <td>ครั้ง</td>
        </tr>
    </table>
</div>