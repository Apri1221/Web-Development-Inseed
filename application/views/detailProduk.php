<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>inseed.id - Seaweed Mart</title>
    <?php include_once("template/header.php"); ?>
  </head>
  <body>
    <?php include_once("template/navbar.php"); ?>
    <section id="detailProduk">
      <?php
      foreach ($detail as $a) {
      ?>
      <div class="container-fluid" style="margin:3% 0">
        <div class="row" >
          <div class="col-lg-4 col-md-5 col-sm-11 slideshowProduk" style=" margin: 2%; ">
            <div class="text-center">
              <h2>Foto Produk:</h2>
            </div>
            
            <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode( $a->foto ); ?>">
            
          </div>
          <div class=" col-lg-3 col-md-5 col-sm-11 descProdukDetail">
            
            <h2><?php echo $a->namaProduk?></h2>
            <h5>Harga:<span > Rp <?php echo $a->hargaProduk?></span></h5>
            <h5>Stok Produk:<span > <?php echo $a->stok?> pcs</span></h5>
            <h6>Deskripsi:</h6>
            <p><?php echo $a->detail?>
            </p>
            <form method="get" action="<?=base_url()?>index.php/cart/add_to_cart/<?php echo $a->idProduk?>">
              <div class="form-group">
                <label>Kuantitas: </label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus" data-field="quant[2]"><i class="fa fa-minus"></i></button>
                  </div>

                  <input type="text" class="form-control"  id="quantity" name="quant[2]" min="1" max="<?php echo ($a->stok)-round(($a->stok)/2); ?>" value="1" style="text-align: center;">

                  <div class="input-group-append">
                    <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="quant[2]"><i class="fa fa-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <input type="submit" value="Beli Sekarang" name="beli" class="btn btn-success btn-lg btn-block text-uppercase" style="margin-top: 10%;">
              </input>
            </form>
            <?php } ?>
          </div>
          <div class="col-lg-3 col-md-8 col-sm-11 descSeller" >
            <?php
            foreach ($detail as $a) {
            ?>
            <h2 style="color: green;">Produk Oleh:</h2><br>
            <img src="<?php echo base_url('asset/assets/image/seller.svg');?>"><br><br>
            <h4><?php echo $a->idPenjual?></h4>
            <span class="fas fa-star"><span class="fas fa-star" ><span class="fas fa-star"><span class="fas fa-star"></span></span></span></span>
            <?php } ?>
          </div>
        </div>
        
      </div>
    </section>
    <?php include_once("template/footer.php"); ?>
  </body>
  <script type="text/javascript">
    $('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
    });
    $('.input-number').focusin(function(){
       $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {
        
        minValue =  parseInt($(this).attr('min'));
        maxValue =  parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());
        
        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        
    });
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
  </script>
</html>