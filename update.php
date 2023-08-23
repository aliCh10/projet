<?php
require 'users.php';
require 'conn.php';


 $id=$_GET['id'];
 //,
$u = new users(null, "" ,"", "", "", "", "", "", "");
$rows= $u->getById($pdo, $id);
$res = $rows->fetch();
// var_dump($res);
?>

             <form method="post">
                        <div class="row g-3" style="padding: 16px">  
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First name" value="<?php echo $res['firstName'] ?>" name="firstName" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control"  placeholder="Last name" value="<?php echo $res['lastName'] ?>" name="lastName" />
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="adresse" value="<?php echo $res['adresse'] ?>" name="adresse"  />
                                        </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control bg-white border-0" placeholder="phone number " value="<?php echo $res['telephone'] ?>" name="telephone" type="number"  />
                                    </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="email"  value="<?php echo $res['mail'] ?>" name="mail" type="email"  />
                                    </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control bg-white border-0" placeholder="password"  value="<?php echo $res['password'] ?>" name="password" type="password" />
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Type"  value="<?php echo $res['type'] ?>"  name="type" />
                                    </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control bg-white border-0" placeholder="connected"  value="<?php echo $res['connected'] ?>" name="connected"/>
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
        
      $u->firstName = $_POST["firstName"];
      $u->lastName = $_POST["lastName"];
      $u->adresse = $_POST["adresse"];
      $u->telephone = $_POST["telephone"];
      $u->mail = $_POST["mail"];
      $u->password = $_POST["password"];
      $u->type = $_POST["type"];
      $u->connected = $_POST["connected"];
      $u->update($pdo,$id);
    
    $url = "usersList.php";
    echo "<script>window.location.href = '$url';</script>";
    exit;
    }

    ?>