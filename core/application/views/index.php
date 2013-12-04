<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>EP4 xls to db</title>    
    <link rel="stylesheet" type="text/css" href="assets/styles//style.css">     
    

    <script type="text/javascript" src="assets/js/jquery.js"></script>      
    <script type="text/javascript" src="assets/js/default.js"></script>         
    <script type="text/javascript" src="assets/js/common.js"></script>      
    
     
</head>
<body>

    <header>
        <nav>
            <ul>
                <li>Your menu</li>
            </ul>
        </nav>
    </header>
     <?php echo CI_VERSION; ?>
    <section>
    <?php foreach ($datos->Datos as $nomina) {
            echo "<div class='div_user caja-sombra'>";
            
            echo "<span class='innerTEXT'>".$nomina->nombre."</span>";
            
            
            echo "</div>";  
        }?>
        
    </section>

    <aside>
        <h2>About section</h2>
        <p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    </aside>

    <footer>
        <p>Copyright 2009 Your name</p>
    </footer>

</body>

</html>