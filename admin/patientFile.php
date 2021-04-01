<?php include("includes/Pacienti.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/patientFile.css">
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
                <input type="hidden" name="id" value="<?php echo $row['prod_id']; ?>">
                <div class="page-header">
                    <div class="logo">
                        <img style="width: 300px;height: 200px;" src="../images/Optika-Syri.jpg">
                    </div>
                    <div class="pjesa1">
                        <table class="table1" border="1">
                            <tr>
                                <td>
                                    <label>Pacienti: </label>
                                    <?php echo $row['pacienti']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Datelindja: </label>
                                    <?php echo $row['ditelindja']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Vendbanimi: </label>
                                    <?php echo $row['vendbanimi']; ?>
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
                                <td><?php echo $row['anamneza']; ?></td>

                            </tr>
                        </table>
                    </div>
                    <div class="pjesa3">
                        <table class="table3" border="1">

                            <tr>
                                <td>
                                    <label>VOD: </label>
                                    <?php echo $row['vod']; ?>
                                </td>
                                <td>
                                    <label>TOD: </label>
                                    <?php echo $row['tod']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>VOS: </label>
                                    <?php echo $row['vos']; ?>
                                </td>
                                <td>
                                    <label>TOS: </label>
                                    <?php echo $row['tos']; ?>
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
                                        <span>OD: <br/> <?php echo $row['spod']; ?> </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-flex">
                                        <span>
                                            <img style="width: 150px;height: 100px; padding: 10px;" src="../images/segperparmeOD.png">
                                        </span>
                                        <span>OS: <br/> <?php echo $row['spos']; ?> </span>
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
                                        <span>
                                            <img style="width: 150px;height: 100px; padding: 10px;" src="../images/segpasemOD.png">
                                        </span>
                                        <span>OD: <br/> <?php echo $row['spsod']; ?> </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-flex">
                                        <span>
                                            <img style="width: 150px;height: 100px; padding: 10px;" src="../images/segpasemOS.png">
                                        </span>
                                        <span>OS: <br/> <?php echo $row['spsos']; ?> </span>
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
                                <td style="text-align: center; width: 30%">
                                    <?php echo $row['icd10']; ?>
                                </td>
                                <td>
                                    <?php echo $row['diagnoza']; ?>
                                </td>
                            </tr>
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <input style="width: 99%;" type="text" name="code2" placeholder="...">-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <input type="text" name="diganoza" placeholder="Shkruaj...">-->
<!--                                </td>-->
<!--                            </tr>-->

                        </table>
                    </div>
                    <div class="pjesa7">
                        <table class="table7" border="1">

                            <th>Mendimi</th>

                            <tr>
                                <td><?php echo $row['mendimi']; ?></td>
                            </tr>

                        </table>
                    </div>
<!--                    fotot qetu-->
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
                                <td style="text-align: center;"><?php echo $row['lod_sph']; ?></td>
                                <td style="text-align: center;"><?php echo $row['lod_cyl']; ?></td>
                                <td style="text-align: center;"><?php echo $row['lod_axis']; ?></td>
                                <td style="text-align: center;"><?php echo $row['lod_primabasis']; ?></td>
                            </tr>
                            <tr class="rows">
                                <th>OS</th>
                                <td style="text-align: center;"><?php echo $row['los_sph']; ?></td>
                                <td style="text-align: center;"><?php echo $row['los_cyl']; ?></td>
                                <td style="text-align: center;"><?php echo $row['los_axis']; ?></td>
                                <td style="text-align: center;"><?php echo $row['los_primabasis']; ?></td>
                            </tr>
                            <tr class="rows">
                                <th rowspan="2">Afersia Closeness</th>
                                <th>OD</th>
                                <td style="text-align: center;"><?php echo $row['aod_sph']; ?></td>
                                <td style="text-align: center;"><?php echo $row['aod_cyl']; ?></td>
                                <td style="text-align: center;"><?php echo $row['aod_axis']; ?></td>
                                <td style="text-align: center;"><?php echo $row['aod_primabasis']; ?></td>
                            </tr>
                            <tr class="rows">
                                <th>OS</th>
                                <td style="text-align: center;"><?php echo $row['aos_sph']; ?></td>
                                <td style="text-align: center;"><?php echo $row['aos_cyl']; ?></td>
                                <td style="text-align: center;"><?php echo $row['aos_axis']; ?></td>
                                <td style="text-align: center;"><?php echo $row['aos_primabasis']; ?></td>
                            </tr>
                            <tr>
                                <th>Lloji i xhamit Type of the Glass</th>
                                <td colspan="5"><?php echo $row['xhami']; ?></td>
                            </tr>

                        </table>
                    </div>
                        <div class="end-text">
                        <p><span id="span1">DIST.DP</span><span id="span2"><?php echo $row['distdp']; ?></span><span id="span3">m/m</span></p>
                        </div>
                    <div class="final-text">
                        <span style="font-weight: bold; font-size: 20px;">Shtime, me</span>
                        <span style="font-size: 20px; border-bottom: 2px solid black;"><?php echo $row['shtime'] ?></span>
                        <span style="font-weight: bold; font-size: 20px; padding-left: 51%">Mjeku</span>
                        <span style="font-size: 20px; border-bottom: 2px solid black;">Drilon Zekaj</span>
                    </div>
                </div>
            </form>
            <?php
        }
    }
    ?>

</body>
</html>