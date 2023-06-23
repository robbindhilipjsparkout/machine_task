

   <!-- Add the necessary CSS and JavaScript files -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>




    <!-- Include Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // $('form').on('.submit', function(e) {
            //     var form = $(this);  
            //     var isValid = true;

       $('.submit').click(function(e) {
        var form = $(this).closest('form');
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






