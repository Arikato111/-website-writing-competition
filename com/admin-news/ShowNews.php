<?php
if(isset($_POST['deleteNew'])) {
    $db->query("DELETE FROM news WHERE new_id = " . $_POST['new_id']);
    getAlert("ลบสำเร็จ", 'success');
}
$allNews=$db->query("SELECT * FROM news ORDER BY new_id DESC");
?>
<div class="bg-white rounded shadow-sm p-3 my-3" style="overflow-x:scroll;"> 
    <table class="table table-hover">
        <thead>
            <th>ไอดี</th>
            <th>หัวข้อ</th>
            <th>รายละเอียด</th>
            <th>วันที่สร้าง</th>
            <th>ผู้สร้าง</th>
            <th>จำนวนเข้าชม</th>
            <th>จำนวนถูกใจ</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
        </thead>
        <tbody>
            <?php while($news = fetch($allNews)):
                $mem_create=fetch($db->query("SELECT * FROM member WHERE mem_id = " . $news['mem_id'])); ?>
                <tr>
                    <td><?php echo $news['new_id']; ?></td>
                    <td><?php echo $news['new_name']; ?></td>
                    <td><?php echo $news['new_detail']; ?></td>
                    <td><?php echo $news['new_date']; ?></td>
                    <td><?php echo $mem_create['mem_name'] ?? 'ไม่พบผู้ใช้'; ?></td>
                    <td><?php echo $news['new_view']; ?></td>
                    <td><?php echo $db->query("SELECT * FROM news_like WHERE new_id = " . $news['new_id'])->num_rows ?? 0; ?></td>
                    <td>
                        <a href="?new_id=<?php echo $news['new_id']; ?>" class="btn btn-outline-dark">แก้ไข</a>
                    </td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="new_id" value="<?php echo $news['new_id']; ?>">
                            <button name="deleteNew" class="btn btn-outline-danger">ลบ</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</div>