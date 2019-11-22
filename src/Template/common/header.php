
<?php function draw_header_index(){?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Legit Renting</title>    
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="../css/style.css" rel="stylesheet">
            <link href="../css/layout.css" rel="stylesheet">
        </head>
        <body>	
            <header id="searchHeader">
                <div id="topNavBar">
                    <h1>Legit Renting</h1>
                    <div class="container">
                        <div id="signUp" class="vertical-center">
                            <a href="../pages/login.php">Login</a>
                            <a href="login.html">Register</a>
                        </div>
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
<?php }?>


<?php function draw_header_user(){ ?>

    $username = $_POST['username'];

    <!DOCTYPE html>
    <html>
        <head>
            <title>Legit Renting</title>    
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="../css/style.css" rel="stylesheet">
            <link href="../css/layout.css" rel="stylesheet">
        </head>
        <body>	
            <header id="searchHeader">
                <div id="topNavBar">
                    <h1>Legit Renting</h1>
                    <div id="signUp">
                        <a><?php echo $username?></a>
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
<?php }?>
