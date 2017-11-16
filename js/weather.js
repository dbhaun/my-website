jQuery(document).ready(function($) {
            $("input[name='wbutton']").click(function(event){
                event.preventDefault();
       var city = $('input[name = city]').val();
        var stateinput = $('input[name = state]').val();          
  $.ajax({
  url : "http://api.wunderground.com/api/288c7c9ce29afbba/geolookup/conditions/q/" + stateinput + "/" +  city +".json",
  dataType : "jsonp",
  success : function(parsed_json) {
  var location = parsed_json['location']['city'];
  var state = parsed_json['location']['state'];
  var temp_f = parsed_json['current_observation']['temp_f'];
   var windstring = parsed_json['current_observation']['wind_string'];  
    var feels = parsed_json['current_observation']['feelslike_string'];  
    var heat = parsed_json['current_observation']['heat_index_string']; 
    var chill = parsed_json['current_observation']['windchill_string']; 
    var time1 = parsed_json['current_observation']['observation_time'];  
    $("#temploc").append("<p> Current Tempature in " + location + " " + state + " is " + temp_f + " <br> Wind: " + windstring + "<br> Feels like : " + feels + "<br> Time of observation " + time1 + "</p>"); 
     if(heat == "NA"){
     } else {
      $("#temploc").append("<p> Heat index "+ heat +"</p>");
     }
      if(chill == "NA"){
      }
      else{
          $("#temploc").append("<p>Wind chill "+ chill +"</p>");
      }
      if (chill == "NA" && heat == "NA"){
          $("#temploc").append("<p>there is no windchill or heat index </p>");
      }
      $("#temploc p").css({
    "text-align": "center",
    "background-color": "white",
    "color": "blue",
    "padding": "10px"
    
  });   
  }
      
}).done(function(response){
       $('input[name = city]').val(" ");
       $('input[name = state]').val(" ");
        });
            });
        });