//check saved colors
let savedColors = localStorage.getItem("color_option");
//check saved color
if (savedColors !== null) {
    document.documentElement.style.setProperty("--main-color", savedColors);

    document.querySelectorAll(".color-list li").forEach((ele) => {
        ele.classList.remove("active");
        console.log(ele);
        if (ele.dataset.color === savedColors) {
            console.log(ele.dataset.color);
            console.log(savedColors);
            ele.classList.add("active");
        }
    });
}

//selcet landing page and array of images
let imgs = ["01.png", "02.jpg", "03.jpg", "04.jpg", "05.jpg"];
let landingPage = document.querySelector(".landing-page");

function sayhello() {
    console.log("hello world")
    console.log("hello world")
}
//change backimage after 4s
setInterval(() => {
    let randomNumber = Math.floor(Math.random() * imgs.length);

    landingPage.style.backgroundImage =
        'url("images/' + imgs[randomNumber] + '")';
}, 4000);

//settings icon click event
document.querySelector(".toggle-settings").onclick = function() {
    this.classList.toggle("fa-spin");
    document.querySelector(".settings-box").classList.toggle("open");
};

//select colors list
const colorLi = document.querySelectorAll(".color-list li");

//loop on all colors items
colorLi.forEach((li) => {
    //add click event on every element
    li.addEventListener("click", (e) => {
        //change main-color propety on every click
        document.documentElement.style.setProperty(
            "--main-color",
            e.target.dataset.color
        );

        //save selected item in local storage
        localStorage.setItem("color_option", e.target.dataset.color);

        e.target.parentElement.querySelectorAll(".active").forEach((element) => {
            element.classList.remove("active");
        });
        e.target.classList.add("active");
    });
});