<?php  include("includes/Pacienti.php");
global $patient;

?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Sider Menu Bar CSS</title> -->
    <link rel="stylesheet" href="../css/index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />


</head>
<body>
    <?php include("components/sidebar.php");?>
<div class="search-area">
    <form action="index.php" method="post">
        <input type="text" name="emri" placeholder="Kerko Pacientin">
        <input id="search-btn" type="submit" name="search-btn" value="Kerko">
    </form>
</div>
    <div class="table-area">
        <table class="show-table">
            <tr>
                <th>ID</th>
                <th>Emri</th>
                <th>Datelindje</th>
                <th>Vendbanimi</th>
                <th>Ndrysho</th>
                <th>Shiko Dosjen</th>
                <th>Fshije</th>
            </tr>
            <?php
            global $patient;
            if (isset($_POST['search-btn'])) {
                $patient->show_patient_byName();

            }else{
                $patient->show_patients();
            }
            ?>
        </table>
    </div>
<section></section>
</body>
</html>
