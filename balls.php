<!DOCTYPE html>

<html> 
 <head>
    <title>Balls Game</title> 
     <?php include("heade.php"); ?>
</head>
 <body>
     <?php include("navdavid.php") ?>
     <div id="rules">
     <p id="clickprompt"> You must click the Canvas first. Javascript must be enabled.</p>
     <p id="redball">Catch one red ball lose one life. Let a red ball pass get one point.</p>
     <p id="blueball">Catch one blue ball on level 1 for 1 point on level 2 for 2 points on level 3 for 3 points.</p>
     </div>     
	<!--This draws the Canvas on the webpage -->
     <div align="center" id="canvaswrapper">
      <canvas id="mycanvas"></canvas> 
    </div>
     <footer id="gamefooter">Built by David B. Haun using Bootstrap and Processing.js</footer>
 </body>
 

 <script src="https://cdn.jsdelivr.net/processing.js/1.4.8/processing.min.js"></script> 
 
 <script src="http://davidbhaun.com/js/balls.js"></script>
<script   src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha256-jpW4gXAhFvqGDD5B7366rIPD7PDbAmqq4CO0ZnHbdM4=" crossorigin="anonymous"></script>
<script src="http://davidbhaun.com/lib/bootstrap4beta2/js/bootstrap.min.js"></script>
</html>