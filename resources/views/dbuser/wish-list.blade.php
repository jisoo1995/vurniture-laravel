<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/style-db.css">

	<title>Dashboard</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="/" class="brand">
			<span class="text">vurniture</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="/">
					<i class='bx bxs-home'></i>
					<span class="text">Home</span>
				</a>
			</li>
			<li>
				<a href="dashboard">
					<i class='bx bxs-user' ></i>
					<span class="text">My Profile</span>
				</a>
			</li>
			<li>
				<a href="trans-list">
					<i class='bx bxs-receipt' ></i>
					<span class="text">Transaction List</span>
				</a>
			</li>
			<li>
				<a href="inbox">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Inbox</span>
				</a>
			</li>
			<li class="active">
				<a href="wish-list">
					<i class='bx bxs-bookmark-heart' ></i>
					<span class="text">Wish List</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="settings.html">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="{{ route('logout') }}" class="logout"
					onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
					<i class='bx bx-log-out' ></i>
					<span class="text">Logout</span>
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/ProfilUser.jpeg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
                <div class="head-title">
                    <div class="left">
                        <h1>Wish List</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li><i class='bx bx-chevron-right' ></i></li>
                            <li>
                                <a class="active" href="#">Wish List</a>
                            </li>
                        </ul>
                        <div class="wl">
                            <h3>Wish List</h3>
                            <div class="wl-cardcon">
                                <div class="wl-card">
                                    <div class="wl-des">
                                        <img src="img/catalog-bed.jpg">
                                        <div class="wl-text">
                                            <h4>CMF4 BED</h4>
                                            <div class="wl-full">
                                                <div class="wl-ket">
                                                    <span class="sym">Type</span>
                                                    <span class="sym-desc">Bed</span>
                                                </div>
                                                <div class="wl-ket">
                                                    <span class="sym">Size</span>
                                                    <span class="sym-desc">200 x 160 cm</span>
                                                </div>
                                                <div class="wl-ket">
                                                    <span class="sym">Color</span>
                                                    <span class="sym-desc">White</span>
                                                </div>
                                                <div class="wl-ket">
                                                    <span class="sym">Description</span>
                                                    <span class="sym-desc">A very soft bed covered by . . .</span>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wl-but">
                            <div class="to-shop">
                                <h4>To Shop</h4>
                            </div>
                            <div class="del-all">
                                <h4>Delete All</h4>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="js/script-db.js"></script>
</body>
</html> 