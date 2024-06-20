const contactUsForm = document.getElementById('contact-us-form');

if(contactUsForm) {
  contactUsForm.addEventListener('submit', (event) => {
    event.preventDefault(); // Prevent the default form submission behavior
  
    // Get the form data
    const formData = new FormData(contactUsForm);
  
    // Send the AJAX request
    sendContactusFormData(formData);
  });
  
  function sendContactusFormData(formData) {
      console.log('Form Data:', formData );
      // const csrfToken = document.querySelector('input[name="_csrf"]').value;
      fetch('/interest-form', {
        method: 'POST',
        body: formData,
        headers: {
          // 'CSRF-Token': csrfToken
        }
      })
      .then(response => response.json())
      .then(data => {
        // Handle the response from the server
        if (data.success) {
          // Form data is valid, you can perform further actions here
          console.log('Form data is valid');
        } else {
          // Form data is invalid, display the errors
          displayErrors(data.errors);
        }
      })
      .catch(error => {
        console.error('Error:', error);
      });
    }
}
  
function displayErrors(errors) {
  // Clear any existing error messages
  const errorContainer = document.getElementById('errorContainer');
  errorContainer.innerHTML = '';

  // Loop through the errors and display them
  for (const field in errors) {
    const errorMessage = document.createElement('div');
    errorMessage.textContent = `${field}: ${errors[field]}`;
    errorContainer.appendChild(errorMessage);
  }
}

  
  const interestForm = document.getElementById('interest-form');
  $(document).ready(function() {

    if (interestForm.length) {
        interestForm.on('submit', function(e) {
            e.preventDefault();
            const formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: 'functions/interestForm.php',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Form submitted successfully
                        interestForm[0].reset();
                        showSuccessModal();
                    } else {
                      // Form submission failed
                      if (response.errors) {
                          // Display validation errors
                          displayErrors(response.errors);
                      } else {
                          // Display a generic error message
                          displayErrors(response.error);
                      }
                  }
                },
            });
        });
      }
    })
  

  
  
  const reviewForm = document.getElementById('review-form');

  if(reviewForm) {

  }
  
  function sendReviewFormData(formData) {

    console.log('Form Data:', formData );
    fetch('/review-form', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then((data) => {
      // Handle the response from the server
      if(data.success) {
        finishModal();
        setTimeout(() =>{
          window.location.href = '/';
        }, 4000);
      } 
      else {
        // Form data is invalid, display the errors
        displayErrors(data.errors);
      }
    })
    .catch((err) => {
      console.error(err);
    })
  }
  
  function displayErrors(error) {
    
    // Clear any existing error messages
    const errorContainer = document.getElementById('errorContainer');
    errorContainer.innerHTML = '';
  
    // Display the error message
    const errorMessage = document.createElement('div');
    for (const field in errors) {
      const errorMessage = `<div class="error-message">${field}: ${errors[field]}</div>`;
      errorContainer.append(errorMessage);
  }
  }

function finishModal() {
  document.getElementById('interest').style.padding = "0";
  document.getElementById('interest').style.width = "0%";
  document.getElementById('finMod').style.left = "50%";
}
