//  dom is fully loaded before looking for I
document.addEventListener('DOMContentLoaded', function() {
    
    // HTML onclick can see them
    window.showLogin = function() {
        document.getElementById('loginForm').style.display = 'block';
        document.getElementById('signupForm').style.display = 'none';

        document.getElementById('loginToggle').classList.add('active');
        document.getElementById('signupToggle').classList.remove('active');
    };

    window.showSignup = function() {
        document.getElementById('loginForm').style.display = 'none';
        document.getElementById('signupForm').style.display = 'block';

        document.getElementById('signupToggle').classList.add('active');
        document.getElementById('loginToggle').classList.remove('active');
    };
});