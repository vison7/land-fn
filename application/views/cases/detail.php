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
				<button type="button" class="btn btn-primary" onclick="location.href='javascript:history.back(-1)';">Back</button>
			
				<h2 class="mt-5 mb-5"><?php echo @$data->data[0]->title?></h2>
				
				
				<h5>Project Location:</h5>
				<p><?php echo @$data->data[0]->location?></p>

				<h5>Date:</h5>
				<p><?php echo @$data->data[0]->event_date?></p>
				
				<h5>Parties involved:</h5>
				<p><?php echo @$data->data[0]->parties_involved?></p>

				<h5>The area:</h5>
				<p><?php echo @$data->data[0]->the_area?></p>

				<h5>How much money:</h5>
				<p><?php echo @$data->data[0]->how_much_money?></p>

				<h5>Legal status:</h5>
				<p><?php echo @$data->data[0]->legal_status?></p>

				<h5>Allegation of Corruption:</h5>
				<p><?php echo @$data->data[0]->corruption?></p>

				<h5>Impacts to Communities and Actions:</h5>
				<p><?php echo @$data->data[0]->impacts?></p>

				<h5>Lessons Learn:</h5>
				<p><?php echo @$data->data[0]->lessons_learn?></p>

				<h5>Contact Name:</h5>
				<p><?php echo @$data->data[0]->contact_name?></p>

				<h5>Contact Email:</h5>
				<p><?php echo @$data->data[0]->contact_email?></p>

				<h5>Contact Organization:</h5>
				<p><?php echo @$data->data[0]->contact_org?></p>

				
			<!-- <p class="seeall text-center m-3">
				<a href="#">see all</a>
			</p> -->

		</div>
	</div>
</section>