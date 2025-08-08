@extends('layouts.main')
@section('main-content') 

    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.html">Home</a> &gt; <a href="cart.html">Cart</a> &gt; <span>Checkout</span>
    </nav>

    <!-- Checkout Section -->
    <section class="checkout-section">
        <div class="container">
            <div class="section-header">
                <h1><i class="fas fa-credit-card"></i> Checkout</h1>
                <p>Complete your purchase securely</p>
            </div>

            <div class="checkout-container">
                <!-- Checkout Progress -->
                <div class="checkout-progress">
                    <div class="progress-step active" data-step="shipping">
                        <div class="step-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="step-label">Shipping</div>
                    </div>
                    <div class="progress-connector"></div>
                    <div class="progress-step" data-step="payment">
                        <div class="step-icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="step-label">Payment</div>
                    </div>
                    <div class="progress-connector"></div>
                    <div class="progress-step" data-step="review">
                        <div class="step-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="step-label">Review</div>
                    </div>
                </div>

                <!-- Checkout Form and Order Summary -->
                <div class="checkout-content">
                    <!-- Checkout Form -->
                    <div class="checkout-form-container">
                        <!-- Shipping Step -->
                        <div class="checkout-step active" id="shipping-step">
                            <div class="step-header">
                                <h2>Shipping Information</h2>
                                <p>Enter your shipping details</p>
                            </div>
                            <form class="checkout-form">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="first-name">First Name</label>
                                        <input type="text" id="first-name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" id="last-name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Street Address</label>
                                    <input type="text" id="address" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" id="city" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="postal-code">Postal Code</label>
                                        <input type="text" id="postal-code" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <select id="country" required>
                                        <option value="">Select Country</option>
                                        <option value="US">United States</option>
                                        <option value="CA">Canada</option>
                                        <option value="UK">United Kingdom</option>
                                        <option value="AU">Australia</option>
                                        <option value="PK">Pakistan</option>
                                        <!-- Add more countries as needed -->
                                    </select>
                                </div>
                                <div class="form-group shipping-options">
                                    <label>Shipping Method</label>
                                    <div class="shipping-option">
                                        <input type="radio" id="standard-shipping" name="shipping" value="standard" checked>
                                        <label for="standard-shipping">
                                            <div class="option-info">
                                                <div class="option-title">Standard Shipping</div>
                                                <div class="option-description">3-5 business days</div>
                                            </div>
                                            <div class="option-price">$5.99</div>
                                        </label>
                                    </div>
                                    <div class="shipping-option">
                                        <input type="radio" id="express-shipping" name="shipping" value="express">
                                        <label for="express-shipping">
                                            <div class="option-info">
                                                <div class="option-title">Express Shipping</div>
                                                <div class="option-description">1-2 business days</div>
                                            </div>
                                            <div class="option-price">$12.99</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn-secondary" onclick="window.location.href='cart.html'">
                                        <i class="fas fa-arrow-left"></i> Back to Cart
                                    </button>
                                    <button type="button" class="btn-primary next-step" data-next="payment">
                                        Continue to Payment <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Payment Step -->
                        <div class="checkout-step" id="payment-step">
                            <div class="step-header">
                                <h2>Payment Method</h2>
                                <p>Choose your preferred payment option</p>
                            </div>
                            <form class="checkout-form">
                                <div class="payment-options">
                                    <div class="payment-option">
                                        <input type="radio" id="credit-card" name="payment" value="credit-card" checked>
                                        <label for="credit-card">
                                            <div class="option-icon"><i class="fas fa-credit-card"></i></div>
                                            <div class="option-info">
                                                <div class="option-title">Credit/Debit Card</div>
                                                <div class="option-description">Pay securely with your card</div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="payment-option">
                                        <input type="radio" id="cash-delivery" name="payment" value="cash-delivery">
                                        <label for="cash-delivery">
                                            <div class="option-icon"><i class="fas fa-money-bill-wave"></i></div>
                                            <div class="option-info">
                                                <div class="option-title">Cash on Delivery</div>
                                                <div class="option-description">Pay when you receive your order</div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <!-- Credit Card Details (shown when credit card is selected) -->
                                <div class="card-details" id="card-payment-details">
                                    <div class="form-group">
                                        <label for="card-number">Card Number</label>
                                        <div class="card-input-wrapper">
                                            <input type="text" id="card-number" placeholder="1234 5678 9012 3456">
                                            <div class="card-icons">
                                                <i class="fab fa-cc-visa"></i>
                                                <i class="fab fa-cc-mastercard"></i>
                                                <i class="fab fa-cc-amex"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="card-name">Cardholder Name</label>
                                            <input type="text" id="card-name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="expiry-date">Expiry Date</label>
                                            <input type="text" id="expiry-date" placeholder="MM/YY">
                                        </div>
                                        <div class="form-group">
                                            <label for="cvv">CVV</label>
                                            <input type="text" id="cvv" placeholder="123">
                                        </div>
                                    </div>
                                </div>

                                <!-- Coupon Code Section -->
                                <div class="coupon-section">
                                    <div class="coupon-toggle">
                                        <button type="button" class="btn-link" id="coupon-toggle-btn">
                                            <i class="fas fa-tag"></i> Have a coupon code?
                                        </button>
                                    </div>
                                    <div class="coupon-form" id="coupon-form" style="display: none;">
                                        <div class="form-row">
                                            <div class="form-group">
                                                <input type="text" id="coupon-code" placeholder="Enter coupon code">
                                            </div>
                                            <button type="button" class="btn-apply-coupon">Apply</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="button" class="btn-secondary prev-step" data-prev="shipping">
                                        <i class="fas fa-arrow-left"></i> Back to Shipping
                                    </button>
                                    <button type="button" class="btn-primary next-step" data-next="review">
                                        Review Order <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Review Step -->
                        <div class="checkout-step" id="review-step">
                            <div class="step-header">
                                <h2>Review Your Order</h2>
                                <p>Please review your information before placing the order</p>
                            </div>
                            <div class="review-sections">
                                <div class="review-section">
                                    <div class="review-header">
                                        <h3><i class="fas fa-truck"></i> Shipping Information</h3>
                                        <button type="button" class="btn-edit" data-edit="shipping">
                                            <i class="fas fa-pen"></i> Edit
                                        </button>
                                    </div>
                                    <div class="review-content" id="shipping-review">
                                        <p><strong>John Doe</strong></p>
                                        <p>123 Main Street</p>
                                        <p>New York, NY 10001</p>
                                        <p>United States</p>
                                        <p>Phone: (123) 456-7890</p>
                                        <p>Email: john.doe@example.com</p>
                                        <p class="shipping-method">Standard Shipping (3-5 business days)</p>
                                    </div>
                                </div>
                                <div class="review-section">
                                    <div class="review-header">
                                        <h3><i class="fas fa-credit-card"></i> Payment Method</h3>
                                        <button type="button" class="btn-edit" data-edit="payment">
                                            <i class="fas fa-pen"></i> Edit
                                        </button>
                                    </div>
                                    <div class="review-content" id="payment-review">
                                        <div class="payment-method-review">
                                            <i class="fas fa-credit-card"></i>
                                            <span>Credit Card ending in 3456</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-section">
                                    <div class="review-header">
                                        <h3><i class="fas fa-shopping-cart"></i> Order Items</h3>
                                        <button type="button" class="btn-edit" onclick="window.location.href='cart.html'">
                                            <i class="fas fa-pen"></i> Edit
                                        </button>
                                    </div>
                                    <div class="review-content">
                                        <div class="review-items">
                                            <div class="review-item">
                                                <div class="review-item-image">
                                                    <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Designer Sunglasses">
                                                </div>
                                                <div class="review-item-details">
                                                    <h4>Designer Sunglasses - Luxury Collection</h4>
                                                    <p>Color: Matte Black</p>
                                                    <div class="review-item-price">
                                                        <span class="item-price">$149.99</span>
                                                        <span class="item-quantity">Qty: 1</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-item">
                                                <div class="review-item-image">
                                                    <img src="https://images.unsplash.com/photo-1577803645773-f96470509666?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Premium Sunglasses">
                                                </div>
                                                <div class="review-item-details">
                                                    <h4>Premium Aviator Sunglasses</h4>
                                                    <p>Color: Gold Frame</p>
                                                    <div class="review-item-price">
                                                        <span class="item-price">$129.99</span>
                                                        <span class="item-quantity">Qty: 1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn-secondary prev-step" data-prev="payment">
                                    <i class="fas fa-arrow-left"></i> Back to Payment
                                </button>
                                <button type="button" class="btn-primary place-order-btn">
                                    <i class="fas fa-check-circle"></i> Place Order
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Order Summary -->
                    <div class="order-summary">
                        <div class="summary-header">
                            <h3>Order Summary</h3>
                        </div>
                        <div class="summary-content">
                            <div class="summary-items">
                                <div class="summary-item">
                                    <span class="item-name">Designer Sunglasses</span>
                                    <span class="item-price">$149.99</span>
                                </div>
                                <div class="summary-item">
                                    <span class="item-name">Premium Aviator Sunglasses</span>
                                    <span class="item-price">$129.99</span>
                                </div>
                            </div>
                            <div class="summary-subtotal">
                                <span>Subtotal</span>
                                <span>$279.98</span>
                            </div>
                            <div class="summary-shipping">
                                <span>Shipping</span>
                                <span id="shipping-cost">$5.99</span>
                            </div>
                            <div class="summary-discount" id="discount-row" style="display: none;">
                                <span>Discount</span>
                                <span id="discount-amount">-$0.00</span>
                            </div>
                            <div class="summary-total">
                                <span>Total</span>
                                <span id="order-total">$285.97</span>
                            </div>
                            <div class="summary-secure">
                                <i class="fas fa-lock"></i> Secure Checkout
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Confirmation Modal (hidden by default) -->
    <div class="order-confirmation-modal" id="confirmation-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2><i class="fas fa-check-circle"></i> Order Placed Successfully!</h2>
                <button class="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="success-animation">
                    <div class="checkmark-circle">
                        <div class="checkmark"></div>
                    </div>
                </div>
                <p>Thank you for your purchase! Your order has been received and is being processed.</p>
                <div class="order-details">
                    <p><strong>Order Number:</strong> <span id="order-number">SG-12345</span></p>
                    <p><strong>Order Date:</strong> <span id="order-date">June 10, 2024</span></p>
                    <p>A confirmation email has been sent to <span id="confirmation-email">john.doe@example.com</span></p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-secondary" onclick="window.location.href='index.html'">Continue Shopping</button>
                <button class="btn-primary" onclick="window.location.href='#'">Track Order</button>
            </div>
        </div>
    </div>

 


@endsection