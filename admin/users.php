<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/admin.js?v=<?php echo time() ?>"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    
    <title>Users</title>
</head>

<body id="body-pd">
 
        <?php include('includes/Home/admin_sidebar.php') ?>

    <div class="container-fluid p-2 shadow">
    <div class="table-responsive">
            <table id="users" class="table table-dark table-striped mb-0">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Town</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Group</th>
                    <th>Action</th>
                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                     <td>Dinesh Wayaman</td>
                     <td>dineshwayaman@gmail.com</td>
                     <td>@mdo</td>
                     <td>Mark</td>
                     <td>Galewela, Sri Lanka.</td>
                     <td>@mdo</td>
                     <td><i class="fas fa-edit" style="color: #03be03;"></i> <i class="fas fa-user-minus" style="color: #f81a0f;"></i></td>
                  </tr>
                 <tr>
                     <td>Jacob</td>
                     <td>Thornton</td>
                     <td>@fat</td>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td><i class="fas fa-edit" style="color: #03be03;"></i> <i class="fas fa-user-minus" style="color: #f81a0f;"></i></td>
                </tr>
                <tr>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td><i class="fas fa-edit" style="color: #03be03;"></i> <i class="fas fa-user-minus" style="color: #f81a0f;"></i></td>
                </tr>
                <tr>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td><i class="fas fa-edit" style="color: #03be03;"></i> <i class="fas fa-user-minus" style="color: #f81a0f;"></i></td>
                </tr>
                <tr>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td><i class="fas fa-edit" style="color: #03be03;"></i> <i class="fas fa-user-minus" style="color: #f81a0f;"></i></td>
                </tr>
                <tr>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td><i class="fas fa-edit" style="color: #03be03;"></i> <i class="fas fa-user-minus" style="color: #f81a0f;"></i></td>
                </tr>
                 </tbody>
             </table>
            </div>
          
        </div>


            
    

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>


</body>
</html>