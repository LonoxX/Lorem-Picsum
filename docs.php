<!DOCTYPE html>
<html>

<head>
	<title>Lorem Picsum</title>
	<meta name="viewport" content="width=device-width">
	<meta charset="utf-8">
	<meta name="description" content="Lorem Picsum is a simple, fast and free image placeholder service to generate PNG,JPG,GIF and webp placeholder images for your project.">
	<meta name="author" content="LonoxX  (https://pnnet.dev)">
	<meta name="robots" content="all">
	<meta name="keywords" content="panda-network,placeholder, images ,placeholder-image, lorem-ipsum ,image-placeholder, dummy-images, profile-picture-generator, lorem-ipsum-generators ,image-placeholders ,api-placeholder,LonoxX ">
	<meta property="og:site_name" content="Lorem Picsum">
	<meta property="og:title" content="Lorem Picsum">
	<meta property="og:description" content="Lorem Picsum is a simple, fast and free image placeholder service to generate PNG,JPG,GIF and webp placeholder images for your project.">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://pic.pnnet.dev/256x256">
	<meta property="og:url" content="https://pic.pnnet.dev">
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
			<code>https://pic.pnnet.dev/256x256</code>
			<p>This will create a square image with a size of 256x256 pixels.</p>
		</section>
		
		<div>
			Enter the desired width and height of the image in pixels (e.g. 256x256). <br>
			If you want a desired text and a different colour for the background and/or text colour <br>
			And copy the link easy with the button (-:
		</div>

		<div class="content">
			<div class="input-group">
				<input type="text" id="image-size" placeholder="Breite x Höhe (z.B. 256x256)">
				<input type="text" id="image-text" placeholder="(256x256)">

				<select id="text-color" name="color">
					<option value="grey">Grau</option>
					<option value="black">Schwarz</option>
					<option value="white" selected>Weiß</option>
					<option value="red">Rot</option>
					<option value="green">Grün</option>
					<option value="blue">Blau</option>
					<option value="yellow">Gelb</option>
				</select>

				 <select id="bg-color" name="color">
					<option value="grey" selected>Grau</option>
					<option value="black">Schwarz</option>
					<option value="white">Weiß</option>
					<option value="red">Rot</option>
					<option value="green">Grün</option>
					<option value="blue">Blau</option>
					<option value="yellow">Gelb</option>
				 </select>

				 <input type="text" id="image-link" value="https://pic.pnnet.dev/256x256" disabled>
				 <button onclick="copyLink()" id="image-copy">Copy Link</button>
			</div>
			
			<img id="image-holder" src="https://pic.pnnet.dev/256x256">
		</div>
	</main>
	<footer>
		Powered by <a href="https://panda-network.de">Pande-Network</a>
	</footer>

	<script>
		let imageLink = document.getElementById("image-link");
		const imageHolder = document.getElementById("image-holder");
		const imageSize = document.getElementById("image-size");
		const imageText = document.getElementById("image-text");
		const textColor = document.getElementById("text-color");
		const bg_Color = document.getElementById("bg-color");

		document.addEventListener("input", function() {
			const isEmpty = str => !str.trim().length;
			const size = imageSize.value.split("x");

			let text = imageText.value;
			const color = textColor.value;
			const bgcolor = bg_Color.value;
			const width = size[0];
			const height = size[1];

			if (isEmpty(text)) {

				text = `${width}x${height}`;
			} else { imageText.value = text; }

			imageHolder.src = `https://pic.pnnet.dev/${width}x${height}?text=${text}&tc=${color}&bgc=${bgcolor}`;
			imageLink.value = imageHolder.src;
			// imageHolder.width = width;
			// imageHolder.height = height;
			textColor.value = color;
			bg_Color.value = bgcolor;
		});

		function copyLink() {
			const imageSize = document.getElementById("image-link");
			imageSize.select();
			imageSize.setSelectionRange(0, 99999);

			navigator.clipboard.writeText(imageSize.value);
		}
	</script>
</body>

</html>