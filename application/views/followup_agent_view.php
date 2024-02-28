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
												<span class="card-label fw-bolder fs-3 mb-1">Follow UP Agent</span>
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
                                            else if($this->session->flashdata('mesg') == "Gagal") {
                                            ?>
                                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                                    
                                                    <strong><span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                                    &nbsp;Data Gagal Disimpan!</strong>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <!--begin::Body-->
										<div class="card-body py-3">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table id="table" class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bolder text-muted">
															<th class="min-w-100px">TANGGAL</th>
															<th class="min-w-50px">LOGIN AGENT</th>
															<th class="min-w-150px">NAMA AGENT</th>
															<th class="min-w-50px">WITEL</th>
															<th class="min-w-100px">NO FASTEL</th>
															<th class="min-w-150px">NAMA PEMILIK</th>
															<th class="min-w-50px">NO TELEPON</th>
															<th class="min-w-150px">KETERANGAN AGENT</th>
															<th class="min-w-150px">KETERANGAN QCO</th>
															<th class="min-w-100px text-end">ACTIONS</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
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
					<!--begin::Modal - Create App-->
		<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-900px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Form Follow UP</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body py-lg-10 px-lg-10">
						<!--begin::Stepper-->
						<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
							<!--begin::Content-->
							<div class="flex-row-fluid py-lg-5 px-lg-15">
                                <div class="table-responsive">
		    						<!--begin::Form-->
                                    <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                                        <input type="hidden" class="form-control form-control-lg form-control-solid" name="id" placeholder="" readonly/>
                                        <input type="hidden" class="form-control form-control-lg form-control-solid" name="login" readonly/>
										<input type="hidden" class="form-control form-control-lg form-control-solid" name="tgl" value="<?=date("Y-m-d h:i:s")?>" readonly/>
                                        <input type="hidden" class="form-control form-control-lg form-control-solid" name="follow" id="follow" readonly/>
                                        <!--begin::Step 1-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <div class="w-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                            <label for="fastel" class="form-label">NO FASTEL</label>
                                                            <input type="text" class="form-control" id="fastel" name="fastel" onkeypress="return isNumberKey(event)" required readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                            <label for="nama_dm" class="form-label">NAMA DM / PEMILIK</label>
                                                            <input type="text" class="form-control" id="nama_dm" name="nama_dm" required readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                            <label for="tlp" class="form-label">NO. CP / DIAL</label>
                                                            <input type="text" class="form-control" id="tlp" name="tlp" onkeypress="return isNumberKey(event)" required readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="reg" class="form-label">REGIONAL</label>
                                                        <input type="text" class="form-control" id="reg" name="reg" required readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="witel" class="form-label">WITEL</label>
                                                        <input type="text" class="form-control" id="witel" name="witel" required readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="jenis" class="form-label">CAMPAIGN / RULE</label>
                                                        <input type="text" class="form-control" id="jenis" name="jenis" required readonly>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="paket" class="form-label">PAKET</label>
                                                        <input type="text" class="form-control" id="paket" name="paket" required readonly>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="tarif" class="form-label">TARIF</label>
														<input type="hidden" class="form-control" id="tarif" name="tarif" readonly>
														<input type="text" class="form-control" id="tarifRp" name="tarifRp" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="status" class="form-label">STATUS CALL</label>
                                                        <select class="form-control form-select" id="status" name="status" required>
                                                            <option value="">--PILIH STATUS CALL--</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="kategori" class="form-label">KATEGORI</label>
                                                        <select class="form-control form-select" id="kategori" name="kategori" required readonly>
                                                            <option value="">--PILIH KATEGORI--</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-6 StatusContacted">
                                                            <label for="reason" class="form-label">REASON CALL</label>
                                                            <select class="form-control form-select" id="reason" name="reason" readonly>
                                                                <option value="">--PILIH REASON CALL--</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 StatusContacted">
                                                            <label for="penerima" class="form-label">PENERIMA</label>
                                                            <input type="text" class="form-control" id="penerima" name="penerima" readonly>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-12">
                                                            <label for="ket" class="form-label">KETERANGAN (TIDAK BOLEH ADA TANDA " AND ')</label>
                                                            <textarea class="form-control" id="ket" rows="5" name="ket" required></textarea>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Step 1-->
                                    </form>
                                </div>
								<!--end::Form-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Stepper-->
					</div>
					<!--end::Modal body-->
					<div class="modal-footer">
						<div class="d-flex flex-stack pt-10">
										<!--begin::Wrapper-->
										<div>
											<button type="button" class="btn btn-lg btn-light-primary me-3" data-dismiss="modal">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
											<span class="svg-icon svg-icon-3 me-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
													<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->CANCEL</button>
										</div>
										<!--end::Wrapper-->
										<!--begin::Wrapper-->
										<div>
											<button type="button" id="btnSave" class="btn btn-lg btn-primary" onclick="save()">SAVE FOLLOW UP
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
											<span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon--></button>
										</div>
										<!--end::Wrapper-->
						</div>
					</div>
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Create App-->
		
					<?php
	include_once "footer.php";
?>
<script>
			var save_method; //for save method string
			var table;
			
			$(document).ready(function() {
                
				//datatables
				table = $('#table').DataTable({ 
			
					"processing": true, //Feature control the processing indicator.
					"serverSide": true, //Feature control DataTables' server-side processing mode.
					"order": [], //Initial no order.
			
					// Load data for the table's content from an Ajax source
					"ajax": {
						"url": "<?php echo site_url('FollowupAgent/ajax_list')?>",
						"type": "POST"
					},
			
					//Set column definition initialisation properties.
					"columnDefs": [
					{ 
						"targets": [ -1 ], //last column
						"orderable": false, //set not orderable
					},
					],
			
				});
			
				//datepicker
				// $('.datepicker').datepicker({
				// 	autoclose: true,
				// 	format: "yyyy-mm-dd",
				// 	todayHighlight: true,
				// 	orientation: "top auto",
				// 	todayBtn: true,
				// 	todayHighlight: true,  
				// });
                
			});
			
			function followup_data(id, jenis)
			{
				save_method = 'update';
				$('#kt_modal_create_app_form')[0].reset(); // reset form on modals
				$('.form-group').removeClass('has-error'); // clear error class
				$('.help-block').empty(); // clear error string
			
				//Ajax Load data from ajax
				$.ajax({
					url : "<?php echo site_url('FollowupAgent/ajax_edit')?>/" + id,
					type: "GET",
					dataType: "JSON",
					success: function(data)
					{
						console.log(data);
                        $.ajax({
                            url : "<?php echo site_url('InputCwc/get_select_status/');?>",
                            method : "POST",
                            data : {jenis: data.jenis},
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

						$('[name="id"]').val(data.id_canvas);
						$('[name="login"]').val(data.login);
						$('[name="fastel"]').val(data.fastel);
                        $('[name="nama_dm"]').val(data.nama_dm);
                        $('[name="tlp"]').val(data.tlp);
                        $('[name="reg"]').val(data.reg);
                        $('[name="witel"]').val(data.witel);
						$('[name="jenis"]').val(data.jenis_canvas);
                        $('[name="paket"]').val(data.paket);
                        $('[name="tarif"]').val(data.tarif);
                        $('[name="tarifRp"]').val(data.tarif);
                        $('#tarifRp').autoNumeric('init', { currencySymbol : 'Rp. ' });
                        $('select[name="status"] option').filter(':selected').val(data.status);
                        $('[name="kategori"]').val(data.kategori);
                        $('[name="reason"]').val(data.reason);
                        $('[name="penerima"]').val(data.penerima);
						$('[name="rec_qco"]').val(data.rec_qco);
						$('[name="rec_tl"]').val(data.rec_tl);
						// $('[name="ket"]').val(data.ket);
                        $('[name="follow"]').val(data.follow);
						// $('[name="dob"]').datepicker('update',data.dob);
						$('#kt_modal_create_app').modal('show'); // show bootstrap modal when complete loaded
						$('.modal-title').text('Form Follow UP Agent'); // Set title to Bootstrap modal title
			
					},
					error: function (jqXHR, textStatus, errorThrown)
					{
						alert('Error get data from ajax');
					}
				});

                $('.StatusContacted').hide();
				$('.StatusNotContacted').hide();

                $(document).ready(function() {

                    $('#status').change(function(){ 
                        // alert($('#jenis').find(':selected').data('jenis'));
                        // alert($(this).find(':selected').data('status'));
                        var status=$("#status").find(':selected').data('status');
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
			}
			
			function reload_table()
			{
				table.ajax.reload(null,false); //reload datatable ajax 
			}
			
			function save()
			{
				$('#btnSave').text('saving...'); //change button text
				$('#btnSave').attr('disabled',true); //set button disable 
				var url;
			
				if(save_method == 'add') {
					url = "<?php echo site_url('FollowupAgent/ajax_add')?>";
				} else {
					url = "<?php echo site_url('FollowupAgent/ajax_update')?>";
				}
			
				// ajax adding data to database
				$.ajax({
					url : url,
					type: "POST",
					data: $('#kt_modal_create_app_form').serialize(),
					dataType: "JSON",
					success: function(data)
					{
			
						if(data.status) //if success close modal and reload ajax table
						{
							$('#kt_modal_create_app').modal('hide');
							reload_table();
							swal("Success", "Data Berhasil Di Follow UP oleh Agent!", "success");
						}
			
						$('#btnSave').text('save'); //change button text
						$('#btnSave').attr('disabled',false); //set button enable 
			
			
					},
					error: function (jqXHR, textStatus, errorThrown)
					{
						alert('Error adding / update data');
						$('#btnSave').text('save'); //change button text
						$('#btnSave').attr('disabled',false); //set button enable 
			
					}
				});
			}
		</script>