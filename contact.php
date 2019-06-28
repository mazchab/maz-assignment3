<html>
	<head>
        <title>Untitled</title>

        <? include "head.php" ?>
	</head>

	<body>

        <div class="container-fluid my-2" style="text-align:center; align-items:center; position:fixed; top:5px">
        <a style="display:block; float:bottom" href="search.php"><div class="triangle-up" style="display:inline-block"></div></a>
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

                            <button type="submit" id="emailSubmit" class="btn btn-light" style="background-color:rgb(150, 216, 35); border:0; color:grey">Send</button>
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

                            <a href="send.php" class="btn btn-light" style="background-color:rgb(150, 216, 35); border:0; color:grey">Send</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                                    


	</body>
</html>