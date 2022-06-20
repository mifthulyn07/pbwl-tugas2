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
               Table Pelanggan
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
                              <form action="<?php echo BASEURL; ?>/pelanggan/tambah" method="POST">
                                   <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Create Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                   </div>
                                   <div class="modal-body" style="background-color:#334756;">
                                        <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Id</label>
                                             <input type="text" class="form-control" id="pel_id" name="pel_id" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Id Gol</label>
                                             <input type="text" class="form-control" id="pel_id_gol" name="pel_id_gol" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Nama</label>
                                             <input type="text" class="form-control" id="pel_nama" name="pel_nama" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Id User</label>
                                             <input type="text" class="form-control" id="pel_id_user" name="pel_id_user" aria-describedby="emailHelp">
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

               <form action="<?php echo BASEURL; ?>/pelanggan/cari" method="POST">
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
                              <th scope="col">Id golongan</th>
                              <th scope="col">Nama Pelanggan</th>
                              <th scope="col">Id user</th>
                              <th colspan="2" scope="col">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($data["pelanggan"] as $pelanggan) :
                              $pel_id        =    $pelanggan["pel_id"];
                              $pel_id_gol    =    $pelanggan["pel_id_gol"];
                              $pel_nama      =    $pelanggan["pel_nama"];
                              $pel_id_user   =    $pelanggan["pel_id_user"];
                         ?>
                              <tr>
                                   <td><?php echo $pel_id; ?></td>
                                   <td><?php echo $pel_id_gol; ?></td>
                                   <td><?php echo $pel_nama; ?></td>
                                   <td><?php echo $pel_id_user; ?></td>
                                   <td scope="row">

                                        <!-- BUTTON EDIT DATA-->

                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit<?php echo $pel_id; ?>">
                                             Edit
                                        </button>

                                        <!-- POPUP MODAL EDIT DATA  -->

                                        <div class="modal fade" id="modalEdit<?php echo $pel_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                  <div class="modal-content" style="background-color:#2C394B; color:white;">
                                                       <form action="<?php echo BASEURL; ?>/pelanggan/ubah" method="POST">
                                                            <div class="modal-header">
                                                                 <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body" style="background-color:#334756;">
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Id</label>
                                                                      <input readonly type="text" class="form-control" id="pel_id" name="pel_id" value="<?php echo $pel_id; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Id Gol</label>
                                                                      <input type="text" class="form-control" id="pel_id_gol" name="pel_id_gol" value="<?php echo $pel_id_gol; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                                                                      <input type="text" class="form-control" id="pel_nama" name="pel_nama" value="<?php echo $pel_nama; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Id User</label>
                                                                      <input type="text" class="form-control" id="pel_id_user" name="pel_id_user" value="<?php echo $pel_id_user; ?>" aria-describedby="emailHelp">
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

                                        <a href="<?php echo BASEURL; ?>/pelanggan/hapus/<?php echo $pel_id; ?>" onclick="return confirm('yakin ingin menghapus data?')">
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