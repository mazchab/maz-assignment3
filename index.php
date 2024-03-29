<html>
    <head>
        <? include "head.php" ?>
    </head>

    
    <body class="pp-viewing-section3">
    
        <div id="pagepiling">

            <!--------------------------------------------------------------------------------------------------- PagePiling: SECTION 1 begins here-->  
            
            <div class="section" id="section1" data-achor="page1" style="z-index:3; background-image:linear-gradient(rgb(255, 0, 230), rgb(171, 55, 231),rgb(76, 116, 232));">

                <div class="pp-tableCell" style="height:100%; position:fixed; top:20px;">

                    <div class="container-fluid" name="log-wrapper" style="justify-content:center; text-align:center; align-items:center; margin-top:0px">

                        <div><img src="logo.svg" style="width:4%"></div>

                    </div>


                    <div class="container-fluid" name="layout-wrapper" style="display:inline-block; padding-top:140px; padding-left:40px; padding-right:40px">

                        <div class="row">

                            <div class="col-4" name="intro-wrapper" style="text-align:center">

                                <div>
                                    <h4><strong style="font-size:32px; font-family: 'Titillium Web', sans-serif">Introduction</strong></h4>
                                    <p>Tired of reading through your lab results while not understanding what they are and what they mean to your body? The waiting period between receiving your results and getting a follow up appointment with your doctor can be stressful and and confusing. Lapp is a lab web application mashup that helps users undertand the biochemistry of their body by providing a simple definition of each molecule and it's building blocks. </p>
                                </div>

                            </div>


                            <div class="col-4" name="works-wrapper" style="text-align:center">
                            
                                <div>
                                    <h4><strong style="font-size:32px; font-family: 'Titillium Web', sans-serif">How it works</strong></h4>
                                    <p>Simple type the name of the molecule you want to search for, while this app is built for medical context, it can however, track any molecule and provide a simple and coherent definition. So, get your medical lab results and start typing!  </p>
                                </div>
                                
                            </div>


                            <div class="col-4" name="future-wrapper" style="text-align:center">

                                <div>
                                    <h4><strong style="font-size:32px; font-family: 'Titillium Web', sans-serif">Future ideas!</strong></h4>
                                    <p>Currently, this app provides reliable definitions of the molecules. However, future iterations will also include visual illustrations and vector drawings of each molecule. This will be helpful to understand the complexity of each molecule and the components that this molecule reacts or does not reach with.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!--------------------------------------------------------------------------------------------------- PagePiling: SECTION 2 begins here-->  

            <div class="section pp-scrollable" id="section2" data-achor="page2" style="z-index:2; background-image:linear-gradient(rgb(76, 116, 232), rgb(171, 55, 231),rgb(255, 0, 230));">

                <div class="container-fluid" style="width:100%; margin-top:20px">

                    <form action="">

                        <div class="input-group">

                            <input type="text" name="s" id="search" placeholder=">" style="font-family:'Noto Sans HK', sans-serif; position:fixed">

                        </div> 

                    </form>

                </div> 


                <div class="container-fluid">

                    <div class="row">

                        <div class="col-12" style="padding-top:100px">

                            <? include "results.php" ?>                      

                        </div>         
                        
                    </div>
                </div>

            </div>


            <!--------------------------------------------------------------------------------------------------- PagePiling: SECTION 3 begins here-->  


            <div class="section" id="section3" data-anchor="page3" style="z-index:1; background-image:linear-gradient(rgb(76, 116, 232), rgb(171, 55, 231),rgb(255, 0, 230));">

                <div class="pp-tableCell" style="height:100%; position:fixed; top:30px; text-align:center;">

                    <div class="container-fluid" style="text-align:center; align-items:center">

                        <div><img src="logo.svg" style="width:4%"></div>

                    </div>         

                    <div class="container-fluid" style="padding-top:80px; display:inline-block; text-align:center">

                        <div><h4><strong>Get in touch</strong></h4></div>

                        <div class="row" style="justify-content:center; text-align:center">

                            <div class="col-4" style="text-align:center; display:inline-block">

                                <div>

                                    <p><strong>Email</strong></p>

                                    <form method="post" action="<? include "sendemail.php" ?>" enctype="text/plain">

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="first_name" placeholder="Name">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email_address" placeholder="Email address">
                                        </div>

                                        <div class="form-group">
                                            <textarea type="text" class="form-control" name="message" id="formGroupExampleInput3" placeholder="Message..."></textarea>
                                        </div>

                                        <button type="submit" id="emailSubmit" class="btn btn-light" style="background-color:rgb(150, 216, 35); border:0; color:white">Send</button>

                                    </form>

                                </div>

                            </div>


                            <div class="col-4" style="text-align:center; display:inline-block">

                                <div>

                                    <p><strong>SMS</strong></p>

                                    <form action="send.php" method="post" enctype="text/plain">

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="smsName" id="formGroupExampleInput4" placeholder="Name">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="smsNumber" id="formGroupExampleInput5" placeholder="Phone number">
                                        </div>

                                        <div class="form-group">
                                            <textarea type="text" class="form-control" name="smsMessage" id="formGroupExampleInput6" placeholder="Message..."></textarea>
                                        </div>

                                        <button type="submit" id="smsSubmit" class="btn btn-light" style="background-color:rgb(150, 216, 35); border:0; color:white">Send</button>

                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--------------------------------------------------------------------------------------------------- PagePiling + jQuery + script.js--> 
 
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
        <script type="text/javascript" src="jquery.pagepiling.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>