
<?php function draw_head(){?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Legit Renting</title>    
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="../css/style.css" rel="stylesheet">
            <link href="../css/layout.css" rel="stylesheet">
        </head>
        
<?php }?>


<?php function draw_header_index(){?>
        <?php draw_head() ?>
        <body>	
            <header id="searchHeader">
                <div id="topNavBar">
                    <h1><a href="home.php">Legit Renting</a></h1>
                    <div class="container">
                        <div id="signUp" class="vertical-center">
                            <?php if(isset($_SESSION['Username'])) {?>
                                <a href = "user_profile.php"><?php echo $_SESSION['Username']?></a>
                                <a href="../actions/action_logout.php">Logout</a>
                            <?php } 
                            else {?>
                                <a href="login.php">Login</a>
                                <a href="register_user.php">Register</a>
                            <?php } ?>    
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


<?php function draw_header_user(){

    $username = $_POST['Username'];
    
    draw_head() ?>    
        <body>	
            <header id="searchHeader">
                <div id="topNavBar">
                    <h1>Legit Renting</h1>
                    <div id="signUp">
                        <a href = ><?php echo $username?></a>
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

<?php function draw_header_profile(){ 

$username = $_SESSION['Username'];

draw_head() ?>    
    <body>	
        <header id="searchHeader">
            <div id="topNavBar">
                <h1><a href="home.php">Legit Renting</a></h1>
                <div class="container">
                    <div id="signUp" class="vertical-center">
                        <a><?php echo $username?></a>
                        <a href="../actions/action_logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </header>
<?php }?>


<?php function draw_header_register(){

draw_head() ?>    
    <body>	
        <header id="searchHeader">
            <div id="topNavBar">
                <h1><a href="home.php">Legit Renting</a></h1>
            </div>
        </header>
<?php }?>
