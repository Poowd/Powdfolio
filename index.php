<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/gradient.css">
    <link rel="stylesheet" href="css/scrollbar.css">

    <!-- 
         Mark Limuel L. Lape
         BS501 - BSCS
         Intermediate Web Programming 
         Prelims
                                        -->
</head>
<body>
    <!-- NAVIGATION BAR -->
	<?php
		$_navselection = [
			['url' => 'index.php', 'text' => 'Home'],
			['url' => 'index.php', 'text' => 'About'],
			['url' => 'index.php', 'text' => 'Portfolio'],
			['url' => 'index.php', 'text' => 'Contact'],
		];
	?>
    <nav class="_topnav">
        <div class="nav-title">Powd_</div>
            <ul class="_navlist">
                <?php foreach ($_navselection as $navitem) : ?>
					<a href="<?php echo $navitem['url']; ?>"> <?php echo $navitem['text']; ?></a>
				<?php endforeach; ?>
            </ul>
        <div class="call-for-action">
            <button class="primary">Contact Now!</button>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main>
        
        <!-- BANNER -->
        <?php

            $_first = "Mark";
            $_second = "Limuel";
            $_middle = "Lopez";
            $_middleinitial = "L.";
            $_last = "Lape";
            $_location = "Bocaue, Bulacan, Philippines";
            $_school = "STI College Munoz-EDSA";
            $_program = "Computer Science";

            $_bannergreet = "Hello, " . $_first . " " . $_last . " a student of computer science major in web development having expertise is nothing.";

        ?>

        <section class="_banner">
            <div class="_bannerinfo">
                <h2>Hello I am a</h2>
                <h1 class="text-gradient">Front-End Web Developer</h1>
                <p><?php echo $_bannergreet; ?></p>
                <button class="primary">Portfolio</button>
            </div>
        </section>
                    
        <!-- ABOUT -->
        <?php

            $_aboutquotes = "A progress-driven " . $_program . " student of " . $_school;
            $_about = "Hello! I am " . $_first . " " . $_last . " from " . $_location . " currently studying " . $_program . " at " . $_school. ", along side, I am part of Mine Community's (Minecraft Server) Council member which enables me to improve many aspects of my life such management and leadership. This also includes my skills in coding and designing as part of my contribution to community. <br><br> I am passionate about my field due to its complexity, it also enhance my logicl and analytical skills that enables me to think freely. Although experiencing difficulties especially to different terms and algorithms, I find programming as entertaining. <br><br> Looking forward to be further deepen my knowledge about Front-End Development, Game Programming, and Cyber Security.";
            $_fullname = $_first . " " . $_second . " " . $_middleinitial . " " . $_last;

        ?>

        <?php 
            $_technologies = [
                ['logo' => './img/technologies/java.png'],
                ['logo' => './img/technologies/c-sharp.png'],
                ['logo' => './img/technologies/js.png'],
                ['logo' => './img/technologies/php.png'],
                ['logo' => './img/technologies/sql-server.png'],
                ['logo' => './img/technologies/typescript.png'],
                ['logo' => './img/technologies/html.png'],
                ['logo' => './img/technologies/css-3.png'],
            ];
        ?>

        <section class="_about">
            <figure>
                <img src="./img/about/my-imgs-1.jpg" alt="" class="shadow">
                <div>
                    <ul>
                        <?php foreach ($_technologies as $technology) : ?>
                            <div class="technology">
                                <div><img src="<?php echo $technology['logo']; ?>" alt=""></div>
                            </div>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="info">
                    <h3><?php echo $_fullname ?></h3>
                    <h4><?php echo $_location ?></h4>
                    <p><?php echo $_program . " at " . $_school ?></p>
                </div>
            </figure>
            <article>
                <h2 class="text-purple">About</h2>
                <h3><?php echo $_aboutquotes; ?></h3>
                <p><?php echo $_about; ?></p>
                <button class="primary">Details</button>
                <button class="secondary">Let's Chat</button>
            </article>
        </section>

        <!-- SERVICES -->
        <?php 
            $_services = [
                ['icon' => './img/services/neon.jpg', 
                 'title' => 'Front-End Dev', 
                 'experience' => '0 Year/s', 
                 'major' => 
                 'React Developer'],

                ['icon' => './img/services/sage.jpg', 
                 'title' => 'UI/UX Designer', 
                 'experience' => '0 Year/s', 
                 'major' => 'Figma'],

                ['icon' => './img/services/viper.jpg', 
                 'title' => 'Designer', 
                 'experience' => '0 Year/s', 
                 'major' => 'Photoshop CS6'],
            ];
        ?>
        
        <section class="_services">
            <h2 class="text-purple">Services</h2>
            <ul class="_serviceslist">
                <?php foreach ($_services as $service) : ?>
                    <div class="services-item shadow">
                    <figure><img src="<?php echo $service['icon']; ?>" alt="" class="shadow"></figure>
                    <h2 class="text-gradient"><?php echo $service['title']; ?></h2>
                    <h5><?php echo $service['experience']; ?></h5>
                    <h6><?php echo $service['major']; ?></h6>
                    <div><button class="primary">Portfolio</button></div>
                </div>
				<?php endforeach; ?>
            </ul>
        </section>

        <!-- PORTFOLIO -->
        <?php 
            $_portfolios = [
                ['image' => './img/portfolio/classkode.jpg', 
                 'title' => 'Class Kode', 
                 'description' => 'Class Management System: Using Visual Studio 2022 WinForms, Our group developed the system as 2nd year Computer Science student taking Computer Programming 3, as a mock project.', 
                 'technologies' => 'C#'],
                 
                ['image' => './img/portfolio/budsys.png', 
                'title' => 'BudSys', 
                'description' => 'Budgeting System: Random project during our vacation (2nd year - 3rd year)', 
                'technologies' => 'C#'],
                
                ['image' => './img/portfolio/ebento.jpg', 
                 'title' => 'E-Bento', 
                 'description' => 'Website Tabulation System: Was assigned to create a front-end for the tabulation website for Academic Week 2023.', 
                 'technologies' => 'Bootstrap'],

                 ['image' => './img/portfolio/personabud.jpg', 
                 'title' => 'PersonaBud', 
                 'description' => 'A new modification for previous system, BudSys', 
                 'technologies' => 'C#'],
            ];
        ?>

        <section class="_portfolio">
            <h2 class="text-purple">Portfolio</h2>
            <ul class="_portfoliolist">
                <?php foreach ($_portfolios as $portfolio) : ?>
                    <div class="portfolio-item shadow">
                        <figure>
                            <img src="<?php echo $portfolio['image']; ?>" alt="" class="shadow">
                        </figure>
                        <article>
                            <h3 class="text-gradient"><?php echo $portfolio['title']; ?></h3>
                            <p><?php echo $portfolio['description']; ?></p>
                            <h5><?php echo $portfolio['technologies']; ?></h5>
                        </article>
                    </div>
				<?php endforeach; ?>
            </ul>
            <p class="seemore">See More</p>
        </section>

        <div class="copyrights">
            <p>&copy; Powd_ 2023 | Mark Lape from BS501</p>
        </div>
        <footer>
            <div class="col-1">
                <h3>Powd_ Portfolio</h3>
                <p>In compliance with Intermediate Web Programming, I Mark Limuel L. Lape created this portfolio containing various details about myself and the skills I have. This portfolio will soon be updated to its full capacity. The portfolio is developed using HTML, CSS, and PHP - that could be enhanced by Tailwind but decided to use Vanilla CSS</p>
            </div>
            <div class="col-2">
                <h3>Technologies</h3>
                <ul>
                    <li>Java</li>
                    <li>C#</li>
                    <li>HTML, CSS, & JS</li>
                    <li>Tailwind</li>
                    <li>React & Typescript</li>
                    <li>PHP</li>
                    <li>SQL</li>
                </ul>
            </div>
            <div class="col-3">
                <h3>Contact</h3>
                <ul>
                    <li>Location: Bocaue, Bulacan, Philippines</li>
                    <li>Gmail: lapemark11@gmail.com</li>
                    <li>Number: +63 - 956 203 8413</li>
                    <li>Github: Poowd</li>
                </ul>
            </div>
        </footer>
    </main>
</body>
</html>