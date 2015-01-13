<!DOCTYPE html>
<html>
    <head>
        <title>Demo of Popup Form</title>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body>
        <h1>My form</h1>
        <form method="POST" action="popup.php" id="popupForm">
            <label>Age</label>
            <input type="number" value="6" name="age" placeholder="Enter your age" />
            <input type="submit" name="submit"/>
        </form>
        <script type="text/javascript">
            $('#popupForm').on('submit',function(e){
                var w = window.open('about:blank','Popup_Window','toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=400,height=300,left = 312,top = 234');
                this.target = 'Popup_Window';
            });
        </script>
    </body>
</html>