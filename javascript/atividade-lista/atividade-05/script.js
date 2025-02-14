function changeColor() {
    var colors = ["red", "blue", "green", "yellow", "purple"];
    var box = document.getElementById("box");
    box.style.backgroundColor = colors[(new Date().getSeconds()) % colors.length];
}