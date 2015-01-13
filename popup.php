<!DOCTYPE html>
<html>
    <head>
        <title>Now i know</title>
    </head>
    <body>
        <h1>Your age is <?php if(isset($_POST['age'])) { echo $_POST['age']; } else { echo "(unknown)"; } ?></h1> 
    </body>
</html>