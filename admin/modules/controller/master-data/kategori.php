<?php
	if (isset($_POST['apa']) && $_POST['apa'] != "") {
		
		include 'modules/model/class.kategori.php';
		$kategori = new kategori();
		
		switch ($_POST['apa']) {
			case "get-kategori":
				$collect = array();
				
				if ($query = $kategori->get_kategori()) {
					while ($rs = $query->fetch_array()) {
						$detail = array();
						array_push($detail, $rs["nama_menu"]);
						array_push($detail, $rs["nama_kategori"]);
						array_push($detail, $rs["summary"]);
						array_push($detail, "<button type='button' class='btn btn-sm btn-primary' id='btn-ubah-data' data-id='".$rs["id"]."' data-nama='".$rs["nama_kategori"]."' data-summary='".$rs["summary"]."'>
									<i class='fa fa-pencil'></i></button> 
									<button type='button' class='btn btn-sm btn-danger' id='btn-hapus-kategori' data-id='".$rs["id"]."'><i class='fa fa-trash-o'></i></button>");
						array_push($collect, $detail);
						unset($detail);
					}
				}
				echo json_encode(array("aaData"=>$collect));
				break;
			case "tambah-kategori":
				$arr=array();
				
				if (isset($_POST['txt-nama']) && $_POST['txt-nama'] != "" && isset($_POST['cmb-menu']) && $_POST['cmb-menu'] != "" && 
				isset($_POST['txt-summary']) && $_POST['txt-summary'] != "") {
					
					if ($result = $kategori->tambah($_POST['cmb-menu'], $_POST['txt-nama'], $_POST['txt-summary'])) {
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
			case "ubah-kategori":
				$arr=array();
				
				if (isset($_POST['txt-nama']) && $_POST['txt-nama'] != "" && isset($_POST['cmb-menu']) && $_POST['cmb-menu'] != "" && 
					isset($_POST['txt-id']) && $_POST['txt-id'] != "" && isset($_POST['txt-summary']) && $_POST['txt-summary'] != "") {
					
					if ($result = $kategori->ubah($_POST['txt-id'], $_POST['cmb-menu'], $_POST['txt-nama'], $_POST['txt-summary'])) {
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
			case "hapus-kategori":
				$arr=array();
				
				if (isset($_POST['id']) && $_POST['id'] != "" ) {
					
					if ($result = $kategori->hapus($_POST['id'])) {
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