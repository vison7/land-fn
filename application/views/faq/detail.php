<nav class="navbar top-nav">
	<div class="container-fluid top-nav">
		<a class="navbar-brand" href="#">
			<img src="/assets/images/logo-01.webp" alt="Logo" width="100" 
				class="d-inline-block align-text-top">
			<!-- Bootstrap -->
		</a>
    	<div class="d-flex" role="search">
        <button class="btn btn-outline-success" type="button" onclick="location.href='/';">Home</button>
		</div>
	</div>
</nav>

<section id="case-studies" class=" container-fluid home-section55">
	<div class="row py-lg-5">
		<h1 class="text-center mt-5 mb-5">FAQ</h1>
		<div class="col-lg-9 col-md-12 mx-auto cases-detail">
				<button type="button" class="btn btn-primary" onclick="location.href='javascript:history.back(-1)';">Back</button>
			
				<h2 class="mt-5 mb-5"><?php echo @$data->data[0]->title?></h2>
				
				<h5>Detail:</h5>
				<p><?php echo @$data->data[0]->detail?></p>
				
				<?php if(!empty($data->data[0]->gallery)){?>
				<div class="container mt-5">
					<div class="row">
						<?php 
						foreach ($data->data[0]->gallery as $val) { 
							$link = str_replace('//land-bn/','//localhost:8011/',$val);
							$thumb= str_replace('//land-bn/','//localhost:8011/',$val);
							?>
						<div class="col">
							<a href="<?php echo $link?>" target="_blank"><img class="img-fluid" src="<?php echo $thumb  ?>" /></a>
						</div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
		</div>
	</div>
</section>