<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Bild-Generator Anleitung</title>

	<link rel="stylesheet" href="css/style.min.css">
</head>

<body>
	<header>
		<h1>Bild-Generator Anleitung</h1>
	</header>

	<main>
		<p>Mit unserem Bild-Generator können Sie ein einfaches placeholder-Bild erstellen, das Sie in Ihren Layouts verwenden können, während Sie an Ihren Inhalten arbeiten.</p>

		<section>
			<h2>Größe des Bildes festlegen</h2>
			<p>Um die Größe des Bildes festzulegen, müssen Sie die Breite und Höhe des Bildes in Pixeln in der URL angeben. Zum Beispiel:</p>
			<code>https://pic.pnnet.dev/400x400</code>
			<p>Dies wird ein quadratisches Bild mit einer Größe von 400x400 Pixeln erstellen.</p>
		</section>
		
		<div>Geben Sie die gewünschte Breite und Höhe des Bildes in Pixeln ein (z.B. 400x400).</div>

		<div class="content">
			<input type="text" id="image-size" placeholder="Breite x Höhe (z.B. 400x400)">
			<img id="image-holder" src="https://pic.pnnet.dev/256x256" width="256" height="256">
		</div>
	</main>

	<footer>
		Powered by <a href="https://panda-network.de">panda-network.de</a>
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