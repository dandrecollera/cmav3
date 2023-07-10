<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>application</title>

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
.custom-image {
        max-width: 300px;
        height: auto;
      }

      .footer{
    width: 100%;
    text-align: center;
    padding: 30px 0;
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
              <li><a href="/availablestalls">STALLS</a></li>
              <li><a href="/apply">APPLY</a></li>
           </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
          <h1  style="font-weight: bold">TENANT APPLICATION REQUIREMENTS</h1>
      </section>

    
    <section>
    <div class="container mt-5">
    
      <div class="row">
       
        <div class="col-md-6">
          <div class="container px-4 mt-2">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" style="font-weight:bold;">Requirements</th>
                  <th scope="col" style="font-weight:bold;">Notes</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
        <div class="col-md-6">
          <div class="text-center mt-5">
            <img src="/img/cma-admin1.png" class="img-fluid custom-image" alt="Office of City Mall of Antipolo">
            <p class="font-weight-bold mt-3">Go to the office of City Mall of Antipolo located at the third floor of the Market.</p>
          </div>
        </div>
      </div>
    </div>
    </section>
<section>
    <form action="/application" method="POST" enctype="multipart/form-data" class="was-validated">
    @csrf
        <div class="container p-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <h3>Applicant's Information</h3>
                            </div>
                                {{--<div class="mb-3 form-outline">
                                    <input class="form-control" id="applicantno" name="applicantno" readonly/>
                                    <label class="form-label" for="typeText">Applicant No.</label>
                                </div>--}}

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control is-valid" id="firstname" name="firstname" placeholder="First Name" aria-label="First Name" required/>
                                    <input type="text" class="form-control is-valid" id="middlename" name="middlename" placeholder="Middle Name" aria-label="Middle Name"/>
                                    <input type="text" class="form-control is-valid" id="lastname" name="lastname" placeholder="Last Name" aria-label="Last Name" required/>
                                </div>
        
                                <div class="mb-3 form-outline">
                                    <textarea class="form-control is-valid" id="address" name="address" required rows="2"></textarea>
                                    <label class="form-label" for="typeText">Address</label>
                                </div>

                                <div class="mb-3 form-outline">
                                    <input class="form-control is-valid" type="date" id="birthday" name="birthday" required/>
                                    <label class="form-label" for="typeText">Birthday</label>
                                </div>

                                <div class="mb-3 form-outline">
                                    <input class="form-control is-valid" id="emailadd" name="emailadd" required/>
                                    <label class="form-label" for="typeText">Email Address</label>
                                </div>

                                <div class="mb-3 form-outline">
                                    <input id="contactno" name="contactno" class="form-control is-valid" data-mdb-showcounter="true" maxlength="11" required />
                                    <label class="form-label" for="form16">Contact No.</label>
                                    <div class="form-helper mt-1"></div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="form16">Upload Picture (2x2)</label>
                                    <input type="file" class="form-control" name="image" id="image" required/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="form16">Upload all Requirements(in PDF form)</label>
                                    <input type="file" class="form-control" name="requirements" id="requirements" required/>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-dark btn-rounded"> Submit </button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

        <section class="footer">
            <p>City Mall of Antipolo</p>
        </section>

    <script src="js/mdb.min.js"></script>

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