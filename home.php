<?php
session_start();
include 'db.php';

?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    
                <h1>helloo <?php echo $_SESSION['name']; ?>...</h1>
                   <a
                    name=""
                    id=""
                    class="btn btn-success"
                    href="insert.php"
                    role="button"
                    >add</a
                   >
                   
                   <a
                    name=""
                    id=""
                    class="btn btn-danger"
                    href="logout.php"
                    role="button"
                    >LOGOUT</a
                   >
                   
                    
                   
                </div>
            </nav>
            
        </header>
        <main>
            <div
                class="container col-8 mt-5 p-5 border rounded shadow"
            >
            <h2 class="p-4 text-center ">EMPLOYEE TABLE</h2><hr>
            <?php 
             $result=$conn->query('select * from empp');
             ?>
            <div
                class="table-responsive p-3"
            >

                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">SALARY</th>
                            <th scope="col">DESIGNATION</th>
                            <th scope="col">ACTION</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    
                    
                    <tbody>
                        <?php
                    while ($row=$result->fetch_assoc()) { ?>
                        <tr class="">
                            <td><?= $row['id']; ?></td>
                            <td><?= $row['username']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['salary']; ?></td>
                            <td><?= $row['designation']; ?></td>
                            <td><a href="edit.php?id= <?= $row['id']; ?>">EDIT</a></td>
                            <td><a href="delete.php?id= <?= $row['id']; ?>">DELETE</a></td>
                        </tr>
                       
                         <?php } ?>
                    </tbody>

                </table>
            </div>
            
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
