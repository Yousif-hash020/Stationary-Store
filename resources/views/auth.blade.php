<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login & Signup - Stationary Store</title>
    <link rel="stylesheet" href="{{ url('/frontend/assets/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ url('/frontend/assets/css/auth.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
  </head>
  <body>
 

    <!-- Auth Section -->
    <section class="auth-section">
      <div class="auth-container">
        <div class="auth-card">
          <div class="auth-header">
            <div class="auth-tabs">
              <button class="auth-tab active" data-tab="login">
                <i class="fas fa-sign-in-alt"></i> Login
              </button>
              <button class="auth-tab" data-tab="signup">
                <i class="fas fa-user-plus"></i> Sign Up
              </button>
            </div>
          </div>
          
          <div class="auth-body">
            <!-- Login Form -->
            <form id="login-form" class="auth-form active">
              <div class="form-group">
                <label for="login-email">
                  <i class="fas fa-envelope"></i> Email Address
                </label>
                <input 
                  type="email" 
                  id="login-email" 
                  placeholder="Enter your email" 
                  required
                />
              </div>
              
              <div class="form-group">
                <label for="login-password">
                  <i class="fas fa-lock"></i> Password
                </label>
                <div class="password-field">
                  <input 
                    type="password" 
                    id="login-password" 
                    placeholder="Enter your password" 
                    required
                  />
                  <button type="button" class="toggle-password">
                    <i class="fas fa-eye"></i>
                  </button>
                </div>
              </div>
              
              <div class="form-options">
                <div class="remember-me">
                  <input type="checkbox" id="remember-me" />
                  <label for="remember-me">Remember me</label>
                </div>
                <a href="#" class="forgot-password">Forgot Password?</a>
              </div>
              
              <button type="submit" class="auth-btn">
                <i class="fas fa-sign-in-alt"></i> Login
              </button>
              
              <div class="social-login">
                <p>Or login with</p>
                <div class="social-buttons">
                  <button type="button" class="social-btn google">
                    <i class="fab fa-google"></i> Google
                  </button>
                  <button type="button" class="social-btn facebook">
                    <i class="fab fa-facebook-f"></i> Facebook
                  </button>
                </div>
              </div>
            </form>
            
            <!-- Signup Form -->
            <form id="signup-form" class="auth-form">
              <div class="form-group">
                <label for="signup-name">
                  <i class="fas fa-user"></i> Full Name
                </label>
                <input 
                  type="text" 
                  id="signup-name" 
                  placeholder="Enter your full name" 
                  required
                />
              </div>
              
              <div class="form-group">
                <label for="signup-email">
                  <i class="fas fa-envelope"></i> Email Address
                </label>
                <input 
                  type="email" 
                  id="signup-email" 
                  placeholder="Enter your email" 
                  required
                />
              </div>
              
              <div class="form-group">
                <label for="signup-password">
                  <i class="fas fa-lock"></i> Password
                </label>
                <div class="password-field">
                  <input 
                    type="password" 
                    id="signup-password" 
                    placeholder="Create a password" 
                    required
                  />
                  <button type="button" class="toggle-password">
                    <i class="fas fa-eye"></i>
                  </button>
                </div>
                <div class="password-strength">
                  <div class="strength-meter">
                    <span></span>
                  </div>
                  <p class="strength-text">Password strength</p>
                </div>
              </div>
              
              <div class="form-group">
                <label for="signup-confirm-password">
                  <i class="fas fa-lock"></i> Confirm Password
                </label>
                <div class="password-field">
                  <input 
                    type="password" 
                    id="signup-confirm-password" 
                    placeholder="Confirm your password" 
                    required
                  />
                  <button type="button" class="toggle-password">
                    <i class="fas fa-eye"></i>
                  </button>
                </div>
              </div>
              
              <div class="form-options">
                <div class="terms-checkbox">
                  <input type="checkbox" id="terms" required />
                  <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                </div>
              </div>
              
              <button type="submit" class="auth-btn">
                <i class="fas fa-user-plus"></i> Create Account
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

   

    <script src="{{ url('/frontend/assets/js/auth.js') }}"></script>
  </body>
</html>