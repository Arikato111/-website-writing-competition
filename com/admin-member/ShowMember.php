<?php
if(isset($_POST["deleteMem"])) {
    $db->query("DELETE FROM member WHERE mem_id = " . $_POST['mem_id']);
    getAlert("ลบสำเร็จ", "success");
}
if(isset($_GET['search'])) {
    $allMember=$db->query("SELECT * FROM member
     WHERE mem_name LIKE '%{$_GET['search']}%' OR 
        mem_name LIKE '%{$_GET['search']}%' 
      ORDER BY mem_id DESC");
} else {
    $allMember=$db->query("SELECT * FROM member ORDER BY mem_id DESC");
}
?>
<div class="bg-white rounded shadow-sm p-3 my-3" style="overflow-x: scroll;">
    <table class="table table-hover">
        <thead>
            <th>ไอดี</th>
            <th>ชื่อ - สกุล</th>
            <th>ที่อยู่</th>
            <th>วันเกิด</th>
            <th>อีเมล</th>
            <th>เบอร์โทร</th>
            <th>ชื่อผู้ใช้</th>
            <th>วันที่สมัคร</th>
            <th>สถานะ</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
        </thead>
        <tbody>
            <?php while($member=fetch($allMember)): ?>
                <tr>
                    <td><?php echo $member['mem_id']; ?></td>
                    <td><?php echo $member['mem_name']; ?></td>
                    <td><?php echo $member['mem_address']; ?></td>
                    <td><?php echo $member['mem_date']; ?></td>
                    <td><?php echo $member['mem_email']; ?></td>
                    <td><?php echo $member['mem_tel']; ?></td>
                    <td><?php echo $member['mem_username']; ?></td>
                    <td><?php echo $member['mem_regis_date']; ?></td>
                    <td><?php echo $member['mem_status']; ?></td>
                    <td>
                        <a class="btn btn-outline-dark" href="?mem_id=<?php echo $member['mem_id']; ?>">แก้ไข</a>
                    </td>
                    <td>
                        <form  method="post">
                            <input type="hidden" name="mem_id" value="<?php echo $member['mem_id']; ?>">
                            <button name="deleteMem" class="btn btn-outline-danger">ลบ</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>        
            </tbody>
    </table>
</div>