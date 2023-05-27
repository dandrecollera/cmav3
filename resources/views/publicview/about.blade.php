<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about</title>

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
.sub-header{
    height: 50vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(/img/cma2.png);
    background-position: center;
    background-size: cover;
    text-align: center;
    color: #fff;
}
.sub-header h1{
    margin-top: 100px;
    
}

.about-us{
    width: 80%;
    margin: auto;
    padding-top: 80px;
    padding-bottom: 50px;
}

.about-col{
    flex-basis: 48%;
    padding: 30px 2px;
}
.about-col img{
    width: 100%;
}
.about-col h1{
    padding-top: 0;
}
.about-col p{
    padding: 15px 0 25px;
}

.red-btn{
    border: 1px solid #b3b3b3;
    background: transparent;
    color: #b3b3b3;
}
.red-btn:hover{
    color: #fff;
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

.blog-content{
    width: 80%;
    margin: auto;
    padding: 60px 0;
}
.blog-left{
    flex-basis: 65%;
}
.blog-left img{
    width: 90%;
    height: 80%;
    margin-top: -50px;
    margin-left: 10px;
    
}
.blog-right{
    flex-basis: 35%;
}
.blog-right h3{
    background: #b3b3b3;
    color: #fff;
    padding: 7px 0;
    font-size: 16px;
    margin-bottom: 20px;
    text-align: center;
}
.blog-right div{
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #555;
    padding: 8px;
    box-sizing: border-box;
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
.footer{
    width: 100%;
    text-align: center;
    padding: 30px 0;
}
@media (max-width: 700px) {
            .about-col {
                flex-basis: 100%;
            }

            .nav-links {
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
        }
        @media (max-width: 768px) {
        .row {
            flex-direction: column;
        }

        .blog-left,
        .blog-right {
            width: 100%;
        }
    }

    .location{
    width: 80%;
    margin: auto;
    padding: 80px 0;
}
.location iframe{
    width: 100%;
}
</style>
</head>
<body>
    <section class="sub-header">
        <nav>
          <a href="index.html"><img src="/img/cma_logo.png"></a>
          <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
           <ul>
              <li><a href="/home">HOME</a></li>
              <li><a href="/about">ABOUT</a></li>
              <li><a href="/requirements">REQUIREMENTS</a></li>
           </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
          <h1  style="font-weight: bold">ABOUT US</h1>
      </section>

      <section class="about-us">
    
        <div class="row">
            <div class="about-col">
                <h1  style="font-weight: bold">WHO WE ARE</h1>
                <p>City Mall of Antipolo is one of the biggest public markets in Antipolo City that provides all the basic needs for its customers. 
                    <br>It is ranked number 21 in the top-rated shopping centers in Antipolo and number 8 in the most reviewed shopping centers in Antipolo.
                It consists of 3 floors that contain wet and dry markets, groceries, and other amenities. 
                <br>The wet and dry section is located on the first floor, groceries and other necessities on the second floor, and the third floor contains amenities like a dental clinic and jewelry shops. 
                <br>This public market is very useful for the citizens of Antipolo City as they can find almost all the things they need in one place.</p>
            </div>
            <div class="about-col">
                <img src="/img/cma3.png">
            </div>
        </div>
        
    </section>

    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15442.633598405771!2d121.1698756!3d14.6185254!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b8d34474797d%3A0x7ccbb97a736aadf7!2sCity%20Mall%20of%20Antipolo!5e0!3m2!1sen!2sph!4v1681116305119!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>


    <section class="blog-content">

        <div class="row">
            
            <div class="blog-left">
                 <img src="/img/hotline.png">
            </div> 
            <div class="blog-right">
                <h3>CITY HALL - ANNEX III SERVICES OFFERED:</h3>
                <div>
                   <span>MEDICAL CONSULTATIONS</span>
                </div>
                <div>
                   <span>DENTAL SERVICES</span>
                    
                </div>
                 <div>
                   <span>DAYCARE SERVICE</span>
                    
                </div>
                 <div>
                   <span>BIRTH CERTIFICATE - Application of New Born and Late Registration</span>
                   
                </div>
                 <div>
                   <span>SENIOR CITIZENS - ID Applications, Issuance of Purchase Booklet</span>
                   
                </div>
                 <div>
                   <span>TAPPLICATION FOR PERSONS WITH DISABILITY (PWDs) ID</span>
                   
                </div>
                 <div>
                   <span>APPLICATION FOR SOLO PARENT ID</span>
                   
                </div>
                 <div>
                   <span>ASSISTANCE IN CRISIS SITUATION</span>
        
                </div>
                <div>
                    <span>REFERRAL TO PUBLIC EMPLOYMENT SERVICE OFFICE (PESO) FOR LOCAL AND OVERSEAS JOB HIRING</span>
         
                 </div>
            </div> 
            
        </div>
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