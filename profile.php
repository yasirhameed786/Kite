
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>kite E-learn</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/c45e18bcc2.js" crossorigin="anonymous"></script>
</head>
<body>
	<nav>
		<div class="nav-left">
			<img src="images/logo.png" class="logo">
			<ul>
				<li><img src="images/notification.png"></li>
				<li><img src="images/inbox.png"></li>
				<li><img src="images/video.png"></li>
			</ul>
		</div>
		<div class="nav-right">
			
			<div class="search-box">
				<img src="images/search.png">
				<input type="text" placeholder="Search">
			</div>
			<div class="nav-user-icon online" onclick="settingsMenuToggle()">
				<img src="images/profile-pic.png">
			</div>
		</div>

			<div class="settings-menu">
				<div id="dark-btn">
					<span></span>
				</div>
				<div class="settings-menu-inner">
					<div class="user-profile">
					<img src="images/profile-pic.png">
					<div>
						<p>Knock</p>
						<a href="#">See Your Profile</a>
					</div>
				</div>
				<hr>
				<div class="user-profile">
					<img src="images/feedback.png">
					<div>
						<p>Give Feedback</p>
						<a href="#">Help us to improve</a>
					</div>
				</div>
				<hr>
				<div class="settings-links">
					<img src="images/setting.png" class="settings-icon">
					<a href="#">Setting & Privacy <img src="images/arrow.png" width="10px"></a>
				</div>
				<div class="settings-links">
					<img src="images/help.png" class="settings-icon">
					<a href="#">Help & Support <img src="images/arrow.png" width="10px"></a>
				</div>
				<div class="settings-links">
					<img src="images/display.png" class="settings-icon">
					<a href="#">Display & Accessibility <img src="images/arrow.png" width="10px"></a>
				</div>
				<div class="settings-links">
					<img src="images/logout.png" class="settings-icon">
					<a href="logout.php">Logout <img src="images/arrow.png" width="10px"></a>
				</div>
			</div>
				
			</div>


	</nav>
	<div class="container">
		<div class="left-sidebar">
			<div class="imp-links">
				<a href="https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=fea66e2f9d564a8b972693716bc51cc5"><img src="images/news.png">Latest News</a>
				<!--<a href="home.php"><img src="images/friends.png">Chat</a>-->
				</div>
			
		</div>
		<form action="post.php" method="post">
			<input type="text" name="post" id="post">
			<input type="submit" value="submit">
		</form>
		<div class="right-sidebar">
			<div class="sidebar-title">
				<h4>Events</h4>
				<a href="#">See All</a>
			</div>

			<div class="event">
				<div class="left-event">
					<h3>21</h3>
					<span>October</span>
				</div>
				<div class="right-event">
					<h4>Social Media</h4>
					<p><i class="fas fa-map-marker-alt"></i> Knock IT Solutions</p>
					<a href="#">More Info</a>
				</div>
			</div>
			<div class="event">
				<div class="left-event">
					<h3>22</h3>
					<span>October</span>
				</div>
				<div class="right-event">
					<h4>E-Commerce</h4>
					<p><i class="fas fa-map-marker-alt"></i> Knock IT Solutions</p>
					<a href="#">More Info</a>
				</div>
			</div>			
		</div>
	</div>
	<div class="footer">
		<p>Copyright 2023 - Kite</p>
	</div>
	<script src="script.js"></script>
</body>
</html>

<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chatbot in JavaScript | CodingNepal</title>
    <link rel="stylesheet" href="chatbot/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="chatbot/script.js" defer></script>
  </head>
  <body>
    <button class="chatbot-toggler">
      <span class="material-symbols-rounded">mode_comment</span>
      <span class="material-symbols-outlined">close</span>
    </button>
    <div class="chatbot">
      <header>
        <h2>Chatbot</h2>
        <span class="close-btn material-symbols-outlined">close</span>
      </header>
      <ul class="chatbox">
        <li class="chat incoming">
          <span class="material-symbols-outlined">smart_toy</span>
          <p>Hi there 👋<br>How can I help you today?</p>
        </li>
      </ul>
      <div class="chat-input">
        <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
        <span id="send-btn" class="material-symbols-rounded">send</span>
      </div>
    </div>

  </body>
</html>