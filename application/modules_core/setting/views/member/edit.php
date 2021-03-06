        
    <div class="contentpanel">
               
	  <div class="row">
	  
		  <div class="col-sm-12 edit-member" id="menukiri">   	          
	        <!-- Nav tabs -->
	        <ul class="nav nav-tabs nav-justified nav-profile">
	          <li class="active" id="profil"><a href="#profileMember" data-toggle="tab">Profile</a></li>
	          <li class="" id="diskon"><a href="#discountedProduct" data-toggle="tab">Discounted Products</a></li>
	        </ul>
	        
	        <!-- Tab panes -->
	        <div class="tab-content">
	          <div class="tab-pane active" id="profileMember">	            
				  	<div class="pane-header">
				  		<h5 class="text-primary">Edit Barang</h5>
				  	</div>

			     <?php if ($message != null ) : ?>
			      <div class="alert alert-success">
			                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			                <strong>Well done!</strong> <?php echo $message; ?>
			        </div>
			      <?php endif ; ?>

			      <div id="pesan" class="alert alert-success" style="display:none">
			          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			          <strong>Well done!</strong>
			      </div>

				  	<div class="pane-content">
					  	<div class="pane-header-content">
					  		<a href="#">Profile</a>
					  	</div>				  
					  	<div class="panel-body">
							<form id="regisMember" action="" class="form-horizontal" novalidate="novalidate">
						
						     <input type="hidden" id="adduserid" name="user_id" value="<?php echo $user['user_id']; ?>">						
						     <input type="hidden" id="addmemberid" name="member_id" value="<?php echo $member->member_id ?>">						


					            <div class="form-group">
					              <label class="col-sm-2 control-label">ID <span class="asterisk">*</span></label>
					              <div class="col-sm-5">
					                <input type="text" id="addid" name="id" class="form-control" placeholder="Masukkan ID Member, contoh KTP/SIM/Paspor" value="<?php echo $member->pelanggan_id ?>" required="">
					              </div>
					            </div>		  
					            <div class="form-group">
					              <label class="col-sm-2 control-label">Full Name <span class="asterisk">*</span></label>
					              <div class="col-sm-8">
					                <input type="text" id="addname" name="name" class="form-control" placeholder="Masukkan nama lengkap member..." value="<?php echo $member->nama_lengkap ?>" required="">
					              </div>
					            </div>
					            
					            <div class="form-group">
					              <label class="col-sm-2 control-label">Alamat <span class="asterisk">*</span></label>
					              <div class="col-sm-8">
					                <textarea rows="5" id="addalamat" class="form-control" placeholder="Masukkan alamat member..."  required=""><?php echo $member->alamat ?></textarea>
					              </div>
					            </div>
					
								<div class="form-group">
					              <label class="col-sm-2 control-label">Daerah <span class="asterisk">*</span></label>
					              <div class="col-sm-2">
						            <select id="addprop" name="prop" class="form-control input-sm" required="">
					                <?php foreach ($provinsis as $provinsi) : ?>
					                  <option value="<?php echo $provinsi->id ?>" <?php if ($member->propinsi_id == $provinsi->id) : ?> selected <?php endif; ?>
					                  	> <?php echo $provinsi->nama?> </option>
					                <?php endforeach; ?>
					                </select>               
					                <label class="error" for="prop"></label>
					              </div>
					              <div class="col-sm-2">
					                <select id="addkota" name="kota" class="form-control input-sm" required="">
					                  <option value="">Pilih Kabupaten/Kota</option>
					                </select>
					                <label class="error" for="kota"></label>
					              </div>               
					              <div class="col-sm-2">
					                <select id="addkec" name="kec" class="form-control input-sm" required="">
					                  <option value="">Pilih Kecamatan</option>
					                </select>
					                <label class="error" for="kec"></label>
					              </div>    
					              <div class="col-sm-2">
					                <select id="addkel" name="kel" class="form-control input-sm" required="">
					                  <option value="">Pilih Kelurahan/Desa</option>
					                </select>
					                <label class="error" for="kel"></label>
					              </div>                        
					            </div>
					            
					            
					            <div class="form-group">
					              <label class="col-sm-2 control-label">Kode Pos <span class="asterisk">*</span></label>
					              <div class="col-sm-5">
					                <input type="text" id="addkdpos" name="kode-pos" class="form-control num" placeholder="Type member zip..." value="<?php echo $member->kodepos ?>" required="">
					              </div>
					            </div>
					
					            <div class="form-group">
					              <label class="col-sm-2 control-label">No Kontak <span class="asterisk">*</span></label>
					              <div class="col-sm-4">
					                <input type="text" id="addrmh" name="telephone" class="form-control num" placeholder="masukkan nomer telepon..." value="<?php echo $member->telp_rumah ?>" required="">
					              </div>
					              <div class="col-sm-4">
					                <input type="text" id="addhp" name="hp" class="form-control num" placeholder="atau masukkan nomer HP... " value="<?php echo $member->telp_hp ?>">
					              </div>              
					            </div>
					            
					            <div class="form-group">
					              <label class="col-sm-2 control-label">No Fax</label>
					              <div class="col-sm-5">
					                <input type="text" id="addfax" name="fax" class="form-control num" placeholder="Type member fax..." value="<?php echo $member->fax ?>">
					              </div>
					            </div>
					            
					            
					            <div class="form-group">
					              <label class="col-sm-2 control-label">Email <span class="asterisk">*</span></label>
					              <div class="col-sm-5">
					                <input type="email" id="addemail" name="email" class="form-control" placeholder="Type member email..." required="" value="<?php echo $member->email ?>">
					              </div>
					            </div>

					            <div class="form-group">
					              <label class="col-sm-2 control-label">Sales <span class="asterisk">*</span></label>
					              <div class="col-sm-5">
						            <select id="addsales" name="sales" class="form-control input-sm" required="">
                                    <option value=""> Pilih Sales </option>
					                <?php foreach ($saless as $sales) : ?>
					                  <option value="<?php echo $sales->kary_id ?>" <?php if ($member->sales_id == $sales->kary_id) : ?> selected <?php endif; ?>
					                  	> <?php echo $sales->username?> </option>
					                <?php endforeach; ?>
						            </select>
					              </div>
					            </div>                        	

						      <div class="panel-footer">
						        <a class="btn btn-success" id="updateMember">Update Data Member</a>
						      </div>
							  </form>
					  	</div>							  
				  	</div>
	          </div>
	          
	          <div class="tab-pane" id="discountedProduct">
			  	<div class="pane-header">
			  		<h5 class="text-primary"><span id="namaatas"><?php echo $member->nama_lengkap ?></span></h5>
			  	</div>

			      <div id="pesan2" class="alert alert-success" style="display:none">
			          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			          <strong>Well done!</strong>
			      </div>


			  	<div class="pane-content">
				  	<div class="pane-header-content">
				  		<a href="#">Discounted Products</a>
				  	</div>				  			  	
			        <div class="panel-body discounted-products">
			            <div class="table-responsive">
							<table class="table table-striped mb30 " id="basket-buy">
					            <thead>
					              <tr>
					                <th>Barcode</th>
					                <th>Nama Barang</th>
					                <th>Minimal Quantity</th>
					                <th class="text-right">Discounted Price</th>
					                <th></th>
					              </tr>
					            </thead>
					            <tbody>

					            	<?php $i = 0; ?>
					            	<?php $max = count($diskon_produks); ?>
					            	<?php if($max != 0) : while ($i < $max) : ?>

						              <tr class="products">
						                <td>
						                	<label for="product-name"><?php echo $diskon_produks[$i]->barcode++ ; ?></label>
						                	<input type="hidden" value="<?php echo $diskon_produks[$i]->id++ ; ?>" class="noedit iddiskon"/>
						                </td>
						                <td>
						                	<label for="product-name"><?php echo $diskon_produks[$i]->barcode++ ; ?></label>
						                </td>						                
						                <td>
						                	<span for="qty" class="amount"><?php echo $diskon_produks[$i]->min_qty++ ; ?></span>
						                	<input data-i-zero="deny" type="text" value="<?php echo $diskon_produks[$i]->min_qty++ ; ?>" class="edit-amount qty"/>
						                </td>
						                <td class="text-right">
						                	<span class="amount price"><?php echo $diskon_produks[$i]->harga_jual++ ; ?></span>
						                	<input type="text" class="edit-amount price" value="<?php echo $diskon_produks[$i]->harga_jual++ ; ?>" data-a-sign="Rp " data-a-dec="," data-a-sep="."/>
						                </td>
						                <td class="table-action">
						                  <a href="#" class="delete-row"><i class="fa fa-times"></i></a>
						                </td>
						              </tr>

					            	<?php $i++; ?>
					            	<?php endwhile; ?>
						            <?php else : ?>
							              <tr class="products">
								                <td colspan="4"><label for="product-name" class="text text-danger">Belum ada pengaturan diskon untuk member ini</label></td>
								           </tr>

						            <?php endif ?>


					            </tbody>
					          </table>            
			            </div><!-- table-responsive -->
			            
			        </div><!-- panel-body -->	 	
			  	</div>
	          </div>
	        </div><!-- tab-content -->
	        
	        <!-- end Nav tabs -->
        </div>	  
	  </div>        
    </div><!-- contentpanel -->
    
<script src="<?php echo base_url();?>bracket/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/modernizr.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/toggles.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/retina.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.cookies.js"></script>

<script src="<?php echo base_url()?>bracket/js/jquery.datatables.min.js"></script>
<script src="<?php echo base_url()?>bracket/js/chosen.jquery.min.js"></script>
<script src="<?php echo base_url()?>bracket/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.formatCurrency-1.4.0.min.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.formatCurrency.id-ID.js"></script>
<script src="<?php echo base_url();?>bracket/js/autoNumeric.js"></script>
<script src="<?php echo base_url();?>bracket/js/jquery.numeric.js"></script>
<script src="<?php echo base_url();?>bracket/js/holder.js"></script>
<script src="<?php echo base_url();?>bracket/js/custom.js"></script>

<script type="text/javascript">
        CI_ROOT = "<?=base_url() ?>";
</script>

<script type="text/javascript">
var $j = jQuery.noConflict(); 

jQuery(document).ready(function() {
  	initDiscountProducts();
  	initProfileField();
	initasal();

	//format numeric on edit
	$j('.edit-amount.price').blur(function() {
		$j(this).autoNumeric('init');
	})
	.keyup(function(e) {
	var e = window.event || e;
	var keyUnicode = e.charCode || e.keyCode;
	if (e !== undefined) {
		switch (keyUnicode) {
			case 16: break; // Shift
			case 17: break; // Ctrl
			case 18: break; // Alt
			case 27: this.value = ''; break; // Esc: clear entry
			case 35: break; // End
			case 36: break; // Home
			case 37: break; // cursor left
			case 38: break; // cursor up
			case 39: break; // cursor right
			case 40: break; // cursor down
			case 78: break; // N (Opera 9.63+ maps the "." from the number key section to the "N" key too!) (See: http://unixpapa.com/js/key.html search for ". Del")
			case 110: break; // . number block (Opera 9.63+ maps the "." from the number block to the "N" key (78) !!!)
			case 190: break; // .
			default: $j(this).autoNumeric('init');
		}
	}
	
	});
  	
    $j('#discountedProduct').on('click','tbody tr td span.amount',function () {
    	$j(this).hide();
        var editAmount = $j(this).next();
		editAmount.show().focus();
	    $j(editAmount).focusout(function() {
			var valueAmount = $j(this).val();

			if(valueAmount == "")
				valueAmount = 0;
				
			editAmount.attr("value",valueAmount).hide();
	        $j(this).prev().text(valueAmount).show();

	    });
    });
    
	  // Basic Form
	  jQuery("#regisMember").validate({
	    highlight: function(element) {
	      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
	    },
	    success: function(element) {
	      jQuery(element).closest('.form-group').removeClass('has-error');
	    }
	  }); 
  
	jQuery("input[name=hp]").rules( "add", {
	  minlength: 10,
	  maxlength: 13,
	  number: true,
	  messages: {
	    number: "Please input number format only",
	    minlength: jQuery.format("Min. input {0} characters"),
	    maxlength: jQuery.format("Allowed max. input {0} characters")
	  }
	});  
	
	jQuery("input[name=telephone]").rules( "add", {
	  minlength: 9,
	  maxlength: 12,
	  number: true,
	  messages: {
	    number: "Please input number format only",
	    minlength: jQuery.format("Min. input {0} characters"),
	    maxlength: jQuery.format("Allowed max. input {0} characters")
	  }
	});		
	
	jQuery("input[name=fax]").rules( "add", {
	  minlength: 9,
	  maxlength: 12,
	  number: true,
	  messages: {
	    number: "Please input number format only",
	    minlength: jQuery.format("Min. input {0} characters"),
	    maxlength: jQuery.format("Allowed max. input {0} characters")
	  }
	});	
      
    jQuery('#addMember input[name=hp]').change(function() { 
    	if(jQuery(this).valid())
    	{
    		jQuery(this).attr("required","")
			jQuery('#addMember input[name=telephone]').removeAttr("required");
    	}
    });
    
    jQuery('#editMember input[name=hp]').change(function() { 
    	if(jQuery(this).valid())
    	{
    		jQuery(this).attr("required","")
			jQuery('#editMember input[name=telephone]').removeAttr("required");	
    	}
    });  

	function initDiscountProducts(){	
		$j('input.price').hide();
		$j('input.qty').hide();		
		$j('input.qty').numeric();
		
		//format price on init
		$j('span.price').formatCurrency({region: 'id-ID'});		
	}

	function initProfileField(){	
		$j('input.num').numeric();
	}

	jQuery('#addprop').on('change', function() {
	    // ajaxku = buatajax();
	    var item = {};
	    var number = 1;
	    item[number] = {};
	    item[number]['id_prov'] = jQuery('#addprop').val();

	    // console.log(id);
	    // console.log(item[1]['id_prov']);

	      jQuery.ajax({
	        type: "POST",
	        url: CI_ROOT+"setting/wilayah/get_kota",
	        data: item,
	         success: function(data)
	         {
	            jQuery('#addkota').find("option").remove();
	            for (index = 0; index < data.length; ++index) {
	                id = data[index]['id'];
	                nama = data[index]['nama'];
	                jQuery('#addkota').append('<option value="'+id+'">'+nama+'</option>');
	            } 
	            jQuery('#addkec').find("option").remove();
	            jQuery('#addkec').append('<option value="">- Kecamatan - </option>');
	            jQuery('#addkel').find("option").remove();
	            jQuery('#addkel').append('<option value="">- Kelurahan/Desa - </option>');

	         },
	         error: function (data)
	         {
	            console.log('gagal');
	         }
	      });   
	});

	jQuery('#addkota').on('change', function() {
	    var item = {};
	    var number = 1;
	    item[number] = {};
	    item[number]['id_kabupaten'] = jQuery('#addkota').val();
	    // console.log(id);
	    // console.log(item[1]['id_kabupaten']);
	      jQuery.ajax({
	        type: "POST",
	        url: CI_ROOT+"setting/wilayah/get_kecamatan",
	        data: item,
	         success: function(data)
	         {
	            jQuery('#addkec').find("option").remove();
	            for (index = 0; index < data.length; ++index) {
	                id = data[index]['id'];
	                nama = data[index]['nama'];
	                jQuery('#addkec').append('<option value="'+id+'">'+nama+'</option>');
	            } 
	            jQuery('#addkel').find("option").remove();
	            jQuery('#addkel').append('<option value="">- Kelurahan/Desa - </option>');
	         },

	         error: function (data)
	         {
	            console.log('gagal');
	         }
	      });   
	});

	jQuery('#addkec').on('change', function() {
	    var item = {};
	    var number = 1;
	    item[number] = {};
	    item[number]['id_kecamatan'] = jQuery('#addkec').val();
	    // console.log(id);
	    // console.log(item[1]['id_kecamatan']);
	      jQuery.ajax({
	        type: "POST",
	        url: CI_ROOT+"setting/wilayah/get_desa",
	        data: item,
	         success: function(data)
	         {
	            jQuery('#addkel').find("option").remove();
	            for (index = 0; index < data.length; ++index) {
	                id = data[index]['id'];
	                nama = data[index]['nama'];
	                jQuery('#addkel').append('<option value="'+id+'">'+nama+'</option>');
	            } 
	         },
	         error: function (data)
	         {
	            console.log('gagal');
	         }
	      });   
	});

	jQuery('#updateMember').on('click',function(){
		var valid = jQuery('#regisMember').valid();
		if (!valid) {
			console.log('gagal');
		}
		else {
			console.log('berhasil');
			//simpan
			//tab berikutnya
			//disabled
		    var item = {};
		    var number = 1;
		    item[number] = {};
		    item[number]['memberid'] = jQuery('#addmemberid').val();
		    item[number]['id'] = jQuery('#addid').val();
		    item[number]['nama'] = jQuery('#addname').val();
		    item[number]['alamat'] = jQuery('#addalamat').val();
		    item[number]['prov'] = jQuery('#addprop').val();
		    item[number]['kota'] = jQuery('#addkota').val();
		    item[number]['kec'] = jQuery('#addkec').val();
		    item[number]['kel'] = jQuery('#addkel').val();
		    item[number]['kdpos'] = jQuery('#addkdpos').val();
		    item[number]['telp_rmh'] = jQuery('#addrmh').val();
		    item[number]['telp_hp'] = jQuery('#addhp').val();
		    item[number]['fax'] = jQuery('#addfax').val();
		    item[number]['email'] = jQuery('#addemail').val();
		    item[number]['salesid'] = jQuery('#addsales').val();
		    item[number]['petugas_id'] = jQuery('#adduserid').val();

		    //console.log(item[1]);
		    //return false;

		      jQuery.ajax({
		        type: "POST",
		        url: CI_ROOT+"setting/member/update_member",
		        data: item,
		         success: function(data)
		         {
		            jQuery('#pesan').removeClass('alert-error').addClass('alert-success');            
		            jQuery('#pesan').find('strong').text('Data berhasil diperbarui');              
		            jQuery('#pesan').show();
		            jQuery("html, body").animate({ scrollTop: 0}, "slow");
		            jQuery('#namaatas').text(jQuery('#addname').val());
		         },
		         error: function (data)
		         {
		            jQuery('#pesan').removeClass('alert-success').addClass('alert-error');            
		            jQuery('#pesan').find('strong').text('Terjadi kesalahan dalam proses penyimpanan data');              
		            jQuery('#pesan').show();
		         }
		      });   			
		}
	}); 

	function initasal() {
	    // ajaxku = buatajax();
	    var item = {};
	    var number = 1;
	    item[number] = {};
	    item[number]['id_prov'] = jQuery('#addprop').val();

	    // console.log(id);
	    // console.log(item[1]['id_prov']);

	      jQuery.ajax({
	        type: "POST",
	        url: CI_ROOT+"setting/wilayah/get_kota",
	        data: item,
	         success: function(data)
	         {
                kotaval = "<?php echo $member->kota_id ?>";
	            jQuery('#addkota').find("option").remove();
	            for (index = 0; index < data.length; ++index) {
	                id = data[index]['id'];
	                nama = data[index]['nama'];
                    // console.log(kotaval);
                    if (id == kotaval)
                    {
		                jQuery('#addkota').append('<option value="'+id+'" selected>'+nama+'</option>');
                    }
                    else
                    {
		                jQuery('#addkota').append('<option value="'+id+'">'+nama+'</option>');
                    }
	            } 
	            jQuery('#addkec').find("option").remove();
	            jQuery('#addkec').append('<option value="">- Kecamatan - </option>');
	            jQuery('#addkel').find("option").remove();
	            jQuery('#addkel').append('<option value="">- Kelurahan/Desa - </option>');

			    var item = {};
			    var number = 1;
			    item[number] = {};
			    item[number]['id_kabupaten'] = kotaval;
			    // console.log(id);
			    // console.log(item[1]['id_kabupaten']);
			      jQuery.ajax({
			        type: "POST",
			        url: CI_ROOT+"setting/wilayah/get_kecamatan",
			        data: item,
			         success: function(data)
			         {

		                kecaval = "<?php echo $member->kecamatan_id ?>";
			            jQuery('#addkec').find("option").remove();
			            for (index = 0; index < data.length; ++index) {
			                id = data[index]['id'];
			                nama = data[index]['nama'];
		                    if (id == kecaval)
		                    {
				                jQuery('#addkec').append('<option value="'+id+'" selected>'+nama+'</option>');
		                    }
		                    else
		                    {
				                jQuery('#addkec').append('<option value="'+id+'">'+nama+'</option>');
		                    }
			            } 
			            jQuery('#addkel').find("option").remove();
			            jQuery('#addkel').append('<option value="">- Kelurahan/Desa - </option>');


					    var item = {};
					    var number = 1;
					    item[number] = {};
					    item[number]['id_kecamatan'] = kecaval;
					    // console.log(id);
					    // console.log(item[1]['id_kecamatan']);
					      jQuery.ajax({
					        type: "POST",
					        url: CI_ROOT+"setting/wilayah/get_desa",
					        data: item,
					         success: function(data)
					         {
				                kelaval = "<?php echo $member->desa_id ?>";
					            jQuery('#addkel').find("option").remove();
					            for (index = 0; index < data.length; ++index) {
					                id = data[index]['id'];
					                nama = data[index]['nama'];
				                    if (id == kelaval)
				                    {
						                jQuery('#addkel').append('<option value="'+id+'" selected>'+nama+'</option>');
				                    }
				                    else
				                    {
						                jQuery('#addkel').append('<option value="'+id+'">'+nama+'</option>');
				                    }
					            } 
					         },
					         error: function (data)
					         {
					            console.log('gagal');
					         }
					      }); 

			         },

			         error: function (data)
			         {
			            console.log('gagal');
			         }
			      });  

	         },
	         error: function (data)
	         {
	            console.log('gagal');
	         }
	      });   
	} 

	//delete
    // Delete row in a table
    jQuery('a.delete-row').live("click", function(e){
      // console.log(jQuery(this).attr("id")) ;
      // jQuery(this).addClass('clicked');


      var c = confirm("Continue delete?");
      if(c) {
        var item = {};
        var number = 1;
        item[number] = {};
        item[number]['id'] = $j(this).closest('tr').find('td input.iddiskon').val();

		jQuery(this).closest('tr').fadeOut(function(){
		    jQuery(this).remove();
		});

        jQuery.ajax({
        type: "POST",
        url: CI_ROOT+"setting/member/delete_diskon_member",
        data: item,
         success: function(data)
         {

            jQuery('#pesan2').removeClass('alert-danger').addClass('alert-success');            
            jQuery('#pesan2').find('strong').text('Berhasil dihapus');              
            jQuery('#pesan2').show();

         },
         error: function (data)
         {  
            jQuery('#pesan2').removeClass('alert-success').addClass('alert-danger');          
            jQuery('#pesan2').find('strong').text('Gagal dihapus');              
            jQuery('#pesan2').show();
         }

        });        
      }
      else {
        jQuery('#pesan2').removeClass('alert-success').addClass('alert-danger');          
        jQuery('#pesan2').find('strong').text('Perintah Penghapusan dibatalkan');              
        jQuery('#pesan2').show();

      }
    });	


});
</script>