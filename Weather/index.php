<?php include "../head.php"?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
        />
        <title>Weather App</title>
        <link rel="stylesheet" href="stylee.css" />
    </head>
    <body>
        <div class="weather-app">
            <form class="search-form" action="">
                <input
                    class="city-input"
                    type="text"
                    placeholder="Enter City Name"
                />
                <button class="search-btn" type="submit">
                    <i class="material-icons">search</i>
                </button>
            </form>
            <div class="city-date-section">
                <h2 class="city">Pune</h2>
                <p class="date">7 Jan 2024</p>
            </div>
            <div class="temperature-info">
                <div class="description">
                    <i class="material-icons">sunny</i>
                    <span class="description-text">Sunny</span>
                </div>
                <div class="temp">20°</div>
            </div>
            <div class="additional-info">
                <div class="wind-info">
                    <i class="material-icons">air</i>
                    <div>
                        <h3 class="wind-speed">4 KM/H</h3>
                        <p class="wind-label">Wind</p>
                    </div>
                </div>
                <div class="humidity-info">
                    <i class="material-icons">water_drop</i>
                    <div>
                        <h3 class="humidity">45%</h3>
                        <p class="humidity-label">humidity</p>
                    </div>
                </div>
                <div class="visibility-info">
                    <i class="material-icons">visibility</i>
                    <div>
                        <h3 class="visibility-distance">4 KM/H</h3>
                        <p class="visibility">Visibility</p>
                    </div>
                </div>
            </div>
        </div>

        <script src="script.js"></script>
    </body>
</html>
