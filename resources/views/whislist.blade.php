@extends('layouts.main')
@section('main-content')

    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb">
        <a href="index.html">Home</a> &gt; <span>My Wishlist</span>
    </nav>

    <!-- Wishlist Section -->
    <section class="wishlist-section">
        <div class="container">
            <div class="section-header">
                <h1><i class="fas fa-heart"></i> My Wishlist</h1>
                <p>Items you've saved for later</p>
            </div>

            <div class="wishlist-container">
                <!-- Wishlist Items -->
                <div class="wishlist-items">
                    <div class="wishlist-header">
                        <div class="wishlist-header-product">Product</div>
                        <div class="wishlist-header-price">Price</div>
                        <div class="wishlist-header-status">Status</div>
                        <div class="wishlist-header-action">Actions</div>
                    </div>

                    <!-- Wishlist Item 1 -->
                    <div class="wishlist-item">
                        <div class="wishlist-product">
                            <div class="wishlist-product-image">
                                <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Designer Sunglasses">
                            </div>
                            <div class="wishlist-product-info">
                                <h3 class="wishlist-product-title">Designer Sunglasses - Luxury Collection</h3>
                                <p class="wishlist-product-variant">Color: Matte Black</p>
                                <div class="wishlist-product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(156)</span>
                                </div>
                            </div>
                        </div>
                        <div class="wishlist-price">
                            <span class="current-price">$149.99</span>
                            <span class="original-price">$199.99</span>
                            <span class="discount-badge">25% OFF</span>
                        </div>
                        <div class="wishlist-status in-stock">
                            <i class="fas fa-check-circle"></i> In Stock
                        </div>
                        <div class="wishlist-actions">
                            <button class="btn-primary add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </button>
                            <button class="btn-icon remove-btn" title="Remove from Wishlist">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Wishlist Item 2 -->
                    <div class="wishlist-item">
                        <div class="wishlist-product">
                            <div class="wishlist-product-image">
                                <img src="https://images.unsplash.com/photo-1577803645773-f96470509666?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Premium Sunglasses">
                            </div>
                            <div class="wishlist-product-info">
                                <h3 class="wishlist-product-title">Premium Aviator Sunglasses</h3>
                                <p class="wishlist-product-variant">Color: Gold Frame</p>
                                <div class="wishlist-product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(89)</span>
                                </div>
                            </div>
                        </div>
                        <div class="wishlist-price">
                            <span class="current-price">$129.99</span>
                        </div>
                        <div class="wishlist-status in-stock">
                            <i class="fas fa-check-circle"></i> In Stock
                        </div>
                        <div class="wishlist-actions">
                            <button class="btn-primary add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </button>
                            <button class="btn-icon remove-btn" title="Remove from Wishlist">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Wishlist Item 3 -->
                    <div class="wishlist-item">
                        <div class="wishlist-product">
                            <div class="wishlist-product-image">
                                <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Vintage Sunglasses">
                            </div>
                            <div class="wishlist-product-info">
                                <h3 class="wishlist-product-title">Vintage Round Sunglasses</h3>
                                <p class="wishlist-product-variant">Color: Tortoise Shell</p>
                                <div class="wishlist-product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(124)</span>
                                </div>
                            </div>
                        </div>
                        <div class="wishlist-price">
                            <span class="current-price">$89.99</span>
                            <span class="original-price">$119.99</span>
                            <span class="discount-badge">25% OFF</span>
                        </div>
                        <div class="wishlist-status low-stock">
                            <i class="fas fa-exclamation-circle"></i> Low Stock (2 left)
                        </div>
                        <div class="wishlist-actions">
                            <button class="btn-primary add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </button>
                            <button class="btn-icon remove-btn" title="Remove from Wishlist">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Empty Wishlist Message (hidden by default) -->
                    <div class="empty-wishlist" style="display: none;">
                        <div class="empty-wishlist-icon">
                            <i class="far fa-heart"></i>
                        </div>
                        <h2>Your wishlist is empty</h2>
                        <p>Items added to your wishlist will be saved here.</p>
                        <a href="shop.html" class="btn">Start Shopping</a>
                    </div>
                </div>

                <!-- Wishlist Actions -->
                <div class="wishlist-actions-container">
                    <button class="clear-wishlist-btn">
                        <i class="fas fa-trash"></i> Clear Wishlist
                    </button>
                    <button class="add-all-to-cart-btn">
                        <i class="fas fa-shopping-cart"></i> Add All to Cart
                    </button>
                    <a href="shop.html" class="continue-shopping-btn">
                        <i class="fas fa-arrow-left"></i> Continue Shopping
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- You May Also Like Section -->
    <section class="recommendations">
        <div class="container">
            <div class="section-header">
                <h2>You May Also Like</h2>
                <p>Discover more stylish eyewear</p>
            </div>
            
            <div class="recommendations-grid">
                <!-- Recommendation 1 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1574258495973-f010dfbb5371?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Sport Sunglasses">
                        <div class="product-badge">New</div>
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
                        <h3>Sport Sunglasses</h3>
                        <div class="product-meta">
                            <span class="price">$89.99</span>
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
                
                <!-- Recommendation 2 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1508296695146-257a814070b4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cat Eye Sunglasses">
                        <div class="product-badge">Popular</div>
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
                        <h3>Cat Eye Sunglasses</h3>
                        <div class="product-meta">
                            <span class="price">$79.99</span>
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
                
                <!-- Recommendation 3 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Polarized Sunglasses">
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
                        <h3>Polarized Sunglasses</h3>
                        <div class="product-meta">
                            <span class="price">$99.99</span>
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
                
                <!-- Recommendation 4 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1577744486770-2f42d1e56511?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Wooden Frame Sunglasses">
                        <div class="product-badge">Sale</div>
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
                        <h3>Wooden Frame Sunglasses</h3>
                        <div class="product-meta">
                            <span class="price">$99.99</span>
                            <span class="old-price">$129.99</span>
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
