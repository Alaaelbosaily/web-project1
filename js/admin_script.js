let navbar = document.querySelector(".header1 .navbar");
let accountBox = document.querySelector(".header1 .account-box");

document.querySelector("#menu-btn").onclick = () => {
    navbar.classList.toggle("active");
    accountBox.classList.remove("active");
};

document.querySelector("#user-btn").onclick = () => {
    accountBox.classList.toggle("active");
    navbar.classList.remove("active");
};

window.onscroll = () => {
    navbar.classList.remove("active");
    accountBox.classList.remove("active");
};

document.querySelector("#close-update").onclick = () => {
    document.querySelector(".edit-product-form").style.display = "none";
    window.location.href = "admin_products.php";
};

let form = document.getElementById("myForm");

function handleForm(event) {
    event.preventDefault();
}
form.addEventListener("submit", handleForm);