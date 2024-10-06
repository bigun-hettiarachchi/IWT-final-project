document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const mobile = document.getElementById('mobile').value;
        const message = document.getElementById('message').value;

        if (name && email && mobile && message) {
            alert("Thank you, " + name + ". Your message has been submitted successfully!");
            // Remove event.preventDefault() to allow form submission
            this.submit();  // Submit the form after validation
        } else {
            alert("Please fill in all fields.");
        }
    });

    document.querySelector(".login-btn").addEventListener("click", () => {
        alert("Login button clicked!");
    });

    document.querySelector(".signup-btn").addEventListener("click", () => {
        alert("Sign Up button clicked!");
    });
});
