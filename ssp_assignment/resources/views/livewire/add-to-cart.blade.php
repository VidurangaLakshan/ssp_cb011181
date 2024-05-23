<div style="display: flex; justify-content: center; width: 100%;">
        <div class="product__actions-item product__actions-item--quantity">
            <div class="input-number">
                <input class="input-number__input form-control form-control-lg"
                       type="number" min="1" value="1" max="{{ $product->stock }}" id="product_buy_count"
                       name="quantity"
                       disabled>
                <div wire:click="IncreaseQuantity" class="input-number__add"></div>
                <div wire:click="DecreaseQuantity" class="input-number__sub"></div>
            </div>
        </div>
        <div class="product__actions-item product__actions-item--addtocart">
            @if ($product->stock == "0")
                <button class="btn btn-primary btn-lg btn-block" disabled>Add to
                    Cart
                </button>
            @else
                <button wire:click="addToCart" class="btn btn-primary btn-lg btn-block">
                    Add to Cart
                </button>
            @endif
        </div>
</div>
