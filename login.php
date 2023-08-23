
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleprofil.css">
    <link rel="stylesheet" href="../css/stylenavbar.css" />
    <link rel="stylesheet" href="../css/stylefooter.css" />
    <title>Profil</title>
</head>
<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins" , sans-serif;

  }

.container{
margin: 1%;

}
  .grid-container {
    display: grid;
    grid-template-columns: 30% auto ;
    padding: 10px;
  }
  .grid-item {
    background-color: rgba(255, 255, 255, 0.8);
    border: 0x solid rgba(0, 0, 0, 0.8);
    padding: 20px;
    font-size: 20px;
    margin-left: 1%;
    border-radius: 20px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    /* text-align: center; */
  }
  
  .img-profil{
    border-radius: 50%;
    background-color: gray;
    width:150px;
    height:150px;;
    margin:auto;
    display:block;
    
}

.grid-item  h2 {
    text-align: center;
}

.grid-item p {
    font-size: large;
    margin-top: 5%;
}

.grid-item p span {

    font-weight: bold;
}





.input-div{
	position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 20px 0;
}

.login-content .input-div.one{
	margin-top: 0;
}

.input-div > div{
  position: relative;
    /* height: 45px; */
}


.input-div > div > label{
	position: absolute;
	left: 10px;
    margin-top: -5%;
	transform: translateY(-50%);
	color: rgb(29, 28, 28);
	font-size: 18px;
	transition: .3s;
}





.input-div > div > input{
	position: absolute;
	border-color:rgb(201, 201, 201) ;
	width: 100%;
	padding: 0.5rem 0.7rem;
	font-size: 1rem;
	color: rgb(0, 0, 0);
	font-family: 'poppins', sans-serif;
    background-color: rgb(235, 235, 235);
    border-radius: 50px;
}

.input-div > div > textarea{
	
	width: 100%;
    border-radius: 10px;
    padding: 1%;
    font-size: 1rem;

	color: rgb(0, 0, 0);
	font-family: 'poppins', sans-serif;
    background-color: rgb(235, 235, 235);
    margin-top: -3%;
    
}





.grid-container2 {
    display: grid;
    grid-template-columns: auto auto ;
    /* background-color: #2196F3; */
    padding: 10px;
  }
  .grid-item2 {
    background-color: rgba(255, 255, 255, 0.8);
    border: 0px solid rgba(0, 0, 0, 0.8);
    padding: 20px;
    font-size: 30px;
    margin-top: 1%;
    margin-left: 1%;
    /* text-align: center; */
  }

  .btn{
	width: 20%;
	height: 40px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #24201b, #24201b, #24201b);
	background-size: 100%;
	font-size: 1rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
    margin-top: -2%;
    margin-left: 5%;
}


.btnc{
	width: 20%;
	height: 40px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #24201b, #24201b, #24201b);
	background-size: 100%;
	font-size: 1rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
    margin-top: -2%;
   
}

.btnc:hover{
	background-image: linear-gradient(to right, #ff0000, #ff0000, #ff0000);
}
.dummy_page {
    height: 200px;
    width: 100%;
    background-color: #f0f0f0;
    text-align: center;
    box-sizing: border-box;
    padding: 60px 0px;
  }
  /* STYLES SPECIFIC TO FOOTER  */
  .footer {
    width: 100%;
    position: relative;
    height: auto;
    background-color: #070617;
  }
  .footer .col {
    width: 190px;
    height: auto;
    float: left;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    padding: 0px 20px 20px 20px;
  }
  .footer .col h1 {
    margin: 0;
    padding: 0;
    font-family: inherit;
    font-size: 12px;
    line-height: 17px;
    padding: 20px 0px 5px 0px;
    color: rgba(255,255,255,0.2);
    font-weight: normal;
    text-transform: uppercase;
    letter-spacing: 0.250em;
  }
  .footer .col ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  .footer .col ul li {
    color: #999999;
    font-size: 14px;
    font-family: inherit;
    font-weight: bold;
    padding: 5px 0px 5px 0px;
    cursor: pointer;
    transition: .2s;
    -webkit-transition: .2s;
    -moz-transition: .2s;
  }
  .social ul li {
    display: inline-block;
    padding-right: 5px !important;
  }
  
  .footer .col ul li:hover {
    color: #ffffff;
    transition: .1s;
    -webkit-transition: .1s;
    -moz-transition: .1s;
  }
  .clearfix {
    clear: both;
  }
  @media only screen and (min-width: 1280px) {
    .contain {
      width: 1200px;
      margin: 0 auto;
    }
  }
  @media only screen and (max-width: 1139px) {
    .contain .social {
      width: 1000px;
      display: block;
    }
    .social h1 {
      margin: 0px;
    }
  }
  @media only screen and (max-width: 950px) {
    .footer .col {
      width: 33%;
    }
    .footer .col h1 {
      font-size: 14px;
    }
    .footer .col ul li {
      font-size: 13px;
    }
  }
  @media only screen and (max-width: 500px) {
      .footer .col {
        width: 50%;
      }
      .footer .col h1 {
        font-size: 14px;
      }
      .footer .col ul li {
        font-size: 13px;
      }
  }
  @media only screen and (max-width: 340px) {
    .footer .col {
      width: 100%;
    }
  }
  header
{
  background-color: #fb5b2f;

   /*background-color: black;*/
    border:0px solid black ;
    /*border-radius: 20px;*/
    margin: -5px -3px 0px -3px;
    

}

header ul 
{
list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
    
}

header li 
{
float: right;
}
  

header ul li a 
{
    display: block;
    text-decoration: none;
    color: rgb(255, 255, 255);
  text-align: center;
  padding: 14px 16px;
  font-family: cursive;
  font-size: 20px;

}

header ul li a:hover {
    color: rgb(238, 117, 12);
  }


</style>
<body>
    <header>
        <ul>
          <li><a href="contact.html"> contact  </a></li>
          <li><a href="profil.html"> Profil </a></li>
          <li><a href="basket.html">Basket</a></li>
          <li><a href="home.html">home</a></li>
        </ul>
      </header>
      
      <div class="container">
      <div class="grid-container">
        <div class="grid-item">

            
        <img src="../admin-front/img/ali.jpg" alt="" class="img-profil">
            <h2>ali chlaifa</h2>
            <p ><span>Email:</span>alichlaifa66@gmail.com@gmial.com</p>
            <p ><span>Phone number:</span> +216 95338900</p>
            <p ><span>Company:</span> mahdia</p>
           

        

    </div>
        <div class="grid-item">
<h1>modify profile</h1>
            <div class="grid-container2">

                <div class="grid-item2">
                    <div class="input-div">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <label for="">Full Name</label>
                            <input class="input" type="text" value="ahmed stanbouli">
                        </div>
                    </div>
                </div>

                <div class="grid-item2">
                    <div class="input-div">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <label for="">Email</label>
                            <input class="input" type="text" value="ahmed.stanbouli@gmail.com">
                        </div>
                    </div>
                </div>

                
                    <div class="grid-item2">
                        <div class="input-div">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <label for="">Phone number</label>
                                <input class="input" type="number" value="53804490">
                            </div>
                        </div>
                    </div>
                

                
                    <div class="grid-item2">
                        <div class="input-div">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <label for="">Company</label>
                                <input class="input" type="text" value="Bizert Ghar el melh">
                            </div>
                        </div>
                    </div>
               
               
                    <div class="grid-item2">
                        <div class="input-div">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <label for="">password</label>
                                <input class="input" type="password">
                            </div>
                        </div>
                    
                </div>
                
                    <div class="grid-item2">
                        <div class="input-div">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <label for="">Confirm password</label>
                                <input class="input" type="password">
                            </div>
                        </div>
                    </div>
                </div>
               
            
            <div class="grid-item2">
                
                    <div class="input-div">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                      
                    </div>
                
            </div>
            <input type="submit" value="modify" class="btn">
            <input type="reset" value="cancel" class="btnc">
            <a href="signin.php" style="margin-left: 30%;"><input type="submit" value="deconect" class="btnc"> </a>

            
            
        </div>
       
      </div>
    </div>
<footer>
    <div class="footer">
        <div class="contain">
        <div class="col">
          <h1>Company</h1>
          <ul>
            <li>About</li>
            <li>Mission</li>
            <li>Services</li>
            <li>Social</li>
            <li>Get in touch</li>
          </ul>
        </div>
        <div class="col">
          <h1>Products</h1>
          <ul>
            <li>About</li>
            <li>Mission</li>
            <li>Services</li>
            <li>Social</li>
            <li>Get in touch</li>
          </ul>
        </div>
        <div class="col">
          <h1>Accounts</h1>
          <ul>
            <li>About</li>
            <li>Mission</li>
            <li>Services</li>
            <li>Social</li>
            <li>Get in touch</li>
          </ul>
        </div>
        <div class="col">
          <h1>Resources</h1>
          <ul>
            <li>Webmail</li>
            <li>Redeem code</li>
            <li>WHOIS lookup</li>
            <li>Site map</li>
            <li>Web templates</li>
            <li>Email templates</li>
          </ul>
        </div>
        <div class="col">
          <h1>Support</h1>
          <ul>
            <li>Contact us</li>
            <li>Web chat</li>
            <li>Open ticket</li>
          </ul>
        </div>
        <div class="col social">
            <h1>Social</h1>
            <ul>
              <li><img src="../img/facebook.png" width="32" style="width: 32px;"></li>
              <li><img src="../img/gmail.png" width="32" style="width: 32px;"></li>
              <li><img src="../img/linkedin.png" width="32" style="width: 32px;"></li>
            </ul>
          </div>
      <div class="clearfix"></div>
      </div>
      </div>
  </footer>
</body>
</html>