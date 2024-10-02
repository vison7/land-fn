<section class="py-5 text-center container-fluid home-section1">
	<div class="row py-lg-5">
    <div class="col-lg-4 col-md-4">
    </div>

    <div class="col-lg-4 col-md-4">
    <img src="/assets/images/logo-01.webp" class="img-fluid" />
    </div>
    <div class="col-lg-4 col-md-4">
    </div>

		<div class="col-lg-8 col-md-8 mx-auto">
			<!-- <h1 class="fw-light">
        <img src="/assets/images/logo-01.webp" class="img-fluid" />
      </h1> -->
			<p class="mt-5 txt-detail">
      Forced land concessions and acquisitions in Indonesia and Thailand -- driven by corruption -- has resulted in loss of local wisdom, biodiversity, and rights violations especially affecting marginalized and vulnerable populations.

			</p>
		</div>
	</div>

  <div class="row py-lg-2 col-lg-8 col-md-8 mx-auto text-center">
    <div class=" col-lg-1">
    </div>

      <div class=" col-lg-4 col-md-6">
          <div class="card mb-5" style="cursor: pointer;">
            <div class="card-body" onclick="location.href='#submit-a-case';">
              <h5 class="card-title">I’m looking to</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary"></h6>
              <p class="card-text">submit <br />a case</p>
              <!-- <a href="#" class="card-link">Card link</a> -->
              <!-- <a href="#" class="card-link">Another link</a> -->
            </div>
          </div>
      </div>
      
      <div class=" col-lg-2 ">
      </div>

      <div class=" col-lg-4 col-md-6">
          <div class="card" style="cursor: pointer;">
            <div class="card-body" onclick="location.href='#case-studies';">
              <h5 class="card-title">I’m looking to</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary"></h6>
              <p class="card-text">data & information</p>
              <!-- <a href="#" class="card-link">Card link</a> -->
              <!-- <a href="#" class="card-link">Another link</a> -->
            </div>
          </div>
      </div>
      <div class=" col-lg-1 ">
      </div>

  </div>

  <h6 class="mt-5 mb-3"><a href="#">I want to learn more about this.</a></h6>
</section>

<section class="text-center container-fluid">
	<div class="row py-lg-5 py-md-5">
		<div class="col-lg-8 col-md-12 mx-auto">
      <iframe width="100%" height="500" src="https://www.youtube.com/embed/EUpcMvtd3VQ?si=qWmgASHGCo7r6PxF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		</div>
	</div>
</section>

<section class="container-fluid home-section3 ">
	<div class="row py-lg-5 text-center">
    
    <div class="col-lg-4 col-md-4 ">
    </div>
    <div class="col-lg-4 col-md-4 ">
    <h1 class="mt-5 mb-5">See the cases</h1>
    </div>
    <div class="col-lg-4 col-md-4">
      <!-- <div class="btn-group mt-3 mb-3" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group btn-group-sm" role="group">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Select Country
          </button>
          <ul class="dropdown-menu" style="">
            <li><a class="dropdown-item" href="#">Thailand</a></li>
            <li><a class="dropdown-item" href="#">Indonesia</a></li>
          </ul>
        </div>
      </div>   -->
    </div>

		<div class="col-lg-9 col-md-12 mx-auto">
    <iframe src="https://www.google.com/maps/d/embed?mid=1OhCME-Vgp47gXg9qH42Wokpw0XpkgXw&ehbc=2E312F" width="100%" height="650"></iframe>
		
		</div>
	</div>
</section>



<section class="container-fluid home-section4 ">
	<div class="row py-lg-5">
		<h1 class="text-center mt-5 mb-5">KNOW YOUR RIGHTS: FAQ</h1>

		<div class="col-lg-9 col-md-12 mx-auto">

			<div class="masonry-grid">

				<div class="grid-sizer"></div>

        <?php
				if(isset($faq->data)){
          $i=0;
				foreach (@$faq->data as $row) {
          $i++;
					$link = "/faq/detail/" . $row->id;
				?>
				<div class="grid-my-item">
					<div class="grid-my-item-box" style="cursor:pointer;" onclick="location.href='/faq/detail/<?php echo $row->id ?>';">
            <?php if($i==3){?>
              <img src="/assets/images/green.jpg" />
              <div class="grid-my-item-box-desc-2 d-none d-sm-none d-xl-block d-lg-block">
                <?php echo $row->title?>
                <br />
                <small class=""><?php echo substr($row->description,0,80)?></small>
              </div>
            <?php }else{?>
              <img src="<?php echo $row->thumb?>" />
              <div class="grid-my-item-box-desc d-none d-sm-none d-xl-block d-lg-block">
                <span><?php echo $row->title?></span>
              </div>
            <?php }?>

          </div>
				</div>
        <?php }}?>

				<!-- <div class="grid-my-item">
					<div class="grid-my-item-box">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" />
						<div class="grid-my-item-box-desc d-sm-none d-none">Land Bridge Thailand Project</div>
					</div>
				</div>
				<div class="grid-my-item">
					<div class="grid-my-item-box">
						<img src="/assets/images/green.jpg" />
						<div class="grid-my-item-box-desc d-sm-none d-none">Land Bridge Thailand Project</div>
					</div>
				</div>
				<div class="grid-my-item">
					<div class="grid-my-item-box">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" />
						<div class="grid-my-item-box-desc d-sm-none d-none">Land Bridge Thailand Project</div>
					</div>
				</div>
				<div class="grid-my-item">
					<div class="grid-my-item-box">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" />
						<div class="grid-my-item-box-desc d-sm-none d-none">Land Bridge Thailand Project</div>
					</div>
				</div>
				<div class="grid-my-item">
					<div class="grid-my-item-box">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" />
						<div class="grid-my-item-box-desc d-sm-none d-none">Rempang Ecocity Development Project</div>
					</div>
				</div>
				<div class="grid-my-item">
					<div class="grid-my-item-box">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" />
						<div class="grid-my-item-box-desc d-sm-none d-none">Concession of PT Duta Palma Group</div>
					</div>
				</div>
				<div class="grid-my-item">
					<div class="grid-my-item-box">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" />
						<div class="grid-my-item-box-desc d-sm-none d-none">The coast of Pak Bang Sub-district, Thepha District, Songkhla
							Province</div>
					</div>
				</div>
				<div class="grid-my-item">
					<div class="grid-my-item-box">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" />
						<div class="grid-my-item-box-desc d-sm-none d-none">The coast of Pak Bang Sub-district, Thepha District, Songkhla
							Province</div>
					</div>
				</div>
				<div class="grid-my-item">
					<div class="grid-my-item-box">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" />
						<div class="grid-my-item-box-desc d-sm-none d-none">Concession of PT Duta Palma Group</div>
					</div>
				</div>
				<div class="grid-my-item">
					<div class="grid-my-item-box">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" />
						<div class="grid-my-item-box-desc d-sm-none d-none">The coast of Pak Bang Sub-district, Thepha District, Songkhla
							Province</div>
					</div>
				</div> -->

			</div>

		</div>
	</div>
</section>


<section id="case-studies" class=" container-fluid home-section5 ">
	<div class="row py-lg-5">
		<h1 class="text-center mt-5 mb-5">Case Studies</h1>
		<div class="col-lg-9 col-md-12 mx-auto">

			<div class="row row-cols-1 row-cols-md-4 g-4">
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
              <p class="card-text"><small class="text-body-secondary"><?php echo @COUNTRY_FLAG[$row->cate_id] ?></small></p>
						</div>
					</div>
				</div>
				<?php }?>

			</div>

			<p class="seeall text-center m-3">
				<a href="/cases">see all</a>
			</p>

		</div>
	</div>
</section>


<!-- <section class="container-fluid home-section6 ">
	<div class="row py-lg-5">
    <h1 class="text-center mt-3 mb-5">Get Involved & Support</h1>

    <div class="col-lg-3 col-md-12">
      </div>

    <div class="col-lg-3 col-md-12 mt-5">
      <div class="btn-group " role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group" role="group">
          <button type="button" class="btn dropdown-toggle mybtn" data-bs-toggle="dropdown" aria-expanded="false">
            THAILAND
          </button>
          <ul class="dropdown-menu" style="">
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-12 mt-5 text-end">
      <div class="btn-group my-btn-group" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group my-btn-group" role="group">
          <button type="button" class="btn dropdown-toggle mybtn" data-bs-toggle="dropdown" aria-expanded="false">
          INDONESIA
          </button>
          <ul class="dropdown-menu" style="">
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
          </ul>
        </div>
      </div>  
    </div>

    <div class="col-lg-3 col-md-12">
    </div>

    <div class="col-lg-12 col-md-12 mt-5 mb-5 text-center">
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group" role="group">
          <button type="button" class="btn dropdown-toggle mybtn" data-bs-toggle="dropdown" aria-expanded="false">
          OTHER
          </button>
          <ul class="dropdown-menu" style="">
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
          </ul>
        </div>
      </div>
    </div>

		
	</div>
</section> -->

<section id="submit-a-case" class="container-fluid home-section6 ">
	<div class="row py-lg-5">
    <h1 class="text-center mt-5 mb-5">SUBMIT A CASE</h1>

		<div class="col-lg-6 col-md-12 mx-auto">
      <p class="text-center">
      Together, we can expose corruption in land acquisition cases. Reported cases will be processed by the team before being included in the reporting map. This may involve the sharing of information to trusted personnel including legal advisers and established community NGOs.
      </p>

      <div class="col-lg-6 col-md-6 mb-3 mx-auto">
        <img src="/assets/images/login-fb.svg" class="img-fluid mt-5" alt="...">
        <img src="/assets/images/login-gmail.svg" class="img-fluid mt-3" alt="...">
      </div>

    </div>

	</div>
</section>

<section class="container-fluid home-section8">
	<div class="row py-lg-5">
    <div class="col-lg-9 col-md-12 mx-auto">
      <h5 class="mt-3"> </h5>
    </div>

    <div class="col-lg-9 col-md-12 mx-auto">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name of the Project</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>

    </div>

		<div class="col-lg-9 col-md-12 mx-auto">
      <div class="mb-3">
      <h5 class="mt-3">Project Details</h5>
      </div>
      
    </div>

    <div class="col-lg-9 col-md-12 mx-auto">
      <div class=row>
        <div class="col-lg-6 col-md-6">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Project Location</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Date</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-9 col-md-12 mx-auto">
      <div class=row>
        <div class="col-lg-6 col-md-6">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Parties Involved</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">The Area</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-9 col-md-12 mx-auto">
      <div class=row>
        <div class="col-lg-6 col-md-6">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">How much money</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Legal Status</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-9 col-md-12 mx-auto">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">allegation of corruption</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

    </div>

    <div class="col-lg-9 col-md-12 mx-auto">
        <div class=row>

          <div class="col-lg-12 col-md-12 mb-3 mx-auto text-center">
            <button type="button" class="btn btn-submit">PROJECT<br />INFORMATION</button>
          </div>

        </div>
      
    </div>


	</div>
</section>


<section class="container-fluid home-section9">
	<div class="row py-lg-5">
		<h1 class="col-lg-9 col-md-12 mx-auto m-3">contact us

			<i class="bi bi-facebook ml-5">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
					class="bi bi-facebook" viewBox="0 0 16 16">
					<path
						d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
				</svg>
			</i>

			<i class="bi bi-instagram">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
					class="bi bi-instagram" viewBox="0 0 16 16">
					<path
						d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
				</svg>
			</i>
			<i class="bi bi-twitter-x">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
					class="bi bi-twitter-x" viewBox="0 0 16 16">
					<path
						d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
				</svg>
			</i>
			<i class="bi bi-linkedin">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
					class="bi bi-linkedin" viewBox="0 0 16 16">
					<path
						d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
				</svg>
			</i>

		</h1>


		<div class="col-lg-8 col-md-12 mx-auto txt-detail">
    
      <strong class="txt-address"> < Address ></strong><br />

      <div class="col-lg-8 col-md-12 mx-auto">
        <strong class="txt-topic">Indonesia</strong>
        <p>
        Land Defenders Secretariat: Jalan Mangga Gang Pelajar No.19 A Pekanbaru, Riau Indonesia
        </p>

        <strong class="txt-topic">Thailand</strong>
        <p>
        Around the Room Studion
        1761 Suebsiri 31 Rd. Muang Nakhonratchasima 30000 Thailand
        </p>

        <p>
        Get in touch with our representative: <br />
        <strong class="txt-topic">
        landdefender13@gmail.com
        </strong>
        </p>

        <p>
        Copyright 2024. 
        </p>
        <p>
        This microsite is made possible with support from Accountability Lab, Center For International Private Enterprise (CIPE), and Development Gateway: An IREX Venture, through the #HackCorruption South East Asia initiative.
        </p>
      </div>

		</div>

    
    <div class="col-lg-8 col-md-12 mx-auto">
			<h6 class="text-end txt-partners">our partners</h6>
      <div class="text-end">
      Icon
      </div>
		</div>


	</div>
</section>

