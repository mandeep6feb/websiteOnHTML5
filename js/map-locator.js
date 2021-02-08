
    var myCenter=new google.maps.LatLng(28.628966,77.082123);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:14,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
    content:"Hunch Software pvt. Ltd <br/> ( 503 , Jyoti Shikhar Building, District Center Janakpuri, New Delhi - 110058)"
  });

google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });
}

    var markers = [
    {
        "title": 'Hunch Soft',
        "lat": '28.628966',
        "lng": '77.082123',
        "description": 'Hunch Software pvt. Ltd <br/> ( 503 , Jyoti Shikhar Building,  District Center Janakpuri,  New Delhi - 110058 )'
    },
    {
        "title": 'Hunch Soft',
        "lat": '1.281722',
        "lng": '103.822631',
        "description": 'Hunch Software pvt. Ltd <br/> ( #03-05 Singapore - 069120 )'
    },
    {
       "title": 'Hunch Soft',
        "lat": '12.930605',
        "lng": '77.543374',
        "description": 'Hunch Software pvt. Ltd <br/> ( 41/1 1st Main 2nd Cross <br/>   New Kempegowda  Layout, Kathriguppe </br>BSK 3d Stage Bengaluru-560085 )'
    },
    {
       "title": 'Hunch Soft',
        "lat": '19.211453',
        "lng": '72.873722',
        "description": 'Hunch Software pvt. Ltd <br/> (C-501,Aurigae Residence,  Near Terapanth Bhavan and Cambridge School,       Thakur Complex,Kandivali (E),    Mumbai 400101)'
    }
   ,
    {
       "title": 'Hunch Soft',
        "lat": '43.590686',
        "lng": '-79.639856',
        "description": 'Hunch Software pvt. Ltd <br/> (151 City Centre Drive  Suite # 403  Mississauga, ON, L5B 1M7)'
    }
    ];
    window.onload = function () {
        LoadMap();
    }
    function LoadMap() {
        var mapOptions = {
            center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
            zoom: 2,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
 
        //Create and open InfoWindow.
        var infoWindow = new google.maps.InfoWindow();
 
        for (var i = 0; i < markers.length; i++) {
            var data = markers[i];
            var myLatlng = new google.maps.LatLng(data.lat, data.lng);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: data.title
            });
 
            //Attach click event to the marker.
            (function (marker, data) {
                google.maps.event.addListener(marker, "click", function (e) {
                    //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                    infoWindow.setContent("<div style = 'width:200px;min-height:40px'>" + data.description + "</div>");
                    infoWindow.open(map, marker);
                });
            })(marker, data);
        }
    }