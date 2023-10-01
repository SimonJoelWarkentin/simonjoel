<!DOCTYPE html>
<html>
<head>
    <title>Simon Joel</title>
    <link id="theme-style" href="style.css" rel="stylesheet">
    <link id="dark-style" href="dark.css" rel="stylesheet" disabled>
</head>
<body>
    <header>
        <div id="title-section">
            <!--img src="logo.png" alt="Logo"-->
            <h1>hi, i'm Simon Joel</h1>
            <p>why are you here?</p>
        </div>
        <div id="navigation-bar">
            <ul>
                <li>
                    <a href="#content1" class="nav-link" id="nav-link-1">to hire you</a>
                    <div id="dropdown-1" class="dropdown-content">
                        <p>Cool! I am available for work!<br>Here you can find:</p>
                        <a href="cv.html">My CV</a>
                        <a href="cover_letter.html">My Cover Letter</a>
			<a href="hire_me.php#content5">My Experiences</a>
			<a href="hire_me.php">Overview</a>
                    </div>
                </li>
                <li>
                    <!--a href="#content2" class="nav-link" id="nav-link-2">to see your art</a>
                    <div id="dropdown-2" class="dropdown-content">
                        <a href="sorry.html">Paintings</a>
                        <a href="sorry.html">Photography</a>
                        <a href="sorry.html">Music</a>
                    </div-->
                </li>
                <li>
                    <a href="#content3" class="nav-link" id="nav-link-3">to stalk you</a>
                    <div id="dropdown-3" class="dropdown-content">
                        <a href="about_me.php">About Me</a>
                        <a href="sorry.html">Thoughts</a>
                        <a href="sorry.html">Photos</a>
                    </div>
                </li>
                <li>
                    <!--a href="#content4" class="nav-link" id="nav-link-4">I don't even know</a>
                    <div id="dropdown-4" class="dropdown-content">
                        <a href="sorry.html">Self Hosted Something</a>
                        <a href="sorry.html">Something Else</a>
                        <a href="sorry.html">Invidious</a>
                    </div-->
                </li>
            </ul>
        </div>
    </header>
    <button id="theme-toggle">
        <span id="moon-icon">🌙</span>
        <span id="sun-icon" hidden>☀️</span>
    </button>
    <main>
        <hr>
        <section id="content1">
            <h2>Available to work!</h2>
            <p>Currently I am employed, but definetly open for new work.<br>Although I work in a tech company, I am in a sales position, not really in a tech job.<br>I am looking for a real tech job, for example in Linux System Administration,<br>but I would also accept another Sales job, if it is a good offer.</p>
            <p>here you can find:</p>
	    <a href="cv.html">my CV</a>
		<p></p>
	    <a href="cover_letter.html">my Cover Letter</a>
		<p></p>
	    <a href="hire_me.php">An Overview</a>
        </section>
        <!--section id="content2">
            <h2>Art...</h2>
            <b>...is the most important thing in life, for me.</b>
            <p>I am a musician since my childhood (used to work in the music industry before covid),<br>and I also enjoy painting and photography.</p>
            <p>As soon as I have time, I plan on posting some of my art here.</p>
        </section-->
        <section id="content3">
            <h2>I like sharing!...</h2>
            <b>...but I hate social media.</b>
            <p>This is why I want to share some pictures and thoughts of mine here in this section!
		</p>
		<hr>
		<!--img src="assets/images/simon2.png" alt="Simon"--><!--don't forget to style this when uncommenting it (also in dark)-->
		<p>
		Hey, I'm Simon Joel Warkentin.
		<br>My journey has taken me through 5 countries, and along the way, I've picked up 4 languages.
		<br>Beyond the world of tech and Linux, I often lose myself in creating music or exploring new places.
		<br>With a deep appreciation for Free and Open Source Software, I'm always learning and evolving.
		<br>Want a glimpse into my world? Find out more <a href="about_me.php">here</a>.
            </p>
        </section>
        <!--section id="content4">
            <h2>Hmmmmm...</h2>
            <p>Some more content is gonna go here soon.<br>Probably something about self hosting...</p>
        </section-->
    </main>
    <hr>
    <footer>
        <a href="https://github.com/SimonJoelWarkentin">This website is an Open Source project by Simon Joel.</a>
    </footer>
    <script src="script.js"></script>
    <script src="theme.js"></script>
</body>
</html>
