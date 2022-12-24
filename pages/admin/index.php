<?php
if(isset($_GET['new_id'])) return require('./com/admin-news/EditNews.php');
?>
<title>admin | จัดการประชาสัมพันธ์</title>
<div class="container">
    <h3 class="bg-white rounded shadow-sm p-3 my-3 text-center">จัดการประชาสัมพันธ์</h3>
    <div class="text-end">
        <a class="btn btn-outline-dark" href="/11pdln/admin/create-news">สร้างประชาสัมพันธ์</a>
    </div>
    <?php 
    require('./com/admin-news/ShowNews.php');
    ?>
</div>
