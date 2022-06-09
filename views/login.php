<div id="login">
    <h3>Entra en tu banco</h3>
    <form action="<?=base_url?>usuario/login" method="POST">
        <label for="dni">DNI</label>
        <input type="text" name="dni">
        <label for="password">Contraseña</label>
        <input type="password" name="password">
        <input type="submit" value="Enviar">
        <br>
    </form>
</div>