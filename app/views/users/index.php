<!-- MAIN -->

<main style="max-width:800px; margin:10px auto;">

     <!-- FLASHER  -->

     <div class="row">
          <div class="col">
               <?php Flasher::flash(); ?>
          </div>
     </div>

     <!-- CARD TABLE -->

     <div class="card" style="background-color:#334756; margin:20px;">
          <div class="card-header" style="background-color:#2C394B; font-weight:bold;">
               Table Users
          </div>
          <div class="card-body">

               <!-- BUTTON ADD DATA -->

               <div class="mb-3 row">
                    <button type="button" class="btn btn-primary col-sm-2" style="background-color: #FF4C29; border: 1px solid #FF4C29; margin-left:12px;" data-bs-toggle="modal" data-bs-target="#modalCreate">
                         Add Data
                    </button>
               </div>

               <!-- POPUP MODAL CREATE DATA -->

               <div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                         <div class="modal-content" style="background-color:#2C394B;">
                              <form action="<?php echo BASEURL; ?>/users/tambah" method="POST">
                                   <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Create Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                   </div>
                                   <div class="modal-body" style="background-color:#334756;">
                                        <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Id</label>
                                             <input type="text" class="form-control" id="user_id" name="user_id" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Email</label>
                                             <input type="text" class="form-control" id="user_email" name="user_email" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Password</label>
                                             <input type="text" class="form-control" id="user_password" name="user_password" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Nama</label>
                                             <input type="text" class="form-control" id="user_nama" name="user_nama" aria-describedby="emailHelp">
                                        </div>
                                   </div>
                                   <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="btnCreate" class="btn btn-primary" style="background-color: #FF4C29; border: 1px solid #FF4C29;">Save changes</button>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>

               <!-- SEARCH -->

               <form action="<?php echo BASEURL; ?>/users/cari" method="POST">
                    <div class="mb-3 row">
                         <div class="col-sm-6">
                              <input type="text" class="form-control" name="keyword" autofocus>
                         </div>
                         <div class="col-sm-1">
                              <button type="submit" name="btnSearch" class="btn btn-light">Search</button>
                         </div>
                    </div>
               </form>

               <!-- TABLE  -->

               <table class="table table-hover text-white">
                    <thead>
                         <tr>
                              <th scope="col">Id</th>
                              <th scope="col">Email</th>
                              <th scope="col">Password</th>
                              <th scope="col">Nama</th>
                              <th colspan="2" scope="col">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($data["users"] as $users) :
                              $user_id       =    $users["user_id"];
                              $user_email    =    $users["user_email"];
                              $user_password =    $users["user_password"];
                              $user_nama     =    $users["user_nama"];
                         ?>
                              <tr>
                                   <td><?php echo $user_id; ?></td>
                                   <td><?php echo $user_email; ?></td>
                                   <td><?php echo $user_password; ?></td>
                                   <td><?php echo $user_nama; ?></td>
                                   <td scope="row">

                                        <!-- BUTTON EDIT DATA-->

                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit<?php echo $user_id; ?>">
                                             Edit
                                        </button>

                                        <!-- POPUP MODAL EDIT DATA  -->

                                        <div class="modal fade" id="modalEdit<?php echo $user_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                  <div class="modal-content" style="background-color:#2C394B; color:white;">
                                                       <form action="<?php echo BASEURL; ?>/users/ubah" method="POST">
                                                            <div class="modal-header">
                                                                 <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body" style="background-color:#334756;">
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Id</label>
                                                                      <input readonly type="text" class="form-control" id="user_id" name="user_id" value="<?php echo $users["user_id"]; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Email</label>
                                                                      <input type="text" class="form-control" id="user_email" name="user_email" value="<?php echo $users["user_email"]; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Password</label>
                                                                      <input type="text" class="form-control" id="user_password" name="user_password" value="<?php echo $users["user_password"]; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                                                                      <input type="text" class="form-control" id="user_nama" name="user_nama" value="<?php echo $users["user_nama"]; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                 <button type="submit" name="btnEdit" class="btn btn-primary" style="background-color: #FF4C29; border: 1px solid #FF4C29;">Save changes</button>
                                                            </div>
                                                       </form>
                                                  </div>
                                             </div>
                                        </div>

                                        <!-- BUTTON DELETE DATA  -->

                                        <a href="<?php echo BASEURL; ?>/users/hapus/<?php echo $user_id; ?>" onclick="return confirm('yakin ingin menghapus data?')">
                                             <button type="button" class="btn btn-danger">Delete</button>
                                        </a>
                                   </td>
                              </tr>
                         <?php endforeach; ?>
                    </tbody>
               </table>
          </div>
     </div>
</main>