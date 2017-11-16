<html>
    <head>
        <?php include("heade.php"); ?>
        <title>Weather</title>
        <script   src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include("navdavid.php"); ?>
        <div class="container-fluid">
        <div class="row">    
        <h1 class="pagetitle">Weather</h1>
        </div>  
        <div class="row">
        <p id="archive">Weather is not support on Internet archive</p>
        </div> 
        <div class="row">    
        <img id="wulogo" src="jpg/wundergroundLogo_4c.jpg" alt="Weather Underground logo">
        </div>
        <div id="tempin">
        <p>City</p>
        <p>State</p>
        </div>    
        <div class="row" id="weath">    
        <form id="form" action="#">
            <input type="text" id="city" name="city" value="">
            <input type="text" id="state" name="state">
            <input id="submit1" type="submit" name="wbutton">
        </form>
    <script src="js/weather.js">
    </script>
        </div>    
        <div id="temploc">
        </div>
        </div>    
        <?php include("footer.php"); ?>
    </body>
</html>