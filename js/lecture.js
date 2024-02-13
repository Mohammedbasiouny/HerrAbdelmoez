// Function to show the selected box
function showBox() {
    const selectedBoxId = document.getElementById("box-number").value;

    const boxes = document.querySelectorAll(".box");
    boxes.forEach(box => {
        const boxId = getBoxId(box);
        const isVisible = !selectedBoxId || boxId === selectedBoxId;

        box.style.display = isVisible ? "block" : "none";

        if (isVisible) {
            box.scrollIntoView({ behavior: 'smooth' });
        }
    });
}

// Function to initialize the select options with available box IDs
function initializeSelectOptions() {
    const boxes = document.querySelectorAll(".box");
    const select = document.getElementById("box-number");

    boxes.forEach(box => {
        const boxId = getBoxId(box);
        const option = document.createElement("option");

        option.value = boxId;
        option.textContent = boxId;
        select.appendChild(option);
    });

    // Show all boxes when the page loads
    boxes.forEach(box => box.style.display = "block");
}

// Helper function to extract box ID
function getBoxId(box) {
    return box.id.replace("box-", "");
}

// Call the function to initialize select options when the page loads
window.onload = initializeSelectOptions; 