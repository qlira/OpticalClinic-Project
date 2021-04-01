<?php
include_once ("DbConn.php");

class Pacienti
{
    public function show_patients()
    {
        global $db;

        $sql = "SELECT prod_id, pacienti, ditelindja, vendbanimi from product";
        $result = $db->query($sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["prod_id"] . "</td><td>" . $row["pacienti"] . "</td><td>" . $row["ditelindja"] . "</td><td>" . $row["vendbanimi"] . "</td><td>" . "<a href='edit-patient.php?id={$row["prod_id"]}'><i class='fas fa-edit'></i></a>" . "</td><td>" . "<a href='patientFile.php?id={$row["prod_id"]}'><i class='fas fa-file-medical'></i></a>" . "</td>
<td>" . "<a href='delete-patient.php?id={$row["prod_id"]}'><i class='fas fa-trash-alt'></i></a>" . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 result";
        }
    }

    public function show_patient_byName()
    {
        global $db;

            $name = $_POST["emri"];

            $sql = "SELECT prod_id, pacienti, ditelindja, vendbanimi from product WHERE pacienti LIKE '{$name}'";
            $result = $db->query($sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["prod_id"] . "</td><td>" . $row["pacienti"] . "</td><td>" . $row["ditelindja"] . "</td><td>" . $row["vendbanimi"] . "</td><td>" . "<a href='edit-patient.php?id={$row["prod_id"]}'><i class='fas fa-edit'></i></a>" . "</td><td>" . "<a href='patientFile.php?id={$row["prod_id"]}'><i class='fas fa-file-medical'></i></a>" . "</td>
<td>" . "<a href='delete-patient.php?id={$row["prod_id"]}'><i class='fas fa-trash-alt'></i></a>" . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 result";
            }
        }


    public function add_patient(){
        global $db;

        if(isset($_POST['add-btn'])){


            $name = $_POST['name'];
            $birthdate = $_POST['birthdate'];
            $address = $_POST['address'];
            $anamneza = $_POST['anamneza'];
            $vod = $_POST['vod'];
            $tod = $_POST['tod'];
            $vos = $_POST['vos'];
            $tos = $_POST['tos'];
            $od = $_POST['od'];
            $os = $_POST['os'];
            $od2 = $_POST['od2'];
            $os2 = $_POST['os2'];
            $ICD10_Code = $_POST['code1'];
            $diagnoza = $_POST['diagnoza'];
            $mendimi = $_POST['mendimi'];

            $lod_sph = $_POST['lod-sph'];
            $lod_cyl = $_POST['lod-cyl'];
            $lod_axis = $_POST['lod-axis'];
            $lod_primabasis = $_POST['lod-primabasis'];

            $los_sph = $_POST['los-sph'];
            $los_cyl = $_POST['los-cyl'];
            $los_axis = $_POST['los-axis'];
            $los_primabasis = $_POST['los-primabasis'];

            $aod_sph = $_POST['aod-sph'];
            $aod_cyl = $_POST['aod-cyl'];
            $aod_axis = $_POST['aod-axis'];
            $aod_primabasis = $_POST['aod-primabasis'];

            $aos_sph = $_POST['aos-sph'];
            $aos_cyl = $_POST['aos-cyl'];
            $aos_axis = $_POST['aos-axis'];
            $aos_primabasis = $_POST['aos-primabasis'];

            $glass = $_POST['glass'];
            $distdp = $_POST['distdp'];
            $date = date('d.m.Y');



            $sql = "SELECT pacienti, ditelindja FROM product WHERE pacienti = '{$name}' AND ditelindja = '{$birthdate}'";
            $result = $db->query($sql);

            if(mysqli_num_rows($result) > 0){
                echo "<script>alert('Pacienti ekziston!');</script>";
            }else{
                $sql1 = "INSERT INTO product (pacienti, ditelindja, vendbanimi, anamneza, vod, vos, tod, tos, spod, spos, spsod, spsos, icd10, diagnoza, mendimi, lod_sph,
                                     lod_cyl, lod_axis, lod_primabasis, los_sph, los_cyl, los_axis, los_primabasis, aod_sph, aod_cyl, aod_axis, aod_primabasis, 
                                    aos_sph, aos_cyl, aos_axis, aos_primabasis, xhami, distdp, shtime)
             VALUES ('{$name}', '{$birthdate}', '{$address}', '{$anamneza}', '{$vod}', '{$vos}', '{$tod}', '{$tos}', '{$od}', '{$os}', '{$od2}', '{$os2}', '{$ICD10_Code}',
                    '{$diagnoza}', '{$mendimi}', '{$lod_sph}', '{$lod_cyl}', '{$lod_axis}', '{$lod_primabasis}', '{$los_sph}', '{$los_cyl}', '{$los_axis}', '{$los_primabasis}',
                    '{$aod_sph}', '{$aod_cyl}', '{$aod_axis}', '{$aod_primabasis}', '{$aos_sph}', '{$aos_cyl}', '{$aos_axis}', '{$aos_primabasis}', '{$glass}', '{$distdp}',
                    '{$date}')";
                if($db->query($sql1)){
                    header("Location: index.php");
                }
            }
        }
    }

    public function edit_patientFile(){
        if(isset($_POST['save-btn'])){
            global $db;
            $patienti_id = $_POST['prod_id'];
            $name = $_POST['name'];
            $birthdate = $_POST['birthdate'];
            $address = $_POST['address'];
            $anamneza = $_POST['anamneza'];
            $vod = $_POST['vod'];
            $tod = $_POST['tod'];
            $vos = $_POST['vos'];
            $tos = $_POST['tos'];
            $od = $_POST['od'];
            $os = $_POST['os'];
            $od2 = $_POST['od2'];
            $os2 = $_POST['os2'];
            $ICD10_Code = $_POST['code1'];
            $diagnoza = $_POST['diagnoza'];
            $mendimi = $_POST['mendimi'];

            $lod_sph = $_POST['lod-sph'];
            $lod_cyl = $_POST['lod-cyl'];
            $lod_axis = $_POST['lod-axis'];
            $lod_primabasis = $_POST['lod-primabasis'];

            $los_sph = $_POST['los-sph'];
            $los_cyl = $_POST['los-cyl'];
            $los_axis = $_POST['los-axis'];
            $los_primabasis = $_POST['los-primabasis'];

            $aod_sph = $_POST['aod-sph'];
            $aod_cyl = $_POST['aod-cyl'];
            $aod_axis = $_POST['aod-axis'];
            $aod_primabasis = $_POST['aod-primabasis'];

            $aos_sph = $_POST['aos-sph'];
            $aos_cyl = $_POST['aos-cyl'];
            $aos_axis = $_POST['aos-axis'];
            $aos_primabasis = $_POST['aos-primabasis'];

            $glass = $_POST['glass'];
            $distdp = $_POST['distdp'];
            $date = date('d.m.Y');


            $sql = "UPDATE product SET pacienti = '{$name}', ditelindja = '{$birthdate}', vendbanimi = '{$address}', anamneza = '{$anamneza}', vod = '{$vod}', tod = '{$tod}', 
                    vos = '{$vos}', tos = '{$tos}', spod = '{$od}', spos = '{$os}', spsod = '{$od2}', spsos = '{$os2}', icd10 = '{$ICD10_Code}', diagnoza = '{$diagnoza}',
                    mendimi = '{$mendimi}', lod_sph = '{$lod_sph}', lod_cyl = '{$lod_cyl}', lod_axis = '{$lod_axis}', lod_primabasis = '{$lod_primabasis}', los_sph = '{$los_sph}',
                    los_cyl = '{$los_cyl}', los_axis = '{$los_axis}', los_primabasis = '{$los_primabasis}', aod_sph = '{$aod_sph}', aod_cyl = '{$aod_cyl}', aod_axis = '{$aod_axis}',
                    aod_primabasis = '{$aod_primabasis}', aos_sph = '{$aos_sph}', aos_cyl = '{$aos_cyl}', aos_axis = '{$aos_axis}', aos_primabasis = '{$aos_primabasis}', xhami = '{$glass}',
                    distdp = '{$distdp}', shtime = '{$date}' WHERE prod_id = '{$patienti_id}'";

            if($db->query($sql)){
                header("Location: index.php");
            }
        }

    }

    public function delete_patient(){

        global $db;
        $patient_id = $_GET['id'];

        $sql = "DELETE FROM product WHERE prod_id = {$patient_id}";

        if($db->query($sql)){
            header("Location: index.php");
        }else{
            echo "<script>alert('Cant delete patient record!)</script>";
        }

        mysqli_close($db);
    }
}
$patient = new Pacienti();