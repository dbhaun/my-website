$('#bcolors input').on('change', function () {
    var radioval = $('input[name=bcolor]:checked', '#bcolors').val();
    $("#dybg").append("#testc p{ background-color:" + radioval + ";}");
});
$('#fcolors input').on('change', function () {
    var radioval = $('input[name=fcolor]:checked', '#fcolors').val();
    $("#dyfg").append("#testc p{ color:" + radioval  + ";}");
});
$('#fonts').on('change', function () {
    var selectval = $('option:selected', "#fonts").val();
    $("#dyfont").append("#testc p{ font-family:" + selectval + ";}");
});