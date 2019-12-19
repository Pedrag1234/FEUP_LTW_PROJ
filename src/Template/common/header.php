
<?php function draw_head(){?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Legit Renting</title>    
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="../css/style.css" rel="stylesheet">
            <link href="../css/layout.css" rel="stylesheet">
             <link rel="stylesheet" href="https://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
            <script src="https://code.jquery.com/jquery-1.8.2.js"></script>
            <script src="https://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
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
                        <a href = "user_profile.php"><?php echo $username?></a>
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

draw_head() ?>    
    <body>	
        <header id="searchHeader">
            <div id="topNavBar">
                <h1><a href="home.php">Legit Renting</a></h1>
                <div class="container">
                    <div id="signUp" class="vertical-center">
                        <a href = "user_profile.php"><?php echo $_SESSION['Username'] ?></a>
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
