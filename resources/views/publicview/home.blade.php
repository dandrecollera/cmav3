<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/7a249ebf7f.js" crossorigin="anonymous"></script>

<script src="js/mdb.min.js"></script>
<link rel="stylesheet" href="/css/mdb.min.css">

<style>
   {
 margin: 0;
 padding: 0;
 font-family: 'Poppins', sans-serif;
}
.header{
      min-height: 100vh;
      width: 100%;
      background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(/img/cma2.png);
      background-position: center;
      background-size: cover;
      position: relative;
}
nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;     
}
nav img{
    width: 100px;
}
.nav-links{
    flex: 1;
    text-align: right;
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}
.nav-links ul li a{
    color: #fff;
    text-decoration: none;
    font-size: 13px;
}
.nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: #b3b3b3;
    display: block;
    margin: auto;
    transition: 0.5s;
}
.nav-links ul li:hover::after{
    width: 100%;
}
.text-box{
    width: 90%;
    color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align:center;
}
.text-box h1{
    font-size: 62px;
}
.text-box p{
    margin: 10px 0 40px;
    font-size: 14px;
    color: #fff;
}
.hero-btn{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border: 1px solid #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
}
.hero-btn:hover{
    border: 1px solid #e6e6e6;
    background: #b3b3b3;
    transition: 1s;
}

nav .fa{
    display: none;
}

@media(max-width: 700px){
    .text-box h1{
       font-size: 20px;
    }
    .nav-links ul li{
        display: block;
    }
    .nav-links{
        position: fixed;
        background: #b3b3b3;
        height: 100vh;
        width: 200px;
        top: 0;
        right: -210px;
        text-align: left;
        z-index: 2;
        transition: 1s;
    }
    nav .fa{
        display: block;
        color: #fff;
        margin: 10px;
        font-size: 22px;
        cursor: pointer;
        
    }
    .nav-links ul{
        padding: 30px;
    }
}



/*---- facilities ----*/
.facilities{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
}
.facilities-col{
    flex-basis: 32%;
    border-radius: 10px;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
}
.facilities-col img{
    width: 100%;
    display: block;
}
.layer{
    background: transparent;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transition: 0.5s;
}
.layer:hover{
    background: rgba(107, 149, 255, 0.7);
}
.layer h3{
   width: 100%;
   font-weight: 500;
   color: #fff;
    font-size: 26px;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    position: absolute;
    opacity: 0;
    transition: 0.5s;
}
.layer:hover h3{
    bottom: 49%;
    opacity: 1;
    
}

@media (max-width: 768px) {
      .facilities {
        width: 100%;
        padding: 0 20px;
      }
      
      .facilities h1 {
        font-size: 24px;
      }
      
      .facilities p {
        font-size: 14px;
      }
      
      .row {
        flex-wrap: wrap;
        margin-top: 20px;
      }
      
      .facilities-col {
        flex-basis: 100%;
        margin-bottom: 30px;
      }
    }

    .cta{
    margin: 100px auto;
    width: 80%;
   background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(/img/cma2.png);
    background-position: center;
    background-size: cover;
    border-radius: 10px;
    text-align: center;
    padding: 100px 0;
}
.cta h1{
    color: #fff;
    margin-bottom: 40px;
    padding: 0;
}

@media(max-width: 700px){
    .cta h1{
        font-size: 24px;
    }
}

.footer{
    width: 100%;
    text-align: center;
    padding: 30px 0;
}
</style>
</head>
<body>
    <section class="header">
        <nav>
          <a href="index.html"><img src="/img/cma_logo.png"></a>
           <div class="nav-links" id="navLinks">
               <i class="fa fa-times" onclick="hideMenu()"></i>
              <ul>
                 <li><a href="/home">HOME</a></li>
                 <li><a href="/about">ABOUT</a></li>
                 <li><a href="/availablestalls">STALLS</a></li>
                 <li><a href="/apply">APPLY</a></li>
              </ul>
           </div>
           <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
          
      <div class="text-box">
              <h1 style="font-weight: bold">WELCOME TO CITY MALL OF ANTIPOLO</h1>
              <p> One of the biggest public markets in Antipolo City.<br>Provides all the basic needs for its customers.</p>
              <a href="/about" class="hero-btn">Visit us to know more.</a>
      </div>
      </section>

      <section class="facilities">
        <h1 style="margin-top: 10px; font-weight: bold;">CMA BUILDING</h1>
        <p>The CMA building will be divided into three parts: the wet and dry section, RTW section, admin and other offices section.</p>
        
        <div class="row">
            <div class="facilities-col">
              <img src="/img/cma-wetdry.jpg">
            <div class="layer">
                <h3>WET AND DRY</h3>
            </div>
            </div>
            <div class="facilities-col">
              <img src="/img/cma-rtw.jpg">
            <div class="layer">
                <h3>RTW</h3>
            </div>
            </div>
            <div class="facilities-col">
              <img src="/img/cma-admin1.png">
            <div class="layer">
                <h3>OFFICE</h3>
            </div>
            </div>
        </div>
        
    </section>  

    <section class="cta">
        <h1>Inquire for availing a stall in our building.</h1>
        <a href="/apply" class="hero-btn">CLICK FOR MORE</a>
    </section>

    <section class="footer">
        <p>City Mall of Antipolo</p>
    </section>

    <script>
        function showMenu() {
          var navLinks = document.getElementById("navLinks");
          navLinks.style.right = "0";
        }
    
        function hideMenu() {
          var navLinks = document.getElementById("navLinks");
          navLinks.style.right = "-210px";
        }
      </script>
</body>
</html>