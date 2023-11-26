const city = document.querySelector('.search');
const button = document.querySelector('.button');
button.addEventListener('click', () => {
    fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city.value}&appid=ca42013ad3021d3d2c5945bfeb4427bf`)
        .then(data => data.json())
        .then(response => {
            console.log(response);
            document.querySelector('.city__name').innerText = response.name;
            document.querySelector('.temp').innerHTML = Math.round((response.main.temp) - 273) + '&deg;C';
            document.querySelector('.wind').innerHTML = 'Скорость ветра: ' + response.wind.speed + 'м/с';
            document.querySelector('.img').src = `https://openweathermap.org/img/wn/${response.weather[0]['icon']}@2x.png`;
            document.querySelector('.description').innerText = response.weather[0]['description'];

            document.querySelector('.wrapper').style.display = 'flex'; 
        });    
});


