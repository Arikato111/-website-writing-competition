<?php 
$total_mem_view=( function () use ($db) {
    $total_view=0;
    $allMem=  $db->query("SELECT * FROM member");
    while($mem=fetch($allMem)) {
        $total_view += (int) $mem['mem_view'];
    }
    return $total_view;
})();
?>

<div class="bg-white rounded shadow-sm p-3 my-3">
    <h4 class="text-center">ระบบรายงานผลสมาชิก</h4>
    <hr>
    <table class="table">
        <tr>
            <td>จำนวนสมาชิกใหม่วันนี้</td>
            <td><?php
             $date=date('Y-m-d');
             echo $db->query("SELECT * FROM member WHERE mem_regis_date = '$date'")->num_rows; ?></td>
             <td>คน</td>
            </tr>
            <tr>
                <td>จำนวนสมาชิกทั้งหมด</td>
                <td><?php echo $db->query("SELECT * FROM member")->num_rows; ?></td>
                <td>คน</td>
        </tr>
        <tr>
            <td>จำนวนเข้าชมเว็บไซต์ทั้งหมด</td>
            <td><?php echo number_format($total_mem_view); ?></td>
            <td>ครั้ง</td>
        </tr>
    </table>
</div>