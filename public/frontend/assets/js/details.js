// Product Details Page JavaScript

document.addEventListener('DOMContentLoaded', function() {
  // Product Image Gallery
  initImageGallery();
  
  // Product Quantity Selector
  initQuantitySelector();
  
  // Product Tabs
  initProductTabs();
  
  // Color Variants
  initColorVariants();
  
  // Image Zoom Modal
  initImageZoom();
  
  // Review Helpful Buttons
  initReviewHelpful();
  
  // Review Form
  initReviewForm();
});



// Product Image Gallery
function initImageGallery() {
  const mainImage = document.getElementById('main-product-image');
  const thumbnails = document.querySelectorAll('.thumbnail');
  
  thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', function() {
      // Update main image
      const imgSrc = this.getAttribute('data-img');
      mainImage.src = imgSrc;
      
      // Update active thumbnail
      thumbnails.forEach(thumb => thumb.classList.remove('active'));
      this.classList.add('active');
    });
  });
}

// Product Quantity Selector
function initQuantitySelector() {
  const minusBtn = document.querySelector('.quantity-btn.minus');
  const plusBtn = document.querySelector('.quantity-btn.plus');
  const quantityInput = document.getElementById('quantity-input');
  const maxQuantity = parseInt(quantityInput.getAttribute('max'));
  
  minusBtn.addEventListener('click', function() {
    let currentValue = parseInt(quantityInput.value);
    if (currentValue > 1) {
      quantityInput.value = currentValue - 1;
    }
  });
  
  plusBtn.addEventListener('click', function() {
    let currentValue = parseInt(quantityInput.value);
    if (currentValue < maxQuantity) {
      quantityInput.value = currentValue + 1;
    }
  });
  
  quantityInput.addEventListener('change', function() {
    let currentValue = parseInt(this.value);
    
    if (isNaN(currentValue) || currentValue < 1) {
      this.value = 1;
    } else if (currentValue > maxQuantity) {
      this.value = maxQuantity;
    }
  });
}

// Product Tabs
function initProductTabs() {
  const tabButtons = document.querySelectorAll('.tab-btn');
  const tabPanes = document.querySelectorAll('.tab-pane');
  
  tabButtons.forEach(button => {
    button.addEventListener('click', function() {
      const tabId = this.getAttribute('data-tab');
      
      // Update active tab button
      tabButtons.forEach(btn => btn.classList.remove('active'));
      this.classList.add('active');
      
      // Show the selected tab pane
      tabPanes.forEach(pane => {
        pane.classList.remove('active');
        if (pane.id === tabId) {
          pane.classList.add('active');
        }
      });
    });
  });
}

// Color Variants
function initColorVariants() {
  const colorOptions = document.querySelectorAll('.color-option');
  const selectedVariantText = document.querySelector('.selected-variant');
  
  colorOptions.forEach(option => {
    option.addEventListener('click', function() {
      // Update active color
      colorOptions.forEach(opt => opt.classList.remove('active'));
      this.classList.add('active');
      
      // Update selected variant text
      const colorName = this.getAttribute('data-color');
      selectedVariantText.textContent = colorName;
    });
  });
}




// Image Zoom Modal
function initImageZoom() {
  const zoomBtn = document.querySelector('.zoom-btn');
  const modal = document.querySelector('.zoom-modal');
  const modalImg = document.getElementById('zoom-img');
  const closeBtn = document.querySelector('.close-zoom');
  const mainImage = document.getElementById('main-product-image');
  
  zoomBtn.addEventListener('click', function() {
    modal.style.display = 'block';
    modalImg.src = mainImage.src;
  });
  
  closeBtn.addEventListener('click', function() {
    modal.style.display = 'none';
  });
  
  // Close modal when clicking outside the image
  modal.addEventListener('click', function(event) {
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  });
}

// Review Helpful Buttons
function initReviewHelpful() {
  const helpfulBtns = document.querySelectorAll('.helpful-btn');
  
  helpfulBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      // Update the button text to show it was clicked
      const currentCount = parseInt(this.textContent.match(/\d+/)[0]);
      const newCount = currentCount + 1;
      const isHelpful = this.innerHTML.includes('thumbs-up');
      
      if (isHelpful) {
        this.innerHTML = `<i class="fas fa-thumbs-up"></i> Yes (${newCount})`;
      } else {
        this.innerHTML = `<i class="fas fa-thumbs-down"></i> No (${newCount})`;
      }
      
      // Disable the button after click
      this.disabled = true;
      this.style.opacity = '0.7';
      
      showNotification('Thank you for your feedback!', 'success');
    });
  });
}



// Review Form Functionality
function initReviewForm() {
  const writeReviewBtn = document.getElementById('writeReviewBtn');
  const reviewForm = document.getElementById('reviewForm');
  const cancelReviewBtn = document.getElementById('cancelReview');
  const productReviewForm = document.getElementById('productReviewForm');
  const photoInput = document.getElementById('reviewPhotos');
  const photoPreview = document.getElementById('photoPreview');
  
  if (!writeReviewBtn || !reviewForm) return;
  
  // Show review form when button is clicked
  writeReviewBtn.addEventListener('click', function() {
    writeReviewBtn.style.display = 'none';
    reviewForm.style.display = 'block';
    
    // Scroll to the form
    reviewForm.scrollIntoView({ behavior: 'smooth', block: 'center' });
  });
  
  // Hide review form when cancel button is clicked
  if (cancelReviewBtn) {
    cancelReviewBtn.addEventListener('click', function() {
      reviewForm.style.display = 'none';
      writeReviewBtn.style.display = 'block';
    });
  }
  
  // Handle photo preview
  if (photoInput && photoPreview) {
    photoInput.addEventListener('change', function() {
      photoPreview.innerHTML = '';
      
      if (this.files) {
        Array.from(this.files).forEach(file => {
          if (!file.type.match('image.*')) return;
          
          const reader = new FileReader();

            reader.onload = function(e) {
              const img = document.createElement('img');
              img.src = e.target.result;
              photoPreview.appendChild(img);
            }
          reader.readAsDataURL(file);
        });
      }
    });
  }
  
  // Handle form submission
  if (productReviewForm) {
    productReviewForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Show success message
      showNotification('Your review has been submitted successfully!', 'success');
      
      // Reset form and hide it
      this.reset();
      photoPreview.innerHTML = '';
      reviewForm.style.display = 'none';
      writeReviewBtn.style.display = 'block';
    });
  }
}



