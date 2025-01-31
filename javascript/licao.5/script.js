var tempFahrenheit = Number.parseFloat(prompt("Digite a temperatura em Fahrenheit (°F):"));
var tempCelsius = (tempFahrenheit - 32) * 5 / 9;
alert("A temperatura em Celsius é: " + tempCelsius.toFixed(2) + "°C");