<!doctype html>
<html lang="en">

<head>
    <title>LIST USER</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4>LIST USER</h4>
        <hr>
        <div>
        <?php
        function executeResult($sql)
        {
            //create connection toi database
            $conn = mysqli_connect("localhost", "root", "", "db");

            //query
            $resultset = mysqli_query($conn, $sql);
            $list      = [];
            while ($row = mysqli_fetch_array($resultset, 1)) {
                $list[] = $row;
            }

            //dong connection
            mysqli_close($conn);

            return $list;
        }
        ?>

<body>

        <div class="form-group">
            <form method="get">
                <input type="text" name="s" class="form-control" placeholder="Tìm kiếm ">
            </form>
        </div>
        <div></div>
        <table class="table ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Họ Tên</th>
                    <th>Tên</th>
                    <th>Tên đăng nhập</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Ngày sinh</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_GET['s']) && $_GET['s'] != '') {
                    $sql = "SELECT * FROM `users`   where `id`  like  '%" . $_GET['s'] . "%'
                                                    or   `tendem`    like  '%" . $_GET['s'] . "%'
                                                    or   `name`        like  '%" . $_GET['s'] . "%'
                                                    or   `tendangnhap`   like  '%" . $_GET['s'] . "%' 
                                                    or   `email`       like  '%" . $_GET['s'] . "%'
                                                    or   `password`   like  '%" . $_GET['s'] . "%' 
                                                    or   `ngaysinh`   like  '%" . $_GET['s'] . "%' ";

                } else {
                    $sql = "SELECT * FROM `users`";
                }

                $List = executeResult($sql);

                $index = 1;
                foreach ($List as $row) {
                    echo '<tr>
                            <td scope="row">' . $row['id'] . '</td>
                            <td>' . $row['tendem'] . '</td>
                            <td>' . $row['name'] .  '</td>
                            <td>' . $row['tendangnhap'] .      '</td>
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['password'] .     '</td>
                            <td>' . $row['ngaysinh'] . '</td>
                            <td>
                                <a href="edituser.php?id=' . $row['id'] .  '"><i class="fas fa-edit"></i></a>
                                <a href="delete.php?id=' . $row['id'] .  '"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>