<main class="content">
										<div class="container-fluid p-0">

				
					<div class="card" style="border-radius: 20px !important; padding: 20px;">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">	<h1 class="h3 mb-3 "><strong>Selamat Datang</strong> <?php echo session('username') ?> </h1>
													</div>
													<br>
													<div class="row" style="margin-top: 20px;">
													

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="users"></i>
														</div>
														<h1 class="mt-1 mb-3">{{$jumgol}} Golongan</h1>
													</div>
													</div>
													
												
												</div>
												
					</div>
					</div>
					<div class="row" >
						

						<div class="col-xl-12 col-xxl-12">
							<div class="card flex-fill w-100" style="border-radius:20px;padding: 20px;">
								<div class="card-header">

									<h1 class="h3 mb-3">Data Golongan
									 </h1>
									 <div class="dropdown mb-2">
                    <a type="button" class="btn btn-dark" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Tambah Data
                      <i class="icon-sm text-muted pb-3px" data-feather="plus" style="color: white !important;"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                      <a class="dropdown-item d-flex align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#modaladdgol"><i data-feather="plus" class="icon-sm me-2"></i> <span class="">Tambah Data</span></a>

                     
                      
                    </div>
                  </div>
								
								</div>
								<div class="card-body py-3">
									<div class="chart chart-sm">
										<input type="hidden" id="jumlah" value="20">
										<table class="table table-hover table-responsive" id="tableabsen">
											<thead>
												<tr>
												<th>No</th>
												<th>Gol Kode</th>
												<th>Golongan Nama</th>
												<th>Created At</th>
												<th>Update At</th>
												<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $no = 1; ?>
												<?php foreach ($golongan as $golongan): ?>
																								
																								
													<tr>
														<td><?php echo $no; ?></td>
														<td>{{$golongan->gol_kode}}</td>
														
														<td>{{$golongan->gol_nama}}</td>
														
														<td>{{$golongan->created_at}}</td>
														<td>{{$golongan->update_at}}</td>
														<td><a href="/editgol?id=<?php echo $golongan->gol_id; ?>" class="btn btn-primary form-control">Edit</a><br><br><a href="/deletegol?id=<?php echo $golongan->gol_id; ?>" class="btn btn-danger">Hapus</a></td>
														
													</tr>
													<?php $no++; ?>
														<?php endforeach ?>							
																									
												
																																					
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

					

					

				</div>
							</main>

							<div class="modal fade" id="modaladdgol" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Golongan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          
          <form method="POST" action="/tambahgol" enctype="multipart/form-data">

            @csrf

         

          <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
            <div class="card" style="border: none;">
              <div class="card-body" style="padding: 10px;border: none;">

                <input type="hidden" name="idgol" value="<?php echo rand(1,	99); ?>">
                <input type="hidden" name="kodegol" value="G-<?php echo rand(1,	999); ?>">
               
                <p class="text-muted mb-3">Nama Golongan <span style="color:red;">(Wajib)</span> &nbsp;&nbsp;&nbsp; @error('nama')
                                      
                                       <div class="alert alert-danger alert-dismissible fade show" style="height:50px !important;">
                      <ul>
                          
                              <li style="font-weight: bold;">{{ $message }} <i class="fa-solid fa-square-xmark"></i></li>
                              <br>
                         
                      </ul>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @enderror</p>
                <input type="text" style="z-index: 1056 !important;" class="form-control" name="namagol" />
                
           	<br>

                                

                <button type="submit" class="btn btn-primary col-md-12"><i data-feather="save" class="icon-sm me-2"></i>&nbsp;Tambah Data pelanggan</button>

              </div>
            </div>
          </div>
        </form>

        </div>
      </div>
      
    </div>
  </div>
</div>