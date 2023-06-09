<!-- Add Bootstrap CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }

    h1 {
        text-align: center;
    }

    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    h3 {
        margin-bottom: 10px;
    }

    button[type="submit"] {
        display: block;
        margin-bottom: 20px;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
    button[type="button"] {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        text-decoration: none;
    }

    button[type="button"]:hover {
        background-color: #45a049;
    }
</style>


    <!-- Include Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('form').on('submit', function(e) {
                var form = $(this);
                var isValid = true;

                // Clear any previous error messages
                $('.error-message').remove();

                // Perform client-side validation
                var checkedRadios = form.find('input[type="radio"]:checked');
                if (checkedRadios.length === 0) {
                    var errorMessage = $('<div class="error-message" style="color:red">*Please select an option</div>');
                    form.prepend(errorMessage);
                    isValid = false;
                }
                
                // Prevent form submission if there are errors
                if (!isValid) {
                    e.preventDefault();
                }
            });
        });
    </script>