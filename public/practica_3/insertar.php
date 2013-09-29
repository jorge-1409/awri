<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>XHTML + CSS</title>
        <link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <p><a href="../"> Volver a proyectos</a></p>

        <h1>Quiz No. 1 :: xhtml y css</h1>
        <fieldset>
            <legend>Registro</legend>
            <ul>
                <li class="margen_interna">
                    Procesando informacion... <br/>
                    <pre>
                        <?php
                        if (isset($_POST)) {
                            echo '<br/>';
                            foreach ($_POST as $key => $value) {
                                echo $key . " = " . $value . "<br/>";
                            }
                        }
                        ?>
                    </pre>
                    Los datos del formulario se almacenaron correctamente<br/>
                    <a href="index.xhtml">Volver</a>
                </li>
            </ul>
        </fieldset>
        <p class="right">
            <a href="http://validator.w3.org/check?uri=http://awri.my.phpcloud.com/practica_3/index.xhtml">
                <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
            </a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px"
                     src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                     alt="¡CSS Válido!" />
            </a>
        </p>
    </body>
</html>