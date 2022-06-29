<?php
    /* INICIAMOS EN VACIO PARA EVITAR ERRORES */
    $FormNombre = "";
    $FormApellido = "";
    $FormEmail = "";
    $FormSexo = "";
    $FormHabhtml = "";
    $FormHabcss = "";
    $FormHabjava = "";
    $FormHabpython = "";
    $FormHabphp = "";
    $FormPublicidades = "";
    $FormMetodPago = "";
    $FormPassword = "";
    $FormTelefono = "";
    $FormColor = "";
    $FormFechaNac = "";
    $FormFechaHora = "";
    $FormNroCasa = "";
    $FormRango = "";
    $FormBuscador = "";
    $FormLinkIg = "";
    if($_POST){


        $FormNombre = (isset($_POST['FormNombre']))?$_POST['FormNombre']:"";
        $FormApellido = (isset($_POST['FormApellido']))?$_POST['FormApellido']:"";
        $FormSexo = (isset($_POST['FormSexo']))?$_POST['FormSexo']:"";
        $FormEmail = (isset($_POST['FormEmail']))?$_POST['FormEmail']:"";

        /* esto de checked es solo para que la opcion quede marcada luego de enviar */
        $FormHabhtml = (isset($_POST['FormHabhtml']) == "true")?"checked":"";
        $FormHabcss = (isset($_POST['FormHabcss']) == "true")?"checked":"";
        $FormHabjava = (isset($_POST['FormHabjava']) == "true")?"checked":"";
        $FormHabpython = (isset($_POST['FormHabpython']) == "true")?"checked":"";
        $FormHabphp = (isset($_POST['FormHabphp']) == "true")?"checked":"";
        /*************************/
        $FormPublicidades = (isset($_POST['FormPublicidades']))?$_POST['FormPublicidades']:"";
        $FormMetodPago = (isset($_POST['FormMetodPago']))?$_POST['FormMetodPago']:"";
        $FormPassword = (isset($_POST['FormPassword']))?$_POST['FormPassword']:"";
        $FormTelefono = (isset($_POST['FormTelefono']))?$_POST['FormTelefono']:"";
        $FormColor = (isset($_POST['FormColor']))?$_POST['FormColor']:"";
        $FormFechaNac = (isset($_POST['FormFechaNac']))?$_POST['FormFechaNac']:"";
        $FormFechaHora = (isset($_POST['FormFechaHora']))?$_POST['FormFechaHora']:"";
        $FormNroCasa = (isset($_POST['FormNroCasa']))?$_POST['FormNroCasa']:"";
        $FormRango = (isset($_POST['FormRango']))?$_POST['FormRango']:"";
        $FormBuscador = (isset($_POST['FormBuscador']))?$_POST['FormBuscador']:"";
        $FormLinkIg = (isset($_POST['FormLinkIg']))?$_POST['FormLinkIg']:"";
        
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="./styles.css">


    <title>Formulario completo</title>
</head>
<body>
    <!-- SOLO IMPRIMIMOS SI ES QUE EL USUARIO PRESIONO EL BOTON ENVIAR !-->
    <?php if($_POST){ ?>       
        <div style="color:red;">
            <h4><?php echo "Datos Recibidos: ";?></h4>
            <h4><?php echo ($FormNombre)?"Nombre: ".$FormNombre:"";?></h4>
            <h4><?php echo ($FormApellido)?"Apellido: ".$FormApellido:"";?></h4>
            <h4><?php echo ($FormEmail)?"Email: ".$FormEmail:"";?></h4>
            <h4><?php echo "Soy: ".$FormSexo;?></h4>
            <h4><?php echo ($FormHabhtml == "" && $FormHabcss == "" && $FormHabjava == "" && $FormHabpython == "" && $FormHabphp == "")?"":"Mis habilidades son: ";?></h4>
            <h4><?php echo ($FormHabhtml)?"* Html":"";?></h4>
            <h4><?php echo ($FormHabcss)?"* Css":"";?></h4>
            <h4><?php echo ($FormHabjava)?"* JavaScript":"";?></h4>
            <h4><?php echo ($FormHabpython)?"* Python":"";?></h4>
            <h4><?php echo ($FormHabphp)?"* Php":"";?></h4>
            <h4><?php
                if($FormPublicidades == "on") echo "Recibir Publicidades: Si";
                else echo "Recibir Publicidades: No";
                ?>
            </h4>
            <h4><?php if($FormMetodPago != "MercadoPago"){
                    if($FormMetodPago != "Ninguno") echo "Metodo de pago: ".$FormMetodPago;
                    else echo "Metodo de pago: No seleccionado";
                }else{
                    echo "Metodo de pago: Mercado Pago";
                }
            ?></h4>
            <h4><?php echo ($FormPassword)?"Password: ".$FormPassword:"";?></h4>
            <h4><?php echo ($FormTelefono)?"Telefono: ".$FormTelefono:"";?></h4>
            <h4><?php echo ($FormColor)?"Color seleccionado: ".$FormColor:"";?></h4>
            <h4><?php echo ($FormFechaNac)?"Fecha de nacimiento: ".$FormFechaNac:"";?></h4>
            <h4><?php echo ($FormFechaHora)?"Fecha y Hora: ".$FormFechaHora:"";?></h4>
            <h4><?php echo ($FormNroCasa)?"Numero de casa: ".$FormNroCasa:"";?></h4>
            <h4><?php echo ($FormRango)?"Rango Seleccionado: ".$FormRango:"";?></h4>
            <h4><?php echo ($FormBuscador)?"Buscador: ".$FormBuscador:"";?></h4>
            <h4><?php echo ($FormLinkIg)?"Url de IG: ".$FormLinkIg:"";?></h4>            
        </div>
    <?php }?>
    <div class="container p-5 text-center">
            <h5>INFORMACION PERSONAL</h5>
            <hr>
            <form action="index.php" method="post">
                <!-- INPUT DE TEXTO - NORMALES -->
                <label for="nombre"  >Nombre: </label> 
                <input id="nombre"  type="text" name="FormNombre" value="<?php echo $FormNombre;?>"> <br> <br>  <!--  Los datos del value son opcionales -->
                <label for="apellido">Apellido:</label>
                <input id="apellido" type="text" name="FormApellido" value="<?php echo $FormApellido;?>"> <br> <br> <!--  Los datos del value son opcionales -->
        
                <!-- RADIO -->
                <input id="hombre" type="radio" name="FormSexo" value="Hombre" <?php echo ($FormSexo == "Hombre")?"checked":""; ?> > <!--Value: valor que se va a enviar al enviar el formulario-->
                <label for="hombre">Hombre</label>
                <input id="mujer" type="radio" name="FormSexo" value="Mujer" <?php echo ($FormSexo == "Mujer")?"checked":""; ?>> <!-- esto imprime el checked como atributo solo si es igual al seleccionado -->
                <label for="mujer">Mujer</label> 
                

                <br>
        
                <!-- CHECKBOX -->
                <h5>habilidades:</h5>
                <input id="html" type="checkbox" name="FormHabhtml" value="true" <?php echo $FormHabhtml;?> > <!--Value: valor que se va a enviar al enviar el formulario-->
                <label for="html">HTML</label> <br>
                <input id="css" type="checkbox" name="FormHabcss" value="true" <?php echo $FormHabcss;?>>
                <label for="css">CSS</label> <br>
                <input id="js" type="checkbox" name="FormHabjava" value="true" <?php echo $FormHabjava;?>>
                <label for="js">JavaScript</label> <br>
                <input id="python" type="checkbox" name="FormHabpython" value="true" <?php echo $FormHabpython;?>>
                <label for="python">Python</label> <br>
                <input id="php" type="checkbox" name="FormHabphp" value="true" <?php echo $FormHabphp;?>>
                <label for="php">PHP</label> <br>
        
                <br> <br>
        
                <!--boton de  activacion -->
                <div class="form-check form-switch m-3">
                    <input class="form-check-input" <?php echo ($FormPublicidades == "on")?"checked":""?> type="checkbox" name="FormPublicidades" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Recibir publicidades</label>
                </div>

                <!-- OPCIONES DESPLEGABLES -->
                <label for="talle">Medio de Pago:</label>
                <select name="FormMetodPago">
                    <option value="Ninguno" >Seleccionar una opción...</option>
                    <option value="Efectivo" <?php echo ($FormMetodPago == "Efectivo")?"selected":"";?>>Efectivo</option>
                    <option value="MercadoPago" <?php echo ($FormMetodPago == "MercadoPago")?"selected":"";?>>Mercado Pago</option>
                    <option value="Transferencia" <?php echo ($FormMetodPago == "Transferencia")?"selected":"";?>>Transferencia</option>
                </select>
                
                <br> <br>
        
                <div class="form-floating mb-3">
                    <input type="email" name="FormEmail" class="form-control" id="floatingInput" value="<?php echo $FormEmail;?>">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="FormPassword" class="form-control" id="floatingPassword" value="<?php echo $FormPassword;?>">
                    <label for="floatingPassword">Password</label>
                </div>
                <br>
                <input type="button" onclick="alert('Email validado exitosamente! pedazo de nachii');" value="Validar Email">
                <br> <br>
        
        
                <!-- TELEFONO -->
                <label for="telefono">Telefono</label>
                <input type="tel" name="FormTelefono" id="telefono" value="<?php echo $FormTelefono;?>">
                <br> <br>
        
                <!-- seleccionar color -->
                <input type="color" name="FormColor" id="color">
                <br> <br>
        
                <!-- seleccionar una fecha -->
                <label for="date">Fecha de nacimiento:</label>
                <input type="date" name="FormFechaNac" id="fecha">
                <br> <br>
        
                <!-- SELECCIONAR FECHA CON HORA -->
                <label for="datetime-local">Fecha y hora:</label>
                <input type="datetime-local" name="FormFechaHora" id="fyh">
                <br> <br>
                <!-- seleccionar archivo -->
                <label for="file">Entregar tarea: </label>
                <input type="file" name="archivo" id="archivo">
        
                <br> <br>
        
                <!-- seleccionar mes con anio -->
                <label for="month">Mes y Anio:</label>
                <input type="month" name="mes" id="seleccionar_Mes">
                <br> <br>
        
                <!-- SELECCIONAR UN NUMERO E INCREMENTARLO O DECREMENTARLO -->
                <label for="number">Numero de casa</label>
                <input type="number" name="FormNroCasa" id="numero">
                <br> <br>
        
                <!-- sleccionar un RANGO -->
                <label for="range">Rango:</label>
                <input type="range" name="FormRango" id="rango" min="0" max="10">
                <br> <br>
        
                <!-- buscador (como el de google) -->
                <label for="search">Buscador: </label>
                <input type="search" name="FormBuscador" id="buscador" value="<?php echo $FormBuscador;?>"> 
                <br> <br>
        
                <label for="url">URL de instagram</label>
                <input type="url" name="FormLinkIg" id="link" value="<?php echo $FormLinkIg;?>">
        
        
                <br> <br>
                <!-- boton para resetear formulario -->
                <input type="reset" value="limpiar">
                <!-- boton para enviar datos del formulario -->
                <input type="submit" value="Enviar">
        
            </form>
            <hr>

            <p class="text-center">Formulario de prueba Creado por Kev(FrontEnd) y Leo (BackEnd)</p>
    </div>


    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>