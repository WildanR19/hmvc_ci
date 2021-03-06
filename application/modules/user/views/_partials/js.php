
  <script src="<?php echo base_url('assets/js/jquery-migrate-3.0.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.waypoints.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.stellar.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/aos.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.animateNumber.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.timepicker.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/scrollax.min.js'); ?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url('assets/js/google-map.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('.add_cart').click(function(){
            var product_id    = $(this).data("produkid");
            var name  = $(this).data("produknama");
            var price = $(this).data("produkharga");
            var quantity     = $('#' + product_id).val();
            $.ajax({
                url : "<?php echo base_url();?>user/add_to_cart",
                method : "POST",
                data : {product_id: product_id, name: name, price: price, quantity: quantity},
                success: function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
 
        // Load shopping cart
        $('#detail_cart').load("<?php echo base_url();?>user/load_cart");
 
        //Hapus Item Cart
        $(document).on('click','.hapus_cart',function(){
            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url : "<?php echo base_url();?>user/hapus_cart",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
    });

    $('#logout').click(function(e) {
			e.preventDefault();
			
			Swal.fire({
				title: 'Yakin?',
				text: "Yakin Ingin Logout ?",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes'
			}).then((result) => {
				if (result.value) {
					window.location.href = "<?php echo base_url('user/loginuser/logout'); ?>" ;
				}
			})
		});
</script>