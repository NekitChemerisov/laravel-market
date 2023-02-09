@include('components.startStyle')
@include('components.header')

<body>
	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Корзина</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
						<div class="product-item men">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="/images/product_3.png" alt="">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
								<div class="product_info">
									<h6 class="product_name">$product['product_name<a href="single.html"></a></h6>
									<div class="product_price">$product['price']<span>$product['price']</span></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">Оформить заказ</a></div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	@include('components.endStyle')