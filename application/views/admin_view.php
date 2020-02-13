<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header; ?>
      
<?php include('about-us.php'); ?>s
    <?php include('nav.php'); ?>
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
                                                                                                                                        <input type="text" class="form-control" placeholder="Middle Name">
                                                                                                                                    </div>
                                                              <div class="form-group">
                                                                  <input type="text" class="form-control" placeholder="Last Name">
                                                              </div>
                                                              <div class="form-group">
                                                                  <input type="email" class="form-control" placeholder="Email">
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
                                        <div class="modal fade" id="deleteStudent" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title">Delete this User?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Proceed to delete the selected User?</p>
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
              <h5 class="modal-title text-primary" id="staticBackdropLabel">Add User</h5>
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
                            <input type="text" class="form-control" placeholder="Middle Name">
                        </div>
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Last Name">
                      </div>
                      <div class="form-group">
                          <input type="email" class="form-control" placeholder="Email">
                      </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
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







    <div class="dashboard-container mx-auto">

        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit repellendus sit dolores corporis iste cum omnis explicabo unde quisquam at optio libero quam, obcaecati eaque sint deserunt nam tenetur? Accusantium?
            <button class="btn btn-primary mr-2">Active</button>
            <button class="btn btn-secondary">Inactive</button>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quo deserunt eum quidem facilis hic exercitationem velit voluptates rerum, consequatur repellendus aliquam iusto obcaecati, nesciunt quas distinctio cupiditate tenetur recusandae!</p>


            <div class="w-100 mt-4 p-0" style="display: flex;">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="card-list">
                        <th scope="row">123</th>
                        <td>mIPsum</td>
                        <td>Lorem Ipsum</td>
                        <td>ipsum@gmail.com</td>
                        <!-- <td>Active</td> -->
                        <td class="mr-auto">
                            <div class="btn-group">
                                <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="../assets/img/gear icon.png" alt="" style="height: 15px;width: auto;">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editStudent">Edit</a>
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteStudent">Delete</a>
                                </div>
                              </div>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>
    </div>

    <?php echo $footer;?>
