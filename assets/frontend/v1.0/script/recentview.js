//Recent product
var cookieList = function(cookieName) {
	//When the cookie is saved the items will be a comma seperated string
	//So we will split the cookie by comma to get the original array
	var cookie = $.cookie(cookieName);
	//Load the items or a new array if null.
	var items = cookie ? cookie.split(/,/) : new Array();
	return {
		"add": function(val) {

			var i;
			var check = false;
			for (i = 0; i< items.length;i++){
				if(val == items[i]){
					check= true;
				}
			}
			if(check == false){
				items.push(val);
			}
			//Save the items to a cookie.
			//EDIT: Modified from linked answer by Nick see
			//      http://stackoverflow.com/questions/3387251/how-to-store-array-in-jquery-cookie
			$.cookie(cookieName, items.join(','));
		},
		"remove": function (index) {
			items.splice(index, 1);
			$.cookie(cookieName, items.join(','));        },
			"clear": function() {
				items = null;
				$.cookie(cookieName, null);
			},
			"items": function() {
			return items;
		}
	}
}

function getProduct(alias) {
	Bizweb.getProduct(alias,function(product){
		if(product.images.length > 0){
			var img = "<img src='" + product.featured_image +"' alt='" + product.name + "'>"
		}else{
			var img = "<img src='//bizweb.dktcdn.net/100/321/719/themes/699729/assets/libra-smart-product.png?1544498920745' alt='"+product.name+"'>"
		}
		$('<div class="product-box">'
			+'<div class="product-thumbnail relative">'
			+	'<a href="'+product.url+'" title="'+product.name+'">' + img 	+'</a>'
			+'</div>'
			+'<div class="product-info">'
			+	'<h3 class="product-name a-center">'
			+		'<a href="'+product.url+'" title="'+product.name+'">'
			+			product.name
			+		'</a>'
			+	'</h3>'
			+'</div>'
			+'</div>').appendTo('#recent-content');
	})
}
var list = new cookieList("MyItems");
list.add(alias);
var i;
var limit = list.items().length;
if(limit > getLimit){
	var fmit = limit - getLimit;
	var r;
	for(r = 0;r < fmit; r++ ){
		list.remove(r);
	}
}
for(i = limit-1;i >= 0; i-- ){
	getProduct(list.items()[i]);
	if (i == 0){
		setTimeout(function(e){
			$('#recent-content').owlCarousel({
				loop: false,
				margin: 30,
				responsiveClass: true,
				dots: true,
				nav: true,
				responsive: {
					0: { items: 3 },
					543: { items: 4 },
					768: { items: 5 },
					992: { items: 2 },
					1200: { items: 2 },
					1600: { items: 3 }
				}
			})
		},1500)
	}
}