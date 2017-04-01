<footer class="text-center" id="footer">
    &copy; Copyright 2015-2016 Shaunta's Boutique
</footer>



<!--js libraries-->
<script src="js/jquery-3.1.1.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script>
    function detail(id) {
        var data = {"id":id};
        $.ajax({
            url:'/ecommerce/includes/detailmodal.php',
            method:'post',
            data:data,
            success:function(data){
                $('html,body').append(data);
                $('#detail-modal').modal('toggle');
            },
            error:
            function () {
                alert('something is wrong,please call customer service');
            }
            
        });
    }
    $('#refresh').click(function() {
        location.reload();
    });
</script>


</body>
</html>