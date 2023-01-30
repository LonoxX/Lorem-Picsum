<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Bild-Generator Anleitung</title>
  <style>
    /* Styling */
    body {
      font-family: Arial, sans-serif;
      background-color: #ccc;
    }

    header h1 {
      text-align: center;
    }

    main {
      max-width: 800px;
      margin: 0 auto;
    }

    section {
      margin: 1em 0;
    }

    pre {
      background-color: lightgray;
      padding: 1em;
      display: inline-block;
    }

    input[type="text"] {
      top: 0;
      padding: 10px;
      font-size: 16px;
      width: 40%;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      margin: 20px 0;
      display: inline-block;
    }

    #image-holder {
      display: inline-block;
      margin-left: 20px;
    }
  </style>
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
      <pre>https://pic.pnnet.dev/400x400</pre>
      <p>Dies wird ein quadratisches Bild mit einer Größe von 400x400 Pixeln erstellen.</p>
    </section>
    <div>Geben Sie die gewünschte Breite und Höhe des Bildes in Pixeln ein (z.B. 400x400).</div>
    <div>
      <div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0;">
        <input type="text" id="image-size" placeholder="Breite x Höhe (z.B. 400x400)">
        <img id="image-holder" src="https://pic.pnnet.dev/400x400" width="400" height="400">
      </div>
    </div>

  </main>
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