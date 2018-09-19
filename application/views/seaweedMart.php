<!DOCTYPE html>
<html lang="en">
  <head>
  
    <link rel="icon" href="<?php echo base_url('asset/assets/image/icon/icon.png');?>">
	<title>inseed.id - Seaweed Mart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link href="<?php echo base_url('asset/css/styleCSS.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('asset/css/jcarousel.responsive.js');?>"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('asset/css/jquery.jcarousel.min.js');?>"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  </head>
  <body>
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
  <section id="etalase">
    <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 header text-center">
      <h2>Seaweed <b>Market</b></h2>
    </div>
    <div class="container-fluid">
      <div class="judulSeaweedMart">
        <h2>Cari produk rumput laut  yang kamu inginkan</h2>
        <hr>
      </div>
      <form class="form-wrapper" action="<?php echo base_url();?>index.php/cart/cari">
        <input type="text" name="search" placeholder="Cari Produk" required>
        <input type="submit" value="Cari" id="submit">
      </form>
      
      
<div class="container"><br/>
	<div class="row">
	<?php foreach ($data as $row) { ?>
	<div class="col-xl-3 col-md-5 col-sm-5 col-xs-12 produkSeaweedMart">
					<div class="thumbnail">
							<h4><?php echo $row->namaProduk;?></h4>
							<div class="row">
								<div class="col-md-7">
									<h4><?php echo 'Rp '.number_format($row->hargaProduk);?></h4>
								</div>
								<div class="col-md-5">
									<input type="number" name="quantity" id="<?php echo $row->idProduk;?>" value="1" class="quantity form-control">
								</div>
							</div>
							<button class="add_cart btn btn-success btn-block" data-idProduk="<?php echo $row->idProduk;?>" data-namaProduk="<?php echo $row->namaProduk;?>" data-hargaProduk="<?php echo $row->hargaProduk;?>">Add To Cart</button>
						</div>
					</div>
					
			<?php }?>
			</div>
			<div class="col-xl-4 col-md-5 col-sm-5 col-xs-12 produkSeaweedMart">
			<h4>Shopping Cart</h4>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Produk</th>
						<th>Harga</th>
						<th>Qty</th>
						<th>Subtotal</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody id="detail_cart">
				</tbody>

			</table>
		<a class="add_cart btn btn-success btn-block" href="<?php echo base_url();?>index.php/cart/bayar" style="color:white;">Lanjut Bayar</a>
						
		</div>
	</div>
</div>
</section>

  <?php include_once("template/footer.php"); ?> 
<script type="text/javascript" src="<?php echo base_url().'asset/js/jquery-2.2.3.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'asset/js/bootstrap.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.add_cart').click(function(){
			var idProduk    = $(this).data("idproduk");
			var namaProduk  = $(this).data("namaproduk");
			var hargaProduk = $(this).data("hargaproduk");
			var quantity     = $('#' + idProduk).val();
			$.ajax({
				url : "<?php echo base_url();?>index.php/cart/add_to_cart",
				method : "POST",
				data : {idProduk: idProduk, namaProduk: namaProduk, hargaProduk: hargaProduk, quantity: quantity},
				success: function(data){
					$('#detail_cart').html(data);
				}
			});
		});

		// Load shopping cart
		$('#detail_cart').load("<?php echo base_url();?>index.php/cart/load_cart");

		//Hapus Item Cart
		$(document).on('click','.hapus_cart',function(){
			var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
			$.ajax({
				url : "<?php echo base_url();?>index.php/cart/hapus_cart",
				method : "POST",
				data : {row_id : row_id},
				success :function(data){
					$('#detail_cart').html(data);
				}
			});
		});
	});
</script>

</body>
</html>