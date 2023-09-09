<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>LE NOMADE</title>
</head>
<body>
    <header>
        <h1>LE NOMADE</h1>
        <pre>
🍋
        </pre>
    </header>
    <main>
        <section class="landscape-images">
            <?php
            $imageDirectory = 'landscape_images'; // Directory where images are stored
            $images = glob($imageDirectory . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE); // Retrieve image files

            foreach ($images as $image) {
                echo '<img src="' . $image . '" alt="Landscape Image">';
            }
            ?>        </section>
        <section class="portrait-images">
            <?php
            $imageDirectory = 'portrait_images'; // Directory where images are stored
            $images = glob($imageDirectory . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE); // Retrieve image files

            foreach ($images as $image) {
                echo '<img src="' . $image . '" alt="Portrait Image">';
            }
            ?>          </section>
    </main>
</body>
</html>
