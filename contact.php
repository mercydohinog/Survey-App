<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>Survey Sign Up Form</title>   
<link rel="stylesheet" style="text/css" href="css/bootstrap.css">
</head>
<body>
    
        <div class="col-sm-3" style="width: 400px; margin-left: 450px; margin-top: 25px;">                          
            <div class="jumbotron">
                 <div class="form-group" style="margin-top: -50px;">
                    <h3 style="margin-left: 120px;">
                        Contact Us
                    </h3>
                     <h5 style ="margin-left: 50px;"> Email us with any question or inquires. We would be happy to answer your questions.</h5>
                </div>
                <hr>
                <form class="form-horizontal" style="margin-left: 60px;">
                   <div class="container">
		<div class="row">
			<div class=" co-md-offset-2 col-md-4">
           
	            <form action="action/contact.php" method="post">
                
	                <div class="form-group input-group">                       
	                    <label for="name">Name</label>
	                    <input class="form-control" type="text" style="width: 250px;" name="name" id="name" placeholder="Name..." required>
	                </div>
	                <div class="form-group">
	                    <label for="email">Email</label>
	                    <input class="form-control" type="email" style="width: 250px;" name="email" id="email" placeholder="Email..." required>
	                </div>
	                <div class="form-group">
	                    <label for="subject">Subject</label>
	                    <input class="form-control" type="text" style="width: 250px;" name="subject" id="subject" placeholder="Subject..." required>
	                </div>
	                <div class="form-group">
	                    <label for="message">Message</label>
	                    <input class="form-control" type="text" style="width: 250px; height: 100px;"  name="message" id="message" placeholder="" required>
	                </div>
                
                         <div class="form-group">
                             <button type="submit"class="btn btn-primary" style="width: 200px; margin-left:25px;">Send Email</button>    
                    </div>
                    <div class="form-group">
                        <a href="login.html" style="margin-left: 100px;" >Back</a>
                    </div>
                   
	               
	            </form>
        	</div>
                 
    </div>

                   
                
                    
                        
                 
                    
                    </div>
                
                    
<script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>