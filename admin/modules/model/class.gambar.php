<?php
	class gambar extends koneksi {
		
		function get_gambar() {
			if ($list = $this->runQuery("SELECT `img`.`id`, `kategori`.`nama` AS `nama_kategori`, `menu_public`.`nama` AS `nama_menu`, 
			`img`.`nama` AS `nama_gambar`, `img`.`deskripsi` FROM `img` INNER JOIN `kategori` ON(`img`.`id_kategori` = `kategori`.`id`) 
			INNER JOIN `menu_public` ON(`kategori`.`id_menu` = `menu_public`.`id`);")) {
				if ($list->num_rows > 0) {
					return $list;
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		
		function tambah($idkategori, $deskripsi) {
			$idkategori = $this->clearText($idkategori);
			$deskripsi = $this->clearText($deskripsi);
			
			if ($result = $this->runQuery("INSERT INTO `img`(`id_kategori`, `nama`, `deskripsi`) VALUES('$idkategori', '-', '$deskripsi');")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		
		function hapus($id) {
			$id = $this->clearText($id);
			
			if ($result = $this->runQuery("DELETE FROM `img` WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
	}
?>