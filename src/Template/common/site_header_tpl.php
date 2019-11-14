<?php function draw_site_header(){?>

    <header id="searchHeader">
		<div id="topNavBar">
				<h1>Legit Renting</h1>
				<div id="signUp">
					<a href="login.html">Login</a>
					<a href="login.html">Register</a>
				</div>
		</div>
			<div id="searchDiv">		
				<div>
					<h1>Faça a sua reserva:</h1>
				</div>
			<div>
				<form action="/search.php">
					<input type="text" name="houseName">
					<input type="text" name="localizacao">
					<input type="date" name="checkIn">
					<input type="date" name="checkOut">
					<input type="number" name="numeroHospedes" min="0">
					<button type="submit">Search</button>
				</form>
			</div>
		</div>	
	</header>
<?php } ?>