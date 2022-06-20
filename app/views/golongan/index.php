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
               Table Golongan
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
                              <form action="<?php echo BASEURL; ?>/golongan/tambah" method="POST">
                                   <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Create Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                   </div>
                                   <div class="modal-body" style="background-color:#334756;">
                                        <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Id</label>
                                             <input type="text" class="form-control" id="gol_id" name="gol_id" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Kode</label>
                                             <input type="text" class="form-control" id="gol_kode" name="gol_kode" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Nama</label>
                                             <input type="text" class="form-control" id="gol_nama" name="gol_nama" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Created_at</label>
                                             <input type="datetime-local" class="form-control" id="created_at" name="created_at" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Updated_at</label>
                                             <input type="datetime-local" class="form-control" id="updated_at" name="updated_at" aria-describedby="emailHelp">
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

               <form action="<?php echo BASEURL; ?>/golongan/cari" method="POST">
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
                              <th scope="col">Kode</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Created_at</th>
                              <th scope="col">Updated_at</th>
                              <th colspan="2" scope="col">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($data["golongan"] as $golongan) :
                              $gol_id        =    $golongan["gol_id"];
                              $gol_kode      =    $golongan["gol_kode"];
                              $gol_nama      =    $golongan["gol_nama"];
                              $created_at    =    $golongan["created_at"];
                              $updated_at    =    $golongan["updated_at"];
                         ?>
                              <tr>
                                   <td><?php echo $gol_id; ?></td>
                                   <td><?php echo $gol_kode; ?></td>
                                   <td><?php echo $gol_nama; ?></td>
                                   <td><?php echo $created_at; ?></td>
                                   <td><?php echo $updated_at; ?></td>
                                   <td scope="row">

                                        <!-- BUTTON EDIT DATA-->

                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit<?php echo $gol_id; ?>">
                                             Edit
                                        </button>

                                        <!-- POPUP MODAL EDIT DATA  -->

                                        <div class="modal fade" id="modalEdit<?php echo $gol_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                  <div class="modal-content" style="background-color:#2C394B; color:white;">
                                                       <form action="<?php echo BASEURL; ?>/golongan/ubah" method="POST">
                                                            <div class="modal-header">
                                                                 <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body" style="background-color:#334756;">
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Id</label>
                                                                      <input readonly style="background-color:#cccccc;" type="text" class="form-control" id="gol_id" name="gol_id" value="<?php echo $golongan["gol_id"]; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Kode</label>
                                                                      <input type="text" class="form-control" id="gol_kode" name="gol_kode" value="<?php echo $golongan["gol_kode"]; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                                                                      <input type="text" class="form-control" id="gol_nama" name="gol_nama" value="<?php echo $golongan["gol_nama"]; ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Created_at</label>
                                                                      <input type="datetime-local" class="form-control" id="created_at" name="created_at" value="<?php echo date('Y-m-d\TH:i:s', strtotime($golongan["created_at"])); ?>" aria-describedby="emailHelp">
                                                                 </div>
                                                                 <div class="mb-3">
                                                                      <label for="exampleInputEmail1" class="form-label">Updated_at</label>
                                                                      <input type="datetime-local" class="form-control" id="updated_at" name="updated_at" value="<?php echo date('Y-m-d\TH:i:s', strtotime($golongan["updated_at"])); ?>" aria-describedby="emailHelp">
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

                                        <a href="<?php echo BASEURL; ?>/golongan/hapus/<?php echo $gol_id; ?>" onclick="return confirm('yakin ingin menghapus data?')">
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