<?php
include("includes/Pacienti.php");
global $patient;
$patient->edit_patientFile();
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
<?php
global $db;
$patient_id = $_GET['id'];
$sql = "SELECT * FROM product WHERE prod_id = {$patient_id}";
$result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="hidden" name="prod_id" value="<?php echo $row['prod_id']; ?>">
    <div class="page-header">
        <div class="logo">
            <img style="width: 300px;height: 200px;" src="../images/Optika-Syri.jpg">
        </div>
        <div class="pjesa1">
            <table class="table1" border="1">
                <tr>
                    <td>
                        <label>Pacienti: </label>
                        <input type="text" name="name" value="<?php echo $row['pacienti']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Datelindja: </label>
                        <input type="text" name="birthdate" value="<?php echo $row['ditelindja']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Vendbanimi: </label>
                        <input type="text" name="address" value="<?php echo $row['vendbanimi']; ?>">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="page-main">
        <div class="pjesa2">
            <table class="table2" border="1">
                <th><span style="float: left">Anamneza</span></th>
                <tr>
                    <td>
                        <input style="width: 99.7%; height: 50px;" name="anamneza" value="<?php echo htmlspecialchars($row['anamneza']) ?>">
                    </td>

                </tr>
            </table>
        </div>
        <div class="pjesa3">
            <table class="table3" border="1">

                <tr>
                    <td>
                        <label>VOD: </label>
                        <input type="text" name="vod" value="<?php echo $row['vod']; ?>">
                    </td>
                    <td><label>TOD: </label>
                        <input type="text" name="tod" value="<?php echo $row['tod']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>VOS: </label>
                        <input type="text" name="vos" value="<?php echo $row['vos']; ?>">
                    </td>
                    <td>
                        <label>TOS: </label>
                        <input type="text" name="tos" value="<?php echo $row['tos']; ?>">
                    </td>
                </tr>


            </table>
        </div>
        <div class="pjesa4">
            <table class="table4" border="1">

                <th colspan="2">Segmenti i perparem</th>

                <tr>
                    <td>
                        <img style="width: 150px;height: 100px; padding: 10px;" src="../images/segperparmeOD.png">
                        <label>OD: </label>
                        <input style="width: 66.8%;" name="od" value="<?php echo $row['spod']; ?>">
                    </td>
                    <td>
                        <img style="width: 150px;height: 100px; padding: 10px;" src="../images/segperparmeOD.png">
                        <label>OS: </label>
                        <input style="width: 66.8%;" name="os" value="<?php echo $row['spos']; ?>">
                    </td>
                </tr>

            </table>
        </div>
        <div class="pjesa5">
            <table class="table5" border="1">

                <th colspan="2">Segmenti i pasem</th>

                <tr>
                    <td>
                        <img style="width: 150px;height: 100px; padding: 10px;" src="../images/segpasemOD.png">
                        <label>OD: </label>
                        <input style="width: 66.8%;" name="od2" value="<?php echo $row['spsod']; ?>">
                    </td>
                    <td>
                        <img style="width: 150px;height: 100px; padding: 10px;" src="../images/segpasemOS.png">
                        <label>OS: </label>
                        <input style="width: 66.8%;" name="os2" value="<?php echo $row['spsos']; ?>">
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
                        <input style="width: 98.5%;" type="text" name="code1" value="<?php echo $row['icd10']; ?>">
                    </td>
                    <td>
                        <input style="width: 99.6%" type="text" name="diagnoza" value="<?php echo $row['diagnoza']; ?>">
                    </td>
                </tr>
<!--                <tr>-->
<!--                    <td>-->
<!--                        <input style="width: 99%;" type="text" name="code2" placeholder="...">-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <input type="text" name="diganoza" placeholder="Shkruaj...">-->
<!--                    </td>-->
<!--                </tr>-->

            </table>
        </div>
        <div class="pjesa7">
            <table class="table7" border="1">

                <th>Mendimi</th>

                <tr>
                    <td>
                        <input style="width: 100%; height: 65px" name="mendimi" value="<?php echo $row['mendimi']; ?>">
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
                    <td><input type="text" name="lod-sph" value="<?php echo $row['lod_sph']; ?>"></td>
                    <td><input type="text" name="lod-cyl" value="<?php echo $row['lod_cyl']; ?>"></td>
                    <td><input type="text" name="lod-axis" value="<?php echo $row['lod_axis']; ?>"></td>
                    <td><input type="text" name="lod-primabasis" value="<?php echo $row['lod_primabasis']; ?>"></td>
                </tr>
                <tr class="rows">
                    <th>OS</th>
                    <td><input type="text" name="los-sph" value="<?php echo $row['los_sph']; ?>"</td>
                    <td><input type="text" name="los-cyl" value="<?php echo $row['los_cyl']; ?>"></td>
                    <td><input type="text" name="los-axis" value="<?php echo $row['los_axis']; ?>"></td>
                    <td><input type="text" name="los-primabasis" value="<?php echo $row['los_primabasis']; ?>"></td>
                </tr>
                <tr class="rows">
                    <th rowspan="2">Afersia Closeness</th>
                    <th>OD</th>
                    <td><input type="text" name="aod-sph" value="<?php echo $row['aod_sph']; ?>"></td>
                    <td><input type="text" name="aod-cyl" value="<?php echo $row['aod_cyl']; ?>"></td>
                    <td><input type="text" name="aod-axis" value="<?php echo $row['aod_axis']; ?>"></td>
                    <td><input type="text" name="aod-primabasis" value="<?php echo $row['aod_primabasis']; ?>"></td>
                </tr>
                <tr class="rows">
                    <th>OS</th>
                    <td><input type="text" name="aos-sph" value="<?php echo $row['aos_sph']; ?>"></td>
                    <td><input type="text" name="aos-cyl" value="<?php echo $row['aos_cyl']; ?>"></td>
                    <td><input type="text" name="aos-axis" value="<?php echo $row['aos_axis']; ?>"></td>
                    <td><input type="text" name="aos-primabasis" value="<?php echo $row['aos_primabasis']; ?>"></td>
                </tr>
                <tr>
                    <th>Lloji i xhamit Type of the Glass</th>
                    <td colspan="5"><input style="width: 99%;" type="text" name="glass" value="<?php echo $row['xhami']; ?>"></td>
                </tr>

            </table>
        </div>
        <div class="end-text">
            <p><span id="span1">DIST.DP</span><span id="span2"><input type="text" name="distdp" value="<?php echo $row['distdp']; ?>"></span><span id="span3">m/m</span></p>
        </div>
        <div class="final-text">
            <span style="font-weight: bold; font-size: 20px;">Shtime, me</span>
            <span style="font-size: 20px;"><input  style="width: 12%;" type="text" name="date" value="<?php echo $row['shtime']; ?>"></span>
            <span style="font-weight: bold; font-size: 20px; padding-left: 51%">Mjeku</span>
            <span style="font-size: 20px; border-bottom: 2px solid black;">Drilon Zekaj</span>
        </div>
        <input id="save_btn" type="submit" name="save-btn" value="Fresko Pacientin">
    </div>
</form>
    <?php
}
}
?>
</body>
</html>