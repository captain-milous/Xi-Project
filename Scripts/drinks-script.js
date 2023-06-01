$(document).ready(function() {
  
	$.getJSON("https://www.thecocktaildb.com/api/json/v1/1/filter.php?c=Cocktail", function(data) {
		// Create drink cards
		var drinks = data.drinks.slice(0, 100);
		var drinkCards = drinks.map(function(drink) {
			return "<div class='drink-card' data-id='" + drink.idDrink + "'><h4><strong>" + drink.strDrink + "</strong></h4><img src='" + drink.strDrinkThumb + "'></div>";
		});
		$("#drinks-container").html(drinkCards.join(""));

		// Initialize Glide carousel
		var glide = new Glide("#drinks-container", {
			type: "carousel",
			perView: 3,
			focusAt: "center",
			gap: 20,
			breakpoints: {
				800: {
					perView: 2
				},
				600: {
					perView: 1
				}
			}
		});
		glide.mount();

	});  
	
	$.getJSON('https://www.thecocktaildb.com/api/json/v1/1/filter.php?c=Cocktail', function(data) {
		// data obsahuje seznam drinků
	  	console.log(data);
	});

	

});