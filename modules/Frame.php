<?php function FrameStart() {  ?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
<?php } function FrameEnd() {
    require('./modules/Database.php');  ?>
        </div>
        <div class="col-md-3">
        <h3 class="bg-white rounded shadow-sm p-3 my-3 text-center">เกี่ยวกับ <span class="text-primary">e<span class="fw-bold">den</span></span></h3>
        <div>
            <?php if(isset($_SESSION['usr'])): ?>
               จำนวนเข้าชม <?php echo number_format(fetch($db->query("SELECT * FROM member WHERE mem_id = " . $_SESSION['usr']))['mem_view'] ?? 0); ?> ครั้ง
               <?php endif; ?>
            </div>
            <div>
                <div>วิทยาลัยการอาชีพวารินชำราบ</div>
                <div>
                <a class="text-dark" href="https://github.com/Arikato111">ณวสันต์ วิศิษฏ์ศิงขร</a> - 
                <a class="text-dark" href="mailto:zxcmarksf0456@gmail.com">สิทธิพล ผาลา</a> - 
                <a class="text-dark" href="https://www.facebook.com/tanotookzon">สุบรรณ เฉลิมวงษ์</a>
            </div>
            </div>
        </div>    
        </div>
    </div>
</div>

<?php } ?>