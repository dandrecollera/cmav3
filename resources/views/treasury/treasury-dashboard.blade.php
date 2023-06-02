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
    <h1 class="mx-3 mt-4">Dashboard</h1>
                        <div class="row p-3">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Total Registered Tenants</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                                        <div class="small text-white"><i class="fas fa-angle-right">97</i> {{-- $dashboardInfo['totalRegisteredTenants']--}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Total Stalls</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                                        <div class="small text-white"><i class="fas fa-angle-right">13</i> {{--$dashboardInfo['totalStalls']--}}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Total Available Stalls</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                                        <div class="small text-white"><i class="fas fa-angle-right">1</i> {{-- $dashboardInfo['totalAvailableStalls']--}} </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Total Occupied Stalls</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                                        <div class="small text-white"><i class="fas fa-angle-right">12</i> {{-- $dashboardInfo['totalOccupiedStalls']--}}</div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Daily Sales</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                                        <div class="small text-white"><i class="fas fa-angle-right"></i> ₱ {{-- number_format((float)$dashboardInfo['dailySales'], 2, '.', '')--}}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Weekly Sales</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                                        <div class="small text-white"><i class="fas fa-angle-right"></i> ₱ {{--  number_format((float)$dashboardInfo['weeklySales'], 2, '.', '')--}}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Monthy Sales</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                                        <div class="small text-white"><i class="fas fa-angle-right"></i> ₱ {{--  number_format((float)$dashboardInfo['monthlySales'], 2, '.', '')--}}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Yearly Sales</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                                        <div class="small text-white"><i class="fas fa-angle-right"></i> ₱ {{--  number_format((float)$dashboardInfo['yearlySales'], 2, '.', '')--}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <script src="js/mdb.min.js"></script>
</body>
</html>