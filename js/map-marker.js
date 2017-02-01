function initMap() {
        var uluru = {lat: 6.507099, lng: 3.383623};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
		});
}