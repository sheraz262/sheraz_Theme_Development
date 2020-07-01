
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>DATABASE CREATING METHODS USING PHP</title>
  </head>
  <body>
  <div class="container-fluid">
  
    <header class="text-center p-5 bg-light">
        <h1>WELCOME TO CREATING YOUR FIRST DATABASE</h1>
    </header>

        <div class="container pt-5">
        <!-- fetch user form data with action attribute 
        when it is submitted it will go to createpage.php-->
            <form  action="create_page.php" method="post">
                <div class="form-group">
                    <label for="ptitle">Enter Your Name</label>
                    <!-- we will fetch values by given name attribute with
                    the same name of your coloumns that you have created 
                    in create-table.php file. -->
                    <input type="text" class="form-control" id="ptitle"  name="ptitle" placeholder="Enter Your Name">
                </div>

                <div class="form-group">
                    <label for="pdes">Descriptions</label>
                    <textarea class="form-control" name="pdes" id="pdes"  placeholder="Message" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>

  </div>
    












    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
