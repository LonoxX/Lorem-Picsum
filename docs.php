<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Lorem-Picsum</title>
	<link rel="stylesheet" href="css/style.min.css">
</head>

<body>
	<header>
		<h1>Image Generator Guide</h1>
	</header>
	<main>
		<p>With our Image Generator, you can create a simple placeholder image that you can use in your layouts while you work on your content.</p>
		<section>
			<h2>Setting Image Size</h2>
			<p>To set the size of the image, you need to specify the width and height of the image in pixels in the URL. For example:</p>
			<code>https://pic.pnnet.dev/400x400</code>
			<p>This will create a square image with a size of 400x400 pixels.</p>
		</section>
		<div>Enter the desired width and height of the image in pixels (e.g. 400x400).</div>
		<div class="content">
			<input type="text" id="image-size" placeholder="Breite x Höhe (z.B. 400x400)">
			<img id="image-holder" src="https://pic.pnnet.dev/256x256" width="256" height="256">
		</div>
	</main>
	<footer>
		Powered by <a href="https://panda-network.de">Pande-Network</a>
	</footer>

	<script>
		const imageHolder = document.getElementById("image-holder");
		const imageSize = document.getElementById("image-size");

		imageSize.addEventListener("input", function() {
			const size = this.value.split("x");
			const width = size[0];
			const height = size[1];

			imageHolder.src = `https://pic.pnnet.dev/${width}x${height}`;
			imageHolder.width = width;
			imageHolder.height = height;
		});
	</script>
</body>

</html>