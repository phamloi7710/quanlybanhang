var ww = $(window).width();
var selectCallback = function(variant, selector) {
	if (variant) {
		var form = jQuery('#' + selector.domIdPrefix).closest('form');
		for (var i = 0, length = variant.options.length; i < length; i++) {
			var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
			if (radioButton.size()) {
				radioButton.get(0).checked = true;
			}
		}
	}
	var addToCart = jQuery('.details-product .button_actions .btn-cart'),
	product_sku = jQuery('.details-product .product_sku .sku_item'),
	product_vat = jQuery('.details-product .vat_enable'),
	priceBox = jQuery('.details-product .price-box'),
	productPrice = jQuery('.details-product .special-price .price'),
	comparePrice = jQuery('.details-product .old-price .price'),
	inputQty = jQuery('.details-product .product_quantity'),
	btnBox = jQuery('.details-product .button_actions'),
	inventory = jQuery('.details-product .product-inventory .quantity_item');

	
	/* VAT */
	if (variant){
		product_vat.show();
		if (variant.taxable) {
			product_vat.html("* <em>GiĂ¡ sáº£n pháº©m Ä‘Ă£ bao gá»“m VAT</em>");
		} else {
			product_vat.html("* <em>GiĂ¡ sáº£n pháº©m chÆ°a bao gá»“m VAT</em>");
		}
		
		if (variant.price != 0) {
			product_vat.removeClass('hidden');
		} else {
			product_vat.addClass('hidden');
		}
	} else {
		product_vat.hide();
	}
	/* END VAT */

	/* SKU */
	if (variant && variant.sku != "" && variant.sku != null) {
		product_sku.html(variant.sku);
	} else {
		product_sku.html('(<em class="f-normal">Äang cáº­p nháº­t...</em>)');
	}
	/* END SKU */

	/* Invetory */
	if (variant) {
		if (variant.inventory_management == "") {
			inventory.text('CĂ²n hĂ ng');
		} else if (variant.inventory_quantity <= 0) {
			if (variant.inventory_policy == "continue") {
				// inventory.html('Háº¿t hĂ ng (CĂ³ thá»ƒ Ä‘áº·t trÆ°á»›c)');
				inventory.text('CĂ²n hĂ ng');
			} else {
				inventory.text('Háº¿t hĂ ng');
			}
		} else {
			inventory.text('CĂ²n hĂ ng').append(' <em>(' + variant.inventory_quantity + ')</em>');
		}
	} else {
		inventory.text('Ngá»«ng bĂ¡n');
	}

	/* Switch options */
	if (variant) {
		addToCart.removeAttr('disabled');
		inputQty.show();
		if (variant.inventory_quantity <= 0) {
			if (variant.inventory_management == "bizweb") {
				inputQty.hide();
				btnBox.show();
				if (variant.price != 0) {
					priceBox.show();
					productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}â‚«")).show();
					if (variant.compare_at_price > variant.price) {
						comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}â‚«")).show();
					} else {
						comparePrice.hide();
					}
				} else {
					productPrice.html('LiĂªn há»‡');
					comparePrice.hide();
				}

				if (variant.inventory_policy == "continue") {
					inputQty.show();
					addToCart.removeClass('btn_soldout').addClass('btn_buy button-hover-3').removeAttr('disabled', 'disabled').html('<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> Mua ngay</span>').attr('title','Mua ngay').show();
				} else if (variant.inventory_policy == "deny") {
					inputQty.hide();
					addToCart.removeClass('btn_buy button-hover-3').addClass('btn_soldout').attr('disabled', 'disabled').html('<span><i class="fa fa-ban" aria-hidden="true"></i> Háº¿t hĂ ng</span>').attr('title','Háº¿t hĂ ng').show();
				}
			} else {
				inputQty.show();
				priceBox.show();
				btnBox.show();
				productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}â‚«")).show();
				addToCart.removeClass('btn_soldout').addClass('btn_buy button-hover-3').removeAttr('disabled', 'disabled').html('<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> Mua ngay</span>').attr('title','Mua ngay').show();
				if (variant.price != 0) {
					if (variant.compare_at_price > variant.price) {
						comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}â‚«")).show();
					} else {
						comparePrice.hide();
						btnBox.show();
						addToCart.show();
					}
				} else {
					productPrice.html('LiĂªn há»‡');
					comparePrice.hide();
					inputQty.hide();
					btnBox.hide();
				}
			}
		} else {
			priceBox.show();
			inputQty.show();
			btnBox.show();
			if (variant.price == 0) {
				inputQty.hide();
				productPrice.html('LiĂªn há»‡');
				addToCart.hide();
				comparePrice.hide();
			} else {
				inputQty.show();
				productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}â‚«")).show();
				addToCart.removeClass('btn_soldout').addClass('btn_buy button-hover-3').removeAttr('disabled', 'disabled').html('<span><i class="fa fa-shopping-bag" aria-hidden="true"></i> Mua ngay</span>').attr('title','Mua ngay').show();
				if (variant.compare_at_price > variant.price) {
					comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}â‚«")).show();
				} else {
					comparePrice.hide();
					btnBox.show();
					addToCart.show();
				}
			}
		}
	} else {
		productPrice.html('LiĂªn há»‡');
		comparePrice.hide();
		inputQty.hide();
		addToCart.addClass('btn_soldout').attr('disabled', 'disabled').html('<span><i class="fa fa-ban"></i> Ngá»«ng bĂ¡n</span>').attr('title','Ngá»«ng bĂ¡n'); // set add-to-cart button to unavailable class and disable button
	}

	/*begin variant image*/
	if (variant && variant.image) {
		var originalImage = jQuery(".large-image img");
		var newImage = variant.image;
		var element = originalImage[0];
		Bizweb.Image.switchImage(newImage, element, function(newImageSizedSrc, newImage, element) {
			jQuery(element).parents('a').attr('href', newImageSizedSrc);
			jQuery(element).attr('src', newImageSizedSrc);
		});
		$('.checkurl').attr('href', $(this).attr('src'));
		if ($(window).width() >= 1200) {
			if(document.getElementById("img_01").naturalWidth > 400 && document.getElementById("img_01").naturalHeight > 350){
				setTimeout(function() {
					$('.zoomContainer').remove();
					$('#img_01').elevateZoom({
						constrainType:"height",
						constrainSize: 200,
						zoomType: "lens",
						lensShape: "{{ settings.lensshape }}",
						containLensZoom: true,
						gallery:'gallery_01',
						cursor: 'pointer',
						galleryActiveClass: "active"
					});
				}, 300);
			}
		}
	}
	/*end of variant image*/
	
};

jQuery(function($) {
	if (variantsize == true) {
		new Bizweb.OptionSelectors('product-selectors', {
			product: productJson,
			onVariantSelected: selectCallback,
			enableHistoryState: true
		});
	}
	if (productOptionsSize == 1) {
		if (optionsFirst == 'NgĂ y') {
			$('.selector-wrapper:eq(0)').prepend('<label><i class="fa fa-calendar"></i> ' + optionsFirst + '</label>');
		} else {
			$('.selector-wrapper:eq(0)').prepend('<label>' + optionsFirst + '</label>');
		}
	}
	if (cdefault == 1) {
		$('.selector-wrapper').hide();
	}
	$('.selector-wrapper').css({
		'text-align': 'left',
		'margin-bottom': '15px'
	});
});

jQuery('.swatch :radio').change(function() {
	var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
	var optionValue = jQuery(this).val();
	jQuery(this)
	.closest('form')
	.find('.single-option-selector')
	.eq(optionIndex)
	.val(optionValue)
	.trigger('change');
});

$('#gallery_01 img').click(function(e) {
	e.preventDefault();
	$('.large-image img').attr('src', $(this).parent().attr('data-zoom-image'));
})

$('#gallery_01 img, .swatch-element label').click(function(e) {
	$('.checkurl').attr('href', $(this).attr('src'));
	if ($(window).width() >= 1200) {
		if(document.getElementById("img_01").naturalWidth > 400 && document.getElementById("img_01").naturalHeight > 350){
			setTimeout(function() {
				$('.zoomContainer').remove();
				$('#img_01').elevateZoom({
					constrainType:"height",
					constrainSize: 200,
					zoomType: "lens",
					lensShape: "square",
					containLensZoom: true,
					gallery:'gallery_01',
					cursor: 'pointer',
					galleryActiveClass: "active"
				});
			}, 300);
		}
	}
})