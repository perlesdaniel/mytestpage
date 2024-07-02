document.addEventListener('DOMContentLoaded', function() {
    const apiKey = 'a5ff33513337ce5397cb1e2ec584855d'; // Replace with your OpenWeatherMap API key
    const city = 'New York'; // Replace with your desired city
    const units = 'metric'; // Use 'imperial' for Fahrenheit
    const weatherContainer = document.getElementById('weather');

    fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&units=${units}&appid=${apiKey}`)
        .then(response => response.json())
        .then(data => {
            const temperature = data.main.temp;
            const weatherDescription = data.weather[0].description;
            weatherContainer.innerHTML = `The current temperature in ${city} is ${temperature}°C with ${weatherDescription}.`;
        })
        .catch(error => {
            console.error('Error fetching the weather data:', error);
            weatherContainer.innerHTML = 'Unable to fetch weather data.';
        });
});
