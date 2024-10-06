document.addEventListener("DOMContentLoaded", () => {
    // Select the form and table body elements
    const form = document.getElementById("create-ad-form");
    const adTableBody = document.querySelector("table tbody");
  
    // Generate a unique ID for each ad entry
    const generateAdId = () => Math.floor(Math.random() * 100000);
  
    // Function to create a new row in the table dynamically
    const createAdRow = (ad) => {
      const row = document.createElement("tr");
  
      // List of ad properties to be added to the row
      const fields = ["id", "title", "startDate", "endDate", "status"];
      fields.forEach(field => {
        const cell = document.createElement("td");
        cell.textContent = ad[field];
        row.appendChild(cell);
      });
  
      // Create a delete button for the row
      const actionsCell = document.createElement("td");
      const deleteButton = document.createElement("button");
      deleteButton.textContent = "Delete";
      deleteButton.addEventListener("click", () => row.remove());
      actionsCell.appendChild(deleteButton);
      row.appendChild(actionsCell);

      // Append the new row to the table body
      adTableBody.appendChild(row);
    };
  
    // Handle form submission and ad creation
    form.addEventListener("submit", (event) => {
      event.preventDefault();
  
      // Create a new ad object using form data
      const newAd = {
        id: generateAdId(),
        title: form["ad-title"].value,
        startDate: form["start-date"].value,
        endDate: form["end-date"].value,
        status: "Scheduled" // Default status
      };
  
      // Add the new ad to the table
      createAdRow(newAd);
  
      // Reset form after submission
      form.reset();
    });
  });