<html>
<head>
    <title>Visitors count</title>
</head>
<body>
    <?php 
        session_start();
        if(isset($_SESSION['VCOUNT']))
        {
            $_SESSION['VCOUNT']++;
        }
        else
        {
            $_SESSION['VCOUNT'] = 1;
        } 
    ?>
    <div style="display:flex; justify-content:center;">
    <h1>Here is the visitors count bro <?php echo $_SESSION['VCOUNT']?> </h1>
    </div>
</body>
</html>