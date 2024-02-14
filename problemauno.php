<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>12662.C16</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h1>12662.C16</h1>
        <h2>descripcion</h2>
        <p>
            <h3>
             OMIJal se ha encontrado con una variante en el Concurso ACM,pues <br>
             el numero de programadores que conforman un equipo puede variar,<br>
             entonces modifica tu programa anterior pues ahora deberás preguntar <br>
             numero de 3 integrantes por equipo, al final indica cuantos pueden <br>
             formarse y cuantos programadores quedan. <br>
            </h3>
        </p>
        <h2>entrada</h2>
        <p>
            <h3>
            Dos números que representen el número de programadores y <br>
            el número de programadores por equipo.
            </h3>
        </p>
        <h2>salida</h2>
        <p>
            <h3>
            Dos números que representen el número de programadores y<br>
             el número de programadores por equipo.
            </h3>
        </p>
        <h2>ejemplos</h2>

        <table border="1" cellspacing="3" cellpadign="3">
            <tr>
                <td><h3>entrada</h3></td>
                <td><h3>salida</h3></td>
            </tr>
            <tr>
                <td><h4>5<br>4</h4></td>
                <th><h4>Equipos formados: 1 <br>
                     Estudiantes sin equipo: 1</h4></th>
            </tr>
            <tr>
                <td><h4>18<br>3</h4></td>
                <th><h4>Equipos formados: 6 <br>
                        Estudiantes sin equipo: 0</h4></th>
            </tr>
        </table>
        <h3>--------------------------------------------------------</h3>
        <h3>
        <?php
            $a=5;
            $b=4;
            $c=18;
            $d=3;
            $uno=$a/$b;
            $unoo=$a%$b;
            echo "el primer ejemplo los resultados serian: <br> Equipos formados: ", $uno, "<br>Estudiantes sin equipo: ",$unoo;
            $dos=$c/$d;
            $doss=$c%$d;
            echo "el segundo ejemplo los resultados serian: <br> Equipos formados: ", $dos, "<br>Estudiantes sin equipo: ",$doss;
        ?>
        </h3>
    </body>
</html>