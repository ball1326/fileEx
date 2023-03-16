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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                            เพิ่มข้อมูล
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form method="post" action="../index.php?playerRout=add" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="mb-3 row">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1"
                                                        class="form-label">ชื่อ</label>
                                                    <input name="firstname"  type="text" class="form-control"
                                                        id="exampleFormControlInput1" placeholder="ชื่อ">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">นามสกุล
                                                    </label>
                                                    <input name="lastname" type="text" class="form-control"
                                                        id="exampleFormControlInput1" placeholder="นามสกุล">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">ทีม
                                                    </label>
                                                    <input name="team" type="text" class="form-control"
                                                        id="exampleFormControlInput1" placeholder="ทีม">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">ตำแหน่ง
                                                    </label>
                                                    <input name="position" type="text" class="form-control"
                                                        id="exampleFormControlInput1" placeholder="ตำแหน่ง">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">รูป
                                                    </label>
                                                    <input name="image" type="file" class="form-control"
                                                        id="exampleFormControlInput1">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="btnadd" class="btn btn-primary">เพิ่มข้อมูล</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- content -->
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <?php
            for ($i = 0; $i < count($result); $i++) {
                ?>
                <div class="col-3 col-sm-6 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="../public/images/<?= $result[$i]->image_url ?>" width="200" height="200"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo ($result[$i]->firstname . " " . $result[$i]->lastname) ?>
                            </h5>
                            <p class="card-text">
                                Team : <?= $result[$i]->team ?>
                            </p>
                            <p class="card-text">
                                Position : <?= $result[$i]->position ?>
                            </p>
                            <a href="#" class="btn btn-warning">แก้ใข</a>
                            <a href="#" class="btn btn-danger">ลบ</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- end content -->
    <script src="../libs/js/bootstrap.min.js"></script>
    <script src="../libs/js/bootstrap.bundle.min.js"></script>
    <script src="../libs/js/main.js"></script>
</body>

</html>