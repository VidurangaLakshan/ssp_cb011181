<x-app-layout>

    <div class="site__body">
        <div class="block-space block-space--layout--spaceship-ledge-height"></div>
        <div class="block order-success">
            <div class="container">
                <div class="order-success__body">
                    <div class="order-success__header">
                        <div class="order-success__icon"><svg width="100" height="100">
                                <path d="M50,100C22.4,100,0,77.6,0,50S22.4,0,50,0s50,22.4,50,50S77.6,100,50,100z M50,2C23.5,2,2,23.5,2,50
        s21.5,48,48,48s48-21.5,48-48S76.5,2,50,2z M44.2,71L22.3,49.1l1.4-1.4l21.2,21.2l34.4-34.4l1.4,1.4L45.6,71
        C45.2,71.4,44.6,71.4,44.2,71z" />
                            </svg></div>
                        <h1 class="order-success__title">Success</h1>
                        <div class="order-success__subtitle">Your order has been received</div>
                        <div class="order-success__actions"><a
                                href="/"
                                class="btn btn-sm btn-secondary">Go To Homepage</a></div>
                    </div>
                    <div class="card order-success__meta">
                        <ul class="order-success__meta-list">
                            <li class="order-success__meta-item"><span class="order-success__meta-title">Order
										number:</span> <span class="order-success__meta-value">#9478</span></li>
                            <li class="order-success__meta-item"><span class="order-success__meta-title">Created
										At:</span> <span class="order-success__meta-value">Oct 19, 2020</span></li>
                            <li class="order-success__meta-item"><span
                                    class="order-success__meta-title">Total:</span> <span
                                    class="order-success__meta-value">$1596.00</span></li>
                            <li class="order-success__meta-item"><span class="order-success__meta-title">Payment
										Method:</span> <span class="order-success__meta-value">PayPal</span></li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="order-list">
                            <table>
                                <thead class="order-list__header">
                                <tr>
                                    <th class="order-list__column-label" colspan="2">Product</th>
                                    <th class="order-list__column-quantity">Quantity</th>
                                    <th class="order-list__column-total">Total</th>
                                </tr>
                                </thead>
                                <tbody class="order-list__products">
                                <tr>
                                    <td class="order-list__column-image">
                                        <div class="image image--type--product"><a href="product-full.html"
                                                                                   class="image__body"><img class="image__tag"
                                                                                                            src="images/products/product-1-40x40.jpg" alt=""></a></div>
                                    </td>
                                    <td class="order-list__column-product"><a href="product-full.html">Brandix
                                            Spark Plug Kit ASR-400</a>
                                        <div class="order-list__options">
                                            <ul class="order-list__options-list">
                                                <li class="order-list__options-item"><span
                                                        class="order-list__options-label">Color: </span><span
                                                        class="order-list__options-value">True Red</span></li>
                                                <li class="order-list__options-item"><span
                                                        class="order-list__options-label">Material: </span><span
                                                        class="order-list__options-value">Aluminium</span></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class="order-list__column-quantity" data-title="Quantity:">2</td>
                                    <td class="order-list__column-total">$38.00</td>
                                </tr>
                                <tr>
                                    <td class="order-list__column-image">
                                        <div class="image image--type--product"><a href="product-full.html"
                                                                                   class="image__body"><img class="image__tag"
                                                                                                            src="images/products/product-2-40x40.jpg" alt=""></a></div>
                                    </td>
                                    <td class="order-list__column-product"><a href="product-full.html">Brandix
                                            Brake Kit BDX-750Z370-S</a></td>
                                    <td class="order-list__column-quantity" data-title="Quantity:">1</td>
                                    <td class="order-list__column-total">$224.00</td>
                                </tr>
                                <tr>
                                    <td class="order-list__column-image">
                                        <div class="image image--type--product"><a href="product-full.html"
                                                                                   class="image__body"><img class="image__tag"
                                                                                                            src="images/products/product-3-40x40.jpg" alt=""></a></div>
                                    </td>
                                    <td class="order-list__column-product"><a href="product-full.html">Left
                                            Headlight Of Brandix Z54</a>
                                        <div class="order-list__options">
                                            <ul class="order-list__options-list">
                                                <li class="order-list__options-item"><span
                                                        class="order-list__options-label">Color: </span><span
                                                        class="order-list__options-value">Green</span></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class="order-list__column-quantity" data-title="Quantity:">3</td>
                                    <td class="order-list__column-total">$1047.00</td>
                                </tr>
                                </tbody>
                                <tbody class="order-list__subtotals">
                                <tr>
                                    <th class="order-list__column-label" colspan="3">Subtotal</th>
                                    <td class="order-list__column-total">$1309.00</td>
                                </tr>
                                <tr>
                                    <th class="order-list__column-label" colspan="3">Shipping</th>
                                    <td class="order-list__column-total">$25.00</td>
                                </tr>
                                <tr>
                                    <th class="order-list__column-label" colspan="3">Tax</th>
                                    <td class="order-list__column-total">$262.00</td>
                                </tr>
                                </tbody>
                                <tfoot class="order-list__footer">
                                <tr>
                                    <th class="order-list__column-label" colspan="3">Total</th>
                                    <td class="order-list__column-total">$1596.00</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="order-success__addresses">
                        <div class="order-success__address card address-card">
                            <div class="address-card__badge tag-badge tag-badge--theme">Shipping Address</div>
                            <div class="address-card__body">
                                <div class="address-card__name">Ryan Ford</div>
                                <div class="address-card__row">Random Federation<br>115302, Moscow<br>ul.
                                    Varshavskaya, 15-2-178</div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">Phone Number</div>
                                    <div class="address-card__row-content">38 972 588-42-36</div>
                                </div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">Email Address</div>
                                    <div class="address-card__row-content">stroyka@example.com</div>
                                </div>
                            </div>
                        </div>
                        <div class="order-success__address card address-card">
                            <div class="address-card__badge tag-badge tag-badge--theme">Billing Address</div>
                            <div class="address-card__body">
                                <div class="address-card__name">Ryan Ford</div>
                                <div class="address-card__row">Random Federation<br>115302, Moscow<br>ul.
                                    Varshavskaya, 15-2-178</div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">Phone Number</div>
                                    <div class="address-card__row-content">38 972 588-42-36</div>
                                </div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">Email Address</div>
                                    <div class="address-card__row-content">stroyka@example.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>

</x-app-layout>
