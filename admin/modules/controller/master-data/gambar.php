<?php
	if (isset($_POST['apa']) && $_POST['apa'] != "") {
		
		include 'modules/model/class.gambar.php';
		$gambar = new gambar();
		
		switch ($_POST['apa']) {
			case "get-gambar":
				$collect = array();
				
				if ($query = $gambar->get_gambar()) {
					while ($rs = $query->fetch_array()) {
						
						if ($rs['nama_gambar'] == "-") {
							$button = "<button type='button' class='btn btn-sm btn-primary' id='btn-show-upload' data-id='".$rs["id"]."'>
										<i class='fa fa-upload'></i></button>
										<button type='button' class='btn btn-sm btn-danger' id='btn-hapus-gambar' data-id='".$rs["id"]."' 
										data-nama='".$rs["nama_gambar"]."'>
										<i class='fa fa-trash-o'></i></button>";
						} else {
							$button = "<button type='button' class='btn btn-sm btn-danger' id='btn-hapus-gambar' data-id='".$rs["id"]."' 
										data-nama='".$rs["nama_gambar"]."'>
										<i class='fa fa-trash-o'></i></button>";
						}
					
						$detail = array();
						array_push($detail, $rs["nama_menu"]);
						array_push($detail, $rs["nama_kategori"]);
						array_push($detail, $rs["nama_gambar"]);
						array_push($detail, $rs["deskripsi"]);
						array_push($detail, $button);
						array_push($collect, $detail);
						unset($detail);
					}
				}
				echo json_encode(array("aaData"=>$collect));
				break;
			case "tambah-gambar":
				$arr=array();
				
				if (isset($_POST['txt-deskripsi']) && $_POST['txt-deskripsi'] != "" && isset($_POST['cmb-kategori']) && $_POST['cmb-kategori'] != "") {
					
					if ($result = $gambar->tambah($_POST['cmb-kategori'], $_POST['txt-deskripsi'])) {
						$arr['status']=TRUE;
						$arr['msg']="Data tersimpan..";
					} else {
						$arr['status']=FALSE;
						$arr['msg']="Gagal menyimpan..";
					}
				} else {
					$arr['status']=FALSE;
					$arr['msg']="Harap isi data dengan lengkap..";
				}
				
				echo json_encode($arr);
				break;
			case "hapus-gambar":
				$arr=array();
				
				if (isset($_POST['id']) && $_POST['id'] != "" && isset($_POST['nama']) && $_POST['nama'] != "") {
					
					if ($result = $gambar->hapus($_POST['id'])) {
						unlink("../assets/img/".$_POST['nama']);
						$arr['status']=TRUE;
						$arr['msg']="Data terhapus..";
					} else {
						$arr['status']=FALSE;
						$arr['msg']="Gagal menghapus..";
					}
				} else {
					$arr['status']=FALSE;
					$arr['msg']="Harap isi data dengan lengkap..";
				}
				
				echo json_encode($arr);
				break;
		}
	}
?>