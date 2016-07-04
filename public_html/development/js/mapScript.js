$(function() {
    google.charts.load("current", {packages:["map"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Lat', 'Long', 'Name'],
        [53.258581,-2.129295, 'Commercial Coding'],
    ]);
        var options = {
            showtip:true,
            zoomLevel: 13,
            mapType: 'normal'
        };
    var map = new google.visualization.Map(document.getElementById('map_div'));
    map.draw(data, options);
    }
});