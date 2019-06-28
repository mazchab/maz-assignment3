<html>
	<head>
		<title>Untitled</title>

        <? include "head.php" ?>
	</head>

	<body>
    <div class="container-fluid my-2" style="text-align:center; align-items:center; position:fixed; top:5px">
        <a style="display:block; float:bottom" href="index.php"><div class="triangle-up" style="display:inline-block"></div></a>
        </div>
        <div class="container-fluid" style="width:100%; padding-top:50px">
            <form action="">
                <div class="input-group">
                    <input type="text" name="s" id="search" placeholder=">" style="font-family:'Noto Sans HK', sans-serif">
                </div> 
            </form>
        </div> 

        <div class="col-12" style="padding-top:10px">
            <? include "results.php" ?>                          
        </div>                              
          
        <div class="container-fluid" style="text-align:center; align-items:center; position:fixed; bottom:5px">
                <a style="display:block; float:bottom" href="contact.php"><div class="triangle-down"></div></a>
            </div>


	</body>
</html>