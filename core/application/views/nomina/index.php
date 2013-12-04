<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>EP4 xls to db</title>    
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/styles/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap-theme.css">
    
</head>
<style type="text/css">
    td,th{
        width: 150px;
        height: 20px;
        border-style:solid;
        border-width:1px;
        text-align: center;

    }
    
</style>
<body>
<?php echo base_url() ?>"
<?php echo site_url() ?>
    <header>
        <h1>Listado de usuarios subidos </h1>
    </header>
    <section>
    <br>
    <table>
    <tr>
        <th>Cedula</th>
        <th>Primer Nombre</th>
        <th>Segundo Nombre</th>
        <th>genero</th>
        <th>valor</th>
        <th>fecha</th>
    </tr>
        <?php foreach ($datos->Datos as $nomina) {            
            echo "<tr>";            
            echo "<td>".$nomina->cedula."</td>";
            echo "<td>".$nomina->nombre."</td>";
            echo "<td>".$nomina->apellidos."</td>";
            echo "<td>".$nomina->genero."</td>";
            echo "<td>".$nomina->valor."</td>";
            echo "<td>".$nomina->fecha."</td>";
            echo "</tr>";  
        }
        ?>
    </table>
    <br>
   <a href="index.php/nomina/generoM">Genero Masculino</a> | 
   <a href="index.php/nomina/generoF">Genero Femenino</a>
    <footer><br>
        <p>Copyright Ezequiel Suarez Udec</p>
    </footer>

</body>

</html> 