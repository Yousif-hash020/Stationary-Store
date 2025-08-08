   <!-- Footer Section -->
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-top">
          <div class="footer-column about">
            <div class="footer-logo">
              <h2>Stationary<span>Store</span></h2>
            </div>
            <p>
              Your one-stop destination for premium stationery products. We
              provide high-quality writing instruments, notebooks, and office
              supplies for all your creative and professional needs.
            </p>
            <div class="social-icons">
              <a href="#" aria-label="Facebook"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a href="#" aria-label="Twitter"
                ><i class="fab fa-twitter"></i
              ></a>
              <a href="#" aria-label="Instagram"
                ><i class="fab fa-instagram"></i
              ></a>
              <a href="#" aria-label="Pinterest"
                ><i class="fab fa-pinterest-p"></i
              ></a>
            </div>
          </div>

          <div class="footer-column links">
            <h3>Quick Links</h3>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Categories</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="footer-column links">
            <h3>Categories</h3>
            <ul>
              <li><a href="#">Writing Instruments</a></li>
              <li><a href="#">Notebooks & Journals</a></li>
              <li><a href="#">Art Supplies</a></li>
              <li><a href="#">Office Essentials</a></li>
              <li><a href="#">School Supplies</a></li>
            </ul>
          </div>

          <div class="footer-column contact">
            <h3>Contact Us</h3>
            <ul>
              <li>
                <i class="fas fa-map-marker-alt"></i>
                <span>123 Stationery Street, Creative City, CS 12345</span>
              </li>
              <li>
                <i class="fas fa-phone-alt"></i>
                <span>+1 (555) 123-4567</span>
              </li>
              <li>
                <i class="fas fa-envelope"></i>
                <span>info@stationarystore.com</span>
              </li>
              <li>
                <i class="fas fa-clock"></i>
                <span>Mon-Fri: 9AM - 6PM</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="footer-bottom">
          <div class="copyright">
            <p>&copy; 2023 StationaryStore. All Rights Reserved.</p>
          </div>
          <div class="payment-methods">
            <i class="fab fa-cc-visa"></i>
            <i class="fab fa-cc-mastercard"></i>
            <i class="fab fa-cc-amex"></i>
            <i class="fab fa-cc-paypal"></i>
          </div>
          <div class="footer-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">Shipping Policy</a>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{ url('/frontend/assets/js/script.js') }}"></script>
    <script src="{{ url('/frontend/assets/js/trending-slider.js') }}"></script>
    
    <script src="{{ url('/frontend/assets/js/wishlist.js') }}"></script>
       <script src="{{ url('/frontend/assets/js/shop.js') }}"></script>
           <script src="{{ url('/frontend/assets/js/details.js') }}"></script>
    <script src="{{ url('/frontend/assets/js/button-actions.js') }}"></script>
        <script src="{{ url('/frontend/assets/js/cart.js') }}"></script>
          <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Progress Steps Navigation
            const nextButtons = document.querySelectorAll('.next-step');
            const prevButtons = document.querySelectorAll('.prev-step');
            const progressSteps = document.querySelectorAll('.progress-step');
            const checkoutSteps = document.querySelectorAll('.checkout-step');
            const editButtons = document.querySelectorAll('.btn-edit');
            const placeOrderBtn = document.querySelector('.place-order-btn');
            const confirmationModal = document.getElementById('confirmation-modal');
            const closeModal = document.querySelector('.close-modal');
            const couponToggleBtn = document.getElementById('coupon-toggle-btn');
            const couponForm = document.getElementById('coupon-form');
            const paymentOptions = document.querySelectorAll('input[name="payment"]');
            const cardDetails = document.getElementById('card-payment-details');
            const shippingOptions = document.querySelectorAll('input[name="shipping"]');
            const shippingCost = document.getElementById('shipping-cost');
            const orderTotal = document.getElementById('order-total');

            // Handle next step buttons
            nextButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const nextStep = this.getAttribute('data-next');
                    
                    // Hide all steps
                    checkoutSteps.forEach(step => {
                        step.classList.remove('active');
                    });
                    
                    // Show the next step
                    document.getElementById(`${nextStep}-step`).classList.add('active');
                    
                    // Update progress indicator
                    progressSteps.forEach(step => {
                        step.classList.remove('active');
                        if (step.getAttribute('data-step') === nextStep || 
                            step.getAttribute('data-step') === 'shipping') {
                            step.classList.add('active');
                        }
                        // If we're on review, mark all steps as active
                        if (nextStep === 'review') {
                            step.classList.add('active');
                        }
                    });
                    
                    // Scroll to top of the section
                    document.querySelector('.checkout-section').scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Handle previous step buttons
            prevButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const prevStep = this.getAttribute('data-prev');
                    
                    // Hide all steps
                    checkoutSteps.forEach(step => {
                        step.classList.remove('active');
                    });
                    
                    // Show the previous step
                    document.getElementById(`${prevStep}-step`).classList.add('active');
                    
                    // Update progress indicator
                    progressSteps.forEach(step => {
                        step.classList.remove('active');
                        if (step.getAttribute('data-step') === prevStep || 
                            step.getAttribute('data-step') === 'shipping') {
                            step.classList.add('active');
                        }
                        // If we're going back to payment, mark shipping and payment as active
                        if (prevStep === 'payment') {
                            if (step.getAttribute('data-step') === 'payment') {
                                step.classList.add('active');
                            }
                        }
                    });
                    
                    // Scroll to top of the section
                    document.querySelector('.checkout-section').scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Handle edit buttons in review step
            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const editStep = this.getAttribute('data-edit');
                    
                    // Hide all steps
                    checkoutSteps.forEach(step => {
                        step.classList.remove('active');
                    });
                    
                    // Show the step to edit
                    document.getElementById(`${editStep}-step`).classList.add('active');
                    
                    // Update progress indicator
                    progressSteps.forEach(step => {
                        step.classList.remove('active');
                        if (step.getAttribute('data-step') === editStep || 
                            step.getAttribute('data-step') === 'shipping') {
                            step.classList.add('active');
                        }
                        if (editStep === 'payment') {
                            if (step.getAttribute('data-step') === 'payment') {
                                step.classList.add('active');
                            }
                        }
                    });
                });
            });

            // Handle place order button
            if (placeOrderBtn) {
                placeOrderBtn.addEventListener('click', function() {
                    // Show confirmation modal
                    confirmationModal.style.display = 'flex';
                    
                    // Set current date for order
                    const today = new Date();
                    const options = { year: 'numeric', month: 'long', day: 'numeric' };
                    document.getElementById('order-date').textContent = today.toLocaleDateString('en-US', options);
                    
                    // Generate random order number
                    const orderNum = 'SG-' + Math.floor(10000 + Math.random() * 90000);
                    document.getElementById('order-number').textContent = orderNum;
                });
            }

            // Close modal
            if (closeModal) {
                closeModal.addEventListener('click', function() {
                    confirmationModal.style.display = 'none';
                });
            }

            // Close modal when clicking outside
            window.addEventListener('click', function(event) {
                if (event.target === confirmationModal) {
                    confirmationModal.style.display = 'none';
                }
            });

            // Toggle coupon form
            if (couponToggleBtn) {
                couponToggleBtn.addEventListener('click', function() {
                    if (couponForm.style.display === 'none') {
                        couponForm.style.display = 'block';
                    } else {
                        couponForm.style.display = 'none';
                    }
                });
            }

            // Toggle payment method details
            paymentOptions.forEach(option => {
                option.addEventListener('change', function() {
                    if (this.value === 'credit-card') {
                        cardDetails.style.display = 'block';
                    } else {
                        cardDetails.style.display = 'none';
                    }
                });
            });

            // Update shipping cost and total based on shipping option
            shippingOptions.forEach(option => {
                option.addEventListener('change', function() {
                    let cost = this.value === 'standard' ? '$5.99' : '$12.99';
                    let numericCost = this.value === 'standard' ? 5.99 : 12.99;
                    shippingCost.textContent = cost;
                    
                    // Update total
                    let subtotal = 279.98; // Hardcoded for demo
                    orderTotal.textContent = '$' + (subtotal + numericCost).toFixed(2);
                });
            });

            // Mobile menu toggle
            const hamburger = document.querySelector('.hamburger');
            const navLinks = document.querySelector('.nav-links');
            
            if (hamburger) {
                hamburger.addEventListener('click', function() {
                    navLinks.classList.toggle('active');
                    hamburger.classList.toggle('active');
                });
            }
        });
    </script>
    <script>
      // Section Header Animation with Intersection Observer
      const sectionHeaders = document.querySelectorAll('.section-header');
      
      // Create the Intersection Observer
      const headerObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          // When a section header comes into view
          if (entry.isIntersecting) {
            // Add the animation class
            entry.target.classList.add('animate');
            
            // Stop observing after animation is triggered
            headerObserver.unobserve(entry.target);
          }
        });
      }, {
        // Options for the observer
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
      });
      
      // Start observing all section headers
      sectionHeaders.forEach(header => {
        headerObserver.observe(header);
      });
    </script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   =
</body>
</html>