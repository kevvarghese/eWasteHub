document.addEventListener("DOMContentLoaded", function () {
    const boxes = document.querySelectorAll(".box"); // Select all .box elements

    boxes.forEach(box => {
        const boxContent = box.querySelector(".box-content");
        box.addEventListener("mouseenter", function () {
            boxContent.style.maxHeight = "100px"; // Adjust height as needed
            boxContent.style.padding = "15px";
        });

        box.addEventListener("mouseleave", function () {
            boxContent.style.maxHeight = "0";
            boxContent.style.padding = "0 15px";
        });
    });
});

