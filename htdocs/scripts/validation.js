window.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("feedbackForm");

  form.addEventListener("submit", function (e) {
    const errors = [];
    let firstInvalid = null;

    // Clear previous errors
    const errorContainer = document.getElementById("formErrors");
    errorContainer.innerHTML = "";
    errorContainer.style.color = "red";

    const firstName = form.first_name.value.trim();
    const lastName = form.last_name.value.trim();
    const email = form.email.value.trim();
    const gender = form.gender.value;
    const city = form.city.value;
    const message = form.message.value.trim();

    if (firstName === "") {
      errors.push("First name is required.");
      if (!firstInvalid) firstInvalid = form.first_name;
    }
    if (lastName === "") {
      errors.push("Last name is required.");
      if (!firstInvalid) firstInvalid = form.last_name;
    }
    if (email === "") {
      errors.push("Email is required.");
      if (!firstInvalid) firstInvalid = form.email;
    } else if (!/^\S+@\S+\.\S+$/.test(email)) {
      errors.push("Invalid email format.");
      if (!firstInvalid) firstInvalid = form.email;
    }

    if (!form.gender.value) {
      errors.push("Please select a gender.");
      if (!firstInvalid) firstInvalid = form.gender[0];
    }

    if (city === "") {
      errors.push("Please select a city.");
      if (!firstInvalid) firstInvalid = form.city;
    }

    if (message === "") {
      errors.push("Feedback message is required.");
      if (!firstInvalid) firstInvalid = form.message;
    }

    if (errors.length > 0) {
      e.preventDefault();

      errorContainer.innerHTML = "<ul><li>" + errors.join("</li><li>") + "</li></ul>";
      if (firstInvalid) firstInvalid.focus();
    }
  });
});
