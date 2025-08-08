document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const wishlistItems = document.querySelectorAll('.wishlist-item');
    const emptyWishlist = document.querySelector('.empty-wishlist');
    const wishlistCounter = document.querySelector('.wishlist-counter');
    const clearWishlistBtn = document.querySelector('.clear-wishlist-btn');
    const addAllToCartBtn = document.querySelector('.add-all-to-cart-btn');
    const addToCartBtns = document.querySelectorAll('.add-to-cart-btn');
    const removeBtns = document.querySelectorAll('.remove-btn');
    const wishlistActionsContainer = document.querySelector('.wishlist-actions-container');
    
    // Update wishlist counter
    function updateWishlistCounter() {
        const itemCount = document.querySelectorAll('.wishlist-item').length;
        wishlistCounter.textContent = itemCount;
        
        // Show/hide empty wishlist message
        if (itemCount === 0) {
            emptyWishlist.style.display = 'block';
            wishlistActionsContainer.style.display = 'none';
        } else {
            emptyWishlist.style.display = 'none';
            wishlistActionsContainer.style.display = 'flex';
        }
    }
    
    // Remove item from wishlist
    function removeFromWishlist(item) {
        item.classList.add('removing');
        
        // Add animation
        item.style.transition = 'all 0.3s ease';
        item.style.transform = 'translateX(20px)';
        item.style.opacity = '0';
        
        setTimeout(() => {
            item.remove();
            updateWishlistCounter();
        }, 300);
    }
    
    // Add to cart functionality
    function addToCart(item) {
        // Get product details
        const productTitle = item.querySelector('.wishlist-product-title').textContent;
        const productPrice = item.querySelector('.current-price').textContent;
        
        // Show success message
        const successMessage = document.createElement('div');
        successMessage.classList.add('success-message');
        successMessage.innerHTML = `
            <i class="fas fa-check-circle"></i>
            <p>${productTitle} added to cart!</p>
        `;
        document.body.appendChild(successMessage);
        
        // Animate success message
        setTimeout(() => {
            successMessage.classList.add('show');
        }, 10);
        
        // Remove success message after 3 seconds
        setTimeout(() => {
            successMessage.classList.remove('show');
            setTimeout(() => {
                successMessage.remove();
            }, 300);
        }, 3000);
        
        // Optional: Remove from wishlist after adding to cart
        // removeFromWishlist(item);
        
        console.log(`Added to cart: ${productTitle} - ${productPrice}`);
    }
    
    // Add event listeners to remove buttons
    removeBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const wishlistItem = this.closest('.wishlist-item');
            removeFromWishlist(wishlistItem);
        });
    });
    
    // Add event listeners to add to cart buttons
    addToCartBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const wishlistItem = this.closest('.wishlist-item');
            addToCart(wishlistItem);
        });
    });
    
    // Clear all items from wishlist
    if (clearWishlistBtn) {
        clearWishlistBtn.addEventListener('click', function() {
            // Confirm before clearing
            if (confirm('Are you sure you want to clear your wishlist?')) {
                wishlistItems.forEach(item => {
                    removeFromWishlist(item);
                });
            }
        });
    }
    
    // Add all items to cart
    if (addAllToCartBtn) {
        addAllToCartBtn.addEventListener('click', function() {
            wishlistItems.forEach(item => {
                addToCart(item);
            });
        });
    }
    
    // Add to wishlist functionality for recommendation items
    const addToWishlistBtns = document.querySelectorAll('.add-to-wishlist-btn');
    
    addToWishlistBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const icon = this.querySelector('i');
            
            // Toggle heart icon
            if (icon.classList.contains('far')) {
                icon.classList.remove('far');
                icon.classList.add('fas');
                this.style.background = 'var(--wishlist-color)';
                this.style.color = 'white';
                
                // Show added to wishlist message
                const successMessage = document.createElement('div');
                successMessage.classList.add('success-message');
                successMessage.innerHTML = `
                    <i class="fas fa-heart"></i>
                    <p>Added to wishlist!</p>
                `;
                document.body.appendChild(successMessage);
                
                // Animate success message
                setTimeout(() => {
                    successMessage.classList.add('show');
                }, 10);
                
                // Remove success message after 3 seconds
                setTimeout(() => {
                    successMessage.classList.remove('show');
                    setTimeout(() => {
                        successMessage.remove();
                    }, 300);
                }, 3000);
            } else {
                icon.classList.remove('fas');
                icon.classList.add('far');
                this.style.background = 'var(--white)';
                this.style.color = 'var(--dark-gray)';
            }
        });
    });
    
    // Mobile menu toggle
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    
    if (hamburger) {
        hamburger.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            this.classList.toggle('active');
        });
    }
    
    // Add CSS for success message
    const style = document.createElement('style');
    style.textContent = `
        .success-message {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: var(--success-color);
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 0.8rem;
            box-shadow: var(--shadow-md);
            z-index: 1000;
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .success-message.show {
            transform: translateY(0);
            opacity: 1;
        }
        
        .success-message i {
            font-size: 1.2rem;
        }
        
        .removing {
            transition: all 0.3s ease;
        }
        
        @media (max-width: 768px) {
            .nav-links.active {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 70px;
                left: 0;
                right: 0;
                background: white;
                padding: 1rem;
                box-shadow: var(--shadow-md);
                z-index: 1000;
            }
            
            .hamburger.active span:nth-child(1) {
                transform: rotate(45deg) translate(5px, 5px);
            }
            
            .hamburger.active span:nth-child(2) {
                opacity: 0;
            }
            
            .hamburger.active span:nth-child(3) {
                transform: rotate(-45deg) translate(7px, -6px);
            }
        }
    `;
    document.head.appendChild(style);
});