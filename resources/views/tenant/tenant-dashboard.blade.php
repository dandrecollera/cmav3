<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/mdb.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="bg-image" 
     style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            height: 100vh">

    <h1 class="mx-3 mt-4">Dashboard</h1>
    <div class="row p-3">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-dark text-white mb-4">
                <div class="card-body">Announcements</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    
                    <div class="small text-white"><i class="fas fa-angle-right"></i> {{-- $dashboardInfo['totalRegisteredTenants']--}}</div>
                </div>
            </div>
        </div>
    </div>
    </div>
<script src="js/mdb.min.js"></script>
</body>
</html>