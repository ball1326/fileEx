<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="../libs/css/bootstrap-utilities.min.css">
</head>

<body>
    
    
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-5">
                <form action="../index.php?playerRout=update" method="post" enctype="multipart/form-data">
                    
                    <div class="modal-body">
                        <input type="hidden" name="identifier" value="<?php echo ($player->identifier); ?>">
                        <input type="hidden" name="old_image" value="<?php echo ($player->image_url); ?>">
                        <div class="mb-3">
                            <label for="" class="form-label">ชื่อ</label>
                            <input type="text" name="firstname" id="firstname" class="form-control"
                                value="<?php echo $player->firstname; ?>"
                                 aria-describedby="helpId">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">นามสกุล</label>
                            <input type="text" name="lastname" id="lastname" class="form-control"
                                value="<?php echo ($player->lastname) ?>" aria-describedby="helpId">

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ทีม</label>
                            <input type="text" name="team" id="team" class="form-control"
                                value="<?php echo ($player->team) ?>" aria-describedby="helpId">

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ตำแหน่ง</label>
                            <input type="text" name="position" id="position" class="form-control"
                                value="<?php echo ($player->position) ?>" aria-describedby="helpId">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">รูป</label>
                            <input type="file" name="image_url" id="image_url" class="form-control"
                                aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="">
                        <a href="../index.php" class="btn btn-secondary">Close</a>
                        <button type="submit" name="updatebtn" class="btn btn-success">บันทึก</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <script src="../libs/js/bootstrap.min.js"></script>
    <script src="../libs/js/bootstrap.bundle.min.js"></script>
    <script src="../libs/js/main.js"></script>
</body>

</html>