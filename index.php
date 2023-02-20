<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>CRUD Operation Using AJAX and PHP</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Container Start -->
    <div class="container"> 
        <h1 class="text-center">AJAX CRUD SYSTEM</h1>

        <div class="d-flex justify-content-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
               Add New User
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add User Here</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                        <div class="form-group">
                            <label for="exampleFormControlInput1">First Name: </label>
                            <input type="text" name="" id="firstname" class="form-control" placeholder="First Name">

                            <label class="pt-2" for="Last Name">Last Name: </label>
                            <input type="text" name="" id="lastname" class="form-control" placeholder="Last Name">

                            <label class="pt-2" for="Email">Email: </label>
                            <input type="email" name="" id="email" class="form-control" placeholder="Email">

                            <label class="pt-2" for="Email">Mobile: </label>
                            <input type="text" name="" id="phone" class="form-control" placeholder="Phone">
                        </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" onclick="addRecords()" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-danger">All Records</h2>
        <div class="records_contant">

        </div>




    <!-- Container End -->
    </div>





    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="/assets/js/custom.js"></script>
    <!-- Bootstrap core JavaScript -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
        function addRecords(){
            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var mobile = $('#mobile').val();

            $.ajax({
               url : "" 
            });
        }
    </script>

</body>

</html>