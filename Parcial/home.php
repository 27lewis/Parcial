<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="imagen/logo.ico">
        <title>Restaurante Muchoriko</title>
        <link rel="stylesheet" href="estilo.css">
    </head>

    <body>
        <div id="container">
            <header>
                <h1>
                    Restaurante Muchoriko
                </h1>

                <h3>
                    Ordena ya
                </h3>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <fieldset>
                        <legend>
                            Rellenar aqui!
                        </legend>

                        <b>Nombre</b>
                        <input type="text" name="Nombre"><br>

                        <b>Dirección</b>
                        <input type="text" name="Dirección"><br>

                        <b>Telefono</b>
                        <input type="number" name="Telefono"><br>

                        <b>Medio pollo asado $20.000</b>
                        <input type="number" name="medio" min="0"  value="0"><br>
                        <b>Acompañarlo</b>
                        <select name="Tbebidas1" id="select">
                            <option value=""></option>
                            <option value="yuca">Yuca</option>
                            <option value="papas">Papas Fritas</option>
                            <option value="ensalada">Ensalada</option>
                        </select><br>

                        <b>Pollo asado al carbón $35.000</b>
                        <input type="number" name="carbon" min="0"  value="0"><br>
                        <b>Acompañarlo</b>
                        <select name="Tbebidas2" id="select">
                            <option value=""></option>
                            <option value="yuca">Yuca</option>
                            <option value="papas">Papas Fritas</option>
                            <option value="ensalada">Ensalada</option>
                        </select><br>

                        <b>Filete de pollo a la planca $40.000</b>
                        <input type="number" name="filete" min="0"  value="0"><br>
                        <b>Acompañarlo</b>
                        <select name="Tbebidas3" id="select">
                            <option value=""></option>
                            <option value="Sin acompamiento">Sin acompamiento</option>
                            <option value="Papas Fritas y ensalada">Papas Fritas y ensalada</option>
                        </select><br>

                        <b>Arroz de pollo $20.000</b>
                        <input type="number" name="arroz" min="0"  value="0"><br>

                        
                        <b>Bebidas</b>
                        <input type="number" name="Bebidas" min="0"  value="0">

                        <b>Sabor</b>
                        <select name="Tbebidas" id="select">
                            <option value=""></option>
                            <option value="Cocacola">Cocacola $5000</option>
                            <option value="Sprite">Sprite $5000</option>
                            <option value="Manzana">Manzana $5000</option>
                            <option value="Botella de Agua">Botella de Agua $3000</option>
                        </select><br><br>

                        <input type="submit" name="enviar" value="Ordenar">

                    </fieldset>
                </form>
            </header>
            <?php

      if($_SERVER["REQUEST_METHOD"] == "POST" ){
        $Nombre = $_POST['Nombre'];
        $Direccion = $_POST['Dirección'];
        $Telefono = $_POST['Telefono'];
        $medio = $_POST['medio'];
        $carbon = $_POST['carbon'];
        $filete = $_POST['filete'];
        $arroz = $_POST['arroz'];
        $Bebidas = $_POST['Bebidas'];
        $Tbebidas = $_POST['Tbebidas'];
        $Tbebidas1 =$_POST['Tbebidas1'];
        $Tbebidas2 =$_POST['Tbebidas2'];
        $Tbebidas3 =$_POST['Tbebidas3'];



        
        #medio pollo asado

        if( $medio == "0"){
            $total += $medio * 20000;
        }else{
            $total += $medio * 20000;
        }

        #pollo asado al carbon

        if( $carbon == "0"){
            $total += $carbon * 35000;
        }else{
            $total += $carbon * 35000;
        }

        #filete de pollo a la plancha

        if( $filete == "0"){
            $total += $filete * 40000;
        }else{
            $total += $filete * 40000;
        }


        if( $arroz == "0"){
            $total += $arroz * 20000;
        }else{
            $total += $arroz * 20000;
        }

        #acompañarlo $Tbebidas1

        if($Tbebidas1 == "yuca"){
            $Tbebidas1;
        }
        if($Tbebidas1 == "papas"){
            $Tbebidas1;
        }
        if($Tbebidas1 == "ensaladas"){
            $Tbebidas1;
        }


        #acompañarlo $Tbebidas1

        if($Tbebidas1 == "yuca"){
            $Tbebidas1;
        }
        if($Tbebidas1 == "papas"){
            $Tbebidas1;
        }
        if($Tbebidas1 == "ensaladas"){
            $Tbebidas1;
        }


        #acompañarlo $Tbebidas1

        if($Tbebidas2 == "yuca"){
            $Tbebidas2;
        }
        if($Tbebidas2 == "papas"){
            $Tbebidas2;
        }
        if($Tbebidas2 == "ensaladas"){
            $Tbebidas2;
        }

        #acompañarlo $Tbebidas3

        if($Tbebidas3 == "Sin acompamiento"){
            $Tbebidas3;
        }
        if($Tbebidas3 == "Papas Fritas y ensalada"){
            $Tbebidas3;
        }

        #bebidas

        if($Tbebidas == "Cocacola"){
            $total += 5000 * $Bebidas;
            
        }
        if($Tbebidas == "Sprite"){
            $total += 5000 * $Bebidas;
            
        }
        if($Tbebidas == "Manzana"){
            $total += 5000 * $Bebidas;
            
        }
        if($Tbebidas == "Botella de Agua"){
            $total += 3000 * $Bebidas;
            
        }
       

        echo "<div >
        <p><strong>Nombres:</strong> $Nombre</p>
        <p><strong>Direccion:</strong> $Direccion</p>
        <p><strong>Telefono:</strong> $Telefono</p>
        <p><strong>Medio pollo asado:</strong> $medio</p>
        <p><strong>Acompañado:</strong> $Tbebidas1</p>
        <p><strong>Pollo asado al carbón:</strong> $carbon</p>
        <p><strong>Acompañado:</strong> $Tbebidas2</p>
        <p><strong>Filete de pollo a la planca:</strong> $filete</p>
        <p><strong>Acompañado:</strong> $Tbebidas3</p>
        <p><strong>Arroz de pollo:</strong> $arroz</p>
        <p><strong>Cantidad de bebidas:</strong> $Bebidas</p>
        <p><strong>Tipo de bebida:</strong> $Tbebidas</p>
        <p><strong>Costo total:</strong> <span style='color: green;'>$ $total</span></p>
       </div>";
        
       }
     ?>
        </div>
    </body>


</html>