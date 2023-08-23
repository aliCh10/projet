<?php
require 'reservation.php';
require 'conn.php';
try {
    $id=$_GET['id'];
    $u = new Reservation(null, "" ,"", "", "", "");
    $rows= $u->getById($pdo, $id);
    $res = [];
    $res=$rows->fetch();
  } catch (Exception $e) {
    echo 'Error fetching reservation data: ',  $e->getMessage(), "\n";
  }
  

// $id = $_GET['id'];
// $u = new Reservation(null, "", "", "", "", "");
// $rows = $u->getById($pdo, $id);
// $res = $rows->fetch(); // use fetch() instead of fetchAll()

?>

<form method="post">
    <div class="row g-3" style="padding: 16px">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <input class="form-control" placeholder="id_u" value="<?php echo $res['id_u'] ?>" name="id_u" />
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <input class="form-control"  placeholder="immatriculation" value="<?php echo $res['immatriculation'] ?>" name="immatriculation" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <input class="form-control" placeholder="date_deb" type="date" value="<?php echo $res['date_deb'] ?>" name="date_deb"  />
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <input class="form-control bg-white border-0" placeholder="date_fin" type="date" value="<?php echo $res['date_fin'] ?>" name="date_fin" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <input class="form-control" placeholder="status"  value="<?php echo $res['status'] ?>" name="status"  />
                </div>
            </div>
        </div>
        <div class="row">
            <input  class="btn btn-primary w-100 py-3" type="submit" name="aj" value="update">
        </div>
    </div>
</form>

<?php
    if (isset($_POST['aj'])) {
        $u->id_u = $_POST["id_u"];
        $u->immatriculation = $_POST["immatriculation"];
        $u->date_deb = $_POST["date_deb"];
        $u->date_fin = $_POST["date_fin"];
        $u->status = $_POST["status"];
        $u->insertion($pdo); // call the insertion method to update the record
        $url = "reservationsList.php";
        echo "<script>window.location.href = '$url';</script>";
        exit;
    }
?>
