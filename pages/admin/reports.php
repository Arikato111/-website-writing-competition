<title>admin | ระบบรายงานผล</title>
<?php FrameStart(); ?>
<h3 class="bg-white rounded shadow-sm p-3 my-3 text-center">ระบบรายงานผล</h3>
<?php
require('./com/admin-reports/ReportMember.php');
require('./com/admin-reports/ReportNews.php');
require('./com/admin-reports/ReportWebboard.php');
require('./com/admin-reports/ReportPoll.php');
?>
<?php FrameEnd(); ?>