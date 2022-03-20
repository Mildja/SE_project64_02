
<br><br><br><br><br><br>
<label>หวัดดี</label>
<table style="width:80%" >
                        <tr bgcolor="lightblue">
                                <td>ID</td>
                                <td>แพทย์อาสา</td>
                                <td>โรงพยาบาล</td>
                                <td>ผู้ป่วย</td>
                                <td>อาการเบื้องต้น</td>
                                <td>สถานะการตรวจATK</td>
                                <td>ID_ATK</td>
                                <td>สถานะผู้ป่วย</td>
                                <td>Update</td>
                                <td>Delete</td>

                        </tr>
                        <?php foreach ($HomeIsolation_list as $HomeIsolation) {

                                echo "<tr>
                <td>$HomeIsolation->HomeIso_ID</td>
                <td>$HomeIsolation->VD_Name</td>
                <td>$HomeIsolation->RH_Name</td>
                <td>$HomeIsolation->PS_name</td>
                <td>$HomeIsolation->Initial_symptom</td>
                <td>$HomeIsolation->SatusATK</td>
                <td>$HomeIsolation->ID_ATK</td>
                <td>$HomeIsolation->Satus</td>
                <td><a href=?controller=HomeIsolation&action=updateFrom&HomeIso_ID=$HomeIsolation->HomeIso_ID>Edit</a> </td>
                <td><a href=?controller=HomeIsolation&action=deletefrom&HomeIso_ID=$HomeIsolation->HomeIso_ID>Delete</a> </td>
                </tr>";
                        }
                        echo "</table>";
                        ?>
                         <br>
<a href="?controller=HomeIsolation&action=New" class="btn btn-outline-dark btn-lg" role="button" aria-pressed="true">จับคู่HomeIsolation</a>