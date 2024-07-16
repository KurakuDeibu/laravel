<div class="might-like-section">
    <div class="container">
        <h2>You might also like...</h2>
        <div class="might-like-grid">
            @foreach ($mightAlsoLike as $product)
        
      
            <a href="/products/{{ $product->id}}" class="might-like-product">
                <img src="{{ asset($product->product_image) }}" alt="product">
                <div class="might-like-product-name">{{$product->product_name}}</div>
                <div class="might-like-product-price">{{$product->product_price}}</div>
            </a>      
            @endforeach

        </div>
    </div>
</div>
