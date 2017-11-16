<!DOCTYPE html>
<HTML>
    <HEAD>
        <TITLE>Styles</TITLE>
        <?php include("heade.php"); ?>
        <style id="dybg"></style>
        <style id="dyfg"></style>
        <style id="dyfont"></style>
    </HEAD>
    <BODY>
        <?php include("navdavid.php"); ?>
        <h1 class="pagetitle">Style Settings</h1>
        <div id="wrapper">
        <div id="testc">
            <p>This is our sample text</p>
        </div>
        <p>Form to set background Color</p>
        <form id="bcolors"action="#" type="GET">
            <input class="radio-inline" type="radio" name="bcolor" value="black">Black
            <input class="radio-inline" type="radio" name="bcolor" value="white" checked>White
            <input class="radio-inline" type="radio" name="bcolor" value="red">Red
            <input class="radio-inline" type="radio" name="bcolor" value="blue">Blue
            <input class="radio-inline" type="radio" name="bcolor" value="green">Green
            <input class="radio-inline" type="radio" name="bcolor" value="gold">Gold
            <input class="radio-inline" type="radio" name="bcolor" value="orange">Orange
            <input class="radio-inline" type="radio" name="bcolor" value="yellow">Yellow
            <input class="radio-inline" type="radio" name="bcolor" value="purple">Purple
            <input class="radio-inline" type="radio" name="bcolor" value="violet">Violet
            <input class="radio-inline" type="radio" name="bcolor" value="magenta">Magenta
        </form>
        <p>Form to set font color</p>
        <form id="fcolors" action="#" type="GET">
            <input class="radio-inline" type="radio" name="fcolor" value="black" checked>Black
            <input class="radio-inline" type="radio" name="fcolor" value="white">White
            <input class="radio-inline" type="radio" name="fcolor" value="red">Red
            <input class="radio-inline" type="radio" name="fcolor" value="blue">Blue
            <input class="radio-inline" type="radio" name="fcolor" value="green">Green
            <input class="radio-inline" type="radio" name="fcolor" value="gold">Gold
            <input class="radio-inline" type="radio" name="fcolor" value="orange">Orange
            <input class="radio-inline" type="radio" name="fcolor" value="yellow">Yellow
            <input class="radio-inline" type="radio" name="fcolor" value="purple">Purple
            <input class="radio-inline" type="radio" name="fcolor" value="violet">Violet
            <input class="radio-inline" type="radio" name="fcolor" value="magenta">Magenta
        </form>
        <p>Form to set the Font</p>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-3">
       <form id="fonts" action="#" type="GET">
            <select class="form-control">
                <option name="font" value="Georgia">Georgia</option>
                <option name="font" value="Arial">Arial</option>
            </select>
        </form>
        </div>
        </div>
        </div>
        <?php include("footer.php"); ?>
        <script src="js/styles.js"></script>
    </BODY>
</HTML>