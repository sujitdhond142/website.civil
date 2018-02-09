<?php
    include_once('./views/head.php');
?>
<body>
    <div class="wrapper">
        <?php
            $isPageBos=true;
            include_once('./views/nav.php');
            include_once('./views/bos.php');
            include_once('./views/footer.php');
        ?>
    </div>
</body>
<script>
    $(document).ready(function(){
        var hash = document.location.hash;
        if(hash){
            UIkit.switcher("#testtab").show(1);
        }else{
            UIkit.switcher("#testtab").show(0);
        }
    });
</script>


