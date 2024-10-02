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
		<h1 class="text-center mt-5 mb-5">Case Studies</h1>
		<div class="col-lg-9 col-md-12 mx-auto cases-detail">

			<div class="row row-cols-1 row-cols-md-4 g-4 ">
				<?php
				$i = 0;
				foreach (@$cases->data as $row) {
					$link = "/cases/detail/" . $row->id;
				?>
				<div class="col">
					<div class="card h-100">
            <a href="<?php echo $link?>">
						<img src="<?php echo $row->thumb ?>" alt="" class="card-img-top">
            </a>
						<div class="card-body" style="cursor:pointer;" onclick="location.href='/cases/detail/<?php echo $row->id ?>';">
							<h5 class="card-title">
								<?php echo $row->title ?>
							</h5>
						</div>
					</div>
				</div>
				<?php }?>

			</div>

			<!-- <p class="seeall text-center m-3">
				<a href="#">see all</a>
			</p> -->

		</div>
	</div>
</section>