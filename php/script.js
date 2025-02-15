document.addEventListener("DOMContentLoaded", function () {
    const cityDropdown = document.querySelector("select[name='city']");
    const stateDropdown = document.querySelector("select[name='state']");
    const form = document.getElementById("productForm");

    const cities = {
        California: ["Los Angeles", "San Francisco", "San Diego"],
        Texas: ["Houston", "Austin", "Dallas"]
    };

    stateDropdown.addEventListener("change", function () {
        const selectedState = this.value;
        cityDropdown.innerHTML = '<option value="">Choose City</option>';

        if (selectedState && cities[selectedState]) {
            cities[selectedState].forEach(city => {
                const option = document.createElement("option");
                option.value = city;
                option.textContent = city;
                cityDropdown.appendChild(option);
            });
        }
    });

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(form);

        fetch("submit.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            form.reset();
        })
        .catch(error => console.error("Error:", error));
    });
});
