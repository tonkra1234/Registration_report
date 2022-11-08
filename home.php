<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="public/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css"
        integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto bg-light sticky-top">
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                    <a href="home.php" class="d-block p-3 link-dark text-decoration-none">
                        <span><img src="public/image/logo.png" alt="logo" width="50px"></span>
                    </a>
                    <ul
                        class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link py-3 px-2" title="Home" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Home">
                                <i class="bi-house fs-3"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="Dashboard" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Dashboard">
                                <i class="bi-speedometer2 fs-3"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="Table" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Table">
                                <i class="bi-table fs-3"></i>
                            </a>
                        </li>
                        <li>
                            <a href="Full_dossier/add.php" class="nav-link py-3 px-2" title="Full Dossier Assessment" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Full Dossier Assessment">
                                <i class="bi bi-pass fs-3"></i>
                            </a>
                        </li>
                        <li>
                            <a href="Fast_track/add.php" class="nav-link py-3 px-2" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Fast Track Registration">
                                <i class="bi bi-fast-forward-fill fs-3"></i>
                            </a>
                        </li>
                        
                    </ul>
                    <!-- <div class="dropdown">
                        <a href="#"
                            class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle"
                            id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-person-circle h2"></i>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <div class="col-sm p-3 min-vh-100">
                <!-- content -->
            </div>
        </div>
    </div>
</body>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

</html>