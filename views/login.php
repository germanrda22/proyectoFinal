<div id="login">
    <?php if(!isset($_SESSION['identity'])):?>
        <h3>Entra en tu banco</h3>
        <form action="<?=base_url?>usuario/login" method="POST">
            <label for="dni">DNI</label>
            <input type="text" name="dni"><br><br>
            <label for="password">Contraseña</label>
            <input type="password" name="password"><br><br>
            <input type="submit" value="Enviar">
            <br>
        </form>
    <?php endif; ?>

    <?php 
        if(isset($_SESSION['admin']))
        {
            require_once 'views/admin';
        }else{
            require_once 'views/usuario';
        }
    ?>
</div>