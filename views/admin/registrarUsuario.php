<h1>Registrar usuario</h1>

<form action="././controllers/Usuario/save" method="post">
    <label for="dni">DNI</label>
    <input type="number" name="dni" required><br><br>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required><br><br>
    <label for="ape">Apellidos</label>
    <input type="text" name="ape" ><br><br>
    <label for="tel">Teléfono</label>
    <input type="number" name="tel"><br><br>
    <label for="email">Email</label>
    <input type="email" name="email" ><br><br>
    <label for="password">Contraseña</label>
    <input type="password" name="pass"><br><br>
    <label for="rol">Rol</label>
    <input type="hidden" name="rol" value="user">
</form>