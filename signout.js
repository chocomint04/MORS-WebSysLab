document.addEventListener("DOMContentLoaded", () => {
  const signoutLinks = document.querySelectorAll(".signout");

  signoutLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault(); // prevent <a> default behavior
      firebase.auth().signOut().then(() => {
        sessionStorage.clear(); // optional, good practice
        localStorage.removeItem("appRole");
        window.location.replace("index.php"); // prevents back navigation
      }).catch((error) => {
        console.error("Sign out error:", error);
      });
    });
  });
});
