
<?php function draw_head($title){?>
    <!DOCTYPE html>
    <html>
        <head>
            <link rel="icon" href="../images/logo2.png" type="image/png">
            <title>
                <?php echo $title; ?>
            </title>    
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="../css/style.css" rel="stylesheet">
            <link href="../css/layout.css" rel="stylesheet">
        </head>
        <?php
        draw_margin();
    }

function draw_margin(){?>
    <div id="margin"></div>    
    <?php
}

function draw_header_index(){?>
        <?php draw_head('Level Renting'); ?>
        <body>	
            <header id="searchHeader">
                <div id="topNavBar">
                    <h1><a href="home.php"> <div id="logo"><img src="../images/logo.png"></div></a></h1>
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
                    <div id="search">
                        <form action="../pages/action_search.php" method="post">
                            <div>
                                <br>Descrição:<br>
                                <input type="text" name="houseName">
                            </div>
                            <div>
                                <br>Localização:<br>
                                <input type="text" name="localizacao">
                            </div>
                            <div>
                                <br>Entrada:<br>
                                <input type="date" name="checkIn">
                            </div>
                            <div>
                                <br>Saída:<br>
                                <input type="date" name="checkOut">
                            </div>
                            <div>
                                <br>Hóspedes:<br>
                                <input type="number" name="numeroHospedes" min="0">
                            </div>
                            <div id="button">
                                <br><br><button type="submit">Search</button><br><br>
                            </div>
                        </form>
                    </div>
                </div>	
            </header>
<?php }?>


<?php function draw_header_user(){

    $username = $_POST['Username'];
    
    draw_head('Level Renting') ?>    
        <body>	
            <header id="searchHeader">
                <div id="topNavBar">
                    <h1><a href="home.php"> <div id="logo"><img src="../images/logo.png"></div></a></h1>
                    <div id="signUp">
                        <a href = "user_profile.php"><?php echo $username?></a>
                    </div>
                </div>
                <div id="searchDiv">		
                    <div>
                        <h1>Faça a sua reserva:</h1>
                    </div>
                    <div>
                        <form action="../pages/action_search.php" method="post">
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

    draw_head('Level Renting - Profile'); ?>   
    <body>	
        <header id="searchHeader">
            <div id="topNavBar">
                <h1><a href="home.php"> <div id="logo"><img src="../images/logo.png"></div></a></h1>
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

    draw_head('Level Renting - Register'); ?>
    <body>
        <header id="searchHeader">
            <div id="topNavBar">
                <h1><a href="home.php"> <div id="logo"><img src="../images/logo.png"></div></a></h1>
            </div>
        </header>
<?php }?>
