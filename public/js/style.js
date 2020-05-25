
function initMap() {
    // The location of Uluru
    var tours = {lat: 47.3900474, lng: 0.6889268};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 4, center: Tours});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: Tours, map: map});
}
