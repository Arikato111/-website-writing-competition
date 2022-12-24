<?php
if(getParams(1) == 'admin') {
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'admin') {
        return require('./com/AdminNavbar.php');
    }
}
 ?>
<nav class="navbar navbar-expand-md bg-white shadow-sm navbar-light sticky-top">
    <div class="container-fluid">
        <a href="/11pdln/home" class="navbar-brand text-primary">e<span class="fw-bold">den</span></a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarText">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">   
                    <a href="/11pdln/home" class="nav-link">หน้าหลัก</a>
                </li>
                <li class="nav-item">   
                    <a href="/11pdln/webboard" class="nav-link">กระดานสนทนา</a>
                </li>
                <li class="nav-item">   
                    <a href="/11pdln/polls" class="nav-link">แบบประเมิน</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <?php if(isset($_SESSION['usr'])): ?>
                <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 'admin'): ?>
                <li class="nav-item">   
                    <a href="/11pdln/admin/" class="nav-link">หน้าแอดมิน</a>
                </li>
                <?php endif; ?>
                <li class="nav-item">   
                    <a href="/11pdln/profile" class="nav-link">โปรไฟล์</a>
                </li>
                <li class="nav-item">   
                    <a href="/11pdln/login?logout" class="nav-link">ออกจากระบบ</a>
                </li>
                <?php else: ?>
                <li class="nav-item">   
                    <a href="/11pdln/register" class="nav-link">สมัครสมาชิก</a>
                </li>
                <li class="nav-item">   
                    <a href="/11pdln/login" class="nav-link">เข้าสู่ระบบ</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>