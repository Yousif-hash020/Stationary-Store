@extends('layouts.main')
@section('main-content')

    <!-- Breadcrumb -->
    <div class="breadcrumb-container">
        <div class="breadcrumb">
            <a href="index.html">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Shop</span>
        </div>
    </div>

    <div class="shop-container">
        <!-- Sidebar Filters -->
        <aside class="filters-sidebar">
            <div class="filter-header">
                <h2>Filters</h2>
                <button class="clear-filters">Clear All</button>
            </div>
            
            <div class="filter-section">
                <h3>Categories</h3>
                <div class="filter-group">
                    <label class="filter-item">
                        <input type="checkbox" name="category" value="writing-instruments">
                        <span>Writing Instruments</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="category" value="notebooks-journals">
                        <span>Notebooks & Journals</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="category" value="art-supplies">
                        <span>Art & Craft Supplies</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="category" value="office-essentials">
                        <span>Office Essentials</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="category" value="school-supplies">
                        <span>School Supplies</span>
                    </label>
                </div>
            </div>

            <div class="filter-section">
                <h3>Price Range</h3>
                <div class="filter-group">
                    <div class="price-slider-container">
                        <input type="range" min="0" max="200" value="0" class="price-slider" id="priceRangeMin">
                        <input type="range" min="0" max="200" value="200" class="price-slider" id="priceRangeMax">
                        <div class="price-slider-track"></div>
                    </div>
                    <div class="price-inputs">
                        <input type="number" id="minPrice" placeholder="Min" value="0">
                        <span>-</span>
                        <input type="number" id="maxPrice" placeholder="Max" value="200">
                    </div>
                </div>
            </div>

            <div class="filter-section">
                <h3>Availability</h3>
                <div class="filter-group">
                    <label class="filter-item">
                        <input type="checkbox" name="availability" value="in-stock" checked>
                        <span>In Stock</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="availability" value="out-of-stock">
                        <span>Out of Stock</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="availability" value="pre-order">
                        <span>Pre-Order</span>
                    </label>
                </div>
            </div>
            
            <div class="filter-section">
                <h3>Material</h3>
                <div class="filter-group">
                    <label class="filter-item">
                        <input type="checkbox" name="material" value="paper">
                        <span>Paper</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="material" value="leather">
                        <span>Leather</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="material" value="metal">
                        <span>Metal</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="material" value="plastic">
                        <span>Plastic</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="material" value="wood">
                        <span>Wood</span>
                    </label>
                </div>
            </div>

            <div class="filter-section">
                <h3>Customer Rating</h3>
                <div class="filter-group">
                    <label class="filter-item">
                        <input type="radio" name="rating" value="4-up">
                        <span class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                        <span>& Up</span>
                    </label>
                    <label class="filter-item">
                        <input type="radio" name="rating" value="3-up">
                        <span class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                        <span>& Up</span>
                    </label>
                    <label class="filter-item">
                        <input type="radio" name="rating" value="2-up">
                        <span class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                        <span>& Up</span>
                    </label>
                </div>
            </div>

            <div class="filter-section">
                <h3>Brand</h3>
                <div class="filter-group">
                    <label class="filter-item">
                        <input type="checkbox" name="brand" value="premium">
                        <span>Premium Collection</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="brand" value="professional">
                        <span>Professional Series</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="brand" value="student">
                        <span>Student Essentials</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="brand" value="creative">
                        <span>Creative Tools</span>
                    </label>
                </div>
            </div>

            <div class="filter-section">
                <h3>Features</h3>
                <div class="filter-group">
                    <label class="filter-item">
                        <input type="checkbox" name="feature" value="new">
                        <span>New Arrivals</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="feature" value="trending">
                        <span>Trending</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="feature" value="featured">
                        <span>Featured</span>
                    </label>
                    <label class="filter-item">
                        <input type="checkbox" name="feature" value="sale">
                        <span>On Sale</span>
                    </label>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="shop-main">
            <!-- Shop Banner Slideshow -->
            <section class="shop-banner-slideshow">
                <div class="slideshow-container">
                    <div class="slide fade active">
                        <img src="https://images.unsplash.com/photo-1519682577862-22b62b24e493?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Stationery Collection">
                        <div class="slide-content">
                            <h1>Discover Our Collection</h1>
                            <p>Find the perfect stationery for your needs</p>
                        </div>
                    </div>
                    <div class="slide fade">
                        <img src="https://images.unsplash.com/photo-1456735190827-d1262f71b8a3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Premium Notebooks">
                        <div class="slide-content">
                            <h1>Premium Notebooks</h1>
                            <p>Designed for creativity and productivity</p>
                        </div>
                    </div>
                    <div class="slide fade">
                        <img src="https://images.unsplash.com/photo-1531053270060-6643c9e70514?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Luxury Pens">
                        <div class="slide-content">
                            <h1>Luxury Pens</h1>
                            <p>Write with elegance and style</p>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Slideshow Indicators -->
                <div class="slide-indicators">
                    <span class="indicator active"></span>
                    <span class="indicator"></span>
                    <span class="indicator"></span>
                </div>
            </section>

            <div class="shop-header">
                <div class="shop-title">
                    <h1>All Products</h1>
                    <p>Showing 1-12 of 48 products</p>
                </div>
                <div class="shop-controls">
                    <div class="search-bar">
                        <input type="text" placeholder="Search products...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                    <div class="control-options">
                        <div class="per-page-options">
                            <label for="per-page">Show:</label>
                            <select id="per-page">
                                <option value="12">12 per page</option>
                                <option value="24">24 per page</option>
                                <option value="36">36 per page</option>
                                <option value="48">48 per page</option>
                            </select>
                        </div>
                        <div class="sort-options">
                            <select>
                                <option value="default">Default Sorting</option>
                                <option value="price-low">Price: Low to High</option>
                                <option value="price-high">Price: High to Low</option>
                                <option value="newest">Newest First</option>
                                <option value="bestselling">Best Selling</option>
                                <option value="rating">Highest Rated</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="active-filters">
                <div class="active-filter-tags">
                    <span class="filter-tag">Writing Instruments <i class="fas fa-times"></i></span>
                    <span class="filter-tag">$0 - $200 <i class="fas fa-times"></i></span>
                    <span class="filter-tag">In Stock <i class="fas fa-times"></i></span>
                </div>
                <button class="clear-filters-btn">Clear All</button>
            </div>

            <div class="products-grid">
                <!-- Premium Fountain Pen -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1583485088034-697b5bc54ccd?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Premium Fountain Pen">
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
                        <h3>Premium Fountain Pen</h3>
                        <div class="product-meta">
                            <span class="price">$79.99</span>
                            <span class="old-price">$99.99</span>
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

            <div class="pagination">
                <button class="pagination-btn prev" disabled>
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="pagination-number active">1</button>
                <button class="pagination-number">2</button>
                <button class="pagination-number">3</button>
                <button class="pagination-number">4</button>
                <button class="pagination-btn next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </main>
    </div>

 

@endsection