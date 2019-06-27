<html>
	<head>
		<title>Untitled</title>

        <!-- Internal Stylesheet -->
        <link rel="stylesheet" href="styles.css">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

        <!-- Font Awesome & Google Fonts-->
        <script src="https://kit.fontawesome.com/416b391c4f.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
	</head>

	<body>

        <div class="container-fluid my-2" style="text-align:center; align-items:center; position:absolute; top:5px">
            <div class="triangle-up" style="display:inline-block"></div>
        </div>
        <div class="container-fluid" style="text-align:center; align-items:center; margin-top:45px">
            <div><img src="logo.svg" style="width:4%"></div>
        </div>         
        
        <div class="container-fluid" style="padding-top:80px; display:inline-block; text-align:center">
        <div><h4><strong>Get in touch</strong></h4></div>
            <div class="row" style="justify-content:center; text-align:center">
                <div class="col-4" style="text-align:center; display:inline-block">
                    <div>
                        <p><strong>Email</strong></p>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email address">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Message...">
                            </div>

                            <button type="submit" id="emailSubmit" class="btn btn-success">Send</button>
                        </form>
                    </div>
                </div>

                <div class="col-4" style="text-align:center; display:inline-block">
                    <div>
                        <p><strong>SMS</strong></p>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" name="smsName" id="formGroupExampleInput4" value="<?php echo $name; ?>" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="smsNumber" id="formGroupExampleInput5" value="<?php echo $name; ?>" placeholder="Phone number">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" method="post" action="send.php" name="smsMessage" id="formGroupExampleInput6" placeholder="Message...">
                            </div>

                            <a href="send.php" class="btn btn-success">Send</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                                    


	</body>
</html>