<?php function getAlert($text, $color="dark") {  ?>
<div id="getAlert" class="container fixed-top">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="bg-white rounded shadow-lg p-3 my-3 text-center text-<?php echo $color; ?>"><?php echo $text; ?></div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<script>
    setTimeout(() => {
        document.getElementById("getAlert").innerHTML = '';
    }, 2000);
</script>

<?php } ?>