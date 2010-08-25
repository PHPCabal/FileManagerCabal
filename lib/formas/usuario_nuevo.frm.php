<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <label>Nombre:</label>
    <input type="text" name="nombre" value="" />

    <label>Apellido Paterno:</label>
    <input type="text" name="apellido_paterno" value="" />

    <label>Apellido Materno:</label>
    <input type="text" name="apellido_materno" value="" />

    <label>Usuario:</label>
    <input type="text" name="usuario" value="" />

    <label>Clave:</label>
    <input type="clave" name="contraseña" value="" />

    <label>Correo:</label>
    <input type="text" name="email" value="" />

    <input type="submit" name="enviar" value="Enviar" />
    <input type="reset" name="reset" value="Limpiar" />
</form>
