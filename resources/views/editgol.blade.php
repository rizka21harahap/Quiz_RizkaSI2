<form method="POST" action="/editgolpros" enctype="multipart/form-data" style="padding:20px">

            @csrf

         

          <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
            <div class="card" style="border: none;">
              <div class="card-body" style="padding: 10px;border: none;">

                <input type="hidden" name="idgol" value="<?php echo session('idgol'); ?>">
                <input type="hidden" name="kodegol" value="{{$gol2->gol_kode}}">
               
                <p class="text-muted mb-3">Nama Golongan <span style="color:red;">(Wajib)</span> &nbsp;&nbsp;&nbsp; @error('nama')
                                      
                                       <div class="alert alert-danger alert-dismissible fade show" style="height:50px !important;">
                      <ul>
                          
                              <li style="font-weight: bold;">{{ $message }} <i class="fa-solid fa-square-xmark"></i></li>
                              <br>
                         
                      </ul>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @enderror</p>
                <input type="text" style="z-index: 1056 !important;" class="form-control" name="namagol" value="{{$gol2->gol_nama}}" />
                
           	<br>

                                

                <button type="submit" class="btn btn-primary col-md-12"><i data-feather="save" class="icon-sm me-2"></i>&nbsp;Edit Data Golongan</button>

              </div>
            </div>
          </div>
        </form>
