<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <style>
        body {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            font-family: Ubuntu, 'Segoe UI', Arial, sans-serif;
            color: #212529;
        }

        header {
            margin-bottom: -20px;
        }

        main, aside {
            float: left;
            width: 48%;
            margin: 1%;
            margin-top: 0;
        }

        footer {
            width: 100%;
            font-size: 0.8em;
            color: #666;
            text-align: right;
            clear: both;
        }

        fieldset {
            padding: 3%;
            border-radius: 10px;
            margin: 20px auto;
            background-color: #eee;
            border: 2px solid #0b5485;
        }

        input[type=submit] {
            font-size: 1em;
            padding:5px 15px;
            border:2px;
            background:#ccc;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 10px;
            margin: 10px;

        }

        legend{
            font-size: 1.1em;
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            background-color: white;
        }

        td, th {
            padding: 10px;
        }

        th {
            color: white;
            background-color: #0b5485;
        }

        td:first-child {
            font-weight: 700;
        }

        td:nth-child(2) {
            text-align: center;
        }

        /*-------------------------------------------------*/

        .destacado {
            color: #0b5485;
            font-weight: 700;
            font-size: 1.5em;
        }

        .destacado span {
            color: black;
            font-size: 20px;
        }

        /*-------------------------------------------------*/

        @media (max-width: 1080px) {
            main, aside {
                float: left;
                width: 100%;
                margin: 1% auto;
            }
        }
    </style>
</head>
<body>
<header>
    <h1>Calculadora Real / Racional</h1>
</header>
<aside>
    <fieldset id="ayuda">
        <legend>Reglas de uso de la calculadora</legend>
        <ul>
            <li>La calculadora se usa escribiendo la operación.</li>
            <li>La  operación será <strong>Operando_1 operación Operando_2</strong>.</li>
            <li>Cada operando puede ser número <i>positivo</i><strong> real  o racional.</strong></li>
            <li>Real p.e. <strong>5</strong> o <strong>5.12 </strong> Racional p.e <strong> 6/3 </strong>o<strong> 7/1</strong></li>
            <li>Los operadores reales permitidos son <strong><span class="destacado"> +  -  *  /</span></strong></li>
            <li>Los operadores racionales permitidos son <strong><span class="destacado"> +  -  *  :</span> </strong></li>
            <li>No se deben de dejar espacios en blanco entre operandos y operación</li>
            <li>Si un operando es real y el otro racional se considerará operación racional</label></li>
            <li>Ejemplos:
                <ul>
                    <li>(Real) <strong>5.1+4</strong></li>
                    <li>(Racional) <strong>5/1:2</strong></li>
                    <li>(Error) <strong>5.2+5/1</strong></li>
                    <li>(Error) <strong>52214+</strong></li>
                </ul>
            </li>
        </ul>
    </fieldset>
</aside>
<main>
    <fieldset>
        <legend>Establece la operación</legend>
        <form action="." method="post">
            <label for="operacion">Operación</label>
            <label><input type="text" name="operacion" id=""></label>
            <input type="submit" name="enviar" value="Calcular">
        </form>
    </fieldset>

    <fieldset id=resultado><legend>Resultado</legend>
        <label></label>
    </fieldset>
</main>

</body>
</html>