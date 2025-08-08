// Simple Button Actions

document.addEventListener('DOMContentLoaded', function() {
  // Initialize buttons
  initButtons();
});

function initButtons() {
  // Get buttons
  const addToCartBtn = document.querySelector('.action-btn:first-child');
  const wishlistBtn = document.querySelector('.action-btn:nth-child(2)');
  
  // Add to Cart button click event
  if (addToCartBtn) {
    addToCartBtn.addEventListener('click', function() {
      // Visual feedback
      this.classList.add('clicked');
      setTimeout(() => {
        this.classList.remove('clicked');
      }, 300);
      
      // Show notification (optional)
      showNotification('Added to cart!');
    });
  }
  
  // Wishlist button click event
  if (wishlistBtn) {
    wishlistBtn.addEventListener('click', function() {
      // Toggle active state
      this.classList.toggle('active');
      
      // Visual feedback
      const heartIcon = this.querySelector('i.fa-heart');
      if (heartIcon) {
        if (this.classList.contains('active')) {
          heartIcon.classList.remove('fa-regular');
          heartIcon.classList.add('fa-solid');
          showNotification('Added to wishlist!');
        } else {
          heartIcon.classList.remove('fa-solid');
          heartIcon.classList.add('fa-regular');
          showNotification('Removed from wishlist');
        }
      }
    });
  }
}

// Simple notification function
function showNotification(message) {
  // Create notification element if it doesn't exist
  let notification = document.getElementById('notification');
  if (!notification) {
    notification = document.createElement('div');
    notification.id = 'notification';
    notification.style.position = 'fixed';
    notification.style.bottom = '20px';
    notification.style.right = '20px';
    notification.style.backgroundColor = 'var(--accent-color, #ff4d4d)';
    notification.style.color = 'white';
    notification.style.padding = '12px 20px';
    notification.style.borderRadius = '4px';
    notification.style.boxShadow = '0 4px 8px rgba(0,0,0,0.1)';
    notification.style.zIndex = '1000';
    notification.style.opacity = '0';
    notification.style.transform = 'translateY(20px)';
    notification.style.transition = 'all 0.3s ease';
    document.body.appendChild(notification);
  }
  
  // Set message and show notification
  notification.textContent = message;
  setTimeout(() => {
    notification.style.opacity = '1';
    notification.style.transform = 'translateY(0)';
  }, 10);
  
  // Hide notification after 3 seconds
  setTimeout(() => {
    notification.style.opacity = '0';
    notification.style.transform = 'translateY(20px)';
  }, 3000);
}

// Add CSS for button click animation
document.head.insertAdjacentHTML('beforeend', `
  <style>
    @keyframes buttonClick {
      0% { transform: scale(1); }
      50% { transform: scale(0.95); }
      100% { transform: scale(1); }
    }
    
    .action-btn.clicked {
      animation: buttonClick 0.3s ease;
    }
  </style>
`);