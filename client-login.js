document.addEventListener("DOMContentLoaded", () => {
    const auth = firebase.auth();
    const loginButton = document.getElementById("button-client-login");
    const signupButton = document.getElementById("button-client-signup");
    const message = document.getElementById("message");

    auth.onAuthStateChanged((user) => {
        if (user && localStorage.getItem("appRole") === "client") {
            window.location.replace("client-dashboard.php");
        }
    });

    const attemptLogin = async () => {
        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value.trim();

        if (!email || !password) {
            message.style.color = "orange";
            message.textContent = "Please enter both email and password.";
            return;
        }

        try {
            await auth.signInWithEmailAndPassword(email, password);
            localStorage.setItem("appRole", "client");
            message.style.color = "green";
            message.textContent = "Login successful.";
            window.location.href = "client-dashboard.php";
        } catch (error) {
            message.style.color = "red";
            message.textContent = "Invalid email or password.";
        }
    };

    const attemptSignUp = async () => {
        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value.trim();

        if (!email || !password) {
            message.style.color = "orange";
            message.textContent = "Please enter both email and password.";
            return;
        }

        if (password.length < 6) {
            message.style.color = "orange";
            message.textContent = "Password must be at least 6 characters.";
            return;
        }

        try {
            await auth.createUserWithEmailAndPassword(email, password);
            localStorage.setItem("appRole", "client");
            message.style.color = "green";
            message.textContent = "Sign up successful.";
            window.location.href = "client-dashboard.php";
        } catch (error) {
            message.style.color = "red";

            if (error.code === "auth/email-already-in-use") {
                message.textContent = "Email already registered. Please log in.";
                return;
            }

            if (error.code === "auth/invalid-email") {
                message.textContent = "Invalid email format.";
                return;
            }

            message.textContent = "Unable to sign up right now. Please try again.";
        }
    };

    loginButton.addEventListener("click", attemptLogin);
    signupButton.addEventListener("click", attemptSignUp);

    document.getElementById("client-login-form").addEventListener("submit", (event) => {
        event.preventDefault();
        attemptLogin();
    });
});
