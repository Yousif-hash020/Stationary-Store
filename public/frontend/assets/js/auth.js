document.addEventListener('DOMContentLoaded', function() {
  // Tab switching functionality
  const tabs = document.querySelectorAll('.auth-tab');
  const forms = document.querySelectorAll('.auth-form');
  
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const target = tab.dataset.tab;
      
      // Update active tab
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      
      // Show corresponding form
      forms.forEach(form => {
        form.classList.remove('active');
        if (form.id === `${target}-form`) {
          form.classList.add('active');
        }
      });
    });
  });
  
  // Password visibility toggle
  const toggleButtons = document.querySelectorAll('.toggle-password');
  
  toggleButtons.forEach(button => {
    button.addEventListener('click', () => {
      const passwordField = button.previousElementSibling;
      const icon = button.querySelector('i');
      
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        passwordField.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    });
  });
  
  // Password strength meter
  const passwordInput = document.getElementById('signup-password');
  const strengthMeter = document.querySelector('.strength-meter span');
  const strengthText = document.querySelector('.strength-text');
  
  if (passwordInput) {
    passwordInput.addEventListener('input', updateStrengthMeter);
  }
  
  function updateStrengthMeter() {
    const password = passwordInput.value;
    let strength = 0;
    let status = '';
    
    if (password.length >= 8) strength += 25;
    if (password.match(/[a-z]+/)) strength += 25;
    if (password.match(/[A-Z]+/)) strength += 25;
    if (password.match(/[0-9]+/) || password.match(/[^a-zA-Z0-9]+/)) strength += 25;
    
    strengthMeter.style.width = `${strength}%`;
    
    if (strength <= 25) {
      strengthMeter.style.background = '#ff4d4d';
      status = 'Weak';
    } else if (strength <= 50) {
      strengthMeter.style.background = '#ffa500';
      status = 'Fair';
    } else if (strength <= 75) {
      strengthMeter.style.background = '#ffff00';
      status = 'Good';
    } else {
      strengthMeter.style.background = '#00b300';
      status = 'Strong';
    }
    
    strengthText.textContent = `Password strength: ${status}`;
  }
  
  // Form submission handling
  const loginForm = document.getElementById('login-form');
  const signupForm = document.getElementById('signup-form');
  
  if (loginForm) {
    loginForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Get form data
      const email = document.getElementById('login-email').value;
      const password = document.getElementById('login-password').value;
      const rememberMe = document.getElementById('remember-me').checked;
      
      // Here you would typically send this data to your backend
      console.log('Login attempt:', { email, password, rememberMe });
      
      // For demonstration purposes only - you'll replace this with your actual backend call
      alert('Login functionality will be connected to backend');
      
      // You can redirect the user after successful login
      // window.location.href = 'index.html';
    });
  }
  
  if (signupForm) {
    signupForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Get form data
      const name = document.getElementById('signup-name').value;
      const email = document.getElementById('signup-email').value;
      const password = document.getElementById('signup-password').value;
      const confirmPassword = document.getElementById('signup-confirm-password').value;
      const termsAccepted = document.getElementById('terms').checked;
      
      // Basic validation
      if (password !== confirmPassword) {
        alert('Passwords do not match!');
        return;
      }
      
      // Here you would typically send this data to your backend
      console.log('Signup attempt:', { name, email, password, termsAccepted });
      
      // For demonstration purposes only - you'll replace this with your actual backend call
      alert('Signup functionality will be connected to backend');
      
      // You can redirect the user or switch to login tab after successful signup
      // tabs[0].click(); // Switch to login tab
    });
  }
  
  // Mobile menu toggle
  const hamburger = document.querySelector('.hamburger');
  const navLinks = document.querySelector('.nav-links');
  
  if (hamburger) {
    hamburger.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      hamburger.classList.toggle('active');
    });
  }
});