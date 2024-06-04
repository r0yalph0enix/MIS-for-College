// Wait for the DOM content to be fully loaded
document.addEventListener("DOMContentLoaded", function () {
  // Select the "Add Resource" buttons and the form
  const addResourceButton1 = document.querySelector("#addResource1");
  const addResourceButton2 = document.querySelector("#addResource2");
  const addResourceButton3 = document.querySelector("#addResource3");
  const addResourceForm = document.querySelector("#addResourceForm");

  // Add event listener to the first "Add Resource" button
  addResourceButton1.addEventListener("click", function () {
    // Display the form
    addResourceForm.style.display = "block";
    // Hide the box
    document.querySelector(".box").style.display = "none";
  });

  // Add event listener to the second "Add Resource" button
  addResourceButton2.addEventListener("click", function () {
    // Display the form
    addResourceForm.style.display = "block";
    // Hide the box
    document.querySelector(".box").style.display = "none";
  });

  // Add event listener to the third "Add Resource" button
  addResourceButton3.addEventListener("click", function () {
    // Display the form
    addResourceForm.style.display = "block";
    // Hide the box
    document.querySelector(".box").style.display = "none";
  });
});

//       <<....................Form.............>>

// Function to handle form submission and display data in the table
document
  .getElementById("uploadResource")
  .addEventListener("click", function () {
    const inputs = [
      { id: "resourceTitle", errorId: "titleError" },
      { id: "resourceFile", errorId: "fileError" },
      { id: "resourceDate", errorId: "dateError" },
    ];

    const resourceDate = document.getElementById("resourceDate");
    const expiryDateError = document.getElementById("expiryDateError");
    const expiryDateMinError = document.getElementById("expiryDateMinError");
    const expiryDateMaxError = document.getElementById("expiryDateMaxError");

    const today = new Date();
    const minDate = new Date();
    // Minimum date is tomorrow
    minDate.setDate(today.getDate() + 1);
    const maxDate = new Date();
    // Maximum date is 6 months from now
    maxDate.setMonth(today.getMonth() + 6);

    if (resourceDate.valueAsNumber < minDate.getTime()) {
      expiryDateMinError.classList.remove("d-none");
    } else {
      expiryDateMinError.classList.add("d-none");
    }

    if (resourceDate.valueAsNumber > maxDate.getTime()) {
      expiryDateMaxError.classList.remove("d-none");
    } else {
      expiryDateMaxError.classList.add("d-none");
    }

    if (
      !expiryDateMinError.classList.contains("d-none") ||
      !expiryDateMaxError.classList.contains("d-none")
    ) {
      expiryDateError.classList.remove("d-none");
    } else {
      expiryDateError.classList.add("d-none");
    }

    inputs.forEach((input) => {
      const element = document.getElementById(input.id);
      const errorElement = document.getElementById(input.errorId);

      if (element.value.trim() === "") {
        errorElement.classList.remove("d-none");
      } else {
        errorElement.classList.add("d-none");
      }

      element.addEventListener("input", function () {
        if (element.value.trim() !== "") {
          errorElement.classList.add("d-none");
        }
      });
    });

    // If there are no errors, add the data to the table
    const hasErrors =
      document.querySelectorAll(".text-danger:not(.d-none)").length > 0;
    if (!hasErrors) {
      const table = document.getElementById("displayResource");
      // Insert new row at the end of the table
      const newRow = table.insertRow(-1);

      // Get file name without path
      const fileName = document
        .getElementById("resourceFile")
        .value.split("\\")
        .pop();

      newRow.innerHTML = `
                <td>${table.rows.length}</td>
                <td>${document.getElementById("resourceTitle").value}</td>
                <td>${fileName}</td>
                <td>${document.getElementById("resourceDate").value}</td>
                <td>
                    <button class="btn btn-primary view-button">View</button>
                    <button class="btn btn-danger delete-button">Delete</button>
                </td>
            `;

      // Add event listener to the delete button in the new row
      const deleteButton = newRow.querySelector(".delete-button");
      deleteButton.addEventListener("click", function (event) {
        // Prevent the default form submission behavior
        event.preventDefault();

        // Get the parent row and remove it from the table
        const row = deleteButton.closest("tr");
        const rowIndex = row.rowIndex - 1; // Adjust for header row if present

        // Remove the row from the table
        table.deleteRow(rowIndex - 1); // Adjust back for deletion

        // Update serial numbers for remaining rows
        for (let i = rowIndex; i < table.rows.length - 1; i++) {
          table.rows[i + 1].cells[0].textContent = i + 1; // Update the serial number
        }
      });

      // Add event listener to view button in the new row to view the file
      const viewButton = newRow.querySelector(".view-button");
      viewButton.addEventListener("click", function () {
        // Assuming you want to open the file in a new window/tab
        window.open(`path_to_your_files/${fileName}`, "_blank");
      });

      // Reset form
      document.getElementById("addResourceForm").reset();
    }
  });
