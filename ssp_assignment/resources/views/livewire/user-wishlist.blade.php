<div style="width: 100%">
        <button
{{--            wire:click="toggleAddToWishlist()"--}}
                wire:click="toggleAddToWishlist()"
                class="product__actions-item product__actions-item--wishlist"
                style="width: 100%"
                type="submit">
            <svg width="16" height="16" fill="{{ (Auth::user()?->hasAddedToWishlist($product)) ? 'red' : ''}}">
                <path
                    d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z"/>
            </svg>
            @if (Auth::user()?->hasAddedToWishlist($product))
                <span>Added to Wishlist</span>
            @else
                <span>Add to Wishlist</span>
            @endif
        </button>
</div>
