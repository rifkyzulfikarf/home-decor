<?php
	$data = new koneksi();
?>
<!-- Works Detail -->
<section id="works-detail" class="type-one">
	<div class="section-page blank">
    	<!-- Section Heading -->
    	<h1><?php echo d_url($_GET['kat']) ?></h1>
        <!-- Section Heading End -->
        
        <!-- Work Gallery -->
        <div class="work-gallery type-one masonry-list row">
        	<!-- Grid Sizer -->
        	<div class="grid-sizer col-md-4"></div>
            <!-- Grid Sizer End -->
            
            <!-- Work Header -->
        	<div class="item col-md-4">
                <div class="work-header type-one">
                    <h2 class="text-border">SUMMARY</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec molestie cursus turpis, rutrum varius quam volutpat vel. Duis tempor scelerisque tellus a fringilla. Sed augue ex, ultricies at sagittis at, ultricies ut libero. Fusce eu laoreet lorem. Ut eleifend sapien ut erat ultrices scelerisque.</p>
                </div>
            </div>
            <!-- Work Header End -->
            
			<?php
			$qImg = "SELECT nama, deskripsi FROM img WHERE id_kategori = '".d_url($_GET['id'])."';";
			if ($resImg = $data->runQuery($qImg)) {
				while ($rsImg = $resImg->fetch_array()) {
			?>
					<div class="item col-md-4">
						<a href="assets/img/<?php echo $rsImg['nama'] ?>" class="block" data-rel="prettyPhoto[pp_gal]" title="<?php echo $rsImg['deskripsi'] ?>">
							<div class="over-image">
								<img src="assets/img/<?php echo $rsImg['nama'] ?>" alt="<?php echo $rsImg['deskripsi'] ?>">
							</div>
						</a>
					</div>
			<?php
				}
			}
			?>
			
        </div>
        <!-- Work Gallery End -->
    </div>
</section>
<!-- Works Detail End -->