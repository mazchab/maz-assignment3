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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
            <div class="container" style="padding-top:200px; display:inline-block">

                    <!-- CK: HAVE THE FORM RELOAD WITH THE PROVIDED PARAMETER -->
            
                    <form action="">
                        <div class="form-group my-5">
                            <div class="row">
                                <div class="input-group mb-3">
            
                                    <!-- CK: DEFINING SEARCH PARAMETER NAME -->
            
                                    <div class="wrapper">
                                        <div class="search-box">
                                            <input type="text" class="input" name="s" id="search" placeholder="search">
                                    
                                        <div class="btn">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                    
            
                                </div>
                            </div>  
                        </div>
                    </form>
            
                    <!-- CK: INCLUDING A NEW FILE FOR MODULARITY -->
                    <div class="col-6">
                    <? include "results.php" ?>
                    </div>
            </div>

	</body>
</html>