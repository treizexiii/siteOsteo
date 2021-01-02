function initMap() {
    //map options Palaiseau
    var options1 = {
        zoom: 15,
        center: {
            lat: 48.7116716,
            lng: 2.2440029
        }
    }
    //map options Orsay
    var options2 = {
        zoom: 15,
        center: {
            lat: 48.7083583,
            lng: 2.1781067
        }
    }
    //map options Gif
    var options3 = {
        zoom: 15,
        center: {
            lat: 48.7020385,
            lng: 2.1265509
        }
    }
    //new map Palaiseau
    var map1 = new google.maps.Map(document.getElementById('map1'), options1);
    //new map Orsay
    var map2 = new google.maps.Map(document.getElementById('map2'), options2);
    //new map Gif
    var map3 = new google.maps.Map(document.getElementById('map3'), options3);
    //new marker Palaiseau
    var marker1 = new google.maps.Marker({
        position: {
            lat: 48.711838952643625,
            lng: 2.243820039678779
        },
        map: map1
    });
    //new marker Orsay
    var marker2 = new google.maps.Marker({
        position: {
            lat: 48.70847422691537,
            lng: 2.1789245009743747
        },
        map: map2
    });
    //new marker Gif
    var marker3 = new google.maps.Marker({
        position: {
            lat: 48.70203314997643,
            lng: 2.1272160639892426
        },
        map: map3
    });
}

$(document).click(function (event) {
    var clickover = $(event.target);
    var $navbar = $(".navbar-collapse");               
    var _opened = $navbar.hasClass("show");
    if (_opened === true && !clickover.hasClass("navbar-toggle")) {      
        $navbar.collapse('hide');
    }
    console.log("test");
});