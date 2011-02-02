Acerca
======

Aquí están las instrucciones de cómo usar cada scripts; ubicados en http://github.com/renich/FileManagerCabal/tree/master/scripts/

instalarMySQLDb
===============

Si no quieres batallar, solo dale permisos 700 a éste y córrelo:

  chmod 700 instalarMySQLDb
  bash instalarMySQLDb

Si corriste ésto, ya no tienes que correr nada más. 

Actualmente, funciona con Fedora; no lo hemos probado con otro software.


desinstalarMySQLDb
==================

Éste funciona igual que el otro pero para desinstalar. Sólamente dale permisos 700 y córrelo:

    chmod 700 desinstalarMySQLDb
    bash desinstalarMySQLDb

Mucho cuidado. El script destruirá todos los datos de FileManagerCabal en la DB, ok?

Éste, probablemente, funcione con casi todo... lo POSIX, heheh...


Scripts SQL
===========

Si no quieres correr el instalador, no hay problema; te ofrecemos instrucciones para que puedas correr los scripts SQL independientemente.

fmcabal.sql
===========

Al hacer ésto, los datos que tengas en la base de datos desaparecerán;
ten cuidado:

    mysql -u root -p < fmcabal.sql


ejemplo.sql
===========

Éste instala los datos de ejemploj. Si lo corres dos veces seguidas, tendrás datos duplicados:

    mysql -u root -p fmcabal < ejemplo.sql


usuario.sql
===========

Éste es esencial para que FileManagerCabal pueda accesar a los datos. Te recomendamos que lo edites:

    mysql -u root -p < usuario.sql


Notas
=====

Si no has puesto password para root en MySQL, omite la -p. Te recomendamos no hacer esto y correr el script: mysql_secure_installation:

    mysql_secure_installation
