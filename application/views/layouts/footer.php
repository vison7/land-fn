<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

<script>
	var elem = document.querySelector('.masonry-grid');
	var msnry = new Masonry(elem, {
		// options
		itemSelector: '.grid-my-item',
		columnWidth: 100
	});

	//   for an individual element
	var msnry = new Masonry('.masonry-grid', {
		// options
	});

	var API_URL_SUBMIT_CASE = '<?php echo API_URL_SUBMIT_CASE?>';
	var API_TOKEN = '<?php echo API_TOKEN?>';
</script>

<script async  crossorigin="anonymous" src="/assets/js/auth.js?r=<?php echo time();?>"></script>
<script async  crossorigin="anonymous" src="/assets/js/common.js?r=<?php echo time();?>"></script>
<script async defer crossorigin="anonymous" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Load the JS SDK asynchronously -->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
<script async defer crossorigin="anonymous" src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

<script src="https://accounts.google.com/gsi/client" async></script>

</body>
</html>