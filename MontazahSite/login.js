const overlayEl = document.getElementById('overlay');
const dialogEl = document.getElementById('dialog');

// Function to show the dialog
function showDialog(content) {
    dialogEl.innerHTML = content;
    overlayEl.style.display = 'block';
}

// Function to close the dialog
function closeDialog() {
    overlayEl.style.display = 'none';
}

// Function to show the login form
function showLoginForm() {
    const loginFormContent = `
    <div class="custom-container">
        <div class="custom-heading">Sign In</div>
        <form action="" class="custom-form">
            <input required class="custom-input" type="email" name="email" id="email" placeholder="E-mail">
            <input required class="custom-input" type="password" name="password" id="password" placeholder="Password">
            <div class="checkbox-wrapper-65">
  <label for="cbk1-65">
    <input id="cbk1-65" type="checkbox">
    <span class="cbx">
      <svg viewBox="0 0 12 11" height="11px" width="12px">
        <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
      </svg>
    </span>
    <span>Remeber me</span>
  </label>
</div>



            <span class="forgot-password"><a onclick="showForgotPasswordForm()">Forgot Password ?</a></span>
            <input class="custom-login-button" type="submit" value="Sign In" onclick="performLogin()">
        </form>
        <div class="custom-social-account-container">
            <span class="title">Do not have an account! Sign up with:</span>
            <input class="custom-register-button" type="submit" value="Sign Up" onclick="showRegisterForm()">
            <input class="custom-social-button" type="submit" value="Cancel" onclick="closeDialog()">
        </div>
    </div>
    `;

    showDialog(loginFormContent);
}


// Function to show the login form
function showRegisterForm() {
    const RegisterFormContent = `
    <div class="custom-container">
        <div class="custom-heading">Sign Up</div>
      <p class="custom-p">Signup now and get full access to our app. </p>
        <form action="" class="custom-form">
        <input required class="custom-input" type="text" name="email" id="name" placeholder="Name">
            <input required class="custom-input" type="email" name="email" id="email" placeholder="E-mail">
            <input required class="custom-input" type="password" name="password" id="password" placeholder="Password">
            <input class="custom-input" type="password" placeholder="Confirm Password" id="confirmPassword" required>
            <div class="checkbox-wrapper-65">
            <label for="cbk1-65">
              <input id="cbk1-65" type="checkbox">
              <span class="cbx">
                <svg viewBox="0 0 12 11" height="11px" width="12px">
                  <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                </svg>
              </span>
              <span>you agree on our Privacy Policy for montaza site</span>
            </label>
          </div>   
          <input class="custom-login-button" type="submit" value="Sign Up" onclick="performRegister()">
        </form>
        <div class="custom-social-account-container">
            <span class="title">Do you have an account! Sign in with:</span>
            <input class="custom-register-button" type="submit" value="Sign In" onclick="showLoginForm()">
            <input class="custom-social-button" type="submit" value="Cancel" onclick="closeDialog()">
        </div>
    </div>
    `;

    showDialog(RegisterFormContent);
}

// Function to show the forgot password form
function showForgotPasswordForm() {
    const forgotPasswordFormContent = `
    <div class="custom-container">
        <div class="custom-logo-container">Forgot Password</div>
        <form action="" class="custom-form">
            <input required class="custom-input" type="email" name="email" id="forgotEmail" placeholder="E-mail">
        </form>
        <div class="custom-social-account-container">
            <button class="custom-register-button" onclick="sendOTP()">Send OTP</button>
            <button class="custom-social-button" onclick="closeDialog()">Cancel</button>
        </div>
        <p class="custom-agreement">Don't have an account?<a onclick="showRegisterForm()" class="custom-link"> Sign up now</a></p>
    </div>
    `;

    showDialog(forgotPasswordFormContent);
}

// Function to simulate sending OTP
function sendOTP() {
    const email = document.getElementById('forgotEmail').value;
    alert(`An OTP has been sent to ${email}. Please check your email.`);
    showOTPForm();
}

// Function to show OTP verification form
function showOTPForm() {
    const otpFormContent = `
    <div class="custom-container">
        <form class="custom-form">
            <div class="custom-title">OTP Verification</div>
            <p class="custom-message">We have sent a verification code to your mobile number</p>
            <div class="custom-inputs">
                <input id="input1" type="text" maxlength="1">
                <input id="input2" type="text" maxlength="1">
                <input id="input3" type="text" maxlength="1">
                <input id="input4" type="text" maxlength="1">
            </div>
        </form>
        <button onclick="verifyOTP()" class="custom-register-button">Verify OTP</button>
        <button class="custom-social-button" onclick="closeDialog()">Cancel</button>
    </div>
    `;

    showDialog(otpFormContent);
}

// Function to simulate OTP verification
function verifyOTP() {
    const otp = document.getElementById("input1").value;
    if (otp.trim() !== '') {
        showChangePasswordForm();
    } else {
        alert('Invalid OTP. Please try again.');
    }
}

// Function to show change password form
function showChangePasswordForm() {
    const changePasswordFormContent = `
    <div class="custom-container">
        <div class="custom-logo-container">Change Password</div>
        <form action="" class="custom-form">
            <input class="custom-input" type="password" placeholder="New Password" id="newPassword" required>
        </form>
        <form action="" class="custom-form">
            <input class="custom-input" type="password" placeholder="Confirm New Password" id="confirmNewPassword" required>
        </form>
        <button class="custom-register-button" onclick="changePassword()">Change Password</button>
        <button class="custom-social-button" onclick="closeDialog()">Cancel</button>
    </div>
    `;

    showDialog(changePasswordFormContent);
}

// Function to handle login (simulated)
function performLogin() {
    // Your login logic here (simulate success for demo)
    alert('Login successful!');
    closeDialog(); // Close dialog on successful login
}

// Function to handle login (simulated)
function performRegister() {
    // Your login logic here (simulate success for demo)
    alert('Register successful!');
    closeDialog(); // Close dialog on successful login
    showLoginForm();
}

// Function to handle changing password (simulated)
function changePassword() {
    const newPassword = document.getElementById('newPassword').value;
    const confirmNewPassword = document.getElementById('confirmNewPassword').value;

    if (newPassword !== confirmNewPassword) {
        alert('Passwords do not match. Please try again.');
        return;
    }

    // Your change password logic here (simulate success for demo)
    alert('Password changed successfully!');
    closeDialog(); // Close dialog on successful password change
}
