<?php
	$data = new koneksi();
?>
<section class="wrapper site-min-height">
	<div class="row">
		<div class="col-sm-12">
			<section class="panel">
				<header class="panel-heading">
					Data Gambar
					<span class="tools pull-right">
						<button type="button" class="btn btn-primary btn-sm" id="btn-tambah-data" data-mode="tambah"><i class="fa fa-plus"></i> Tambah Data</button>
					</span>
				</header>
				<div class="panel-body">
					<div class="adv-table">
						<table class="display table table-bordered table-striped" id="tabel-gambar">
							<thead>
								<tr>
									<th>Menu</th>
									<th>Kategori</th>
									<th>Gambar</th>
									<th>Deskripsi</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
							<tfoot>
								<tr>
									<th>Menu</th>
									<th>Kategori</th>
									<th>Gambar</th>
									<th>Deskripsi</th>
									<th></th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>

<div class="modal fade " id="mdl-data-gambar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Data Gambar</h4>
			</div>
			<div class="modal-body">
				<form id="frm-gambar" action="#" method="POST" role="form">
					<input type="hidden" class="form-control" id="apa" name="apa">
					<div class="form-group">
						<select class="form-control" id="cmb-kategori" name="cmb-kategori">
							<?php
							$qMenu = "SELECT `kategori`.`id`, `kategori`.`nama` AS `nama_kategori`, `menu_public`.`nama` AS `nama_menu` 
							FROM `kategori` INNER JOIN `menu_public` ON(`kategori`.`id_menu` = `menu_public`.`id`) WHERE `kategori`.`hapus` = '0';";
							if ($resMenu = $data->runQuery($qMenu)) {
								while ($rsMenu = $resMenu->fetch_array()) {
									echo "<option value='".$rsMenu['id']."'>".$rsMenu['nama_menu']." - ".$rsMenu['nama_kategori']."</option>";
								}
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="txt-deskripsi" name="txt-deskripsi" placeholder="Deskripsi">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button data-dismiss="modal" class="btn btn-default btn-close-modal" type="button">Close</button>
				<button class="btn btn-primary" type="button" id="btn-simpan-data">Simpan Data</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade " id="mdl-upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Upload Gambar</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" class="form-control" id="txt-id" name="txt-id">
				<div id="dropzone-gambar" class="dropzone"></div>
			</div>
			<div class="modal-footer">
				<button data-dismiss="modal" class="btn btn-default btn-close-modal" type="button">Close</button>
				<button class="btn btn-primary" type="button" id="btn-simpan-data">Simpan Data</button>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
	
	init();
	
	function init() {
		
	};
	
	var tabelgambar = $('#tabel-gambar').dataTable({
		"sAjaxSource": './',
		"sServerMethod": "POST",
		"fnServerParams": function ( aoData ) {
            aoData.push({"name": "aksi", "value": "<?php echo e_url('modules/controller/master-data/gambar.php'); ?>"});
            aoData.push({"name": "apa", "value": "get-gambar"});
        }
    });
	
	var dropzoneGambar = $("#dropzone-gambar").dropzone({ 
		url: "modules/controller/master-data/upload-gambar.php",
		maxFilesize: 1,
		acceptedFiles: "image/*",
		init: function () {
			this.on("sending", function(file, xhr, data) {
				data.append("id", $('#txt-id').val());
			});
			this.on("success", function(file, response) {
				$(".btn-close-modal").click();
				tabelgambar.fnReloadAjax();
			});
		}
	});
	
	$('#btn-tambah-data').click(function(ev){
		ev.preventDefault();
		$('#mdl-data-gambar').modal();
		$('#apa').val('tambah-gambar');
		$('#txt-deskripsi').val("");
	});
	
	$('#tabel-gambar').on('click', '#btn-show-upload', function(ev){
		ev.preventDefault();
		$('#mdl-upload').modal();
		$('#txt-id').val($(this).data('id'));
	});
	
	$('#tabel-gambar').on('click', '#btn-hapus-gambar', function(ev){
		ev.preventDefault();
		var id = $(this).data('id');
		var nama = $(this).data('nama');
		if (confirm('Setuju hapus data ?')) {
			$(this).addClass('disabled').html('<i class="fa fa-spinner fa-pulse"></i> Processing...');
			$.ajax({
				url: "./",
				method: "POST",
				cache: false,
				dataType: "JSON",
				data: {"aksi" : "<?php echo e_url('modules/controller/master-data/gambar.php'); ?>", "apa" : "hapus-gambar", "id" : id, "nama" : nama},
				success: function(eve){
					if (eve.status){
						alert(eve.msg);
						$('.btn-close-modal').click();
						tabelgambar.fnReloadAjax();
					} else {
						alert(eve.msg);
					}
				},
				error: function(err){
					console.log("AJAX error in request: " + JSON.stringify(err, null, 2));
					alert('Gagal terkoneksi dengan server..');
				}
			});
		}
	});
	
	$('#btn-simpan-data').click(function(ev){
		ev.preventDefault();
		var post_data = "aksi=" + "<?php echo e_url('modules/controller/master-data/gambar.php'); ?>" + "&" +$('#frm-gambar').serialize();
		if (confirm('Simpan data ?')) {
			$('#btn-simpan-data').addClass('disabled').html('<i class="fa fa-spinner fa-pulse"></i> Processing...');
			$.ajax({
				url: "./",
				method: "POST",
				cache: false,
				dataType: "JSON",
				data: post_data,
				success: function(eve){
					if (eve.status){
						alert(eve.msg);
						$('.btn-close-modal').click();
						tabelgambar.fnReloadAjax();
					} else {
						alert(eve.msg);
					}
					$('#btn-simpan-data').removeClass('disabled').html('Simpan Data');
				},
				error: function(err){
					console.log("AJAX error in request: " + JSON.stringify(err, null, 2));
					alert('Gagal terkoneksi dengan server..');
				}
			});
		}
	});
	
});
</script>