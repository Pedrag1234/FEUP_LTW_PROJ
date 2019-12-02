<?php
    include_once('../Database/Queries/user_queries.php');

    function draw_profile(){
        $username = $_SESSION['Username'];
        $user = getUser($username);
        $name = $user['name'];
        $date_of_birth = $user['date_of_birth'];
        $about = $user['about'];
        ?>
        <div id="Profile">
            <div>
                <h1>Name: <?php echo $name ?></h1>
                <h2>username: <?php echo $username ?></h2>
                <h3>Date of birth: <?php echo $date_of_birth ?></h3>
                <h3>About: </h3>
                <a><?php echo $about ?></a>
            </div>
            <div>
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $user['photo'] ).'"/>'; ?>
            </div>
            <div id=menu>
                <h4><a href="edit_profile.php">Editar perfil</a></h4>
                <h4>Alterar senha</h4>
                <h4>Editar propriedades</h4>
            </div>
        </div>
        <?php


    }

    function draw_edit_profile(){
        ?>
        <div id="Profile">
            <form action="../actions/action_edit_profile.php">
                <h4>Mudar descrição</h4>
                <input type="description" name="description" min="0">
                <button type="submit">salvar</button>
            </form>
        </div>
        <?php
    }


?>
