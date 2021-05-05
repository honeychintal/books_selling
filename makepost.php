<!doctype html>
<html lang="en">

<head>
    <!--javascript files start -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--javascript files end -->
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="partials/style.css">
    <title>ProjectZ</title>
</head>

<body>

    <?php include'partials/header.php';?>
    <h1>Upload Book Post!!</h1>
    <div class="container">
        <form action="partials/post_uplod.php" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Bname">Book Name</label>
                    <input type="text" class="form-control" id="bookname" name="booknam">
                    <h5 id="bonamchk"></h5>
                </div>
                <div class="form-group col-md-6">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="poisbn">
                    <h5 id="isbnchk"></h5>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="auth">Author</label>
                    <input type="text" class="form-control" id="auth" name="authname">
                    <h5 id="authchk"></h5>
                </div>
                <div class="form-group col-md-6">
                    <label for="ogprice">Original Price</label>
                    <input type="text" class="form-control" id="orgprice" name="ogpric">
                    <h5 id="ogpchk"></h5>
                </div>
                <div class="form-group col-md-6">
                    <label for="exprice">Expected Price</label>
                    <input type="text" class="form-control" id="exprice" name="expric">
                </div>
            </div>

            <div class="form-row">
                <label for="tarea1">Describe your book and its condition</label>
                <textarea class="form-control" id="tarea1" rows="3" name="describe"></textarea>
                <h5 id="deschk"></h5>
            </div>
            <break>
                <br>
                <div class="class form-row">
                    <label for="exampleFormControlTextarea1">Upload some pictures of your book</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="File1"
                                aria-describedby="inputGroupFileAddon01" required name="bookpic1">
                            <label class="custom-file-label" for="inputGroupFile01">Choose book cover image file
                            </label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="File2"
                                aria-describedby="inputGroupFileAddon01" required name="bookpic2">
                            <label class="custom-file-label" for="inputGroupFile01">Choose backside image of book file
                            </label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="File3"
                                aria-describedby="inputGroupFileAddon01" required name="bookpic3">
                            <label class="custom-file-label" for="inputGroupFile01">Choose random image of your book
                                file </label>
                        </div>
                    </div>
                </div>

                <label for="exampleFormControlTextarea1">Select categories of your book</label>
                <div class="form row">
                    <div class="form-group col-md-3">
                        <label for="inputState1">Genere</label>
                        <select id="inputState1" class="form-control" name="genr1">
                            <option value="">Choose...</option>
                            <?php include'partials/select.php';?>
                        </select>
                        <h5 id="selchk"></h5>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputState2">Genere</label>
                        <select id="inputState2" class="form-control" name="genr2">
                            <option selected value="">Choose...</option>
                            <?php include'partials/select.php';?>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputState3">Genere</label>
                        <select id="inputState3" class="form-control" name="genr3">
                            <option selected value="">Choose...</option>
                            <?php include'partials/select.php';?>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputState4">Genere</label>
                        <select id="inputState4" class="form-control" name="genr4">
                            <option selected value="">Choose...</option>
                            <?php include'partials/select.php';?>
                        </select>
                    </div>
                </div>

                <div class="form-group ">
                    <button type="submit" class="btn btn-primary col-md-12" id="subtn" name="booksubmit">Submit</button>
                </div>
                <script type="text/javascript" src="partials/jqryfile2.js"></script>
        </form>
    </div>

    </div>
    <?php include'partials/footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script> 
    <script type="text/javascript" src="partials/jqryfile.js"></script>-->
</body>

</html>