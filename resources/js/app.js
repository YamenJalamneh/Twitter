require('./bootstrap');
let tabs = document.querySelectorAll(".tab-x");
let boxes = document.querySelectorAll(".tab-pane");

tabs.forEach(function(el, key) {

    el.onclick = function() {
        boxes.forEach(function(box, key) {
            box.classList.remove("active");
        })
        boxes[key].classList.add("active");
    }

})

for (var i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace("active", "");
        this.className += "active";
    });
}
function notificationFunction() {
    document.getElementById(".myDiv").style.color = "red !important";
}

var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
};


