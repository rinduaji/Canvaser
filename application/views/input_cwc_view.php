<?php
	include_once "header.php";
?>
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">

							<div class="row gy-5 g-xl-12">
								<!--begin::Col-->
								<div class="col-xl-12">
									<!--begin::Tables Widget 3-->
									<div class="card card-xl-stretch mb-5 mb-xl-12">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Input Manual CWC</span>
												<!-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span> -->
											</h3>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
										<?php
										if($this->session->flashdata('mesg') == "Success") {
										?>
										<div class="alert alert-success d-flex align-items-center" role="alert">
											
											<strong><span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
											&nbsp;Data Berhasil Disimpan!</strong>
										</div>
										<?php
										}
										if($this->session->flashdata('mesg') == "Gagal") {
										?>
											<div class="alert alert-danger d-flex align-items-center" role="alert">
												
												<strong><span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
												&nbsp;Data Gagal Disimpan!</strong>
											</div>
										<?php
										}
										if($this->session->flashdata('mesg') == "kosong") {
										?>
											<div class="alert alert-warning d-flex align-items-center" role="alert">
												
												<strong><span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
												&nbsp;Data Harus Diisi Semua!</strong>
											</div>
										<?php
										}
										?>
											<!--begin::Table container-->
											<div class="table-responsive">
											<form class="row g-3" name="demoform" action="<?=site_url('InputCwc/insertDataCwc')?>" method="post" accept-charset='UTF-8'>
												<input type="hidden" class="form-control" name="tgl" value="<?=date("Y-m-d H:i:s")?>">
												<input type="hidden" class="form-control" name="login" value="<?=$_SESSION['username']?>">
												<input type="hidden" class="form-control" name="follow" id="follow">
												<div class="col-md-4">
													<label for="fastel" class="form-label">NO FASTEL</label>
													<input type="text" class="form-control" id="fastel" name="fastel" onkeypress="return isNumberKey(event)"
						   required>
												</div>
												<div class="col-md-4">
													<label for="nama_dm" class="form-label">NAMA DM / PEMILIK</label>
													<input type="text" class="form-control" id="nama_dm" name="nama_dm" required>
												</div>
												<div class="col-md-4">
													<label for="tlp" class="form-label">NO. CP / DIAL</label>
													<input type="text" class="form-control" id="tlp" name="tlp" onkeypress="return isNumberKey(event)"
						   required>
												</div>
												<div class="col-md-6">
													<label for="reg" class="form-label">REGIONAL</label>
													<select class="form-control form-select" id="reg" name="reg" required>
														<option value=""> -- PILIH REGIONAL -- </option>
														<?php foreach($selectRegional as $r){ ?>
															<option value="<?php echo $r->reg; ?>"><?php echo $r->reg; ?></option>
														<?php } ?>
													</select>
												</div>
												<div class="col-md-6">
													<label for="witel" class="form-label">WITEL</label>
													<select class="form-control form-select" id="witel" name="witel" required disabled>
														<option value="">--PILIH WITEL--</option>
													</select>
												</div>
												<div class="col-md-6">
													<label for="jenis" class="form-label">CAMPAIGN / RULE</label>
													<select class="form-control form-select" id="jenis" name="jenis" required disabled>
														<option value=""> -- PILIH CAMPAIGN / RULE -- </option>
														<?php foreach($selectJenis as $j){ ?>
															<option value="<?php echo $j->keterangan; ?>" data-jenis="<?=$j->jenis?>"><?php echo $j->keterangan; ?></option>
														<?php } ?>
													</select>
												</div>
												<div class="col-md-3">
													<label for="paket" class="form-label">PAKET</label>
													<select class="form-control form-select" id="paket" name="paket" required disabled>
														<option value="">--PILIH PAKET--</option>
													</select>
												</div>
												<div class="col-md-3">
														<label for="tarif" class="form-label">TARIF</label>
														<input type="hidden" class="form-control" id="tarif" name="tarif" readonly>
														<input type="text" class="form-control" id="tarifRp" name="tarifRp" readonly>
													</div>
												<div class="col-md-6">
													<label for="status" class="form-label">STATUS CALL</label>
													<select class="form-control form-select" id="status" name="status" required disabled>
														<option value="">--PILIH STATUS CALL--</option>
													</select>
												</div>
												<div class="col-md-6">
													<label for="kategori" class="form-label">KATEGORI</label>
													<select class="form-control form-select" id="kategori" name="kategori" required disabled>
														<option value="">--PILIH KATEGORI--</option>
													</select>
												</div>
													<div class="col-md-6 StatusContacted">
														<label for="reason" class="form-label">REASON CALL</label>
														<select class="form-control form-select" id="reason" name="reason" disabled>
															<option value="">--PILIH REASON CALL--</option>
														</select>
													</div>
													<div class="col-md-6 StatusContacted">
														<label for="penerima" class="form-label">PENERIMA</label>
														<input type="text" class="form-control" id="penerima" name="penerima">
													</div>
													<div class="col-12">
														<label for="ket" class="form-label">KETERANGAN (TIDAK BOLEH ADA TANDA " AND ')</label>
														<textarea class="form-control" id="ket" rows="5" name="ket" required></textarea>
													</div>
												<div class="col-12 top-50">
													<br>
													<button type="submit" class="btn btn-primary" name="save">SAVE</button>
												</div>
												</form>
											</div>
											<!--end::Table container-->
										</div>
										<!--begin::Body-->
									</div>
									<!--end::Tables Widget 3-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->

		
<?php
	include_once "footer.php";
?>

		<script>
			function isNumberKey(evt)
			{
				var charCode = (evt.which) ? evt.which : event.keyCode
				if (charCode > 31 && (charCode < 48 || charCode > 57))
				return false;
				return true;
			}

			

			$(document).ready(function() {
				$('.StatusContacted').hide();
				$('.StatusNotContacted').hide();

				$('#reg').change(function(){ 
					var reg=$(this).val();
					$.ajax({
						url : "<?php echo site_url('InputCwc/get_select_witel/');?>",
						method : "POST",
						data : {reg: reg},
						async : true,
						dataType : 'json',
						success: function(data){
							// console.log(data);
							var html = '';
							var i;
							html = '<option value="">'+' --PILIH WITEL-- '+'</option>';
							for(i=0; i<data.length; i++){
								html += '<option value="'+data[i].keterangan+'">'+data[i].reg+' - '+data[i].keterangan+' ('+data[i].prov+')</option>';
							}
							$('#witel').html(html);
							$("#witel").attr("disabled", false); 
						}
					});
					return false;
            	});

				$('#witel').change(function(){ 
					$("#jenis").attr("disabled", false);
            	});
				
				$('#jenis').change(function(){ 
					var jenis=$(this).find(':selected').data('jenis');
					$.ajax({
						url : "<?php echo site_url('InputCwc/get_select_status/');?>",
						method : "POST",
						data : {jenis: jenis},
						async : true,
						dataType : 'json',
						success: function(data){
							// console.log(data);
							var html = '';
							var i;
							html = '<option value="">'+' --PILIH STATUS CALL-- '+'</option>';
							for(i=0; i<data.length; i++){
								html += '<option value="'+data[i].keterangan+'" data-status='+data[i].status+'>'+data[i].keterangan+'</option>';
							}
							$('#status').html(html);
							// $("#status").attr("disabled", false); 
	
						}
					});

					$.ajax({
						url : "<?php echo site_url('InputCwc/get_select_tarif/');?>",
						method : "POST",
						data : {jenis: jenis},
						async : true,
						dataType : 'json',
						success: function(data){
							// console.log(data);
							var html = '';
							var i;
							html = '<option value="">'+' --PILIH PAKET-- '+'</option>';
							for(i=0; i<data.length; i++){
								// alert(data[i].tarif);
								html += '<option value="'+data[i].paket+'" data-paket="'+data[i].paket+'">'+data[i].paket+'</option>';
								// $('#tarif').val(data[i].tarif);
								// $('#tarifRp').val(data[i].tarif);
								// $('#tarifRp').autoNumeric('init', { currencySymbol : 'Rp. ' });
							}
							$('#paket').html(html);
							$("#paket").attr("disabled", false); 
						}
					});
					return false;
            	});
				
				$('#paket').change(function(){ 
					var jenis=$('#jenis').find(':selected').data('jenis');
					var paket=$(this).find(':selected').data('paket');
					
					$.ajax({
						url : "<?php echo site_url('InputCwc/get_select_nominal_tarif/');?>",
						method : "POST",
						data : {
							jenis: jenis,
							paket: paket,
							},
						async : true,
						dataType : 'json',
						success: function(data){
							console.log(data);
							var html = '';
							var i;
							// html = '<option value="">'+' --PILIH PAKET-- '+'</option>';
							for(i=0; i<data.length; i++){
								// alert(data[i].tarif);
								// html += '<option value="'+data[i].paket+'" data-paket='+data[i].paket+'>'+data[i].paket+'</option>';
								$('#tarif').val(data[i].tarif);
								$('#tarifRp').val(data[i].tarif);
								$('#tarifRp').autoNumeric('init', { currencySymbol : 'Rp. ' });
							}
							// $('#status').html(html);
							$("#status").attr("disabled", false); 
						}
					});
					return false;
            	});

				$('#status').change(function(){ 
					// alert($('#jenis').find(':selected').data('jenis'));
					// alert($(this).find(':selected').data('status'));
					var jenis=$('#jenis').find(':selected').data('jenis');
					var status=$(this).find(':selected').data('status');
					var valStatus = $('select[name=status] option').filter(':selected').val()
					$.ajax({
						url : "<?php echo site_url('InputCwc/get_select_kategori/');?>",
						method : "POST",
						data : {
								jenis: jenis,
								status: status
							   },
						async : true,
						dataType : 'json',
						success: function(data){
							console.log(data);
							var html = '';
							var i;
							html = '<option value="">'+' --PILIH KATEGORI-- '+'</option>';
							for(i=0; i<data.length; i++){
								html += '<option value="'+data[i].keterangan+'" data-kategori='+data[i].kategori+'>'+data[i].keterangan+'</option>';
							}
							$('#kategori').html(html);
							$("#kategori").attr("disabled", false); 
							
							if (valStatus.trim() == 'Contacted') {
								$('.StatusNotContacted').hide();
								$('.StatusContacted').show();

							} else if (valStatus.trim() == 'Not Contacted' || valStatus.trim() == 'Follow Up') {
								if(valStatus.trim() == 'Not Contacted') {
									$('#follow').val('1');
								}
								if(valStatus.trim() == 'Follow Up') {
									$('#follow').val('5');
								}
								$('.StatusContacted').hide();
								$('.StatusNotContacted').show();
							} else {
								$('.StatusContacted').hide();
								$('.StatusNotContacted').hide();
							}
						}
					});
					return false;
            	});

				$('#kategori').change(function(){ 
					var jenis=$('#jenis').find(':selected').data('jenis');
					var status=$('#status').find(':selected').data('status');
					var kategori=$(this).find(':selected').data('kategori');
					$.ajax({
						url : "<?php echo site_url('InputCwc/get_select_reason/');?>",
						method : "POST",
						data : {
								jenis: jenis,
								status: status,
								kategori: kategori,
							   },
						async : true,
						dataType : 'json',
						success: function(data){
							console.log(data);
							var html = '';
							var i;
							html = '<option value="">'+' --PILIH REASON CALL-- '+'</option>';
							for(i=0; i<data.length; i++){
								html += '<option value="'+data[i].keterangan+'" data-reason='+data[i].reason+'>'+data[i].keterangan+'</option>';
							}
							$('#reason').html(html);
							$("#reason").attr("disabled", false); 
						}
					});
					return false;
            	});

				$('#reason').change(function(){ 
					var jenis=$('#jenis').find(':selected').data('jenis');
					var status=$('#status').find(':selected').data('status');
					var kategori=$('#kategori').find(':selected').data('kategori');
					var reason=$(this).find(':selected').data('reason');
					
					$.ajax({
						url : "<?php echo site_url('InputCwc/get_select_follow/');?>",
						method : "POST",
						data : {
								jenis: jenis,
								status: status,
								kategori: kategori,
								reason: reason
							   },
						async : true,
						dataType : 'json',
						success: function(data){
							console.log(data);
							var html = '';
							var i;
							// html = '<option value="">'+' --PILIH REASON CALL-- '+'</option>';
							for(i=0; i<data.length; i++){
								// html += '<option value="'+data[i].keterangan+'" data-reason='+data[i].reason+'>'+data[i].keterangan+'</option>';
								$('#follow').val(data[i].follow);
							}
							// $('#reason').html(html);
							// $("#reason").attr("disabled", false); 
						}
					});
					return false;
            	});
			});
		</script>