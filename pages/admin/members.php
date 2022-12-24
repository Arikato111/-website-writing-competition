<?php
if(isset($_GET['mem_id'])) return require('./com/admin-member/EditMember.php');
?>
<title>admin | จัดการสมาชิก</title>
<div class="container">
    <h3 class="bg-white rounded shadow-sm p-3 my-3 text-center">จัดการสมาชิก</h3>
    <div class="text-end">
        <a class="btn btn-outline-dark" href="/11pdln/admin/create-member">เพิ่มผู้ใช้งาน</a>
    </div>
    <form class="bg-white rounded shadow-sm p-2 my-3 input-group">
        <input class="form-control" type="search" name="search" id="">
        <button class="btn btn-dark">ค้นหาสมาชิก</button>
    </form>
    <?php
    require('./com/admin-member/ShowMember.php');
    ?>
</div>