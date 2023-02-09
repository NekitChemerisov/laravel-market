
@extends('components.startStyle')
@extends('components.header')

<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>New Arrivals2</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                        @foreach ($categories as $category) 
							<!-- <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">{{ $category->category_name }}</li> -->
							<div class="grid_button "><a href="{{ route('categories.show', ['id' => $category->id]) }}">{{ $category->category_name }}</a></div>
							
							@endforeach 
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Product 1 -->
						@isset ($products)
						@foreach ($products as $product)
						<div class="product-item men">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="images/product_1.png" alt="">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
								<div class="product_info">
									<h6 class="product_name">{{ $product['product_name'] }}<a href="single.html"></a></h6>
									<div class="product_price">{{ $product['price'] - 15 }}<span>{{ $product['price'] }}</span></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>
						@endforeach 
						@endisset

						@foreach ($category->products as $product)
						<div class="product-item men">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="images/product_1.png" alt="">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
								<div class="product_info">
									<h6 class="product_name">{{ $product['product_name'] }}<a href="single.html"></a></h6>
									<div class="product_price">{{ $product['price'] - 15 }}<span>{{ $product['price'] }}</span></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>
						@endforeach
</div>

@extends('components.endStyle')