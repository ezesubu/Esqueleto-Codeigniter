<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Ingresar nomina</title>
    <script type="text/javascript" src="assets/js/jquery.js"></script>      
    <script type="text/javascript" src="assets/js/common.js"></script>
</head>
<body>

<div id="container">
<form enctype="multipart/form-data" action="guardar" method="POST" >
    <h1>Agregar nueva nomina<h1>
    
    <span>fecha</span>
    <input  type="date" id="fecha" name="fecha"><br>    
     <span>Archivo excel</span>
     <input type="hidden" name="excel_datos" />
    <!-- Name of input element determines name in $_FILES array -->
    <input name="excel_tados" type="file" /><br><br>
    <input type="submit" id="guardar" value="Guardar carrera">
</form>
</div>
</body>

</html>
