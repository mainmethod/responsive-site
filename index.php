<!DOCTYPE html>
<html>
	<head>
		<meta name="charset" content="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Responsive Site</title>
		<link rel="stylesheet" href="assets/css/reset.css" type="text/css" />
		<link rel="stylesheet" href="assets/css/common.css" type="text/css" />
		<link rel="stylesheet" href="assets/css/responsive.css" type="text/css" />
	</head>
	<body>
		<header>
         <div id="banner" role="banner"></div>
         <div id="newsletter-box">
            <form name="newsletter-form" action="#" method="post">
               <label for="newsletter-email">Newsletter:</label>
               <input type="email" id="newsletter-email" class="newsletter-email" name="email" required="required" placeholder="Your email" />
               <input type="submit" name="submit" value="Submit" />
            </form>
         </div>
      </header>
      <nav class="menu">
         <ul class="menu-list">
            <li class="menu-item">
               <a class="menu-item-link" href="./homepage" title="Homepage">Homepage</a>
            </li>
            <li class="menu-item">
               <a class="menu-item-link" href="./news" title="News">News</a>
            </li>
            <li class="menu-item">
               <a class="menu-item-link" href="./graphics" title="Graphics">Graphics</a>
            </li>
            <li class="menu-item">
               <a class="menu-item-link" href="./mobile" title="Mobile">Mobile</a>
            </li>
            <li class="menu-item">
               <a class="menu-item-link" href="./webdesign" title="Web Design">Web Design</a>
            </li>
         </ul>
      </nav>
      <div id="content">
         <article id="description-box">
            <h3>Title</h3>
            <p>
               Your content here
            </p>
         </article>
         <div id="wrapper">
            <div id="author-info-box">
               <p>
                  Information about the author <br />
               </p>
            </div>
        <aside id="video-box">
               <video>
 					<source src="movie.mp4" type='video/mp4;' />
 					<source src="movie.webm" type='video/webm;' />
			</video>
            </aside>
            <aside class="twitter-box">
               <p>
                  <img class="twitter-bird" src="./images/twitter-bird.png" alt="Twitter Bird" />
                  Follow me on Twitter! <br />
                  We're in (number of follower)
               </p>
            </aside>
               <br class="clear-both" />
         </div>
      </div>
      <footer id="main-footer">
         <p>
            Author's name. All rights reserved. Copyright &copy; 2012 - 2013.
         </p>
         <div class="social-bar">
            <a href="./facebook" title="Facebook">
               <img src="./images/icons/facebook.png" alt="Facebook icon" />
            </a>
            <a href="./twitter" title="Twitter">
               <img src="./images/icons/twitter.png" alt="Twitter icon" />
            </a>
            <a href="./googleplus" title="Google+">
               <img src="./images/icons/google.png" alt="Google+ icon" />
            </a>
            <a href="./linkedin" title="LinkedIn">
               <img src="./images/icons/linkedin.png" alt="Linkedin icon" />
            </a>
         </div>
      </footer>
	</body>
</html>