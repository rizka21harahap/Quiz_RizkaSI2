
 
  <form method="POST" action="/editpelpros" enctype="multipart/form-data" style="padding: 20px;">

            @csrf

         

          <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
            <div class="card" style="border: none;">
              <div class="card-body" style="padding: 10px;border: none;">

               
                <select class="form-control" name="pelidgol">
                  <option value="{{$pelanggan2->pel_id_gol}}">{{$pelanggan2->pel_id_gol}}</option>
                	<?php foreach ($golongan as $golongan): ?>
                		<option value="{{$golongan->gol_id}}">{{$golongan->gol_nama}}</option>
                	<?php endforeach ?>
                </select><br>
                <p class="text-muted mb-3">Nama Pelanggan <span style="color:red;">(Wajib)</span> &nbsp;&nbsp;&nbsp; @error('nama')
                                      
                                       <div class="alert alert-danger alert-dismissible fade show" style="height:50px !important;">
                      <ul>
                          
                              <li style="font-weight: bold;">{{ $message }} <i class="fa-solid fa-square-xmark"></i></li>
                              <br>
                         
                      </ul>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @enderror</p>
                <input type="text" style="z-index: 1056 !important;" class="form-control" name="nama" value="{{$pelanggan2->pel_nama}}" />
                
           
                
                <br>


                <p class="text-muted mb-3">Alamat Pelanggan <span style="color:red;">(Optional)</span></p>
            
								<textarea class="form-control" name="pelalamat">{!! $pelanggan2->pel_alamat !!}</textarea></div>
					
                
                <br>
                 @error('keterangan')
                                      
                                         <p style="color:red;">{{ $message }}</p>
                @enderror

                
                <br>

                 <p class="text-muted mb-3">Nomor HP Pelanggan <span style="color:red;">(Wajib)</span> &nbsp;&nbsp;&nbsp; @error('nama')
                                      
                                       <div class="alert alert-danger alert-dismissible fade show" style="height:50px !important;">
                      <ul>
                          
                              <li style="font-weight: bold;">{{ $message }} <i class="fa-solid fa-square-xmark"></i></li>
                              <br>
                         
                      </ul>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @enderror</p>
                <input type="number" style="z-index: 1056 !important;" class="form-control" name="nohp" value="{{$pelanggan2->pel_hp}}" />
                
           
                
                <br>

                 <p class="text-muted mb-3">Nomor KTP Pelanggan <span style="color:red;">(Wajib)</span> &nbsp;&nbsp;&nbsp; @error('nama')
                                      
                                       <div class="alert alert-danger alert-dismissible fade show" style="height:50px !important;">
                      <ul>
                          
                              <li style="font-weight: bold;">{{ $message }} <i class="fa-solid fa-square-xmark"></i></li>
                              <br>
                         
                      </ul>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @enderror</p>
                <input type="number" style="z-index: 1056 !important;" class="form-control" name="noktp" value="{{$pelanggan2->pel_ktp}}" />
                
           
                
                <br>

                  <p class="text-muted mb-3">Nomor Seri Pelanggan <span style="color:red;">(Wajib)</span> &nbsp;&nbsp;&nbsp; @error('nama')
                                      
                                       <div class="alert alert-danger alert-dismissible fade show" style="height:50px !important;">
                      <ul>
                          
                              <li style="font-weight: bold;">{{ $message }} <i class="fa-solid fa-square-xmark"></i></li>
                              <br>
                         
                      </ul>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @enderror</p>
                <input type="number" style="z-index: 1056 !important;" class="form-control" name="pelseri" value="{{$pelanggan2->pel_seri}}" />
                
           
                
                <br>

                  <p class="text-muted mb-3">Nomor Meteran Pelanggan <span style="color:red;">(Wajib)</span> &nbsp;&nbsp;&nbsp; @error('nama')
                                      
                                       <div class="alert alert-danger alert-dismissible fade show" style="height:50px !important;">
                      <ul>
                          
                              <li style="font-weight: bold;">{{ $message }} <i class="fa-solid fa-square-xmark"></i></li>
                              <br>
                         
                      </ul>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @enderror</p>
                <input type="number" style="z-index: 1056 !important;" class="form-control" name="pelmeteran" value="{{$pelanggan2->pel_meteran}}" />
                <br>
                <select class="form-control" name="peliduser">
                  <option value="{{$pelanggan2->pel_id_user}}">{{$pelanggan2->pel_id_user}}</option>
                	
                	<?php foreach ($user as $user): ?>
                		<option value="{{$user->user_id}}">{{$user->user_nama}}</option>
                	<?php endforeach ?>
                </select><br>


                <select class="form-control" name="status">
                	<option value="{{$pelanggan2->pel_aktif}}">{{$pelanggan2->pel_aktif}}</option>
                	
                		<option value="Y">Aktif</option>
                			<option value="N">Tidak Aktif</option>
                	
                </select><br>

                                

                <button type="submit" class="btn btn-primary col-md-12"><i data-feather="save" class="icon-sm me-2"></i>&nbsp;EDIT Data pelanggan</button>

              </div>
            </div>
          </div>
        </form>