

document.addEventListener("DOMContentLoaded", function () {
    navigator.geolocation.getCurrentPosition(
        function (position) {
            document.getElementById("latitude").value = position.coords.latitude;
            document.getElementById("longitude").value = position.coords.longitude;
        },
        function (error) {
            console.error("Geolocation error:", error);
        }
    );
});
    
    

