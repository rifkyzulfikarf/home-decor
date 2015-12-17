<?php
	class kategori extends koneksi {
		
		function get_kategori() {
			if ($list = $this->runQuery("SELECT `kategori`.`id`, `menu_public`.`nama` AS `nama_menu`, `kategori`.`nama` AS `nama_kategori`,
			`kategori`.`summary` FROM `kategori` INNER JOIN `menu_public` ON(`kategori`.`id_menu` = `menu_public`.`id`) 
			WHERE `kategori`.`hapus` = '0';")) {
				if ($list->num_rows > 0) {
					return $list;
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		
		function tambah($idmenu, $nama, $summary) {
			$idmenu = $this->clearText($idmenu);
			$nama = $this->clearText($nama);
			$summary = $this->clearText($summary);
			
			if ($result = $this->runQuery("INSERT INTO `kategori`(`id_menu`, `nama`, `summary`, `hapus`) VALUES('$idmenu', '$nama', '$summary', '0');")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function ubah($id, $idmenu, $nama, $summary) {
			$id = $this->clearText($id);
			$idmenu = $this->clearText($idmenu);
			$nama = $this->clearText($nama);
			$summary = $this->clearText($summary);
			
			if ($result = $this->runQuery("UPDATE `kategori` SET `id_menu` = '$idmenu', `nama` = '$nama', `summary` = '$summary' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function hapus($id) {
			$id = $this->clearText($id);
			
			if ($result = $this->runQuery("UPDATE `kategori` SET `hapus` = '1' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
	}
?>