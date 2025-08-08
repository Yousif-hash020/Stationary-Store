// Shop Page JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Slideshow functionality
    const slides = document.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.indicator');
    let currentSlide = 0;
    let slideInterval;

    // Initialize slideshow
    function startSlideshow() {
        slideInterval = setInterval(nextSlide, 8000); // Change slide every 8 seconds
    }

    // Stop slideshow on user interaction
    function stopSlideshow() {
        clearInterval(slideInterval);
    }

    // Show a specific slide
    function showSlide(index) {
        // Remove active class from all slides and indicators
        slides.forEach(slide => slide.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));
        
        // Add active class to current slide and indicator
        slides[index].classList.add('active');
        indicators[index].classList.add('active');
        
        currentSlide = index;
    }

    // Next slide function
    function nextSlide() {
        let nextIndex = currentSlide + 1;
        if (nextIndex >= slides.length) {
            nextIndex = 0;
        }
        showSlide(nextIndex);
    }

    // Previous slide function
    function prevSlide() {
        let prevIndex = currentSlide - 1;
        if (prevIndex < 0) {
            prevIndex = slides.length - 1;
        }
        showSlide(prevIndex);
    }

    // No navigation buttons anymore

    // Event listeners for indicators
    if (indicators.length > 0) {
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', function() {
                stopSlideshow();
                showSlide(index);
                startSlideshow();
            });
        });

        // Start the slideshow
        startSlideshow();

        // Pause slideshow when hovering over it
        const slideshowContainer = document.querySelector('.slideshow-container');
        if (slideshowContainer) {
            slideshowContainer.addEventListener('mouseenter', stopSlideshow);
            slideshowContainer.addEventListener('mouseleave', startSlideshow);
        }
    }

    // DOM Elements for shop functionality
    const filterInputs = document.querySelectorAll('.filter-item input');
    const priceRangeMin = document.getElementById('priceRangeMin');
    const priceRangeMax = document.getElementById('priceRangeMax');
    const minPriceInput = document.getElementById('minPrice');
    const maxPriceInput = document.getElementById('maxPrice');
    const sortSelect = document.getElementById('sortSelect');
    const searchInput = document.querySelector('.search-bar input');
    const searchButton = document.querySelector('.search-bar button');
    const productsGrid = document.querySelector('.products-grid');
    const quickViewModal = document.getElementById('quickViewModal');
    const modalClose = document.querySelector('.modal-close');
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    const filterTags = document.querySelectorAll('.filter-tag i');
    const clearFiltersBtn = document.querySelector('.clear-filters-btn');
    const activeFilterTags = document.querySelector('.active-filter-tags');
    const priceSliderTrack = document.querySelector('.price-slider-track');
    const paginationNumbers = document.querySelectorAll('.pagination-number');
    const colorOptions = document.querySelectorAll('.color-option');
    const selectedColor = document.querySelector('.selected-color');
    const quantityBtns = document.querySelectorAll('.quantity-btn');
    const quantityInput = document.querySelector('.quantity-selector input');
    
    // Sample Product Data
    const products = [
        {
            id: 1,
            name: "Premium Fountain Pen",
            price: 79.99,
            originalPrice: 99.99,
            category: "Writing Instruments",
            brand: "Premium Collection",
            type: "Pens & Pencils",
            rating: 4.5,
            reviewCount: 128,
            image: "https://images.unsplash.com/photo-1583485088034-697b5bc54ccd?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
            description: "Experience the luxury of writing with our Premium Fountain Pen. Crafted with precision and elegance.",
            isNew: true,
            isBestseller: true,
            colors: ["Navy Blue", "Burgundy", "Charcoal", "Silver"]
        },
        {
            id: 2,
            name: "Premium Leather Notebook",
            price: 45.99,
            category: "Notebooks & Journals",
            brand: "Professional Series",
            type: "Notebooks",
            rating: 4,
            reviewCount: 86,
            image: "https://images.unsplash.com/photo-1544816155-12df9643f363?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
            description: "Handcrafted leather notebook with premium paper and elegant stitching.",
            isFeatured: true,
            colors: ["Brown", "Black", "Tan"]
        },
        {
            id: 3,
            name: "Professional Art Supply Set",
            price: 89.99,
            originalPrice: 112.99,
            category: "Art & Craft Supplies",
            brand: "Creative Tools",
            type: "Art Supplies",
            rating: 5,
            reviewCount: 214,
            image: "https://images.unsplash.com/photo-1572726729207-a78d6feb18d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
            description: "Complete art supply set with high-quality materials for professional artists.",
            isSale: true,
            discount: 20,
            colors: ["Multi"]
        },
        {
            id: 4,
            name: "Wooden Desk Organizer",
            price: 34.99,
            category: "Office Essentials",
            brand: "Professional Series",
            type: "Desk Organizers",
            rating: 4,
            reviewCount: 56,
            image: "https://images.unsplash.com/photo-1513116476489-7635e79feb27?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
            description: "Elegant wooden desk organizer with multiple compartments for office supplies.",
            colors: ["Natural Wood", "Dark Wood", "Black"]
        },
        {
            id: 5,
            name: "Premium Calligraphy Set",
            price: 59.99,
            category: "Writing Instruments",
            brand: "Creative Tools",
            type: "Art Supplies",
            rating: 5,
            reviewCount: 92,
            image: "https://images.unsplash.com/photo-1602178141046-bb4ce3748ef6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
            description: "Professional calligraphy set with premium nibs and ink.",
            isNew: true,
            colors: ["Black", "Gold"]
        },
        {
            id: 6,
            name: "Luxury Planner Set",
            price: 69.99,
            category: "Notebooks & Journals",
            brand: "Premium Collection",
            type: "Notebooks",
            rating: 4.5,
            reviewCount: 78,
            image: "https://images.unsplash.com/photo-1531346878377-a5be20888e57?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
            description: "Comprehensive luxury planner set with monthly and weekly layouts.",
            isLimited: true,
            colors: ["Navy", "Burgundy", "Forest Green"]
        },
        {
            id: 7,
            name: "Colorful Marker Set",
            price: 24.99,
            originalPrice: 29.99,
            category: "Art & Craft Supplies",
            brand: "Creative Tools",
            type: "Markers",
            rating: 4,
            reviewCount: 124,
            image: "https://images.unsplash.com/photo-1535016120720-40c646be5580?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
            description: "Set of vibrant markers perfect for illustrations and creative projects.",
            isSale: true,
            discount: 15,
            colors: ["Multi"]
        },
        {
            id: 8,
            name: "Vintage Pencil Case",
            price: 19.99,
            category: "School Supplies",
            brand: "Student Essentials",
            type: "Organizers",
            rating: 5,
            reviewCount: 67,
            image: "https://images.unsplash.com/photo-1522152553383-8fcfcaae4560?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
            description: "Stylish vintage-inspired pencil case with multiple compartments.",
            isTrending: true,
            colors: ["Brown", "Navy", "Burgundy"]
        }
    ];

    // Mobile Navigation Toggle
    if (hamburger) {
        hamburger.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
    }
    
    // Filter and Sort Products
    function filterAndSortProducts() {
        const selectedCategories = Array.from(document.querySelectorAll('input[name="category"]:checked')).map(input => input.value);
        const selectedBrands = Array.from(document.querySelectorAll('input[name="brand"]:checked')).map(input => input.value);
        const selectedTypes = Array.from(document.querySelectorAll('input[name="type"]:checked')).map(input => input.value);
        const selectedFeatures = Array.from(document.querySelectorAll('input[name="feature"]:checked')).map(input => input.value);
        const selectedColors = Array.from(document.querySelectorAll('input[name="color"]:checked')).map(input => input.value);
        const selectedRating = document.querySelector('input[name="rating"]:checked')?.value;
        const minPrice = parseFloat(minPriceInput.value) || 0;
        const maxPrice = parseFloat(maxPriceInput.value) || 200;
        const searchTerm = searchInput?.value.toLowerCase() || '';
        const sortBy = sortSelect?.value || 'featured';

        let filteredProducts = products.filter(product => {
            const matchesCategory = selectedCategories.length === 0 || selectedCategories.includes(product.category.toLowerCase().replace(/\s+/g, '-'));
            const matchesBrand = selectedBrands.length === 0 || selectedBrands.includes(product.brand.toLowerCase().replace(/\s+/g, '-'));
            const matchesType = selectedTypes.length === 0 || selectedTypes.includes(product.type.toLowerCase().replace(/\s+/g, '-'));
            const matchesPrice = product.price >= minPrice && product.price <= maxPrice;
            const matchesSearch = !searchTerm || product.name.toLowerCase().includes(searchTerm) || 
                                product.description.toLowerCase().includes(searchTerm) ||
                                product.category.toLowerCase().includes(searchTerm);
            
            // Features matching
            const matchesFeatures = selectedFeatures.length === 0 || (
                (selectedFeatures.includes('new') && product.isNew) ||
                (selectedFeatures.includes('trending') && product.isTrending) ||
                (selectedFeatures.includes('featured') && product.isFeatured) ||
                (selectedFeatures.includes('sale') && product.isSale) ||
                (selectedFeatures.includes('limited') && product.isLimited) ||
                (selectedFeatures.includes('bestseller') && product.isBestseller)
            );
            
            // Colors matching
            const matchesColors = selectedColors.length === 0 || product.colors.some(color => 
                selectedColors.includes(color.toLowerCase())
            );
            
            // Rating matching
            let matchesRating = true;
            if (selectedRating) {
                const minRating = parseInt(selectedRating.split('-')[0]);
                matchesRating = product.rating >= minRating;
            }

            return matchesCategory && matchesBrand && matchesType && matchesPrice && 
                   matchesSearch && matchesFeatures && matchesColors && matchesRating;
        });

        // Sort products
        switch(sortBy) {
            case 'price-low':
                filteredProducts.sort((a, b) => a.price - b.price);
                break;
            case 'price-high':
                filteredProducts.sort((a, b) => b.price - a.price);
                break;
            case 'newest':
                filteredProducts.sort((a, b) => (b.isNew ? 1 : 0) - (a.isNew ? 1 : 0));
                break;
            case 'trending':
                filteredProducts.sort((a, b) => (b.isTrending ? 1 : 0) - (a.isTrending ? 1 : 0));
                break;
            case 'bestselling':
                filteredProducts.sort((a, b) => (b.isBestseller ? 1 : 0) - (a.isBestseller ? 1 : 0));
                break;
            case 'rating':
                filteredProducts.sort((a, b) => b.rating - a.rating);
                break;
            case 'featured':
            default:
                filteredProducts.sort((a, b) => (b.isFeatured ? 1 : 0) - (a.isFeatured ? 1 : 0));
                break;
        }

        updateActiveFilters(selectedCategories, selectedBrands, selectedTypes, selectedFeatures, minPrice, maxPrice);
        
        // If we were dynamically generating products, we would call displayProducts here
        // displayProducts(filteredProducts);
        
        // For now, just log the filtered products
        console.log(`Filtered to ${filteredProducts.length} products`);
        console.log(filteredProducts);
    }
    
    // Update active filters display
    function updateActiveFilters(categories, brands, types, features, minPrice, maxPrice) {
        if (!activeFilterTags) return;
        
        // Clear existing tags
        activeFilterTags.innerHTML = '';
        
        // Add category tags
        categories.forEach(category => {
            const readableCategory = category.replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
            addFilterTag(readableCategory);
        });
        
        // Add brand tags
        brands.forEach(brand => {
            const readableBrand = brand.replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
            addFilterTag(readableBrand);
        });
        
        // Add type tags
        types.forEach(type => {
            const readableType = type.replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
            addFilterTag(readableType);
        });
        
        // Add feature tags
        features.forEach(feature => {
            const readableFeature = feature.replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
            addFilterTag(readableFeature);
        });
        
        // Add price range tag
        if (minPrice > 0 || maxPrice < 200) {
            addFilterTag(`$${minPrice} - $${maxPrice}`);
        }
    }
    
    // Add a filter tag to the active filters
    function addFilterTag(text) {
        const tag = document.createElement('span');
        tag.className = 'filter-tag';
        tag.innerHTML = `${text} <i class="fas fa-times"></i>`;
        
        // Add click event to remove tag
        tag.querySelector('i').addEventListener('click', function() {
            tag.remove();
            // Here you would also uncheck the corresponding filter
        });
        
        activeFilterTags.appendChild(tag);
    }
    
    // Quick View Modal
    const quickViewBtns = document.querySelectorAll('.product-action-btn.view');
    
    quickViewBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            if (quickViewModal) {
                quickViewModal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    });
    
    if (modalClose) {
        modalClose.addEventListener('click', function() {
            quickViewModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
    }
    
    // Close modal when clicking outside
    if (quickViewModal) {
        quickViewModal.addEventListener('click', function(e) {
            if (e.target === quickViewModal) {
                quickViewModal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
    }
    
    // Color Selection in Quick View
    if (colorOptions && colorOptions.length > 0) {
        colorOptions.forEach(option => {
            option.addEventListener('click', function() {
                colorOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');
                if (selectedColor) {
                    selectedColor.textContent = this.getAttribute('data-color');
                }
            });
        });
    }
    
    // Quantity Selector
    if (quantityBtns && quantityBtns.length > 0 && quantityInput) {
        quantityBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const isPlus = this.classList.contains('plus');
                let value = parseInt(quantityInput.value);
                
                if (isPlus) {
                    if (value < parseInt(quantityInput.max) || !quantityInput.max) {
                        quantityInput.value = value + 1;
                    }
                } else {
                    if (value > parseInt(quantityInput.min)) {
                        quantityInput.value = value - 1;
                    }
                }
            });
        });
    }
    
    // Filter Tags
    if (filterTags && filterTags.length > 0) {
        filterTags.forEach(tag => {
            tag.addEventListener('click', function() {
                this.parentElement.remove();
            });
        });
    }
    
    // Clear All Filters
    if (clearFiltersBtn && activeFilterTags) {
        clearFiltersBtn.addEventListener('click', function() {
            activeFilterTags.innerHTML = '';
            // Here you would also uncheck all filter inputs
            document.querySelectorAll('.filter-item input[type="checkbox"]:checked').forEach(input => {
                input.checked = false;
            });
            
            // Reset price range
            if (minPriceInput && maxPriceInput) {
                minPriceInput.value = 0;
                maxPriceInput.value = 200;
            }
            
            if (priceRangeMin && priceRangeMax) {
                priceRangeMin.value = 0;
                priceRangeMax.value = 200;
                updateTrack();
            }
            
            // Trigger filter update
            filterAndSortProducts();
        });
    }
    
    // Price Range Slider
    function updateTrack() {
        if (!priceRangeMin || !priceRangeMax || !priceSliderTrack) return;
        
        const min = parseInt(priceRangeMin.value);
        const max = parseInt(priceRangeMax.value);
        const minPercent = (min / parseInt(priceRangeMin.max)) * 100;
        const maxPercent = (max / parseInt(priceRangeMax.max)) * 100;
        
        priceSliderTrack.style.left = minPercent + '%';
        priceSliderTrack.style.width = (maxPercent - minPercent) + '%';
    }
    
    // Initialize price slider
    if (priceRangeMin && priceRangeMax && minPriceInput && maxPriceInput) {
        // Initialize
        updateTrack();
        
        // Event listeners
        priceRangeMin.addEventListener('input', function() {
            const min = parseInt(this.value);
            const max = parseInt(priceRangeMax.value);
            
            if (min > max) {
                priceRangeMax.value = min;
                maxPriceInput.value = min;
            }
            
            minPriceInput.value = min;
            updateTrack();
            filterAndSortProducts();
        });
        
        priceRangeMax.addEventListener('input', function() {
            const min = parseInt(priceRangeMin.value);
            const max = parseInt(this.value);
            
            if (max < min) {
                priceRangeMin.value = max;
                minPriceInput.value = max;
            }
            
            maxPriceInput.value = max;
            updateTrack();
            filterAndSortProducts();
        });
        
        minPriceInput.addEventListener('change', function() {
            const min = parseInt(this.value);
            const max = parseInt(maxPriceInput.value);
            
            if (min > max) {
                this.value = max;
            }
            
            priceRangeMin.value = this.value;
            updateTrack();
            filterAndSortProducts();
        });
        
        maxPriceInput.addEventListener('change', function() {
            const min = parseInt(minPriceInput.value);
            const max = parseInt(this.value);
            
            if (max < min) {
                this.value = min;
            }
            
            priceRangeMax.value = this.value;
            updateTrack();
            filterAndSortProducts();
        });
    }
    
    // Pagination
    if (paginationNumbers && paginationNumbers.length > 0) {
        paginationNumbers.forEach(number => {
            number.addEventListener('click', function() {
                paginationNumbers.forEach(num => num.classList.remove('active'));
                this.classList.add('active');
                // Here you would load the corresponding page of products
            });
        });
    }
    
    // Filter Checkboxes
    if (filterInputs && filterInputs.length > 0) {
        filterInputs.forEach(input => {
            input.addEventListener('change', function() {
                filterAndSortProducts();
            });
        });
    }
    
    // Sort Select
    if (sortSelect) {
        sortSelect.addEventListener('change', function() {
            filterAndSortProducts();
        });
    }
    
    // Search Functionality
    if (searchInput && searchButton) {
        searchButton.addEventListener('click', function() {
            filterAndSortProducts();
        });
        
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                filterAndSortProducts();
            }
        });
    }
    
    // Initialize
    filterAndSortProducts();
});