
@extends('layouts.main')
@section('main-content')


    <!-- Modern Split-Screen Hero Slider -->
    <section class="hero">
      <!-- Slider Container -->
      <div class="split-slider">
        <!-- Slide 1 -->
        <div class="split-slide active">
          <div class="split-slide-image">
            <img src="https://images.unsplash.com/photo-1581235720704-06d3acfcb36f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Premium Stationery">
            <div class="image-overlay"></div>
            
            <!-- Floating Elements -->
            <div class="image-floating-elements">
              <div class="floating-element"><i class="fas fa-pencil-alt"></i></div>
              <div class="floating-element"><i class="fas fa-pen-nib"></i></div>
              <div class="floating-element"><i class="fas fa-book"></i></div>
            </div>
            
            <!-- Image Caption -->
            <div class="image-caption">
              <div class="image-caption-title">Premium Collection</div>
              <div class="image-caption-text">Elevate your workspace with our finest stationery</div>
            </div>
          </div>
          
          <div class="split-slide-content">
            <!-- Background Shapes -->
            <div class="content-shapes">
              <div class="shape shape-1"></div>
              <div class="shape shape-2"></div>
            </div>
            
            <div class="slide-badge">Premium Collection</div>
            <h2 class="slide-title">Design Your <br><span class="text-accent">Perfect Space</span></h2>
            <p class="slide-description">
              Discover our curated collection of high-quality stationery designed to inspire creativity and enhance productivity in your workspace.
            </p>
            <div class="slide-actions">
              <a href="#" class="btn-primary">
                Shop Now <i class="fas fa-long-arrow-alt-right"></i>
              </a>
              <a href="#" class="btn-outline">
                Explore <i class="fas fa-eye"></i>
              </a>
            </div>
            <div class="slide-features">
              <div class="feature">
                <div class="feature-icon"><i class="fas fa-check-circle"></i></div>
                <div class="feature-text">Premium Quality</div>
              </div>
              <div class="feature">
                <div class="feature-icon"><i class="fas fa-truck"></i></div>
                <div class="feature-text">Fast Delivery</div>
              </div>
              <div class="feature">
                <div class="feature-icon"><i class="fas fa-undo"></i></div>
                <div class="feature-text">Easy Returns</div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Slide 2 -->
        <div class="split-slide">
          <div class="split-slide-image">
            <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Back to School">
            <div class="image-overlay"></div>
            
            <!-- Floating Elements -->
            <div class="image-floating-elements">
              <div class="floating-element"><i class="fas fa-graduation-cap"></i></div>
              <div class="floating-element"><i class="fas fa-book-open"></i></div>
              <div class="floating-element"><i class="fas fa-pencil-ruler"></i></div>
            </div>
            
            <!-- Image Caption -->
            <div class="image-caption">
              <div class="image-caption-title">Back to School</div>
              <div class="image-caption-text">Start the new academic year with confidence</div>
            </div>
          </div>
          
          <div class="split-slide-content">
            <!-- Background Shapes -->
            <div class="content-shapes">
              <div class="shape shape-1"></div>
              <div class="shape shape-2"></div>
            </div>
            
            <div class="slide-badge">Back to School</div>
            <h2 class="slide-title">Ready for <br><span class="text-accent">Academic Success</span></h2>
            <p class="slide-description">
              Equip yourself with everything you need for the new academic year. From notebooks to organizers, we've got you covered for a successful semester.
            </p>
            <div class="slide-actions">
              <a href="#" class="btn-primary">
                School Essentials <i class="fas fa-long-arrow-alt-right"></i>
              </a>
              <a href="#" class="btn-outline">
                View Deals <i class="fas fa-tag"></i>
              </a>
            </div>
            <div class="slide-features">
              <div class="feature">
                <div class="feature-icon"><i class="fas fa-graduation-cap"></i></div>
                <div class="feature-text">Student Discounts</div>
              </div>
              <div class="feature">
                <div class="feature-icon"><i class="fas fa-box"></i></div>
                <div class="feature-text">Bundle Offers</div>
              </div>
              <div class="feature">
                <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="feature-text">Quality Guarantee</div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Slide 3 -->
        <div class="split-slide">
          <div class="split-slide-image">
            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Creative Writing">
            <div class="image-overlay"></div>
            
            <!-- Floating Elements -->
            <div class="image-floating-elements">
              <div class="floating-element"><i class="fas fa-pen-fancy"></i></div>
              <div class="floating-element"><i class="fas fa-palette"></i></div>
              <div class="floating-element"><i class="fas fa-feather-alt"></i></div>
            </div>
            
            <!-- Image Caption -->
            <div class="image-caption">
              <div class="image-caption-title">Creative Writing</div>
              <div class="image-caption-text">Express yourself with premium writing instruments</div>
            </div>
          </div>
          
          <div class="split-slide-content">
            <!-- Background Shapes -->
            <div class="content-shapes">
              <div class="shape shape-1"></div>
              <div class="shape shape-2"></div>
            </div>
            
            <div class="slide-badge">Creative Writing</div>
            <h2 class="slide-title">Express Your <br><span class="text-accent">Artistic Vision</span></h2>
            <p class="slide-description">
              Our premium writing instruments are crafted for those who appreciate the art of writing. Experience the difference quality makes in your creative expression.
            </p>
            <div class="slide-actions">
              <a href="#" class="btn-primary">
                Writing Collection <i class="fas fa-long-arrow-alt-right"></i>
              </a>
              <a href="#" class="btn-outline">
                Gift Ideas <i class="fas fa-gift"></i>
              </a>
            </div>
            <div class="slide-features">
              <div class="feature">
                <div class="feature-icon"><i class="fas fa-pen-fancy"></i></div>
                <div class="feature-text">Luxury Pens</div>
              </div>
              <div class="feature">
                <div class="feature-icon"><i class="fas fa-palette"></i></div>
                <div class="feature-text">Vibrant Colors</div>
              </div>
              <div class="feature">
                <div class="feature-icon"><i class="fas fa-award"></i></div>
                <div class="feature-text">Award Winning</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Slider Navigation -->
      <div class="slider-nav">
        <div class="slider-dots">
          <span class="dot active" data-slide="0"></span>
          <span class="dot" data-slide="1"></span>
          <span class="dot" data-slide="2"></span>
        </div>
        <div class="slider-arrows">
          <button class="arrow prev-arrow">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="arrow next-arrow">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>
      
      <!-- Progress Indicator -->
      <div class="slider-progress">
        <div class="progress-bar"></div>
      </div>
    </section>

    <!-- Trending Products Section -->
    <section class="trending-products">
      <div class="section-header">
        <h2><i class="fas fa-fire"></i> Trending Products <i class="fas fa-fire"></i></h2>
        <p>Discover what's hot and trending in our collection</p>
      </div>
      
      <!-- Custom Slider Container -->
      <div class="trending-slider-container">
        <!-- Slider Track -->
        <div class="trending-slider-track">
          <!-- Product Cards -->
          <div class="product-card">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1581235720704-06d3acfcb36f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                alt="Premium Pen"
              />
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
              <h3>Premium Fountain Pen</h3>
              <div class="product-meta">
                <span class="price">$19.99</span>
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

          <div class="product-card">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1581235720704-06d3acfcb36f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                alt="Premium Pen"
              />
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
              <h3>Premium Fountain Pen</h3>
              <div class="product-meta">
                <span class="price">$19.99</span>
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
          
          <div class="product-card">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1581235720704-06d3acfcb36f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                alt="Premium Pen"
              />
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
              <h3>Premium Fountain Pen</h3>
              <div class="product-meta">
                <span class="price">$19.99</span>
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
          
          <div class="product-card">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1581235720704-06d3acfcb36f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                alt="Premium Pen"
              />
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
              <h3>Premium Fountain Pen</h3>
              <div class="product-meta">
                <span class="price">$19.99</span>
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
          
          <div class="product-card">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                alt="Notebook"
              />
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
              <h3>Leather Bound Notebook</h3>
              <div class="product-meta">
                <span class="price">$29.99</span>
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
          
          <div class="product-card">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                alt="Pencil Set"
              />
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
              <h3>Professional Pencil Set</h3>
              <div class="product-meta">
                <span class="price">$39.99</span>
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
          
          <div class="product-card">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1581235720704-06d3acfcb36f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                alt="Desk Organizer"
              />
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
              <h3>Modern Desk Organizer</h3>
              <div class="product-meta">
                <span class="price">$59.99</span>
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
          
          <div class="product-card">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1581235720704-06d3acfcb36f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                alt="Premium Pen"
              />
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
              <h3>Premium Fountain Pen</h3>
              <div class="product-meta">
                <span class="price">$19.99</span>
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
        </div>
        
        <!-- Navigation Buttons -->
        <button class="trending-nav-btn trending-prev-btn">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button class="trending-nav-btn trending-next-btn">
          <i class="fas fa-chevron-right"></i>
        </button>
        
        <!-- New Progress Indicator -->
        <div class="trending-progress-indicators">
          <!-- Will be populated by JavaScript -->
        </div>
        
        <!-- Pagination Dots -->
        <div class="trending-pagination"></div>
      </div>
    </section>

    <!-- Featured Products Section -->
    <section class="featured-products">
      <div class="section-header">
        <h2><i class="fas fa-award"></i> Featured Products <i class="fas fa-award"></i></h2>
        <p>Discover our carefully curated selection of premium stationary</p>
      </div>
      <div class="products-grid">
        <div class="product-card">
          <div class="product-image">
            <img
              src="https://images.unsplash.com/photo-1581235720704-06d3acfcb36f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
              alt="Premium Pen"
            />
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
            <h3>Premium Fountain Pen</h3>
            <div class="product-meta">
              <span class="price">$19.99</span>
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
        <div class="product-card">
          <div class="product-image">
            <img
              src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
              alt="Notebook"
            />
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
            <h3>Leather Bound Notebook</h3>
            <div class="product-meta">
              <span class="price">$29.99</span>
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
        <div class="product-card">
          <div class="product-image">
            <img
              src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
              alt="Pencil Set"
            />
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
            <h3>Professional Pencil Set</h3>
            <div class="product-meta">
              <span class="price">$39.99</span>
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
        <div class="product-card">
          <div class="product-image">
            <img
              src="https://images.unsplash.com/photo-1581235720704-06d3acfcb36f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
              alt="Desk Organizer"
            />
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
            <h3>Modern Desk Organizer</h3>
            <div class="product-meta">
              <span class="price">$59.99</span>
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
      </div>
    </section>

    <!-- New Arrivals Section -->
    <section class="new-arrivals">
      <div class="section-header">
        <h2>
          <i class="fas fa-star"></i> New Arrivals <i class="fas fa-star"></i>
        </h2>
        <p>Discover our latest collection of premium stationery</p>
      </div>
      <div class="arrivals-grid">
        <div class="arrival-card">
          <div class="arrival-image">
            <img
              src="https://images.unsplash.com/photo-1581235720704-06d3acfcb36f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
              alt="New Arrival 1"
            />
            <div class="arrival-badge">New</div>
            <div class="arrival-actions">
              <button class="arrival-action-btn view" title="Quick View">
                <i class="fas fa-eye"></i>
              </button>
              <button class="arrival-action-btn cart" title="Add to Cart">
                <i class="fas fa-shopping-bag"></i>
              </button>
            </div>
          </div>
          <div class="arrival-info">
            <h3>Premium Fountain Pen</h3>
            <div class="arrival-meta">
              <span class="price">$89.99</span>
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

        <div class="arrival-card">
          <div class="arrival-image">
            <img
              src="https://images.unsplash.com/photo-1512290923902-8a9f81dc236c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
              alt="New Arrival 2"
            />
            <div class="arrival-badge">New</div>
            <div class="arrival-actions">
              <button class="arrival-action-btn view" title="Quick View">
                <i class="fas fa-eye"></i>
              </button>
              <button class="arrival-action-btn cart" title="Add to Cart">
                <i class="fas fa-shopping-bag"></i>
              </button>
            </div>
          </div>
          <div class="arrival-info">
            <h3>Leather Journal Set</h3>
            <div class="arrival-meta">
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
        <div class="arrival-card">
          <div class="arrival-image">
            <img
              src="https://images.unsplash.com/photo-1562886812-41775a01195d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
              alt="New Arrival 3"
            />
            <div class="arrival-badge">New</div>
            <div class="arrival-actions">
              <button class="arrival-action-btn view" title="Quick View">
                <i class="fas fa-eye"></i>
              </button>
              <button class="arrival-action-btn cart" title="Add to Cart">
                <i class="fas fa-shopping-bag"></i>
              </button>
            </div>
          </div>
          <div class="arrival-info">
            <h3>Calligraphy Set</h3>
            <div class="arrival-meta">
              <span class="price">$69.99</span>
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
        <div class="arrival-card">
          <div class="arrival-image">
            <img
              src="https://images.unsplash.com/photo-1562886812-41775a01195d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
              alt="New Arrival 3"
            />
            <div class="arrival-badge">New</div>
            <div class="arrival-actions">
              <button class="arrival-action-btn view" title="Quick View">
                <i class="fas fa-eye"></i>
              </button>
              <button class="arrival-action-btn cart" title="Add to Cart">
                <i class="fas fa-shopping-bag"></i>
              </button>
            </div>
          </div>
          <div class="arrival-info">
            <h3>Calligraphy Set</h3>
            <div class="arrival-meta">
              <span class="price">$69.99</span>
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
        <div class="arrival-card">
          <div class="arrival-image">
            <img
              src="https://images.unsplash.com/photo-1562886812-41775a01195d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
              alt="New Arrival 3"
            />
            <div class="arrival-badge">New</div>
            <div class="arrival-actions">
              <button class="arrival-action-btn view" title="Quick View">
                <i class="fas fa-eye"></i>
              </button>
              <button class="arrival-action-btn cart" title="Add to Cart">
                <i class="fas fa-shopping-bag"></i>
              </button>
            </div>
          </div>
          <div class="arrival-info">
            <h3>Calligraphy Set</h3>
            <div class="arrival-meta">
              <span class="price">$69.99</span>
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
        <div class="arrival-card">
          <div class="arrival-image">
            <img
              src="https://images.unsplash.com/photo-1562886812-41775a01195d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
              alt="New Arrival 3"
            />
            <div class="arrival-badge">New</div>
            <div class="arrival-actions">
              <button class="arrival-action-btn view" title="Quick View">
                <i class="fas fa-eye"></i>
              </button>
              <button class="arrival-action-btn cart" title="Add to Cart">
                <i class="fas fa-shopping-bag"></i>
              </button>
            </div>
          </div>
          <div class="arrival-info">
            <h3>Calligraphy Set</h3>
            <div class="arrival-meta">
              <span class="price">$69.99</span>
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
      </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
      <div class="section-header">
        <h2>
          <i class="fas fa-info-circle"></i> About Us
          <i class="fas fa-info-circle"></i>
        </h2>
        <p>Discover our journey and commitment to excellence</p>
      </div>
      <div class="about-container">
        <div class="about-content">
          <div class="about-image">
            <div class="image-container">
              <img
                src="https://images.unsplash.com/photo-1581235720704-06d3acfcb36f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                alt="About St. Glass"
              />
              <div class="image-overlay"></div>
            </div>
          </div>
          <div class="about-text">
            <div class="about-description">
              <h3>Our Vision</h3>
              <p>
                At St. Glass, we believe in the perfect blend of style and
                functionality. Our journey began with a simple vision: to create
                eyewear that not only enhances your vision but also elevates
                your style.
              </p>
            </div>
            <div class="about-stats">
              <div class="stat-item">
                <i class="fas fa-award"></i>
                <span class="stat-number">10+</span>
                <span class="stat-label">Years of Excellence</span>
              </div>
              <div class="stat-item">
                <i class="fas fa-users"></i>
                <span class="stat-number">50K+</span>
                <span class="stat-label">Happy Customers</span>
              </div>
              <div class="stat-item">
                <i class="fas fa-palette"></i>
                <span class="stat-number">100+</span>
                <span class="stat-label">Design Collections</span>
              </div>
            </div>
            <div class="about-features">
              <div class="feature-item">
                <i class="fas fa-check-circle"></i>
                <span>Premium Quality Materials</span>
              </div>
              <div class="feature-item">
                <i class="fas fa-check-circle"></i>
                <span>Innovative Design Process</span>
              </div>
              <div class="feature-item">
                <i class="fas fa-check-circle"></i>
                <span>Customer Satisfaction Guarantee</span>
              </div>
            </div>
            <a href="#" class="about-btn">Explore Our Story</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Categories Section -->
    <section class="categories-section">
      <div class="section-header">
        <h2>
          <i class="fas fa-th-large"></i> Our Categories
          <i class="fas fa-th-large"></i>
        </h2>
        <p>Explore our diverse range of premium stationery collections</p>
      </div>
      <div class="categories-grid">
        <div class="category-card large">
          <div class="category-image">
            <img
              src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
              alt="Premium Collection"
            />
          </div>
          <div class="category-info">
            <div class="category-meta">Featured Collection</div>
            <div class="category-title">
              <i class="fas fa-pen-fancy category-title-icon"></i> Premium
              Writing Instruments
            </div>
            <div class="category-desc">
              Discover our exclusive collection of high-quality pens, pencils,
              and writing accessories designed for professionals and enthusiasts
              alike.
            </div>
            <button class="category-btn">Explore Collection</button>
          </div>
        </div>
        <div class="category-card small">
          <div class="category-image">
            <img
              src="https://images.unsplash.com/photo-1456735190827-d1262f71b8a3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
              alt="Notebooks & Journals"
            />
          </div>
          <div class="category-info">
            <div class="category-meta">Bestsellers</div>
            <div class="category-title">
              <i class="fas fa-book category-title-icon"></i> Notebooks &
              Journals
            </div>
            <div class="category-icon"><i class="fas fa-arrow-right"></i></div>
          </div>
        </div>
        <div class="category-card small">
          <div class="category-image">
            <img
              src="https://images.unsplash.com/photo-1519337265831-281ec6cc8514?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
              alt="Art Supplies"
            />
          </div>
          <div class="category-info">
            <div class="category-meta">Creative Tools</div>
            <div class="category-title">
              <i class="fas fa-paint-brush category-title-icon"></i> Art & Craft
              Supplies
            </div>
            <div class="category-icon"><i class="fas fa-arrow-right"></i></div>
          </div>
        </div>
        <div class="category-card small">
          <div class="category-image">
            <img
              src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
              alt="Office Essentials"
            />
          </div>
          <div class="category-info">
            <div class="category-meta">Workspace</div>
            <div class="category-title">
              <i class="fas fa-briefcase category-title-icon"></i> Office
              Essentials
            </div>
            <div class="category-icon"><i class="fas fa-arrow-right"></i></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sales Section -->
    <section class="sales-section">
      <div class="section-header">
        <h2>
          <i class="fas fa-tags"></i> Special Offers & Discounts
          <i class="fas fa-tags"></i>
        </h2>
        <p>Limited time deals on our premium stationery products</p>
      </div>
      <div class="sales-container">
        <div class="sale-card">
          <div class="sale-badge">50% OFF</div>
          <div class="sale-image">
            <img
              src="https://images.unsplash.com/photo-1583485088034-697b5bc54ccd?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
              alt="Premium Pen Set Sale"
            />
          </div>
          <div class="sale-info">
            <h3>Premium Pen Collection</h3>
            <div class="sale-price">
              <span class="current-price">$39.99</span>
              <span class="original-price">$79.99</span>
            </div>
            <div class="sale-timer">
              <div class="timer-label">Offer ends in:</div>
              <div class="countdown-timer" data-end="2023-12-31T23:59:59">
                <div class="timer-unit">
                  <span class="timer-value days">00</span>
                  <span class="timer-label">Days</span>
                </div>
                <div class="timer-unit">
                  <span class="timer-value hours">00</span>
                  <span class="timer-label">Hours</span>
                </div>
                <div class="timer-unit">
                  <span class="timer-value minutes">00</span>
                  <span class="timer-label">Mins</span>
                </div>
                <div class="timer-unit">
                  <span class="timer-value seconds">00</span>
                  <span class="timer-label">Secs</span>
                </div>
              </div>
            </div>
            <button class="sale-btn">Shop Now</button>
          </div>
        </div>
        
        <div class="sale-card">
          <div class="sale-badge">30% OFF</div>
          <div class="sale-image">
            <img
              src="https://images.unsplash.com/photo-1544816155-12df9643f363?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
              alt="Notebook Sale"
            />
          </div>
          <div class="sale-info">
            <h3>Designer Notebooks</h3>
            <div class="sale-price">
              <span class="current-price">$34.99</span>
              <span class="original-price">$49.99</span>
            </div>
            <div class="sale-timer">
              <div class="timer-label">Offer ends in:</div>
              <div class="countdown-timer" data-end="2023-12-25T23:59:59">
                <div class="timer-unit">
                  <span class="timer-value days">00</span>
                  <span class="timer-label">Days</span>
                </div>
                <div class="timer-unit">
                  <span class="timer-value hours">00</span>
                  <span class="timer-label">Hours</span>
                </div>
                <div class="timer-unit">
                  <span class="timer-value minutes">00</span>
                  <span class="timer-label">Mins</span>
                </div>
                <div class="timer-unit">
                  <span class="timer-value seconds">00</span>
                  <span class="timer-label">Secs</span>
                </div>
              </div>
            </div>
            <button class="sale-btn">Shop Now</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Us Section -->
    <section class="contact-section">
      <div class="section-header">
        <h2>
          <i class="fas fa-envelope"></i> Contact Us
          <i class="fas fa-envelope"></i>
        </h2>
        <p>We'd love to hear from you! Send us a message and we'll respond as soon as possible.</p>
      </div>
      
      <div class="contact-container">
        <div class="contact-info">
          <div class="contact-card">
            <div class="contact-icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="contact-details">
              <h3>Our Location</h3>
              <p>123 Stationery Street, Design District<br>New York, NY 10001</p>
            </div>
          </div>
          
          <div class="contact-card">
            <div class="contact-icon">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div class="contact-details">
              <h3>Phone Number</h3>
              <p>+1 (555) 123-4567<br>Mon-Fri, 9am-6pm EST</p>
            </div>
          </div>
          
          <div class="contact-card">
            <div class="contact-icon">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="contact-details">
              <h3>Email Address</h3>
              <p>info@stationarystore.com<br>support@stationarystore.com</p>
            </div>
          </div>
          
          <div class="contact-social">
            <h3>Connect With Us</h3>
            <div class="social-icons">
              <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-pinterest"></i></a>
            </div>
          </div>
        </div>
        
        <div class="contact-form-container">
          <form class="contact-form">
            <div class="form-row">
              <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" placeholder="Enter your name" required>
              </div>
              <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" placeholder="Enter your email" required>
              </div>
            </div>
            
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" id="subject" placeholder="What is this regarding?">
            </div>
            
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" rows="5" placeholder="Tell us what you need..." required></textarea>
            </div>
            
            <div class="form-group form-check">
              <input type="checkbox" id="contact-consent" required>
              <label for="contact-consent">I agree to the privacy policy and terms of service</label>
            </div>
            
            <button type="submit" class="contact-submit-btn">
              <span>Send Message</span>
              <i class="fas fa-paper-plane"></i>
            </button>
          </form>
        </div>
      </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
      <div class="newsletter-container">
        <div class="newsletter-content">
          <div class="newsletter-text">
            <h2>Subscribe to Our Newsletter</h2>
            <p>
              Stay updated with our latest products, exclusive offers, and
              stationery tips
            </p>
          </div>
          <form class="newsletter-form">
            <div class="form-group">
              <input
                type="email"
                placeholder="Enter your email address"
                required
              />
              <button type="submit" class="subscribe-btn">
                <span>Subscribe</span>
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
            <div class="form-check">
              <input type="checkbox" id="newsletter-consent" />
              <label for="newsletter-consent"
                >I agree to receive promotional emails</label
              >
            </div>
          </form>
        </div>
        <div class="newsletter-decoration">
          <div class="decoration-item pen">
            <i class="fas fa-pen-fancy"></i>
          </div>
          <div class="decoration-item notebook">
            <i class="fas fa-book"></i>
          </div>
          <div class="decoration-item pencil">
            <i class="fas fa-pencil-alt"></i>
          </div>
          <div class="decoration-item ruler">
            <i class="fas fa-ruler"></i>
          </div>
        </div>
      </div>
    </section>

@endsection
