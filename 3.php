<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<style>

    body { 
      background: url("image/blue.jpg") no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      margin-left:0px;
    }
      
      .navbar {
      overflow: hidden;
      background-color: rgb(85, 81, 81);
      bottom: 0;
      width: 100%;
          } 

</style>
</head>
<body >
    <div class="col">
        <div class="row-sm">
            <div class="card" style="width: 100%; ">
                <div align="right" style="top: 30%">
                    <button type="button" class="btn btn-light"><a href="http://www.jecc.ac.in/" > Home </a></button>
                    <button type="button" class="btn btn-light"><a href="http://www.jecc.ac.in/" > About </a></button>
                    <button type="button" class="btn btn-light"><a href="http://www.jecc.ac.in/" > Gallery </a></button>
                    <button type="button" class="btn btn-light"><a href="http://www.jecc.ac.in/" > News </a></button>
                    <button type="button" class="btn btn-light"><a href="http://www.jecc.ac.in/" > Contact Us </a></button>
                    <button type="button" class="btn btn-light"><a href="http://www.jecc.ac.in/" > Downlode </a></button>
                </div>                 
            </div>
        </div>
        
        <div class="container">
        <h1>Contact Us</h1>
            
            <div class="row-sm" style="background: hsl(204, 84%, 80%);padding: 20px;border: 6px double #0cfa54;width: 70em"> 
                <h1>Map</h1>
                <a href="https://www.google.co.in/maps/place/St:Christina's+Home/@10.5350018,76.2016466,12z/data=!4m12!1m6!3m5!1s0x0:0x19bb65500ed5f86a!2sSt:Christina's+Home!8m2!3d10.5172808!4d76.1628002!3m4!1s0x0:0x19bb65500ed5f86a!8m2!3d10.5172808!4d76.1628002">
                    <img src="image/map.png" width="100%">
                </a>
            </div>                 
       <br>
       
            
            <div class="row-sm" > 
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card" > 
                            <div style="background: hsl(78, 98%, 69%);padding: 20px;border: 5px double #7080dd;float: right"> 
                                <div class="fancy-title align-center with-icon">
                                    <h2 class="">Contact Info</h2>
                                    <span class="separator" style="border-bottom-color:#eaeaea">
                                        <i class="fa fa-phone" style="color:#fff; background-color:#81AC04;" align="center"></i>  
                                        <img src="image/con_img.jpg" width="70%" height="60%"><br><br>
                                        Pullazhi P.O.,<br>
                                        Pullazhi,<br> 
                                        Thrissur <br>
                                        Kerala 680012 <br>
                                        0487 236 0244<br>
                                        <p>10°31'2"N   76°9'45"E</p>
                                    </span>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6" style=" background: #57fc60f5;padding: 20px;border: 5px double blue ">                                                  
                        
                        <form action="mailto:abhijithvadakkan.jecc.com" method="post" enctype="text/plain">
         
                            <div>
                                    <h3> Write your suggection</h3>

                                <label style="padding-top:20px;">Name</label>
                                <br>
                                <input type="text"  required name="name" id="name" class="demoInputBox form-control">
                            </div>
                            <div>
                                <label>Mobil number</label>
                                <br>                                       
                                <input  required name="number" type="number" id="number" class="demoInputBox form-control" onkeypress="return isNumberKey(event)"/>
                            </div>
                            <div>
                                <label>Email</label>
                                <br>
                                <input type="email"  required name="email"  id="email" class="demoInputBox form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">                                                                                                                 
                            </div>    
                            <div>
                                <label>Subject</label>
                                <br>
                                <input type="text"  required name="subject" id="subject" class="demoInputBox form-control">
                            </div>
                            <div>
                                <label>Suggection</label>
                                <br>
                                <textarea  required name="suggection" id="suggection" class="demoInputBox form-control"></textarea>
                            </div>
                            <div>
                                <br>
                                <input type="submit" name="submit" value="Send" class="btnAction" onclick="sendContact();">
                                <input type="reset" value="Reset">

                            </div>
                        </form>                                                  
                    </div>                       
                </div>           
                                 
                
            </div>
        

    
                    </div>
    </div>
    
      

    <div class="navbar" style="height: 10% ">      
          
        <div class="center">
            <div class="copytext" >Copyright ©2018 Family Apostolate, Thrissur | All Rights Reserved | Developed by
                <a href="http://www.jecc.ac.in/" target="_blank" rel="nofollow">tbi@jec,Jyothi Engineering College</a>
            </div>
        </div>
    </div>      

    
            
        
        

  




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script> 
</body>
</html>

