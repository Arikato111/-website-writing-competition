<?php if(isset($_GET['web_id'])) return require('./com/web-detail/ShowWebDetail.php'); ?>

<title>กระดานสนทนา</title>
<?php FrameStart();
require('./com/webboard/CreateWeb.php');
require('./com/webboard/ShowWebboard.php');
 ?>

<?php FrameEnd(); ?>
