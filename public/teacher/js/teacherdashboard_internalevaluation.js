document.addEventListener("DOMContentLoaded", () => {
    const criteriaButton = document.getElementById("CriteriaButton");
    const criteriaDiv = document.getElementById("criteria");
    const formContainer1 = document.getElementById("SelectSubjectAndBatch");
  
    criteriaButton.addEventListener("click", () => {
      const subjectSelect = document.getElementById("subjectSelect");
      const batchSelect = document.getElementById("batchSelect");
  
      if (subjectSelect.value === "" || batchSelect.value === "") {
        if (subjectSelect.value === "") {
          subjectSelect.classList.add("is-invalid");
        } else {
          subjectSelect.classList.remove("is-invalid");
        }
        if (batchSelect.value === "") {
          batchSelect.classList.add("is-invalid");
        } else {
          batchSelect.classList.remove("is-invalid");
        }
      } else {
        subjectSelect.classList.remove("is-invalid");
        batchSelect.classList.remove("is-invalid");
  
        // Display the criteria div and hide the first form
        criteriaDiv.style.display = "block";
        formContainer1.style.display = "none";
      }
    });
  });
  
  function addRow() {
    const table = document
      .getElementById("dataTable")
      .getElementsByTagName("tbody")[0];
    const fullMarks =
      parseInt(document.getElementById("validationTooltipUsername").value) || 0;
    const totalMarks = calculateTotalMarks();
  
    if (totalMarks + 1 > fullMarks) {
      const fullMarksInput = document.getElementById("validationTooltipUsername");
      fullMarksInput.classList.add("is-invalid");
      fullMarksInput.nextElementSibling.textContent =
        "Adding a new row would exceed the Full Marks.";
      return;
    } else {
      document
        .getElementById("validationTooltipUsername")
        .classList.remove("is-invalid");
    }
  
    if (!validateAllRows()) {
      return;
    }
  
    const rowCount = table.rows.length;
    const row = table.insertRow(rowCount);
  
    const cell1 = row.insertCell(0);
    const cell2 = row.insertCell(1);
    const cell3 = row.insertCell(2);
  
    cell1.innerHTML = rowCount + 1;
    cell2.innerHTML = `<input type="text" id="criteria_${rowCount}_name" class="form-control marks" required>`;
    cell3.innerHTML = `<input type="number" id="criteria_${rowCount}_marks" class="form-control marks" min="0" required>`;
  }
  
  function calculateTotalMarks() {
    const marksInputs = document.querySelectorAll('.marks[type="number"]');
    let totalMarks = 0;
    for (let input of marksInputs) {
      totalMarks += parseInt(input.value) || 0;
    }
    return totalMarks;
  }
  
  function validateAllRows() {
    const criteriaInputs = document.querySelectorAll('.marks[type="text"]');
    const marksInputs = document.querySelectorAll('.marks[type="number"]');
  
    let isValid = true;
  
    for (let i = 0; i < criteriaInputs.length; i++) {
      if (criteriaInputs[i].value.trim() === "") {
        criteriaInputs[i].classList.add("is-invalid");
        criteriaInputs[i].nextElementSibling.textContent =
          "Please fill out this field.";
        isValid = false;
      } else {
        criteriaInputs[i].classList.remove("is-invalid");
      }
  
      if (marksInputs[i].value.trim() === "") {
        marksInputs[i].classList.add("is-invalid");
        marksInputs[i].nextElementSibling.textContent =
          "Please fill out this field.";
        isValid = false;
      } else {
        marksInputs[i].classList.remove("is-invalid");
      }
    }
  
    return isValid;
  }
  
  // Save button click event
  document.getElementById("saveButton").addEventListener("click", save);
  
  function save() {
    const fullMarks =
      parseInt(document.getElementById("validationTooltipUsername").value) || 0;
    const totalMarks = calculateTotalMarks();
  
    if (totalMarks !== fullMarks) {
      const fullMarksInput = document.getElementById("validationTooltipUsername");
      fullMarksInput.classList.add("is-invalid");
      fullMarksInput.nextElementSibling.textContent =
        "Sum of marks should be equal to Full Marks.";
      return;
    } else {
      document
        .getElementById("validationTooltipUsername")
        .classList.remove("is-invalid");
    }
  
    if (!validateAllRows()) {
      return;
    }
  
    // Perform save operation
    alert("Data saved successfully!");
  
    // Hide the criteria form and show the student table
    document.getElementById("criteria").style.display = "none";
    document.getElementById("StudentTable").style.display = "block";
  }
  