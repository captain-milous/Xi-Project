$(document).ready(function() {
    var apiUrl = "https://www.thecocktaildb.com/api/json/v1/1/filter.php?c=Cocktail";
    var currentIndex = 0;

    $.ajax({
        url: apiUrl,
        dataType: "json",
        success: function(data) {
            var drinks = data.drinks;
            var slider = $('.slider');
            var slide = slider.find('.slide');

            // Funkce pro zobrazení dalšího drinku
            function showNextDrink() {
                currentIndex = (currentIndex + 1) % drinks.length;

                var drink = drinks[currentIndex];
                slide.html('');

                var slideImage = $('<img class="slide-image" />').attr('src', drink.strDrinkThumb);
                var slideContent = $('<div class="slide-content"></div>');
                var slideTitle = $('<h3 class="slide-title"></h3>').text(drink.strDrink);
                var slideDescription = $('<p class="slide-description"></p>').text(drink.strInstructions);
                
                slideContent.append(slideTitle, slideDescription);
                slide.append(slideImage, slideContent);
                slide.fadeIn(500);
            }

            // Zobrazení prvního drinku
            var firstDrink = drinks[0];
            var slideImage = $('<img class="slide-image" />').attr('src', firstDrink.strDrinkThumb);
            var slideContent = $('<div class="slide-content"></div>');
            var slideTitle = $('<h3 class="slide-title"></h3>').text(firstDrink.strDrink);
            var slideDescription = $('<p class="slide-description"></p>').text(firstDrink.strInstructions);

            slideContent.append(slideTitle, slideDescription);
            slide.append(slideImage, slideContent);
            slide.fadeIn(500);

            // Animace slideru
            setInterval(showNextDrink, 3000);
        }
    });
});