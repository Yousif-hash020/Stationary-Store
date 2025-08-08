document.addEventListener('DOMContentLoaded', () => {
    // Modern Split-Screen Slider functionality
    const splitSlides = document.querySelectorAll('.split-slide');
    const dots = document.querySelectorAll('.dot');
    const prevArrow = document.querySelector('.prev-arrow');
    const nextArrow = document.querySelector('.next-arrow');
    const progressBar = document.querySelector('.progress-bar');
    let currentSlide = 0;
    let slideInterval;
    const slideDuration = 7000; // 7 seconds per slide
    let slideStartTime;
    let isAnimating = false;

    console.log('Slider elements:', {
        slides: splitSlides.length,
        dots: dots.length,
        prevArrow: prevArrow,
        nextArrow: nextArrow,
        progressBar: progressBar
    });

    // Function to go to specific slide
    function goToSlide(slideIndex) {
        if (isAnimating) return;
        isAnimating = true;
        console.log(`Going to slide ${slideIndex}`);
        
        // Remove active class from current slide and dot
        splitSlides[currentSlide].classList.remove('active');
        if (dots[currentSlide]) dots[currentSlide].classList.remove('active');
        
        // Update current slide index
        currentSlide = slideIndex;
        
        // Handle edge cases
        if (currentSlide >= splitSlides.length) currentSlide = 0;
        if (currentSlide < 0) currentSlide = splitSlides.length - 1;
        
        // Add active class to new slide and dot
        splitSlides[currentSlide].classList.add('active');
        if (dots[currentSlide]) dots[currentSlide].classList.add('active');
        
        // Add special animation class
        splitSlides[currentSlide].classList.add('animating');
        
        // Reset animation state after transition completes
        setTimeout(() => {
            isAnimating = false;
            splitSlides[currentSlide].classList.remove('animating');
        }, 800); // Match this with the CSS transition duration
    }

    // Next slide
    function nextSlide() {
        console.log('Next slide');
        goToSlide(currentSlide + 1);
        resetProgressBar();
    }

    // Previous slide
    function prevSlide() {
        console.log('Previous slide');
        goToSlide(currentSlide - 1);
        resetProgressBar();
    }

    // Progress bar functionality
    function startProgressBar() {
        if (progressBar) {
            progressBar.style.width = '0%';
            slideStartTime = Date.now();
            
            function updateProgress() {
                const elapsedTime = Date.now() - slideStartTime;
                const progress = Math.min((elapsedTime / slideDuration) * 100, 100);
                progressBar.style.width = `${progress}%`;
                
                if (progress < 100) {
                    requestAnimationFrame(updateProgress);
                }
            }
            
            requestAnimationFrame(updateProgress);
        }
    }

    function resetProgressBar() {
        if (progressBar) {
            progressBar.style.width = '0%';
            clearInterval(slideInterval);
            startProgressBar();
            slideInterval = setInterval(nextSlide, slideDuration);
        }
    }

    // Event listeners for navigation
    if (nextArrow) {
        nextArrow.addEventListener('click', (e) => {
            e.preventDefault();
            nextSlide();
        });
    }
    
    if (prevArrow) {
        prevArrow.addEventListener('click', (e) => {
            e.preventDefault();
            prevSlide();
        });
    }

    // Event listeners for dots
    if (dots.length > 0) {
        dots.forEach((dot, index) => {
            dot.addEventListener('click', (e) => {
                e.preventDefault();
                if (!isAnimating && currentSlide !== index) {
                    goToSlide(index);
                    resetProgressBar();
                }
            });
        });
    }

    // Initialize slider
    if (splitSlides.length > 0) {
        console.log('Initializing slider with', splitSlides.length, 'slides');
        
        // Start auto slide
        startProgressBar();
        slideInterval = setInterval(nextSlide, slideDuration);

        // Pause auto slide on hover
        const splitSlider = document.querySelector('.split-slider');
        if (splitSlider) {
            splitSlider.addEventListener('mouseenter', () => {
                clearInterval(slideInterval);
                // Pause the progress bar by storing current width
                if (progressBar) {
                    const currentWidth = progressBar.style.width;
                    progressBar.style.transition = 'none';
                    progressBar.style.width = currentWidth;
                }
            });
            
            splitSlider.addEventListener('mouseleave', () => {
                // Resume the progress bar
                if (progressBar) {
                    const elapsedTime = (parseFloat(progressBar.style.width || '0') / 100) * slideDuration;
                    const remainingTime = slideDuration - elapsedTime;
                    
                    progressBar.style.transition = 'width 0.1s linear';
                    slideStartTime = Date.now() - elapsedTime;
                    
                    function resumeProgress() {
                        const newElapsedTime = Date.now() - slideStartTime;
                        const progress = Math.min((newElapsedTime / slideDuration) * 100, 100);
                        progressBar.style.width = `${progress}%`;
                        
                        if (progress < 100) {
                            requestAnimationFrame(resumeProgress);
                        }
                    }
                    
                    requestAnimationFrame(resumeProgress);
                }
                
                slideInterval = setInterval(nextSlide, remainingTime || slideDuration);
            });
        }
        
        // Touch swipe functionality for mobile
        let touchStartX = 0;
        let touchEndX = 0;
        
        if (splitSlider) {
            splitSlider.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });
            
            splitSlider.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            }, { passive: true });
        }
        
        function handleSwipe() {
            const swipeThreshold = 50; // Minimum distance to be considered a swipe
            
            if (touchEndX < touchStartX - swipeThreshold) {
                // Swipe left, go to next slide
                nextSlide();
            } else if (touchEndX > touchStartX + swipeThreshold) {
                // Swipe right, go to previous slide
                prevSlide();
            }
        }
    }
    
    // Simple hover effect for features
    const features = document.querySelectorAll('.feature');
    if (features.length > 0) {
        features.forEach(feature => {
            feature.addEventListener('mouseenter', () => {
                feature.style.transform = 'translateY(-3px)';
            });
            
            feature.addEventListener('mouseleave', () => {
                feature.style.transform = 'translateY(0)';
            });
        });
    }
}
);

    // Mobile menu functionality
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    const navIcons = document.querySelector('.nav-icons');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navLinks.classList.toggle('active');
        navIcons.classList.toggle('active');
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!hamburger.contains(e.target) && !navLinks.contains(e.target) && !navIcons.contains(e.target)) {
            hamburger.classList.remove('active');
            navLinks.classList.remove('active');
            navIcons.classList.remove('active');
        }
    });

    // Parallax effect on mouse move
    document.querySelectorAll('.product-card').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 20;
            const rotateY = (centerX - x) / 20;
            
            card.style.setProperty('--mouse-x', `${rotateY}deg`);
            card.style.setProperty('--mouse-y', `${rotateX}deg`);
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.setProperty('--mouse-x', '0deg');
            card.style.setProperty('--mouse-y', '0deg');
        });
    });

    // Countdown Timer for Sales Section
    function updateCountdown() {
        const countdownTimers = document.querySelectorAll('.countdown-timer');
        
        countdownTimers.forEach(timer => {
            const endDate = new Date(timer.getAttribute('data-end')).getTime();
            const now = new Date().getTime();
            const timeLeft = endDate - now;
            
            if (timeLeft <= 0) {
                // If sale has ended
                timer.innerHTML = '<div class="sale-ended">Sale Ended</div>';
                timer.closest('.sale-card').classList.add('sale-expired');
                return;
            }
            
            // Calculate time units
            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
            
            // Update the timer display
            timer.querySelector('.days').textContent = days.toString().padStart(2, '0');
            timer.querySelector('.hours').textContent = hours.toString().padStart(2, '0');
            timer.querySelector('.minutes').textContent = minutes.toString().padStart(2, '0');
            timer.querySelector('.seconds').textContent = seconds.toString().padStart(2, '0');
        });
    }
    
    // Initialize countdown and update every second
    updateCountdown();
    setInterval(updateCountdown, 1000);
;

// Trending slider functionality is now in trending-slider.js

