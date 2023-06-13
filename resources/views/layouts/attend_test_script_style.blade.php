<!-- Add Bootstrap CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">


  <!-- Include other HTML head elements -->
  <link rel="stylesheet" href="path/to/custom.css">

        <!-- Bootstrap core CSS -->
        <link href="fonts/oswald/stylesheet.css" rel="stylesheet"/> 
        <link href="css/bootstrap.min.css" rel="stylesheet"> 
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  

   <!-- Add the necessary CSS and JavaScript files -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>

      
  body {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 110vh;
      margin: 0;
      background-image: url("https://img.freepik.com/free-vector/geometric-blue-background-desktop-wallpaper-vector_53876-135927.jpg?w=1060&t=st=1686288162~exp=1686288762~hmac=19c1bce5236bdabfbabe5518c81f4cc5472bfdb8f82633840f0b6894ae69be12");
      background-size: cover;
    }

    p{
        margin-bottom: 20px ;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 7px;
        color: white;
        font-size:12px;
    }
    .time{
        margin-bottom: 20px ;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 7px;
        color: white;
        font-size:12px;

    }

    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
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

 .pagination a:hover{
  color: green;
 }
/* Pagination styles */
.my-pagination-class .page-link {
  color: green; /* Default color for pagination links */
  border: 1px solid #dee2e6; /* Default border color for pagination links */
}

.my-pagination-class .page-item.active .page-link {
  background-color: green; /* Color for active page */
  border-color: green; /* Border color for active page */
  color: white; /* Text color for active page */
}

.options-container {
        display: flex;
        align-items: center;
    }

    .letter {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: green;
        color: white;
        margin-right: 3px;
    }

    .option {
        display: flex;
        align-items: center;
        margin-right: 40px;
    }

    .option input[type="radio"] {
        margin-right: 10px;
    }
    .question-text {
  font-size: 20px; /* Add your desired font-size value */
  margin-left:15px;
  color: white;
}
.counter{

    font-size: 15px; /* Add your desired font-size value */
  margin-left:15px;
  color: white;

}
.test {
      color: white;
      font-size: 60px;
      font-weight: bold;
      text-align: center;
      margin-top: 70px;
    }
label{

      color: white;
      font-size: 15px;
      font-weight: bold;
      text-align: center;
      margin-top: 9px;
}


</style>


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