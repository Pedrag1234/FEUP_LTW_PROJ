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
            <div id="info">
                <h1><?php echo $name ?></h1>
                <h2>username: <?php echo $username ?></h2>
                <h3>Date of birth: <?php echo $date_of_birth ?></h3>
                <h3>About: </h3>
                <a><?php echo $about ?></a>
            </div>
            <div id="centerdiv">
                <div><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $user['photo'] ).'"/>'; ?></div>
                <form action="../actions/action_change_prof_pic.php" method="post" enctype="multipart/form-data">
                    <br>
                    <a>Escolher nova foto de perfil</a>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>
            </div>
            <div id=menu>
                <a href="edit_profile.php">Editar perfil</a>
                <a href="change_pass.php">Alterar senha</a>
                <a>Editar propriedades</a>
            </div>
        </div>
        <?php


    }

    function draw_edit_profile(){
        $username= $_SESSION['Username'];
        $user = getUser($username);
        $name = $user['name'];
        $presentation = $user['about'];
        $date = $user['date_of_birth'];

        ?>
        <div id="Profile">
            <form action="../actions/action_edit_profile.php">
                <h4>Nome</h4>
                <input type="text" name="name" value = '<?php echo $name ?>' maxlength="40">
                <h4>Nome de utilizador</h4>
                <input type="text" name="newUsername" value = '<?php echo $username?>' maxlength="20">
                <h4>Data de nascimento</h4>
                <input type="date" name="date_of_birth" value = <?php echo $date ?>>
                <h4>Apresentação</h4>
                <textarea name="description" rows="10" cols="30" maxlength="500"><?php echo $presentation ?></textarea>
                <br><br>
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
                <input type="password" name="oldPassword" min="0" maxlength="40">
                <h5>Senha nova:</h5>
                <input type="password" name="newPassword" min="0" maxlength="40">
                <h5>Confirmar senha nova:</h5>
                <input type="password" name="confPassword" min="0" maxlength="40">
                <button type="submit">salvar</button>
            </form>
        </div>
        <?php
    }


?>
