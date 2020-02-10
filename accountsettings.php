<?php include('header.php'); ?>
    <div class="modal fade" id="aboutUs" tabindex="-1" role="dialog" aria-labelledby="aboutUsTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="aboutUsTitle"><strong>About</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-4 py-4">
                    <p class="mb-3">Lorem ipsum dolor amet pok pok twee gastropub mixtape YOLO taiyaki 90's scenester
                        tbh
                        gluten-free lumbersexual hammock
                        swag man bun. Twee tacos bushwick, williamsburg four dollar toast locavore selfies chicharrones
                        raw
                        denim next level
                        portland flexitarian viral cliche letterpress. Fashion axe chicharrones af gentrify. Vegan palo
                        santo keytar you
                        probably haven't heard of them fingerstache enamel pin snackwave chartreuse pok pok fixie cronut
                        pug
                        brunch man braid
                        bicycle rights. Kombucha unicorn vaporware lomo. Williamsburg drinking vinegar locavore
                        kickstarter
                        yuccie af. Health
                        goth deep v umami viral narwhal.</p>
                    <p>Unicorn cronut literally keffiyeh occupy. Mlkshk green juice bushwick, pabst fingerstache beard
                        yr
                        chicharrones chambray
                        you probably haven't heard of them chillwave blue bottle. Master cleanse messenger bag kogi roof
                        party kinfolk.
                        Chillwave pork belly letterpress literally butcher pitchfork normcore tbh. DIY cold-pressed
                        marfa
                        quinoa.</p>
                    <p>Lomo tacos man bun iceland franzen fixie kombucha migas four dollar toast vaporware umami DIY
                        locavore church-key irony.
                        Lo-fi fixie man bun hella, chartreuse raw denim live-edge activated charcoal put a bird on it
                        organic ethical you
                        probably haven't heard of them green juice adaptogen. Intelligentsia hexagon echo park, 90's
                        organic
                        paleo la croix VHS
                        kombucha tilde irony brunch. Venmo hoodie everyday carry, keffiyeh letterpress put a bird on it
                        jean
                        shorts hashtag
                        literally. Craft beer kickstarter man braid vape flexitarian drinking vinegar leggings tattooed
                        lomo
                        palo santo PBR&B
                        YOLO. Air plant try-hard skateboard man bun thundercats kogi cloud bread hexagon franzen keytar
                        tacos palo santo poutine
                        tumblr you probably haven't heard of them.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php include('nav.php'); ?>
    <!-- Modal for Editing student -->
    <!-- Modal -->
    <div class="modal fade" id="editStudent" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="staticBackdropLabel">Edit Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex">
                    <form class="w-100">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Middle Name">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <select class="custom-select">
                                <option selected>Select course.</option>
                                <option value="1">BSIT</option>
                                <option value="2">ACT</option>
                                <option value="3">HRM</option>
                                <option value="4"></option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <select class="custom-select">
                                <option selected>Year Level</option>
                                <option value="1">1st Year</option>
                                <option value="2">2nd Year</option>
                                <option value="3">3rd Year</option>
                                <option value="4">4th Year</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <select class="custom-select">
                                <option selected>Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group ">
                            <select class="custom-select">
                                <option selected>RFID Card</option>
                                <option value="1">1234</option>
                                <option value="2">1234</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Profile Picture</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Update</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for Editing student End -->
    <!-- Modal -->
    <div class="modal fade" id="deleteStudent" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete this Student?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Proceed to delete the selected student?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for Remove student End -->

    <!-- Add student Modal -->

    <div class="modal fade" id="addStudent" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="staticBackdropLabel">Add Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex">
                    <form class="w-100">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Middle Name">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Course">
                        </div>
                        <div class="form-group ">
                            <select class="custom-select">
                                <option selected>Year Level</option>
                                <option value="1">1st Year</option>
                                <option value="2">2nd Year</option>
                                <option value="3">3rd Year</option>
                                <option value="4">4th Year</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <select class="custom-select">
                                <option selected>Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group ">
                            <select class="custom-select">
                                <option selected>RFID Card</option>
                                <option value="1">1234</option>
                                <option value="2">1234</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Profile Picture</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Student End -->




    <nav class="nav-shadow">
        <section class="top-nav navbar navbar-expand-lg navbar-light bg-light py-2 px-5">
            <p class="navbar-brand text-primary mb-0" href="#">OLOPSC RFID System</p>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-flex align-items-center display-none">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div
                                style="height: 28px; width: 28px;background: #808D93; margin-right: 8px;border-radius: 50%;">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#aboutUs">About</a>
                            <a class="dropdown-item" href="#">Account Settings</a>
                            <a class="dropdown-item" href="#">Sign out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="navbar navbar-expand-lg navbar-light bg-light py-2 px-5">
            <ul class="navbar-nav mr-auto d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link px-0 pr-4" href="#">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-0 pr-4" href="#">
                        Calendar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex px-0 pr-4" href="#">
                        Students
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex px-0 pr-4" href="#">
                        RFID Cards
                    </a>
                </li>
            </ul>
        </section>
    </nav>


    <div class="dashboard-container mx-auto mb-5">
        <div class="row-grid mx-0" style="margin-top: 100px;">
            <div class="">
                <div class="card-dashboard  px-2 text-center">
                    <img src="../assets/img/pexels-photo-220453.png" alt="" class="mb-3 mt-3" style="height: 80px;">
                    <section>
                        <h5 class="text-primary mb-2 pb-0">John J. Butao</h5>
                        <p class="m-0 p-0 text-secondary"><small>143198377</small></p>
                        <p class="m-0 p-0 text-secondary"><small>Super Admin</small></p>
                    </section>
                </div>
            </div>
            <div class="mx-3">
                <div class="card-dashboard p-5">
                    <h3 class="text-primary mb-4">General Account Settings</h3>
                    <form>
                        <div class="form-group">
                            <label for="fname">Username</label>
                            <input type="text" class="form-control" id="fname" placeholder="First Name" value="jButao">
                        </div>
                        <div class="form-group">
                            <label for="fname">Password</label>
                            <input type="password" class="form-control" id="fname" placeholder="First Name" value="jButao">
                        </div>

                        <hr>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="First Name" value="John">
                            </div>
                            <div class="form-group">
                                <label for="mname">Middle Name</label>
                                <input type="text" class="form-control" id="mname" placeholder="Middle Name" value="J.">
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" placeholder="First Name" value="Butao">
                            </div>
                            <div class="form-group">
                                <label for="fname">Emaik</label>
                                <input type="text" class="form-control" id="fname" placeholder="First Name" value="jButao@mail.com">
                            </div>
                            <div class="form-group  mb-5">
                                <label for="exampleFormControlFile1">Profile Picture</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <input type="submit" value="Save Changes" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    


    </div>



    <?php include('footer.php'); ?>