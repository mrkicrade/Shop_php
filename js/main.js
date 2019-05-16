$('.back-to-top').click(function(){
	$('html, body').animate({scrollTop:0}, 1000);
});


var template = $('#template').html();
var mainRow = $('#mainRow');
var title = new RegExp('{{title}}','g');
var collections = $('[data-collection]');
window.onload = function(){
	$.ajax({
	url: 'https://raw.githubusercontent.com/Danilovesovic/shop/master/shop.json',
	method: 'get',
	dataType: 'json'
	})
	.done(function(res){
		collections.parent().removeClass('active');
		displayCollections(res)
		collections.on('click',function(){
			displayCollections.call(this,res);
		});
	})
}


function displayCollections(res){
	mainRow.html("");
	event.preventDefault();
	var col = $(this).data('collection');
	
	
		if(col === 'male' || col === 'female') {
			var colFilter = res.filter(function(el) {
			return el.colection === col;
			});
			displayProducts(colFilter);
		}else if(col === 'newCol' || col === 'popular' || col === 'action'){
			collections.parent().removeClass('active');
			$(this).parent().addClass('active');
			var colFilter = res.filter(function(el) {
			return el[col];
			});
			displayProducts(colFilter);
		}else{
			displayProducts(res);
		}	
}
function displayProducts(filter){
	var text = "";
	filter.forEach(function (e) {
	text = template.replace("{{imgSrc}}",e.imgSrc)
					.replace(title,e.productTitle)
					.replace("{{model}}",e.model)
					.replace("{{price}}",e.price);
	mainRow.append(text);					
	})
}


/*
var template = $('#template').html();
var mainRow = $('#mainRow');
var title = new RegExp('{{title}}','g');
var collections = $('[data-collection]');
collections.on('click', displayCollections);

display();

function display(){
	$.ajax({
	url: 'https://raw.githubusercontent.com/Danilovesovic/shop/master/shop.json',
	method: 'get',
	dataType: 'json'
	})
	.done(function(res) {
		console.log(res);
		var text = "";
		res.forEach(function(e){
			text = template.replace('{{imgSrc}}',e.imgSrc)
							.replace(title,e.productTitle)
							.replace('{{price}}',e.price)
							.replace('{{model}}',e.model);
			mainRow.append(text);				
		})
	})
}

	

function displayCollections(e){
	mainRow.html("");
	e.preventDefault();
	var col = $(this).data('collection');
	$.ajax({
	url: 'https://raw.githubusercontent.com/Danilovesovic/shop/master/shop.json',
	method: 'get',
	dataType: 'json'
	})
.done(function(res) {
	if(col === "female" || col === "male"){
		var colFilter = res.filter(function(el) {
			return el.colection === col;
		})
		
	}else if(col === "newCol" || col === "popular" || col == "action"){
		var colFilter = res.filter(function(el) {
			return el[col];
		});
	}
	var text = "";
	colFilter.forEach(function(e){
		text = template.replace('{{imgSrc}}',e.imgSrc)
						.replace(title,e.productTitle)
						.replace('{{price}}',e.price)
						.replace('{{model}}',e.model);
		mainRow.append(text);				
		})
	})	
}
*/