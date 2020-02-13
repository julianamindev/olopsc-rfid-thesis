<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header; ?>
<?php include('about-us.php'); ?>
    <?php include('nav.php'); ?>
    <!-- Modal for Editing student -->
    <!-- Modal -->
    <div class="modal fade" id="editStudent" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="staticBackdropLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex">
                    <form class="w-100">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
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
                    <h5 class="modal-title">Delete this RFID?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Proceed to delete the selected RFID?</p>
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
                    <h5 class="modal-title text-primary" id="staticBackdropLabel">Add RFID</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex">
                    <form class="w-100">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="RFID">
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
                        <a class="nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/assets/img/bell-regular.png" alt="notif" style="height: 25px; width: auto;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Some Notification</a>
                            <a class="dropdown-item" href="#">Some Notification</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div
                                style="height: 28px; width: 28px;background: #808D93; margin-right: 8px;border-radius: 50%;">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">About Us</a>
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
                <li class="nav-item ">
                    <a class="nav-link nav-active d-flex px-0 pr-4" href="http://127.0.0.1:5500/pages/rfid.html">
                        RFID Cards
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex px-0 pr-4" href="http://127.0.0.1:5500/pages/rfid.html">
                        Admin
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <li class="nav-item">
                    <label class="search-section" for="search">
                        <img src="../assets/img/search-icon.png" class="search-icon" alt="search icon">
                        <input type="text" id="search" class="input-search" placeholder="Search...">
                    </label>
                    
                </li>
            </ul>
        </section>
    </nav>
                                        <!-- Modal for Editing student -->
                                        <!-- Modal -->
                                        <div class="modal fade" id="editStudent" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-primary" id="staticBackdropLabel">Edit User</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body d-flex">
                                                          <form class="w-100">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Username">
                                                            </div>
                                                              <div class="form-group">
                                                                  <input type="text" class="form-control" placeholder="First Name">
                                                              </div>
                                                              <div class="form-group">
                                                                  <input type="text" class="form-control" placeholder="Last Name">
                                                              </div>
                                                              <div class="form-group">
                                                                  <input type="email" class="form-control" placeholder="Email">
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
                                        <div class="modal fade" id="deleteStudent" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title">Delete this RFID?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Proceed to delete the selected RFID?</p>
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

    <div class="modal fade" id="addStudent" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-primary" id="staticBackdropLabel">Add RFID</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body d-flex">
                <form class="w-100">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="RFID">
                        <th scope="col">Student</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="card-list">
                        <th scope="row">123456789</th>
                        <td>Medyo Active</td>
                        <td>Lorem Ipsum</td>
                        <!-- <td>Active</td> -->
                        <td class="mr-auto">
                            <div class="btn-group">
                                <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="../assets/img/gear icon.png" alt="" style="height: 15px;width: auto;">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editStudent">Edit</a> -->
                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#deleteStudent">Delete</a>
                    </div>
                  </form>
                        </td>
                    </tr>

                </tbody>
            </table>
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
                        <a class="nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/assets/img/bell-regular.png" alt="notif" style="height: 25px; width: auto;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Some Notification</a>
                            <a class="dropdown-item" href="#">Some Notification</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div style="height: 28px; width: 28px;background: #808D93; margin-right: 8px;border-radius: 50%;"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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


    <div class="dashboard-container mx-auto">

        <!-- <div class="d-flex mt-5">
            <button class="btn btn-primary mr-2">Active</button>
            <button class="btn btn-secondary">Inactive</button>
        </div> -->


            <div class="w-100 mt-4 p-0" style="display: flex;">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">RFID</th>
                        <th scope="col">Status</th>
                        <th scope="col">Student</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="card-list">
                        <th scope="row">123456789</th>
                        <td>Medyo Active</td>
                        <td>Lorem Ipsum</td>
                        <!-- <td>Active</td> -->
                        <td class="mr-auto">
                            <div class="btn-group">
                                <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="../assets/img/gear icon.png" alt="" style="height: 15px;width: auto;">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editStudent">Edit</a> -->
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteStudent">Delete</a>
                                </div>
                              </div>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>
    </div>

    <div class="addStudent" style="position: fixed;bottom:0;right: 0; margin-bottom:50px;margin-right:50px;">
        <button class="add-btn" data-toggle="modal" data-target="#addStudent">
            <img  class="plus-icon" src="../assets/img/plus-icon.png" alt="">
        </button>
    </div>



    <?php echo $footer;?>