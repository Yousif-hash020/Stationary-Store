
@extends('layouts.main')
@section('main-content')
 
    <!-- Breadcrumb -->
    <div class="breadcrumb-container">
        <div class="breadcrumb">
            <a href="index.html">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Shopping Cart</span>
        </div>
    </div>

    <!-- Cart Section -->
    <section class="cart-section   ">
        <div class="container">
            <div class="section-header">
                <h1><i class="fas fa-shopping-bag"></i> Your Shopping Cart</h1>
                <p>Review and modify your selected items djd</p>
            </div>

            <div class="cart-container">
                <!-- Cart Items -->
                <div class="cart-items">
                    <div class="cart-header">
                        <div class="cart-header-product">Product</div>
                        <div class="cart-header-price">Price</div>
                        <div class="cart-header-quantity">Quantity</div>
                        <div class="cart-header-total">Total</div>
                        <div class="cart-header-action">Action</div>
                    </div>

                    <!-- Cart Item 1 -->
                    <div class="cart-item">
                        <div class="cart-product">
                            <div class="cart-product-image">
                                <img src="https://images.unsplash.com/photo-1583485088034-697b5bc54ccd?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Luxury Pen Set">
                            </div>
                            <div class="cart-product-info">
                                <h3 class="cart-product-title">Luxury Pen Set</h3>
                                <p class="cart-product-variant">Color: Blue</p>
                            </div>
                        </div>
                        <div class="cart-price">$79.99</div>
                        <div class="cart-quantity">
                            <button class="quantity-btn decrease"><i class="fas fa-minus"></i></button>
                            <input type="number" class="quantity-input" value="1" min="1" max="10">
                            <button class="quantity-btn increase"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="cart-total">$79.99</div>
                        <div class="cart-action">
                            <button class="remove-btn"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>

                    <!-- Cart Item 2 -->
                    <div class="cart-item">
                        <div class="cart-product">
                            <div class="cart-product-image">
                                <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Designer Notebook">
                            </div>
                            <div class="cart-product-info">
                                <h3 class="cart-product-title">Designer Notebook</h3>
                                <p class="cart-product-variant">Size: A5, Type: Dotted</p>
                            </div>
                        </div>
                        <div class="cart-price">$49.99</div>
                        <div class="cart-quantity">
                            <button class="quantity-btn decrease"><i class="fas fa-minus"></i></button>
                            <input type="number" class="quantity-input" value="2" min="1" max="10">
                            <button class="quantity-btn increase"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="cart-total">$99.98</div>
                        <div class="cart-action">
                            <button class="remove-btn"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>

                    <!-- Cart Item 3 -->
                    <div class="cart-item">
                        <div class="cart-product">
                            <div class="cart-product-image">
                                <img src="https://images.unsplash.com/photo-1572726729207-a78d6feb18d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Premium Markers">
                            </div>
                            <div class="cart-product-info">
                                <h3 class="cart-product-title">Premium Markers Set</h3>
                                <p class="cart-product-variant">24 Colors</p>
                            </div>
                        </div>
                        <div class="cart-price">$34.99</div>
                        <div class="cart-quantity">
                            <button class="quantity-btn decrease"><i class="fas fa-minus"></i></button>
                            <input type="number" class="quantity-input" value="1" min="1" max="10">
                            <button class="quantity-btn increase"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="cart-total">$34.99</div>
                        <div class="cart-action">
                            <button class="remove-btn"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>

                    <!-- Empty Cart Message (hidden by default) -->
                    <div class="empty-cart" style="display: none;">
                        <div class="empty-cart-icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <h2>Your cart is empty</h2>
                        <p>Looks like you haven't added any items to your cart yet.</p>
                        <a href="shop.html" class="btn">Continue Shopping</a>
                    </div>
                </div>

                <!-- Cart Actions -->
                <div class="cart-actions">
                    <button class="clear-cart-btn">
                        <i class="fas fa-trash"></i> Clear Cart
                    </button>
                    <a href="shop.html" class="continue-shopping-btn">
                        <i class="fas fa-arrow-left"></i> Continue Shopping
                    </a>
                </div>

                <!-- Cart Summary -->
                <div class="cart-summary">
                    <h2>Order Summary</h2>
                    
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span class="subtotal-amount">$214.96</span>
                    </div>
                    
                    <div class="summary-row">
                        <span>Shipping</span>
                        <span class="shipping-amount">$5.99</span>
                    </div>
                    
                    <div class="summary-row">
                        <span>Tax (7%)</span>
                        <span class="tax-amount">$15.05</span>
                    </div>
                    
                    <div class="coupon-section">
                        <div class="coupon-input">
                            <input type="text" placeholder="Enter coupon code">
                            <button class="apply-coupon-btn">Apply</button>
                        </div>
                    </div>
                    
                    <div class="summary-row discount-row" style="display: none;">
                        <span>Discount</span>
                        <span class="discount-amount">-$0.00</span>
                    </div>
                    
                    <div class="summary-row total-row">
                        <span>Total</span>
                        <span class="total-amount">$236.00</span>
                    </div>
                    
                    <button class="checkout-btn">
                        Proceed to Checkout <i class="fas fa-arrow-right"></i>
                    </button>
                    
                    <div class="payment-methods">
                        <p>We Accept:</p>
                        <div class="payment-icons">
                            <i class="fab fa-cc-visa"></i>
                            <i class="fab fa-cc-mastercard"></i>
                            <i class="fab fa-cc-amex"></i>
                            <i class="fab fa-cc-paypal"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- You May Also Like Section -->
    <section class="recommendations trending-products">
        <div class="container">
            <div class="section-header">
                <h2><i class="fas fa-thumbs-up"></i> You May Also Like</h2>
                <p>Products similar to items in your cart</p>
            </div>
            <div class="products-grid">
             

                <!-- Premium Leather Notebook -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Premium Leather Notebook">
                        <div class="product-badge">Featured</div>
                        <div class="product-overlay">
                            <div class="product-actions">
                                <button class="product-action-btn view" title="Quick View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="product-action-btn wishlist" title="Add to Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="product-action-btn cart" title="Add to Cart">
                                    <i class="fas fa-shopping-bag"></i>
                                </button>
                              
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>Premium Leather Notebook</h3>
                        <div class="product-meta">
                            <span class="price">$45.99</span>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Professional Art Supply Set -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1572726729207-a78d6feb18d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Professional Art Supply Set">
                        <div class="product-overlay">
                            <div class="product-actions">
                                <button class="product-action-btn view" title="Quick View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="product-action-btn wishlist" title="Add to Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="product-action-btn cart" title="Add to Cart">
                                    <i class="fas fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-badge">Sale</div>
                    </div>
                    <div class="product-info">
                        <h3>Professional Art Supply Set</h3>
                        <div class="product-meta">
                            <span class="price">$119.99</span>
                            <span class="old-price">$149.99</span>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Desk Organizer Set -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1583485088034-697b5bc54ccd?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Desk Organizer Set">
                        <div class="product-overlay">
                            <div class="product-actions">
                                <button class="product-action-btn view" title="Quick View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="product-action-btn wishlist" title="Add to Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="product-action-btn cart" title="Add to Cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                                
                            </div>
                        </div>
                        <div class="product-badge">New</div>
                    </div>
                    <div class="product-info">
                        <h3>Desk Organizer Set</h3>
                        <div class="product-meta">
                            <span class="price">$34.99</span>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Luxury Pen Set -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1583485088034-697b5bc54ccd?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Luxury Pen Set">
                        <div class="product-overlay">
                            <div class="product-actions">
                                <button class="product-action-btn view" title="Quick View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="product-action-btn wishlist" title="Add to Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="product-action-btn cart" title="Add to Cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                              
                            </div>
                        </div>
                        <div class="product-badge">Bestseller</div>
                    </div>
                    <div class="product-info">
                        <h3>Luxury Pen Set</h3>
                        <div class="product-meta">
                            <span class="price">$129.99</span>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Watercolor Paint Set -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1572726729207-a78d6feb18d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Watercolor Paint Set">
                        <div class="product-overlay">
                            <div class="product-actions">
                                <button class="product-action-btn view" title="Quick View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="product-action-btn wishlist" title="Add to Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="product-action-btn cart" title="Add to Cart">
                                    <i class="fas fa-shopping-bag"></i>
                                </button>
                               
                            </div>
                        </div>
                        <div class="product-badge">Trending</div>
                    </div>
                    <div class="product-info">
                        <h3>Watercolor Paint Set</h3>
                        <div class="product-meta">
                            <span class="price">$49.99</span>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 

@endsection
