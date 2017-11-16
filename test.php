<html>
    <head>
        <?php include("heade.php"); ?>
    </head>
    <body>
        <?php include("footer.php"); ?>
        <div id="temploc">
        </div>
    <script>
        jQuery(document).ready(function($) {
  $.ajax({
  url : "http://api.wunderground.com/api/288c7c9ce29afbba/geolookup/conditions/q/MO/Columbia.json",
  dataType : "jsonp",
  success : function(parsed_json) {
  var location = parsed_json['location']['city'];
  var state = parsed_json['location']['state'];
  var temp_f = parsed_json['current_observation']['temp_f'];
      
      
      $("#temploc").css({
    "text-align": "center",
    "background-color": "white",
    "color": "blue",
    "padding": "10px",
    "border": "5px solid blue" 
    
  });
      $("#temploc").append("<p> Current Tempature in " + location + " " + state + " is " + temp_f + "</p>");
  }
});
});       

    </script>
    </body>
</html>