<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cover Letter - Simon Joel</title>
    <link rel="icon" href="assets/images/logo.png" type="image/icon type">
    <link rel="stylesheet" href="cv.css">
</head>

<header>
    <div class="profile-picture">
        <img src="assets/images/simon.png" alt="Profile Picture">
    </div>
    <div class="header-details">
        <h1>Simon Joel Warkentin</h1>
        <p>Birth Date: 14 - Dec - 1998</p>
        <p>Current location: Cork, Ireland<br>(but willing to relocate and/or work remotely)</p>
	<!--a href="Simon_Joel_Cover_Letter.pdf" download="Simon_Joel_Cover_Letter.pdf">download as PDF</a-->
    </div>
</header>
<section class="work-experiences">
    <h2>Cover Letter</h2>
    <div class="letter">

	<?php
	$file_content = file_get_contents('cover_letter_IT_support.txt');
	$paragraphs = explode("\n\n", $file_content);
	foreach ($paragraphs as $paragraph) {
	    echo "<p>$paragraph</p><hr>";
	}
	?>
    </div>
    <hr>

    <hr>
</section>

    <footer>
        <p>Contact: mail@simonjoel.com | Phone: +351 927564122</p>
        <!--a href="index.php">Back to main page</a-->
    </footer>

</body>

</html>
