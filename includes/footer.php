<footer class="text-center" id="footer">
    &copy; Copyright 2015-2016 Shaunta's Boutique
</footer>

<?php
include 'detailmodal.php';
?>

<!--js libraries-->
<script src="js/jquery-3.1.1.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            $('#logo-text').css('position','absolute')
                .css('top','50%')
                .css('left','15%');
        }).scrollTop(function () {
            $('#logo-text').css('position','absolute')
                .css('top','35%')
                .css('left','15%');
        });

    });
</script>

</body>
</html>