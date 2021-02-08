function LoadMapSingapore()
{
    var markers1 = [
       {
           "title": 'Hunch Soft',
           "lat": '1.281722',
           "lng": '103.822631',
           "description": 'Hunch Software pvt. Ltd <br/> ( #03-05 Singapore - 069120 )'
       }
    ];
    var mapOptions1 = {
        center: new google.maps.LatLng(markers1[0].lat, markers1[0].lng),
        zoom: 7,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map1 = new google.maps.Map(document.getElementById("map_canvas_7"), mapOptions1);

    //Create and open InfoWindow.
    var infoWindow = new google.maps.InfoWindow();

    for (var i = 0; i < markers1.length; i++) {
        var data = markersn[i];
        var myLatlng = new google.maps.LatLng(data.lat, data.lng);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map1,
            title: data.title
        });

        //Attach click event to the marker.
        (function (marker, data) {
            google.maps.event.addListener(marker, "click", function (e) {
                //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                infoWindow.setContent("<div style = 'width:200px;min-height:40px'>" + data.description + "</div>");
                infoWindow.open(map1, marker);
            });
        })(marker, data);
    }
}