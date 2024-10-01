<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

<script>
	var elem = document.querySelector('.masonry-grid');
	var msnry = new Masonry(elem, {
		// options
		itemSelector: '.grid-my-item',
		columnWidth: 100
	});

	// element argument can be a selector string
	//   for an individual element
	var msnry = new Masonry('.masonry-grid', {
		// options
	});
</script>
</body>
</html>