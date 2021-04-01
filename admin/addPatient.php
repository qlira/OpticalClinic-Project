<?php
include("includes/Pacienti.php");
global $patient;
$patient->add_patient();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/addPatient.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<?php  include("components/sidebar.php");?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<div class="page-header">
    <div class="logo">
        <img style="width: 300px;height: 200px;" src="../images/Optika-Syri.jpg">
    </div>
    <div class="pjesa1">
        <table class="table1" border="1">
            <tr>
                <td>
                    <label>Pacienti: </label>
                    <input type="text" name="name" placeholder="Emri..." required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Datelindja: </label>
                    <input type="text" name="birthdate" placeholder="Datelindja..." required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Vendbanimi: </label>
                    <input type="text" name="address" placeholder="Vendbanimi..." required>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="page-main">
    <div class="pjesa2">
        <table class="table2" border="1">
            <th>
                <span style="float: left">Anamneza</span>
            </th>
            <tr>
                <td>
                    <input style="width: 99.7%; height: 50px" name="anamneza" placeholder="Shkruaj..." required>
                </td>

            </tr>
        </table>
    </div>
    <div class="pjesa3">
        <table class="table3" border="1">

            <tr>
                <td>
                    <label>VOD: </label>
                    <input type="text" name="vod" placeholder="..." required>
                </td>
                <td>
                    <label>TOD: </label>
                    <input type="text" name="tod" placeholder="...">
                </td>
            </tr>
            <tr>
                <td>
                    <label>VOS: </label>
                    <input type="text" name="vos" placeholder="...">
                </td>
                <td>
                    <label>TOS: </label>
                    <input type="text" name="tos" placeholder="...">
                </td>
            </tr>


        </table>
    </div>
    <div class="pjesa4">
        <table class="table4" border="1">

            <th colspan="2">Segmenti i perparem</th>

            <tr>
                <td>
                    <div class="table-flex">
                        <span>
                    <img style="width: 150px;height: 100px; padding: 10px;" src="../images/segperparmeOD.png">
                        </span>
                        <span style="width: 73%">OD: <input style="width: 92%;" name="od" placeholder="Shkruaj..." required></span>

                    </div>
                </td>
                <td>
                    <div class="table-flex">
                        <span>
                    <img style="width: 150px;height: 100px; padding: 10px;" src="../images/segperparmeOD.png">
                        </span>
                    <span style="width: 73%">OS: <input style="width: 92%;" name="os" placeholder="Shkruaj..." required></span>
                    </div>
                </td>
            </tr>

        </table>
    </div>
    <div class="pjesa5">
        <table class="table5" border="1">

            <th colspan="2">Segmenti i pasem</th>

            <tr>
                <td>
                    <div class="table-flex">
                        <span style="width: 30%">
                    <img style="width: 150px;height: 100px; padding: 10px;" src="../images/segpasemOD.png">
                        </span>
                        <span style="width: 70%">OD: <input style="width: 92%;" name="od2" placeholder="Shkruaj..." required></span>
                    </div>
                </td>
                <td>
                    <div class="table-flex">
                        <span style="width: 30%">
                    <img style="width: 150px;height: 100px; padding: 10px;" src="../images/segpasemOS.png">
                        </span>
                        <span style="width: 70%">OS: <input style="width: 92%;" name="os2" placeholder="Shkruaj..." required></span>
                    </div>
                </td>
            </tr>

        </table>
    </div>
    <div class="pjesa6">
        <table class="table6" border="1">

            <th>ICD10 Code</th>
            <th style="text-align: left">Diagnoza</th>

            <tr>
                <td>
                    <input style="width: 98.5%;" type="text" name="code1" placeholder="..." required>
                </td>
                <td>
                    <input style="width: 99.6%" type="text" name="diagnoza" placeholder="Shkruaj..." required>
                </td>
            </tr>
<!--            <tr>-->
<!--                <td>-->
<!--                    <input style="width: 99%;" type="text" name="code2" placeholder="...">-->
<!--                </td>-->
<!--                <td>-->
<!--                    <input type="text" name="diganoza" placeholder="Shkruaj...">-->
<!--                </td>-->
<!--            </tr>-->

        </table>
    </div>
    <div class="pjesa7">
        <table class="table7" border="1">

            <th>Mendimi</th>

            <tr>
                <td>
                    <input style="width: 100%; height: 65px" name="mendimi" placeholder="Shkruaj..." required>
                </td>
            </tr>

        </table>
    </div>
    <div class="photo-part">
        <img src="../images/Right-Eye.jpg">
        <img src="../images/Left-Eye.jpg">

    </div>
    <div class="pjesa8">
        <table class="table8" border="1">

            <tr>
                <th colspan="2"></th>
                <th>SPH</th>
                <th>CYL</th>
                <th>AXIS</th>
                <th>PRIMA BASIS</th>
            </tr>
            <tr class="rows">
                <th rowspan="2">Largesia Distance</th>
                <th>OD</th>
                <td><input type="text" name="lod-sph" placeholder="..." required></td>
                <td><input type="text" name="lod-cyl" placeholder="..." required></td>
                <td><input type="text" name="lod-axis" placeholder="..." required></td>
                <td><input type="text" name="lod-primabasis" placeholder="..." required></td>
            </tr>
            <tr class="rows">
                <th>OS</th>
                <td><input type="text" name="los-sph" placeholder="..." required></td>
                <td><input type="text" name="los-cyl" placeholder="..." required></td>
                <td><input type="text" name="los-axis" placeholder="..." required></td>
                <td><input type="text" name="los-primabasis" placeholder="..." required></td>
            </tr>
            <tr class="rows">
                <th rowspan="2">Afersia Closeness</th>
                <th>OD</th>
                <td><input type="text" name="aod-sph" placeholder="..." required></td>
                <td><input type="text" name="aod-cyl" placeholder="..." required></td>
                <td><input type="text" name="aod-axis" placeholder="..." required></td>
                <td><input type="text" name="aod-primabasis" placeholder="..." required></td>
            </tr>
            <tr class="rows">
                <th>OS</th>
                <td><input type="text" name="aos-sph" placeholder="..." required></td>
                <td><input type="text" name="aos-cyl" placeholder="..." required></td>
                <td><input type="text" name="aos-axis" placeholder="..." required></td>
                <td><input type="text" name="aos-primabasis" placeholder="..." required></td>
            </tr>
            <tr>
                <th>Lloji i xhamit Type of the Glass</th>
                <td colspan="5"><input style="width: 99%;" type="text" name="glass" placeholder="..." required></td>
            </tr>

        </table>
    </div>
    <div class="end-text">
        <p><span id="span1">DIST.DP</span><span id="span2"><input type="text" name="distdp" required></span><span id="span3">m/m</span></p>
    </div>
    <div class="final-text">
        <span style="font-weight: bold; font-size: 20px;">Shtime, me</span>
        <span style="font-size: 20px;"><?php echo date('d.m.Y')?></span>
        <span style="font-weight: bold; font-size: 20px; padding-left: 51%">Mjeku</span>
        <span style="font-size: 20px; border-bottom: 2px solid black;">Drilon Zekaj</span>
    </div>
    <input id="add-btn" type="submit" name="add-btn" value="Shto Pacientin">
</div>


</form>
</body>
</html>