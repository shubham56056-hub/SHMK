<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup Modal</title>
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 0;
    margin: 0;
}

nav {
    background-color: #333;
    color: white;
    padding: 10px;
    text-align: right;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

#userWelcome {
    float: left;
    margin-left: 20px;
    font-size: 16px;
}

/* Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.7);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background-color: #fff;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 300px;
    border-radius: 8px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

input, select, textarea, button {
    display: block;
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 4px;
    border: 1px solid #ccc;
}

button {
    background-color: #5cb85c;
    color: white;
    cursor: pointer;
}

button:hover {
    background-color: #4cae4c;
}

#loginMessage, #signupMessage, #forgotMessage {
    text-align: center;
    margin-top: 10px;
    color: green;
}

    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#" onclick="toggleModal('loginModal')">Login</a></li>
            <li><a href="#" onclick="toggleModal('signupModal')">Sign Up</a></li>
        </ul>
        <div id="userWelcome" style="display: none;">
            <p>Welcome, <span id="userName"></span>!</p>
        </div>
    </nav>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="toggleModal('loginModal')">&times;</span>
            <h2>Login</h2>
            <form id="loginForm" action="login.php" method="POST">
                <label for="loginEmail">Email</label>
                <input type="email" id="loginEmail" name="email" required>
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="password" required>
                <button type="submit">Login</button>
            </form>
            <p><a href="#" onclick="toggleModal('forgotPasswordModal')">Forgot Password?</a></p>
            <div id="loginMessage"></div>
        </div>
    </div>

    <!-- Signup Modal -->
    <div id="signupModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="toggleModal('signupModal')">&times;</span>
            <h2>Sign Up</h2>
            <form id="signupForm" action="signup.php" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" name="mobile" required>

                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>

                <label for="address">Address</label>
                <textarea id="address" name="address" required></textarea>

                <button type="submit">Sign Up</button>
            </form>
            <div id="signupMessage"></div>
        </div>
    </div>

    <!-- Forgot Password Modal -->
    <div id="forgotPasswordModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="toggleModal('forgotPasswordModal')">&times;</span>
            <h2>Forgot Password</h2>
            <form id="forgotPasswordForm" action="forgot_password.php" method="POST">
                <label for="forgotEmail">Email</label>
                <input type="email" id="forgotEmail" name="email" required>
                <label for="new_password">New Password</label>
                <input type="password" id="new_password" name="new_password" required>
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                <button type="submit">Update Password</button>
            </form>
            <div id="forgotMessage"></div>
        </div>
    </div>

    <script >
        function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = modal.style.display === 'flex' ? 'none' : 'flex';
}

// Auto-close modal when clicked outside
window.onclick = function(event) {
    const modals = document.getElementsByClassName('modal');
    Array.from(modals).forEach(modal => {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
}

// After successful signup, show success message and redirect to login
const signupForm = document.getElementById('signupForm');
signupForm.addEventListener('submit', function(event) {
    event.preventDefault();
    // Simulating form submission
    document.getElementById('signupMessage').textContent = 'Signup successful! Redirecting to login...';
    setTimeout(() => {
        toggleModal('signupModal');
        toggleModal('loginModal');
    }, 2000); // Redirect after 2 seconds
});

// After successful password update, show success message and redirect to login
const forgotPasswordForm = document.getElementById('forgotPasswordForm');
forgotPasswordForm.addEventListener('submit', function(event) {
    event.preventDefault();
    // Simulating form submission
    document.getElementById('forgotMessage').textContent = 'Password updated successfully! Redirecting to login...';
    setTimeout(() => {
        toggleModal('forgotPasswordModal');
        toggleModal('loginModal');
    }, 2000); // Redirect after 2 seconds
});

    </script>
</body>
</html>
