// myscript.js
$(document).ready(function () {
  // Get the form element
  const myForm = $("#myForm");

  // Add a submit event listener to the form
  myForm.submit(function (event) {
    // Prevent the default form submission
    event.preventDefault();

    // Serialize the form data
    const formData = myForm.serialize();

    // Get input values
    var user_id_ = $('input[name="user_id_"]').val();
    var nome = $('input[name="nome"]').val();
    var email = $('input[name="email"]').val();
    var data_admissao = $('input[name="data_admissao"]').val();
    var data_insercao = $('input[name="data_insercao"]').val();
    var data_atualizacao = $('input[name="data_atualizacao"]').val();

    // Check if any input is blank
    if (!user_id_ || !nome || !email || !data_admissao || !data_insercao || !data_atualizacao)  {
      // Use SweetAlert for a better user experience
      Swal.fire({
        title: "Erro",
        text: "Preencha todos os campos",
        icon: "error",
        confirmButtonText: "OK",
      });
      return;
    }

    // Send the form data to the server using AJAX
    $.ajax({
      type: "POST",
      url: "insert_user.php", // Update with the correct PHP script URL
      data: formData,
      success: function (response) {
        // Handle the server response (success or error)
        Swal.fire({
          title: response.success ? "Form Submitted!" : "Error",
          text: response.message,
          icon: response.success ? "success" : "error",
          confirmButtonText: "OK",
        });
        getUsers();

        // If the form was submitted successfully, update the screen
        if (response.success) {
          // Implement the logic to update the screen with the new user
          // You can append the new user to a list, update a table, etc.
          console.log(response.user); // Log the user data for demonstration
        }
      },
      error: function (error) {
        // Handle the AJAX error
        console.error("AJAX Error:", error);
      },
    });
  });
});
