<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio</title>
        <?php include("heade.php"); ?>
    </head>
    <body>
        <?php include("navdavid.php"); ?>
        <div class="container-fluid">
            <div class="row">
                <h1 class="pagetitle">Portfolio</h1>
            </div>
                <img class="self" src="http://davidbhaun.com/jpg/david.jpg" alt="Picture of David B. Haun">
            <div class="portheader" id="education">
                <h2>Education</h2>
            </div>
            <div class="row" id="portwrap">
                <div class="col-md-4 plw">
                    <a class="portlink" href="linnst.php"><img src="http://davidbhaun.com/png/linnstate.png" class="img-fluid mx-auto" id="linn1" alt="Linn State Technical College"></a>
                    <p class="school">Linn State Technical College</p>
                </div>
                <div class="col-md-4 plw">
                    <a class="portlink" href="cmc.php"><img src="http://davidbhaun.com/png/cmc1.png" class="img-fluid mx-auto" id="cmc1" alt="Central Methodist College"></a>
                    <p class="school">Central Methodist College</p>
                </div>
                <div class="col-md-4 plw">
                    <a  class="portlink" href="boonvill.php"><img src="http://davidbhaun.com/png/boonville.png" class="img-fluid mx-auto" alt="Boonville High School"></a>
                    <p class="school">Boonville High School</p>
                </div>
            </div>
            <div class="row portheader" id="weblang">
                <h2>Web Languages</h2>
            </div>
            <div class="portrow row">
                <div class="col-md-4">
                    <a href="html.php"><img class="img-fluid mx-auto" src="http://davidbhaun.com/png/html.png" alt="Hypertext Markup Language"></a>
                </div>
                <div class="col-md-4">
                    <a href="php.php"><img class="img-fluid mx-auto" src="http://davidbhaun.com/png/php.png" alt="Hypertext Preprocessor"></a>
                </div>
                <div class="col-md-4">
                    <a href="css.php"><img class="img-fluid mx-auto" src="http://davidbhaun.com/png/css.png" alt="Cascading Style Sheets"></a>
                </div>
            </div>
            <div class="row"><br></div>
            <div class="portrow row">
                <div class="col-md-4">
                    <a href="js.php"><img class="img-fluid mx-auto" src="http://davidbhaun.com/png/javascript.png" alt="Java Script"></a>
                </div>
                <div class="col-md-4">
                    <a href="jquery.php"><img  class="img-fluid mx-auto" src="http://davidbhaun.com/png/jquery.png" alt="jQuery"></a>
                </div>
                <div class="col-md-4">
                    <a href="boots.php"><img  class="img-fluid mx-auto" src="http://davidbhaun.com/png/Bootstrap1.png" alt="Bootstrap"></a>
                </div>
            </div>
            <div class="row"><br></div>
            <div class="portrow row">
                <div class="col-md-4">
                    <a href="pjs.php"><img class="img-fluid mx-auto" src="http://davidbhaun.com/png/processjs.png" alt="Processing JS"></a>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>