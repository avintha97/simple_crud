<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>simple crud application</title>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
  <script src="./jquery-3.6.3.min.js"></script>
  <!-- bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>



  <div class="container my-3">
    <h1 class="text-center">Simple CRUD Application using PHP and MYSQL</h1>
    <button type="button" class="btn btn-dark my-4" data-toggle="modal" data-target="#exampleModal">
      Add new User
    </button>
  </div>


  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group my-4">
              <label for="exampleFormControlInput1">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>

            <div class="form-group my-4">
              <label for="exampleFormControlInput1">Email</label>
              <input type="email" class="form-control" id="Email" placeholder="name@example.com">
            </div>

            <div class="form-group my-4">
              <label for="exampleFormControlInput1">Telephone No</label>
              <input type="text" class="form-control" id="telephone_no" placeholder="Enter your Telephone Number">
            </div>
            <div class="form-group my-4">
              <label for="exampleFormControlInput1">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Enter your Address">
            </div>


          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-dark" onclick="adduser()">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <!-- bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
 
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    function adduser() {

      var name =$('#name').val();
      var email =$('#Email').val();
      var address =$('#address').val();
      var tel =$('#telephone_no').val();

      $.ajax({
        url:"insert.php",
        type:"post",
        data:{
          Sname:name,
          Semail:email,
          Saddress:address,
          Stel:tel
        },
        success:function(data,status){
          // function to display data
          console.log(status);
        }
      })

    }
  </script>
</body>

</html>