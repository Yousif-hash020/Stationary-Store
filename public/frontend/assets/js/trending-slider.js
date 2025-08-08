/**
 * Custom Trending Products Slider
 * A lightweight, custom-built slider for the trending products section
 */

document.addEventListener('DOMContentLoaded', () => {
    initTrendingSlider();
});

// Function to initialize the trending products slider
function initTrendingSlider() {
    // Get slider elements
    const sliderTrack = document.querySelector('.trending-slider-track');
    const prevBtn = document.querySelector('.trending-prev-btn');
    const nextBtn = document.querySelector('.trending-next-btn');
    const progressIndicatorsContainer = document.querySelector('.trending-progress-indicators');
    const paginationContainer = document.querySelector('.trending-pagination');
    
    // If any element is missing, exit
    if (!sliderTrack || !prevBtn || !nextBtn || !progressIndicatorsContainer || !paginationContainer) return;
    
    // Get all product cards
    const cards = sliderTrack.querySelectorAll('.product-card');
    if (cards.length === 0) return;
    
    // Variables for slider
    let currentIndex = 0;
    const cardWidth = 280; // Width of each card
    const cardGap = 30;    // Gap between cards
    const cardTotal = cardWidth + cardGap; // Total width including gap
    const visibleCards = Math.floor((sliderTrack.parentElement.clientWidth - 80) / cardTotal); // Subtract nav button space
    const maxIndex = Math.max(0, cards.length - visibleCards);
    let autoplayTimer = null;
    const autoplayDelay = 5000; // 5 seconds
    
    // Create pagination dots and progress indicators
    cards.forEach((_, index) => {
        if (index <= maxIndex) {
            // Create pagination dot
            const dot = document.createElement('div');
            dot.classList.add('trending-dot');
            if (index === 0) dot.classList.add('active');
            
            dot.addEventListener('click', () => {
                goToSlide(index);
                resetAllProgressIndicators();
                startProgressIndicator(index);
            });
            
            paginationContainer.appendChild(dot);
            
            // Create progress indicator
            const indicator = document.createElement('div');
            indicator.classList.add('progress-indicator');
            indicator.dataset.index = index;
            
            // Add click event to progress indicator
            indicator.addEventListener('click', () => {
                goToSlide(index);
                resetAllProgressIndicators();
                startProgressIndicator(index);
            });
            
            progressIndicatorsContainer.appendChild(indicator);
        }
    });
    
    const dots = paginationContainer.querySelectorAll('.trending-dot');
    
    // Function to go to a specific slide
    function goToSlide(index) {
        // Ensure index is within bounds
        if (index < 0) index = 0;
        if (index > maxIndex) index = maxIndex;
        
        // Update current index
        currentIndex = index;
        
        // Update slider position
        const translateX = -currentIndex * cardTotal;
        sliderTrack.style.transform = `translateX(${translateX}px)`;
        
        // Update active dot
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === currentIndex);
        });
    }
    
    // Function to go to next slide
    function nextSlide() {
        const nextIndex = currentIndex + 1 > maxIndex ? 0 : currentIndex + 1;
        goToSlide(nextIndex);
        resetAllProgressIndicators();
        startProgressIndicator(nextIndex);
    }
    
    // Function to go to previous slide
    function prevSlide() {
        const prevIndex = currentIndex - 1 < 0 ? maxIndex : currentIndex - 1;
        goToSlide(prevIndex);
        resetAllProgressIndicators();
        startProgressIndicator(prevIndex);
    }
    
    // Function to reset all progress indicators
    function resetAllProgressIndicators() {
        const indicators = progressIndicatorsContainer.querySelectorAll('.progress-indicator');
        indicators.forEach(indicator => {
            indicator.classList.remove('active', 'completed');
        });
    }
    
    // Function to mark previous indicators as completed
    function markPreviousIndicatorsAsCompleted(currentIndex) {
        const indicators = progressIndicatorsContainer.querySelectorAll('.progress-indicator');
        indicators.forEach((indicator, index) => {
            if (index < currentIndex) {
                indicator.classList.add('completed');
            }
        });
    }
    
    // Function to start progress indicator animation
    function startProgressIndicator(index) {
        const indicators = progressIndicatorsContainer.querySelectorAll('.progress-indicator');
        if (indicators[index]) {
            // Mark previous indicators as completed
            markPreviousIndicatorsAsCompleted(index);
            
            // Activate current indicator
            indicators[index].classList.add('active');
        }
    }
    
    // Function to start autoplay
    function startAutoplay() {
        if (autoplayTimer) clearInterval(autoplayTimer);
        autoplayTimer = setInterval(nextSlide, autoplayDelay);
    }
    
    // Function to stop autoplay
    function stopAutoplay() {
        if (autoplayTimer) {
            clearInterval(autoplayTimer);
            autoplayTimer = null;
        }
    }
    
    // Event listeners for buttons
    prevBtn.addEventListener('click', () => {
        prevSlide();
        stopAutoplay();
        startAutoplay();
    });
    
    nextBtn.addEventListener('click', () => {
        nextSlide();
        stopAutoplay();
        startAutoplay();
    });
    
    // Pause autoplay on hover
    const sliderContainer = document.querySelector('.trending-slider-container');
    sliderContainer.addEventListener('mouseenter', () => {
        stopAutoplay();
        // Pause the active progress indicator by removing the active class
        const activeIndicator = progressIndicatorsContainer.querySelector('.progress-indicator.active');
        if (activeIndicator) {
            activeIndicator.classList.remove('active');
        }
    });
    
    sliderContainer.addEventListener('mouseleave', () => {
        resetAllProgressIndicators();
        startProgressIndicator(currentIndex);
        startAutoplay();
    });
    
    // Touch events for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    sliderTrack.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
        stopAutoplay();
        // Pause the active progress indicator
        const activeIndicator = progressIndicatorsContainer.querySelector('.progress-indicator.active');
        if (activeIndicator) {
            activeIndicator.classList.remove('active');
        }
    }, { passive: true });
    
    sliderTrack.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
        resetAllProgressIndicators();
        startProgressIndicator(currentIndex);
        startAutoplay();
    }, { passive: true });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        if (touchStartX - touchEndX > swipeThreshold) {
            // Swipe left, go to next slide
            nextSlide();
        } else if (touchEndX - touchStartX > swipeThreshold) {
            // Swipe right, go to previous slide
            prevSlide();
        }
    }
    
    // Initialize slider
    goToSlide(0);
    startProgressIndicator(0);
    startAutoplay();
    
    // Handle window resize
    window.addEventListener('resize', () => {
        // Recalculate visible cards and max index
        const newVisibleCards = Math.floor((sliderTrack.parentElement.clientWidth - 80) / cardTotal);
        const newMaxIndex = Math.max(0, cards.length - newVisibleCards);
        
        // Update maxIndex
        if (newMaxIndex !== maxIndex) {
            // Update pagination dots and progress indicators
            paginationContainer.innerHTML = '';
            progressIndicatorsContainer.innerHTML = '';
            
            cards.forEach((_, index) => {
                if (index <= newMaxIndex) {
                    // Create pagination dot
                    const dot = document.createElement('div');
                    dot.classList.add('trending-dot');
                    if (index === currentIndex) dot.classList.add('active');
                    
                    dot.addEventListener('click', () => {
                        goToSlide(index);
                        resetAllProgressIndicators();
                        startProgressIndicator(index);
                    });
                    
                    paginationContainer.appendChild(dot);
                    
                    // Create progress indicator
                    const indicator = document.createElement('div');
                    indicator.classList.add('progress-indicator');
                    indicator.dataset.index = index;
                    
                    // Add click event to progress indicator
                    indicator.addEventListener('click', () => {
                        goToSlide(index);
                        resetAllProgressIndicators();
                        startProgressIndicator(index);
                    });
                    
                    progressIndicatorsContainer.appendChild(indicator);
                }
            });
            
            // Ensure current index is still valid
            if (currentIndex > newMaxIndex) {
                currentIndex = newMaxIndex;
                goToSlide(currentIndex);
            }
            
            // Reset and start the progress indicator for the current slide
            resetAllProgressIndicators();
            startProgressIndicator(currentIndex);
        }
    });
}