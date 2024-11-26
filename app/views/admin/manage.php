<?= view('templates/header') ?>

    <div class="container ms-4 row mt-4" style="max-width: 95%;">
    <aside class="col-3 border rounded">
        <div class="mt-4 container">
          <h2>Tables</h2>
          <div class="my-4 list-group">
            <a href="<?=url('admin/kelola/mahasiswa')?>" class="list-group-item list-group-item-action <?= $data[1]=='mahasiswa' ? 'active' : ''?>">
              <h5>
                <img src="<?= img('man.png')?>" alt="" class='me-3 mb-1' width=15%>
                Mahasiswa
              </h5>
            </a>
            <a href="<?=url('admin/kelola/dosen')?>" class="list-group-item list-group-item-action <?= $data[1]=='dosen' ? 'active' : ''?>">
              <h5>
                <img src="<?= img('man.png')?>" alt="" class='me-3 mb-1' width=15%>
                Dosen
              </h5>
            </a>
            <a href="<?=url('admin/kelola/developer')?>" class="list-group-item list-group-item-action <?= $data[1]=='developer' ? 'active' : ''?>">
              <h5>
                <img src="<?= img('man.png')?>" alt="" class='me-3 mb-1' width=15%>
                Developer
              </h5>
            </a>
            <a href="<?=url('admin/kelola/wifi')?>" class="list-group-item list-group-item-action <?= $data[1]=='wifi' ? 'active' : ''?>">
              <h5>
                <img src="<?= img('man.png')?>" alt="" class='me-3 mb-1' width=15%>
                Wifi
              </h5>
            </a>
          </div>
        </div>
    </aside>

    <div class="col-8 ms-4 border rounded">
      <h1 class="mt-2">
        Data
        <button type="button" class="btn btn-success btn-sm mb-2 py-1" data-bs-toggle="modal" data-bs-target="#staticBackdropAdd">Add +</button>
        <!-- Modal -->
        <form action="" method="post">
        <div class="modal fade" id="staticBackdropAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5 my-0" id="staticBackdropLabel">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style='height:5px;width:5px;'></button>
              </div>
              <div class="modal-body">
                            
                  <input type="hidden" name='method' value='post'>
                  <?php 
                  switch ($data[1]) {
                    case 'developer':
                    ?>

                    <div class="my-0">
                      <label for="exampleFormControlInput1" class="form-label fs-5">Nama</label>
                      <input type="text" name='nama' class="form-control" id="exampleFormControlInput1" placeholder="Nama">
                    </div>
                    <div class="my-0">
                      <label for="exampleFormControlInput1" class="form-label fs-5">No Telp</label>
                      <input type="tel" name='telp' class="form-control" id="exampleFormControlInput1" placeholder="No Telp">
                    </div>
                    <div class="my-0">
                      <label for="exampleFormControlInput1" class="form-label fs-5">Email</label>
                      <input type="email" name='email' class="form-control" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div class="my-0">
                      <label for="exampleFormControlInput1" class="form-label fs-5">Password</label>
                      <input type="password" name='password' class="form-control" id="exampleFormControlInput1" placeholder="Password">
                    </div>

                    <?php
                      break;

                    case 'wifi':
                    ?>

                    <div class="my-0">
                      <label for="exampleFormControlInput1" class="form-label fs-5">BSSID</label>
                      <input type="text" name='BSSID' class="form-control" id="exampleFormControlInput1" placeholder="BSSID">
                    </div>
                    <div class="my-0">
                      <label for="exampleFormControlInput1" class="form-label fs-5">Signal_Strength</label>
                      <input type="text" name='Signal_Strength' class="form-control" id="exampleFormControlInput1" placeholder="Signal_Strength">
                    </div>
                    <div class="my-0">
                      <label for="exampleFormControlInput1" class="form-label fs-5">Latitude</label>
                      <input type="text" name='Latitude' class="form-control" id="exampleFormControlInput1" placeholder="Latitude">
                    </div>
                    <div class="my-0">
                      <label for="exampleFormControlInput1" class="form-label fs-5">Longitude</label>
                      <input type="text" name='Longitude' class="form-control" id="exampleFormControlInput1" placeholder="Longitude">
                    </div>

                    <?php
                      break;
                        
                    default:
                    ?>
                      
                    <div class="my-0">
                      <label for="exampleFormControlInput1" class="form-label fs-5">Email</label>
                      <input type="email" name='email' class="form-control" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div class="my-0">
                      <label for="exampleFormControlInput1" class="form-label fs-5">Nama</label>
                      <input type="text" name='nama' class="form-control" id="exampleFormControlInput1" placeholder="Nama">
                    </div>
                    <div class="my-0">
                      <label for="exampleFormControlInput1" class="form-label fs-5">No Telp</label>
                      <input type="tel" name='telp' class="form-control" id="exampleFormControlInput1" placeholder="No Telp">
                    </div>

                    <?php
                    # code...
                    break;
                  }?>
                    
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </div>
        </form>
      </h1>
      <div class="mt-4 container col">
            <div class="container bg-light row p-2 rounded mt-3 border">
            <table class="table">

              <?php              
                switch ($data[1]) {
                  case 'wifi':                    
              ?>
              
                <thead>
                  <tr>
                    <th scope="col">BSSID</th>
                    <th scope="col">Signal_Strength</th>
                    <th scope="col">Latitude</th>
                    <th scope="col">Longitude</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
            
            <?php
              foreach ($data[0] as $wifi) {
            ?>

            <tr>
              <th scope="row"><?= $wifi['BSSID'] ?></th>
              <td><?= $wifi['Signal_Strength'] ?></td>
              <td><?= $wifi['Latitude'] ?></td>
              <td><?= $wifi['Longitude'] ?></td>
              <td>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $wifi['BSSID'] ?>">
                  Edit
                </button>
                <a href='<?=url('admin/kelola/'.$data[1].'/'.$wifi['BSSID'])?>' class="btn btn-danger">Delete</a>

                    <!-- Modal -->
                    <form action="" method="post">
                    <div class="modal fade" id="staticBackdrop<?= $wifi['BSSID'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            
                              <input type="hidden" name='method' value='put'>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">BSSID</label>
                                <input type="text" name='BSSID' class="form-control" id="exampleFormControlInput1" 
                                placeholder="<?= $wifi['BSSID'] ?>" value="<?= $wifi['BSSID'] ?>">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Signal_Strength</label>
                                <input type="text" name='Signal_Strength' class="form-control" id="exampleFormControlInput1" 
                                placeholder="<?= $wifi['Signal_Strength'] ?>" value="<?= $wifi['Signal_Strength'] ?>">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Latitude</label>
                                <input type="text" name='Latitude' class="form-control" id="exampleFormControlInput1" 
                                placeholder="<?= $wifi['Latitude'] ?>" value="<?= $wifi['Latitude'] ?>">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Longitude</label>
                                <input type="text" name='Longitude' class="form-control" id="exampleFormControlInput1" 
                                placeholder="<?= $wifi['Longitude'] ?>" value="<?= $wifi['Longitude'] ?>">
                              </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
              </td>
            </tr>

            <?php
              }
              break;
                case 'developer':                    
              ?>
              
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">API KEY</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
            
            <?php
              foreach ($data[0] as $dev) {
            ?>

            <tr>
              <th scope="row"><?= $dev['id'] ?></th>
              <td><?= $dev['nama'] ?></td>
              <td><?= $dev['email'] ?></td>
              <td><?= $dev['api_key'] ?></td>
              <td>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $dev['id'] ?>">
                  Edit
                </button>
                <a href='<?=url('admin/kelola/'.$data[1].'/'.$dev['id'])?>' class="btn btn-danger">Delete</a>

                    <!-- Modal -->
                    <form action="" method="post">
                    <div class="modal fade" id="staticBackdrop<?= $dev['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            
                            
                              <input type="hidden" name='method' value='put'>
                              <input type="hidden" name='id' value='<?= $dev['id'] ?>'>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input type="text" name='nama' class="form-control" id="exampleFormControlInput1" 
                                placeholder="<?= $dev['nama'] ?>" value="<?= $dev['nama'] ?>">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" name='email' class="form-control" id="exampleFormControlInput1" 
                                placeholder="<?= $dev['email'] ?>" value="<?= $dev['email'] ?>">
                              </div>
                            

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
              </td>
            </tr>

            <?php
              }
              break;  
                  default:
              ?>
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                  foreach ($data[0] as $user) {
                ?>

                <tr>
                  <th scope="row"><?= $user['id'] ?></th>
                  <td><?= $user['nama'] ?></td>
                  <td><?= $user['email'] ?></td>
                  <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $user['id'] ?>">
                      Edit
                    </button>
                    <a href='<?=url('admin/kelola/'.$data[1].'/'.$user['id'])?>' class="btn btn-danger">Delete</a>

                    <!-- Modal -->
                    <form action="" method="post">
                    <div class="modal fade" id="staticBackdrop<?= $user['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            
                            
                              <input type="hidden" name='method' value='put'>
                              <input type="hidden" name='id' value='<?= $user['id'] ?>'>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input type="text" name='nama' class="form-control" id="exampleFormControlInput1" placeholder="<?= $user['nama'] ?>" value="<?= $user['nama'] ?>">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" name='email' class="form-control" id="exampleFormControlInput1" placeholder="<?= $user['email'] ?>" value="<?= $user['email'] ?>">
                              </div>
                            

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>

                  </td>
                </tr>

                <?php
                  }
                  break;
                    }
                ?>
              </tbody>
            </table>
            </div>
        </div>
    </div>
  </div>
<?= view('templates/footer') ?>