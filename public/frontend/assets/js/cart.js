document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    
    if (hamburger) {
        hamburger.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
    }

    // Cart functionality
    initializeCart();
});

function initializeCart() {
    // Get all cart elements
    const cartItems = document.querySelectorAll('.cart-item');
    const quantityInputs = document.querySelectorAll('.quantity-input');
    const decreaseButtons = document.querySelectorAll('.decrease');
    const increaseButtons = document.querySelectorAll('.increase');
    const removeButtons = document.querySelectorAll('.remove-btn');
    const clearCartButton = document.querySelector('.clear-cart-btn');
    const emptyCartMessage = document.querySelector('.empty-cart');
    const cartItemsContainer = document.querySelector('.cart-items');
    const applyCouponButton = document.querySelector('.apply-coupon-btn');
    const couponInput = document.querySelector('.coupon-input input');
    const discountRow = document.querySelector('.discount-row');
    const checkoutButton = document.querySelector('.checkout-btn');
    
    // Add event listeners to quantity inputs
    quantityInputs.forEach(input => {
        input.addEventListener('change', updateCartTotals);
    });
    
    // Add event listeners to decrease buttons
    decreaseButtons.forEach(button => {
        button.addEventListener('click', function() {
            const input = this.nextElementSibling;
            if (parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
                updateCartTotals();
            }
        });
    });
    
    // Add event listeners to increase buttons
    increaseButtons.forEach(button => {
        button.addEventListener('click', function() {
            const input = this.previousElementSibling;
            if (parseInt(input.value) < parseInt(input.max)) {
                input.value = parseInt(input.value) + 1;
                updateCartTotals();
            }
        });
    });
    
    // Add event listeners to remove buttons
    removeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const cartItem = this.closest('.cart-item');
            const cartItemsContainer = document.querySelector('.cart-items');
            
            // Store the current height of the cart items container
            const currentHeight = cartItemsContainer.offsetHeight;
            cartItemsContainer.style.minHeight = currentHeight + 'px';
            
            // Add a fade-out animation
            cartItem.style.opacity = '0';
            cartItem.style.transform = 'translateX(20px)';
            cartItem.style.transition = 'all 0.3s ease';
            
            // Remove the item after animation completes
            setTimeout(() => {
                cartItem.remove();
                updateCartTotals();
                checkEmptyCart();
                
                // After a delay, allow the container to resize if needed
                setTimeout(() => {
                    if (document.querySelectorAll('.cart-item').length > 0) {
                        cartItemsContainer.style.minHeight = 'auto';
                    }
                }, 500);
            }, 300);
        });
    });
    
    // Add event listener to clear cart button
    if (clearCartButton) {
        clearCartButton.addEventListener('click', function() {
            // Confirm before clearing
            if (confirm('Are you sure you want to clear your cart?')) {
                const cartItemsContainer = document.querySelector('.cart-items');
                
                // Store the current height of the cart items container
                const currentHeight = cartItemsContainer.offsetHeight;
                cartItemsContainer.style.minHeight = currentHeight + 'px';
                
                // Add fade-out animation to all items
                cartItems.forEach(item => {
                    item.style.opacity = '0';
                    item.style.transform = 'translateX(20px)';
                    item.style.transition = 'all 0.3s ease';
                });
                
                // Remove all items after animation completes
                setTimeout(() => {
                    cartItems.forEach(item => item.remove());
                    updateCartTotals();
                    checkEmptyCart();
                }, 300);
            }
        });
    }
    
    // Add event listener to apply coupon button
    if (applyCouponButton && couponInput) {
        applyCouponButton.addEventListener('click', function() {
            const couponCode = couponInput.value.trim().toUpperCase();
            
            if (couponCode === '') {
                showNotification('Please enter a coupon code', 'error');
                return;
            }
            
            // Simulate coupon validation (in a real app, this would be a server request)
            if (couponCode === 'SAVE10') {
                // Apply 10% discount
                applyDiscount(10);
                showNotification('Coupon applied successfully!', 'success');
            } else if (couponCode === 'SAVE20') {
                // Apply 20% discount
                applyDiscount(20);
                showNotification('Coupon applied successfully!', 'success');
            } else {
                showNotification('Invalid coupon code', 'error');
            }
        });
    }
    
    // Add event listener to checkout button
    if (checkoutButton) {
        checkoutButton.addEventListener('click', function() {
            // In a real app, this would redirect to a checkout page
            // For now, just show a notification
            showNotification('Proceeding to checkout...', 'info');
            
            // Simulate a redirect after 1.5 seconds
            setTimeout(() => {
                alert('This would redirect to a checkout page in a real application.');
            }, 1500);
        });
    }
    
    // Initialize cart totals
    updateCartTotals();
    checkEmptyCart();
    
    // Add event listeners to recommendation "Add to Cart" buttons
    const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('.recommendation-card');
            const productName = card.querySelector('h3').textContent;
            const productPrice = card.querySelector('.recommendation-price').textContent.replace('$', '');
            
            showNotification(`${productName} added to cart!`, 'success');
        });
    });
}

function updateCartTotals() {
    // Get all cart items
    const cartItems = document.querySelectorAll('.cart-item');
    
    // Initialize totals
    let subtotal = 0;
    
    // Calculate subtotal
    cartItems.forEach(item => {
        const price = parseFloat(item.querySelector('.cart-price').textContent.replace('$', ''));
        const quantity = parseInt(item.querySelector('.quantity-input').value);
        const total = price * quantity;
        
        // Update item total
        item.querySelector('.cart-total').textContent = `$${total.toFixed(2)}`;
        
        // Add to subtotal
        subtotal += total;
    });
    
    // Calculate shipping, tax, and total
    const shipping = subtotal > 0 ? 5.99 : 0;
    const tax = subtotal * 0.07;
    let discount = 0;
    
    // Check if discount is applied
    const discountRow = document.querySelector('.discount-row');
    if (discountRow && discountRow.style.display !== 'none') {
        const discountAmount = document.querySelector('.discount-amount');
        discount = parseFloat(discountAmount.textContent.replace('-$', ''));
    }
    
    const total = subtotal + shipping + tax - discount;
    
    // Update summary values
    document.querySelector('.subtotal-amount').textContent = `$${subtotal.toFixed(2)}`;
    document.querySelector('.shipping-amount').textContent = `$${shipping.toFixed(2)}`;
    document.querySelector('.tax-amount').textContent = `$${tax.toFixed(2)}`;
    document.querySelector('.total-amount').textContent = `$${total.toFixed(2)}`;
}

function checkEmptyCart() {
    const cartItems = document.querySelectorAll('.cart-item');
    const emptyCartMessage = document.querySelector('.empty-cart');
    const cartHeader = document.querySelector('.cart-header');
    const cartActions = document.querySelector('.cart-actions');
    const cartItemsContainer = document.querySelector('.cart-items');
    
    if (cartItems.length === 0) {
        // Show empty cart message
        if (emptyCartMessage) {
            emptyCartMessage.style.display = 'flex'; // Use flex to center content
        }
        
        // Hide cart header
        if (cartHeader) {
            cartHeader.style.display = 'none';
        }
        
        // Set a fixed height for the cart items container to prevent layout shift
        if (cartItemsContainer) {
            // Ensure the container has enough height for the empty cart message
            cartItemsContainer.style.minHeight = '300px';
            cartItemsContainer.style.display = 'flex';
            cartItemsContainer.style.flexDirection = 'column';
            cartItemsContainer.style.justifyContent = 'center';
        }
        
        // Ensure cart actions maintain consistent position
        if (cartActions) {
            cartActions.style.display = 'flex';
            cartActions.style.position = 'relative';
            cartActions.style.zIndex = '1';
        }
    } else {
        // Hide empty cart message
        if (emptyCartMessage) {
            emptyCartMessage.style.display = 'none';
        }
        
        // Show cart header
        if (cartHeader) {
            cartHeader.style.display = 'grid';
        }
        
        // Allow cart items container to adjust to content
        if (cartItemsContainer) {
            cartItemsContainer.style.display = 'block';
            // Don't reset minHeight here to prevent layout shift during animations
        }
        
        // Ensure cart actions maintain consistent position
        if (cartActions) {
            cartActions.style.display = 'flex';
            cartActions.style.position = 'relative';
            cartActions.style.zIndex = '1';
        }
    }
}

function applyDiscount(percentage) {
    // Get subtotal
    const subtotalElement = document.querySelector('.subtotal-amount');
    const subtotal = parseFloat(subtotalElement.textContent.replace('$', ''));
    
    // Calculate discount
    const discount = subtotal * (percentage / 100);
    
    // Update discount row
    const discountRow = document.querySelector('.discount-row');
    const discountAmount = document.querySelector('.discount-amount');
    
    discountRow.style.display = 'flex';
    discountAmount.textContent = `-$${discount.toFixed(2)}`;
    
    // Update total
    updateCartTotals();
}

function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <i class="fas ${getIconForType(type)}"></i>
            <span>${message}</span>
        </div>
        <button class="notification-close"><i class="fas fa-times"></i></button>
    `;
    
    // Add styles
    Object.assign(notification.style, {
        position: 'fixed',
        bottom: '20px',
        right: '20px',
        backgroundColor: getColorForType(type),
        color: '#fff',
        padding: '12px 20px',
        borderRadius: '8px',
        boxShadow: '0 4px 12px rgba(0, 0, 0, 0.15)',
        zIndex: '9999',
        display: 'flex',
        alignItems: 'center',
        justifyContent: 'space-between',
        minWidth: '300px',
        transform: 'translateX(100%)',
        opacity: '0',
        transition: 'all 0.3s ease'
    });
    
    // Add styles to content
    const content = notification.querySelector('.notification-content');
    Object.assign(content.style, {
        display: 'flex',
        alignItems: 'center',
        gap: '10px'
    });
    
    // Add styles to close button
    const closeButton = notification.querySelector('.notification-close');
    Object.assign(closeButton.style, {
        background: 'none',
        border: 'none',
        color: '#fff',
        cursor: 'pointer',
        fontSize: '16px',
        opacity: '0.8',
        transition: 'opacity 0.3s ease'
    });
    
    // Add hover effect to close button
    closeButton.addEventListener('mouseover', () => {
        closeButton.style.opacity = '1';
    });
    
    closeButton.addEventListener('mouseout', () => {
        closeButton.style.opacity = '0.8';
    });
    
    // Add close functionality
    closeButton.addEventListener('click', () => {
        notification.style.transform = 'translateX(100%)';
        notification.style.opacity = '0';
        
        // Remove after animation
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    });
    
    // Add to DOM
    document.body.appendChild(notification);
    
    // Trigger animation
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
        notification.style.opacity = '1';
    }, 10);
    
    // Auto-remove after 5 seconds
    setTimeout(() => {
        if (document.body.contains(notification)) {
            notification.style.transform = 'translateX(100%)';
            notification.style.opacity = '0';
            
            // Remove after animation
            setTimeout(() => {
                if (document.body.contains(notification)) {
                    document.body.removeChild(notification);
                }
            }, 300);
        }
    }, 5000);
}

function getIconForType(type) {
    switch (type) {
        case 'success':
            return 'fa-check-circle';
        case 'error':
            return 'fa-exclamation-circle';
        case 'warning':
            return 'fa-exclamation-triangle';
        case 'info':
        default:
            return 'fa-info-circle';
    }
}

function getColorForType(type) {
    switch (type) {
        case 'success':
            return '#43a047';
        case 'error':
            return '#e53935';
        case 'warning':
            return '#f9a825';
        case 'info':
        default:
            return '#039be5';
    }
}

// Add responsive data attributes for mobile view
function addResponsiveAttributes() {
    const cartItems = document.querySelectorAll('.cart-item');
    
    cartItems.forEach(item => {
        const priceElement = item.querySelector('.cart-price');
        const totalElement = item.querySelector('.cart-total');
        
        if (priceElement && !priceElement.hasAttribute('data-label')) {
            priceElement.setAttribute('data-label', 'Price');
        }
        
        if (totalElement && !totalElement.hasAttribute('data-label')) {
            totalElement.setAttribute('data-label', 'Total');
        }
    });
}

// Call this function on load and resize
window.addEventListener('load', function() {
    addResponsiveAttributes();
    checkEmptyCart(); // Ensure cart actions have correct height on load
});

// Update cart actions height on window resize
window.addEventListener('resize', function() {
    checkEmptyCart(); // Recalculate height based on screen size
});
window.addEventListener('resize', addResponsiveAttributes);