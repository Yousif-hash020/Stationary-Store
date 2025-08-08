

@extends('layouts.main')
@section('main-content')

 
    <!-- Breadcrumb -->
         <div class="breadcrumb-container">
          <div class="breadcrumb">
            <a href="index.html">Home</a>
            <i class="fas fa-chevron-right"></i>
            <a href="shop.html">Products</a>
            <i class="fas fa-chevron-right"></i>
            <span id="product-breadcrumb">Designer Sunglasses</span>
          </div>
    </div>

  

    <!-- Product Details Section -->
    <section class="product-details-container">
      <div class="product-gallery">
        <div class="main-image">
          <img id="main-product-image" src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Designer Sunglasses" />
          <div class="image-overlay">
            <button class="zoom-btn"><i class="fas fa-search-plus"></i></button>
          </div>
        </div>
        <div class="thumbnail-container">
          <div class="thumbnail active" data-img="https://images.unsplash.com/photo-1572635196237-14b3f281503f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
            <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Designer Sunglasses - Front View" />
          </div>
          <div class="thumbnail" data-img="https://images.unsplash.com/photo-1577803645773-f96470509666?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
            <img src="https://images.unsplash.com/photo-1577803645773-f96470509666?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Designer Sunglasses - Side View" />
          </div>
          <div class="thumbnail" data-img="https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
            <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Designer Sunglasses - Lifestyle" />
          </div>
          <div class="thumbnail" data-img="https://images.unsplash.com/photo-1574258495973-f010dfbb5371?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
            <img src="https://images.unsplash.com/photo-1574258495973-f010dfbb5371?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Designer Sunglasses - Case" />
          </div>
        </div>
      </div>

      <div class="product-info">
        <div class="product-header">
          <h1 id="product-title">Designer Sunglasses - Luxury Collection</h1>
          <div class="product-badges">
            <span class="badge new"><i class="fas fa-star-of-life"></i> New</span>
            <span class="badge bestseller"><i class="fas fa-award"></i> Bestseller</span>
            <span class="badge limited"><i class="fas fa-gem"></i> Premium</span>
          </div>
        </div>

        <div class="product-rating">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <span class="rating-count">5.0 (156 reviews)</span>
        </div>

        <div class="product-price">
          <span class="current-price" id="product-price">$149.99</span>
          <span class="original-price" id="product-original-price">$199.99</span>
          <span class="discount-badge">25% OFF</span>
        </div>

        <div class="product-availability">
          <i class="fas fa-check-circle"></i> In Stock (15 items)
        </div>

        <div class="product-description">
          <p id="product-description">
            Elevate your style with our Designer Sunglasses from the Luxury Collection. These premium sunglasses feature polarized lenses that provide 100% UV protection while reducing glare. The lightweight yet durable frame is crafted from high-quality materials for all-day comfort. With their timeless design and superior craftsmanship, these sunglasses are the perfect blend of fashion and functionality.
          </p>
        </div>

        <div class="product-variants">
          <h3>Frame Color</h3>
          <div class="color-options">
            <div class="color-option active" style="background-color: #000000;" data-color="Matte Black"></div>
            <div class="color-option" style="background-color: #8B4513;" data-color="Tortoise Shell"></div>
            <div class="color-option" style="background-color: #C0C0C0;" data-color="Silver Metal"></div>
            <div class="color-option" style="background-color: #B87333;" data-color="Rose Gold"></div>
          </div>
          <span class="selected-variant">Matte Black</span>
        </div>

        <div class="product-quantity">
          <h3>Quantity</h3>
          <div class="quantity-selector">
            <button class="quantity-btn minus"><i class="fas fa-minus"></i></button>
            <input type="number" value="1" min="1" max="23" id="quantity-input">
            <button class="quantity-btn plus"><i class="fas fa-plus"></i></button>
          </div>
        </div>

 


        <div class="action-btns">
          <button class="action-btn">
            <i class="fas fa-shopping-bag"></i> add to cart  </button>

          <button class="action-btn"><i><i class="fa-solid fa-heart"></i>add to wishlist</button>  
        </div>

       

        <div class="product-share">
          <span>Share This Product</span>
          <div class="social-icons">
            <a href="#" class="social-icon facebook" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon twitter" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon pinterest" title="Pin on Pinterest"><i class="fab fa-pinterest-p"></i></a>
            <a href="#" class="social-icon instagram" title="Share on Instagram"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Product Details Tabs -->
    <section class="product-tabs-container">
      <div class="tabs">
        <button class="tab-btn active" data-tab="description">Description</button>
        <button class="tab-btn" data-tab="specifications">Specifications</button>
        <button class="tab-btn" data-tab="reviews">Reviews (156)</button>
        <button class="tab-btn" data-tab="shipping">Shipping & Returns</button>
      </div>

      <div class="tab-content">
        <div class="tab-pane active" id="description">
          <div class="tab-pane-content">
            <h3>Product Description</h3>
            <p>
              Our Designer Sunglasses from the Luxury Collection represent the perfect fusion of style, comfort, and protection. Crafted for the fashion-conscious individual who demands both form and function from their eyewear.
            </p>
            <p>
              These premium sunglasses feature state-of-the-art polarized lenses that not only provide 100% UV protection but also reduce glare and enhance visual clarity. The lightweight yet durable frame is engineered for all-day comfort, making these sunglasses ideal for any occasion, from casual outings to special events.
            </p>
            <div class="feature-highlights">
              <div class="feature">
                <i class="fas fa-shield-alt"></i>
                <h4>UV Protection</h4>
                <p>100% protection against harmful UVA and UVB rays</p>
              </div>
              <div class="feature">
                <i class="fas fa-low-vision"></i>
                <h4>Polarized Lenses</h4>
                <p>Reduces glare and enhances visual clarity in bright conditions</p>
              </div>
              <div class="feature">
                <i class="fas fa-feather"></i>
                <h4>Lightweight Design</h4>
                <p>Comfortable to wear all day without pressure points</p>
              </div>
              <div class="feature">
                <i class="fas fa-medal"></i>
                <h4>Premium Materials</h4>
                <p>High-quality materials ensure durability and style</p>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="specifications">
          <div class="tab-pane-content">
            <h3>Technical Specifications</h3>
            <div class="specifications-table">
              <div class="spec-row">
                <div class="spec-label">Frame Material</div>
                <div class="spec-value">High-quality Acetate / Metal Alloy</div>
              </div>
              <div class="spec-row">
                <div class="spec-label">Lens Material</div>
                <div class="spec-value">Polarized CR-39 with Anti-Scratch Coating</div>
              </div>
              <div class="spec-row">
                <div class="spec-label">UV Protection</div>
                <div class="spec-value">100% UVA/UVB Protection</div>
              </div>
              <div class="spec-row">
                <div class="spec-label">Lens Technology</div>
                <div class="spec-value">Polarized, Anti-Glare, Blue Light Filtering</div>
              </div>
              <div class="spec-row">
                <div class="spec-label">Frame Dimensions</div>
                <div class="spec-value">145mm Temple Length, 52mm Lens Width</div>
              </div>
              <div class="spec-row">
                <div class="spec-label">Weight</div>
                <div class="spec-value">0.9 oz (25g)</div>
              </div>
              <div class="spec-row">
                <div class="spec-label">Nose Pads</div>
                <div class="spec-value">Adjustable Silicone Pads</div>
              </div>
              <div class="spec-row">
                <div class="spec-label">Hinge Type</div>
                <div class="spec-value">5-Barrel Spring Hinge</div>
              </div>
              <div class="spec-row">
                <div class="spec-label">Warranty</div>
                <div class="spec-value">2 Years Limited Warranty</div>
              </div>
            </div>
            <div class="package-contents">
              <h4>Package Contents</h4>
              <ul>
                <li>1 × Designer Sunglasses</li>
                <li>1 × Premium Hard Case</li>
                <li>1 × Microfiber Cleaning Cloth</li>
                <li>1 × Authenticity Certificate</li>
                <li>1 × User Manual & Warranty Card</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="reviews">
          <div class="tab-pane-content">
            <div class="reviews-summary">
              <div class="overall-rating">
                <h3>Customer Reviews</h3>
                <div class="rating-big">4.5</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <p>Based on 128 reviews</p>
              </div>
              <div class="rating-breakdown">
                <div class="rating-bar">
                  <span class="rating-level">5 stars</span>
                  <div class="progress-bar">
                    <div class="progress" style="width: 75%"></div>
                  </div>
                  <span class="rating-percent">75%</span>
                </div>
                <div class="rating-bar">
                  <span class="rating-level">4 stars</span>
                  <div class="progress-bar">
                    <div class="progress" style="width: 15%"></div>
                  </div>
                  <span class="rating-percent">15%</span>
                </div>
                <div class="rating-bar">
                  <span class="rating-level">3 stars</span>
                  <div class="progress-bar">
                    <div class="progress" style="width: 7%"></div>
                  </div>
                  <span class="rating-percent">7%</span>
                </div>
                <div class="rating-bar">
                  <span class="rating-level">2 stars</span>
                  <div class="progress-bar">
                    <div class="progress" style="width: 2%"></div>
                  </div>
                  <span class="rating-percent">2%</span>
                </div>
                <div class="rating-bar">
                  <span class="rating-level">1 star</span>
                  <div class="progress-bar">
                    <div class="progress" style="width: 1%"></div>
                  </div>
                  <span class="rating-percent">1%</span>
                </div>
              </div>
            </div>

            <div class="review-form-container">
              <button class="btn-primary write-review" id="writeReviewBtn">
                <i class="fas fa-pen"></i> Write a Review
              </button>
              
              <div class="review-form" id="reviewForm" style="display: none;">
                <h3>Write Your Review</h3>
                <form id="productReviewForm">
                  <div class="form-group">
                    <label for="reviewName">Your Name</label>
                    <input type="text" id="reviewName" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="reviewEmail">Email</label>
                    <input type="email" id="reviewEmail" required>
                  </div>
                  
                  <div class="form-group">
                    <label>Your Rating</label>
                    <div class="rating-selector">
                      <div class="star-rating">
                        <input type="radio" id="star5" name="rating" value="5" required>
                        <label for="star5"><i class="fas fa-star"></i></label>
                        <input type="radio" id="star4" name="rating" value="4">
                        <label for="star4"><i class="fas fa-star"></i></label>
                        <input type="radio" id="star3" name="rating" value="3">
                        <label for="star3"><i class="fas fa-star"></i></label>
                        <input type="radio" id="star2" name="rating" value="2">
                        <label for="star2"><i class="fas fa-star"></i></label>
                        <input type="radio" id="star1" name="rating" value="1">
                        <label for="star1"><i class="fas fa-star"></i></label>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="reviewTitle">Review Title</label>
                    <input type="text" id="reviewTitle" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="reviewText">Your Review</label>
                    <textarea id="reviewText" rows="5" required></textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="reviewPhotos">Add Photos (optional)</label>
                    <input type="file" id="reviewPhotos" multiple accept="image/*">
                    <div class="photo-preview" id="photoPreview"></div>
                  </div>
                  
                  <div class="form-actions">
                    <button type="submit" class="btn-primary">Submit Review</button>
                    <button type="button" class="btn-secondary" id="cancelReview">Cancel</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="reviews-list">
              <div class="review-item">
                <div class="review-header">
                  <div class="reviewer-info">
                    <img src="https://randomuser.me/api/portraits/women/42.jpg" alt="Sarah Johnson" class="reviewer-avatar">
                    <div class="reviewer-meta">
                      <h4 class="reviewer-name">Sarah Johnson</h4>
                      <div class="review-date">October 15, 2023</div>
                    </div>
                  </div>
                  <div class="review-rating">
                    <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="review-content">
                  <h5 class="review-title">Exceptional Quality and Writing Experience</h5>
                  <p class="review-text">
                    I've been using this fountain pen for about a month now, and I'm thoroughly impressed with its quality and performance. The nib glides smoothly across the paper, and the weight is perfectly balanced. The design is elegant and professional, making it a great addition to my collection.
                  </p>
                  <div class="review-photos">
                    <img src="https://images.unsplash.com/photo-1583485088034-697b5bc54ccd?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="User review photo">
                    <img src="https://images.unsplash.com/photo-1560701545-8c0f0b3f0f4d?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="User review photo">
                  </div>
                </div>
                <div class="review-footer">
                  <div class="review-helpful">
                    <span>Was this review helpful?</span>
                    <button class="helpful-btn"><i class="fas fa-thumbs-up"></i> Yes (24)</button>
                    <button class="helpful-btn"><i class="fas fa-thumbs-down"></i> No (2)</button>
                  </div>
                </div>
              </div>

              <div class="review-item">
                <div class="review-header">
                  <div class="reviewer-info">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen" class="reviewer-avatar">
                    <div class="reviewer-meta">
                      <h4 class="reviewer-name">Michael Chen</h4>
                      <div class="review-date">September 28, 2023</div>
                    </div>
                  </div>
                  <div class="review-rating">
                    <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="review-content">
                  <h5 class="review-title">Great Pen, Minor Issues with Ink Flow</h5>
                  <p class="review-text">
                    The pen is beautifully crafted and feels premium in hand. I love the weight and balance. The only reason I'm giving it 4 stars instead of 5 is that I experienced some inconsistent ink flow during the first few days of use. After some adjustment, it's working much better now.
                  </p>
                </div>
                <div class="review-footer">
                  <div class="review-helpful">
                    <span>Was this review helpful?</span>
                    <button class="helpful-btn"><i class="fas fa-thumbs-up"></i> Yes (18)</button>
                    <button class="helpful-btn"><i class="fas fa-thumbs-down"></i> No (3)</button>
                  </div>
                </div>
              </div>

              <div class="load-more-container">
                <button class="btn-secondary load-more">Load More Reviews</button>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="shipping">
          <div class="tab-pane-content">
            <h3>Shipping Information</h3>
            <div class="shipping-info">
              <div class="shipping-method">
                <h4><i class="fas fa-truck"></i> Standard Shipping</h4>
                <p>Delivery within 5-7 business days</p>
                <p class="shipping-cost">$4.99</p>
              </div>
              <div class="shipping-method">
                <h4><i class="fas fa-shipping-fast"></i> Express Shipping</h4>
                <p>Delivery within 2-3 business days</p>
                <p class="shipping-cost">$9.99</p>
              </div>
              <div class="shipping-method">
                <h4><i class="fas fa-meteor"></i> Next Day Delivery</h4>
                <p>Order before 2 PM for next day delivery</p>
                <p class="shipping-cost">$14.99</p>
              </div>
            </div>

            <div class="shipping-note">
              <p><i class="fas fa-info-circle"></i> Free standard shipping on orders over $50</p>
            </div>

            <h3>Return Policy</h3>
            <div class="return-policy">
              <p>We want you to be completely satisfied with your purchase. If for any reason you're not happy with your order, you can return it within 30 days of receipt for a full refund or exchange.</p>
              <ul>
                <li>Items must be unused and in original packaging</li>
                <li>Return shipping costs are the responsibility of the customer unless the item is defective</li>
                <li>Personalized or custom-made items cannot be returned unless defective</li>
                <li>Refunds will be processed within 5-7 business days after we receive your return</li>
              </ul>
              <p>For more information, please see our <a href="#">complete Return Policy</a>.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Related Products -->
    <section class="related-products">
      <div class="section-header">
        <h2>You May Also Like</h2>
        <p>Products similar to Premium Fountain Pen</p>
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

    <!-- Recently Viewed -->
    <section class="recently-viewed">
      <div class="section-header">
        <h2>Recently Viewed</h2>
      </div>
      <div class="recently-viewed-products">
        <div class="recently-viewed-product">
          <img src="https://images.unsplash.com/photo-1583485088034-697b5bc54ccd?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=60" alt="Premium Fountain Pen">
          <h4>Premium Fountain Pen</h4>
          <span class="recently-viewed-price">$79.99</span>
        </div>
        <div class="recently-viewed-product">
          <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=60" alt="Designer Notebook">
          <h4>Designer Notebook</h4>
          <span class="recently-viewed-price">$49.99</span>
        </div>
        <div class="recently-viewed-product">
          <img src="https://images.unsplash.com/photo-1572726729207-a78d6feb18d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=60" alt="Premium Markers Set">
          <h4>Premium Markers Set</h4>
          <span class="recently-viewed-price">$34.99</span>
        </div>
      </div>
    </section>


    <!-- Image Zoom Modal -->
    <div class="zoom-modal">
      <span class="close-zoom">&times;</span>
      <img class="zoom-modal-content" id="zoom-img">
    </div>

@endsection