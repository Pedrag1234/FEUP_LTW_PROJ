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
                <h4><a href="change_pass.php">Alterar senha</a></h4>
                <h4>Editar propriedades</h4>
            </div>
        </div>
        <?php


    }

    function draw_edit_profile(){
        ?>
        <div id="Profile">
            <form action="../actions/action_edit_profile.php">
                <h4>Mudar apresentação</h4>
                <input type="text" name="description" min="0">
                <button type="submit">salvar</button>
            </form>
        </div>
        <?php
    }    
    function draw_change_pass(){
        ?>
        <div id="Profile">
            <form action="../actions/action_change_pass.php">
                <h4>Alterar senha</h4>
                <h5>Senha antiga:</h5>
                <input type="text" name="oldPassword" min="0">
                <h5>Senha nova:</h5>
                <input type="text" name="newPassword" min="0">
                <h5>Confirmar senha nova:</h5>
                <input type="text" name="confPassword" min="0">
                <button type="submit">salvar</button>
            </form>
        </div>
        <?php
    }


?>
