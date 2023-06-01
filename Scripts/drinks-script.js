$(document).ready(function() {
  
	$.getJSON("https://www.thecocktaildb.com/api/json/v1/1/filter.php?c=Cocktail", function(data) {
		// Create drink cards
		var drinks = data.drinks.slice(0, 100);
		var drinkCards = drinks.map(function(drink) {
			return "<div class='drink-card' data-id='" + drink.idDrink + "'><img src='" + drink.strDrinkThumb + "'><p>" + drink.strDrink + "</p></div>";
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

		// Fetch drink details on click
		$(".drink-card").click(function() {
			var id = $(this).data("id");
			$.getJSON("https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=" + id, function(data) {
				var drink = data.drinks[0];
				var drinkDetails = "<h2>" + drink.strDrink + "</h2><img src='" + drink.strDrinkThumb + "'><p>" + drink.strInstructions + "</p>";
				$("#drink-details").html(drinkDetails);
			});
		});

		// Navigate between drinks with arrow keys
		$(document).keydown(function(e) {
			if (e.keyCode == 37) {
				glide.go("<");
			} else if (e.keyCode == 39) {
				glide.go(">");
			}
		});
	});  
	
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	$.getJSON('https://www.thecocktaildb.com/api/json/v1/1/filter.php?c=Cocktail', function(data) {
		// data obsahuje seznam drinků
	  	console.log(data);
	});

	$(document).keydown(function(e) {
	 	var currentIndex = $('.drink.active').index();
	  	if (e.which === 37 && currentIndex > 0) {
	    	// šipka doleva - přejít na předchozí drink
	    	$('.drink.active').removeClass('active').prev().addClass('active');
	  	} else if (e.which === 39 && currentIndex < $('.drink').length - 1) {
	    	// šipka doprava - přejít na následující drink
	    	$('.drink.active').removeClass('active').next().addClass('active');
	  	}
	});

	$('.drink').on('click', function() {
	  	// zobrazit detaily o drinku
	});

	$('.carousel').on('mousemove', function(e) {
	  	// změnit pozici carouselu podle pozice myši
	});

	$('.drink').on('click', function() {
	  	var detailsDiv = $(this).find('.details');
	 	detailsDiv.slideToggle(500);
	});


});