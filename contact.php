<?php 
require 'styles.php';
require 'scripts.php'; 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Star Bank</title>
        
		<script> 
		document.getElementById("myForm").addEventListener("submit",MyFunction);
		 function MyFunction()
		 {
			 alert("Feedback Sent");
		 }
function goBack() {
  window.history.back()
}

		</script>
		<link rel="stylesheet" href="footer.css">
    </head>
    <body>
        <?php require 'header.php'; ?>
		<button onclick="goBack()" style="margin-top:5px" class="btn btn-default pull-left"><span class="glyphicon glyphicon-arrow-left"> Go Back</span></button>
        <div class = "content">
            <div class = "container">
                <div class = "col-md-12">
                    <h1 style= "color:E97814">Contact Us</h1>
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
                <div class="col-md-6 contacts">
                    <h1 style= "color:319609"><span class="glyphicon glyphicon-user"></span> Ronald Fredrick</h1>
						<span class="glyphicon glyphicon-envelope"></span> Email:ronrodrixx@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Facebook: www.facebook.com/Ronald<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 08712345678<br>
					<h1 style= "color:319609"><span class="glyphicon glyphicon-user"></span> Jestin Johnson</h1>
						<span class="glyphicon glyphicon-envelope"></span> Email:jestinjohn@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Facebook: www.facebook.com/jestin<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 08713545678
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" rows="10" class="form-control" required></textarea>
                        </div>
                        <button type="submit" value="submit" class="btn btn-default pull-right" onsubmit="MyFunction()">SEND<span class="glyphicon glyphicon-send"></span></button>
                    </form>
                </div>
            </div>
			
            
        </div>
		<br>
        <?php require 'footer.php'; ?>
    </body>
</html>
