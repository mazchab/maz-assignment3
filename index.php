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

        <div class="container-fluid my-3" style="width:100%">
            <form action="">
                <div class="input-group">
                    <input type="text" name="s" id="search" placeholder=">">
                </div> 
            </form>
        </div> 

        <div class="col-12" style="padding-top:10px">
            <? include "results.php" ?>                          
        </div>                              
                                    


	</body>
</html>