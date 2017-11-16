<!DOCTYPE html>
<html>
    <head>
        <title>Contact Me</title>
        <?php include("heade.php");
         include("haunapi.php"); ?>
    </head>
    <body>
        <?php include("navdavid.php"); ?>
        <div class="container-fluid">
        <div class ="row">
        <h1 class="pagetitle">How to Contact Me</h1>
        </div>
        <img class="self" alt="Picture of David B. Haun" src="http://davidbhaun.com/jpg/david.jpg">
        <div class = "row">
        <?php include("isvalid.php"); ?>
        <ul id="contact">
            <li>David B. Haun</li>
            <li><?php echo hide_email("dbhaun@gmail.com"); ?></li>
        </ul> 
        </div>
        <div class = "row">
            <div class = "col-xs-3 col-sm-3 col-lg-3"></div>
            <div class = "col-xs-6 col-sm-6 col-lg-6" id= "emailform">
        <form  method="post" action="">
            <p>Name</p>
            <input type="text" class="form-control" name = "name" placeholder="Name">
            <p>Email</p>
            <input type="text" class="form-control" name = "email" placeholder="Email">
            <p>Subject</p>
            <input type="text" class="form-control" name = "subject" placeholder="Subject">
            <p>Body of Message</p>
            <input id="ebody" class="form-control" type="text" name = "ebody1">
            <br>
            <input class= "btn btn-info" id="esubmit" type="submit">
        </form>
        </div>
        </div>
        </div>    
        <!--Place for Html code -->
        <?php include("footer.php"); ?>
    </body>
</html>