<?php
if(isset($_GET['poll_id'])) return require("./com/admin-polls/EditPoll.php");
?>
<title>admin | จัดการแบบประเมิน</title>
<div class="container">
    <h3 class="bg-white rounded shadow-sm p-3 my-3 text-center">จัดการแบบประเมิน</h3>
    <?php
     require('./com/admin-polls/CreatePoll.php');
     require('./com/admin-polls/ShowPoll.php');
     ?>
</div>