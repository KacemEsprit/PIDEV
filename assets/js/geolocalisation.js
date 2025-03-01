function getUserIP(callback) {
    const ipApiUrl = "https://api.ipify.org?format=json";
    fetch(ipApiUrl)
        .then(response => response.json())
        .then(data => callback(data.ip))
        .catch(error => console.error("Error fetching IP:", error));
}

function getGeolocation(ip, callback) {
    const apiKey = "02fbc9c1f77d436aabba0490776f3fd8"; // Remplacez par votre clé API
    const url = `https://ipgeolocation.abstractapi.com/v1/?api_key=${apiKey}&ip_address=${ip}`;
    fetch(url)
        .then(response => response.json())
        .then(data => callback(data))
        .catch(error => console.error("Error fetching geolocation:", error));
}