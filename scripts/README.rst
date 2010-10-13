Acerca
======

Aquí están las instrucciones de cómo usar cada script.

fmcabal.sql
===========

Para poder usar la estructura de tablas predeterminada, necesitas, primero,
entrar a mysql y crear una base de datos.

```bash
mysql -u root -p
```
```sql
CREATE DATABASE fmcabal CHARACTER SET utf8;
```

Después, crear un usuario que la utilice. Por favor, no uses a root para accesar
la base de datos.

```sql
GRANT ALL PRIVILEGES ON fmcabal.* TO 'usuario'@'localhost' IDENTIFIED BY '.p@s5W0r6_S36u70&';
```

Hecho esto, basta con utilizar este usuario para crear la estructura de la base
de datos. Al hacer ésto, los datos que tengas en la base de datos desaparecerán;
ten cuidado.

```sql
mysql -u usuario -p fmcabal < /path/a/FileManagerCabal/scripts/fmcabal.sql
```