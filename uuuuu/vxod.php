<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    
    
</head>

<body>
    <table>
        <tr>
            <td>ID</td>
            <td>EMAIL</td>
            <td>PASSWORD</td>
            <td>CONFIRM</td>
        </tr>

        <?php
        require "connect.php";

        $queryInfo = "SELECT * FROM `data`";

        $allInfo = mysqli_query($connect, $queryInfo);

        $allInfo = mysqli_fetch_all($allInfo);// перемещает все строки в ассоциативный массив

        foreach ($allInfo as $email) {
        ?>
            <tr>
                <td>
                    <?= $email[0] ?>
                </td>
                <td>
                    <?= $email[1] ?>
                </td>
                <td>
                    <?= $email[2] ?>
                </td>
                <td>
                    <?= $email[3] ?>
                </td>
            
                <td><a href="redact.php?id=<?= $email[0] ?>">Redact</a></td> 
                <td><a href="delete.php/?id=<?= $email[0] ?>">Delete</a></td>
                <td><a href="about.php/?id=<?= $email[0] ?>">Open</a></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <form action="vendor/addd.php" method="POST">
        <h1></h1>
        <input type="text" name="email" placeholder="Введите логин"><br>
        <input type="text" name="password" placeholder="Введите пароль"><br>
        <input type="text" name="confirm" placeholder="Введите пароль"><br>
        <button type="submit">Отправить</button>
    </form>

</body>
</html>