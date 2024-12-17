
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Sistem Manamgement Pelanggan</title>

	<link href="https://bpsdm.sumutprov.go.id/utama/adminabsen/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
 <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.8/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/r-2.5.0/datatables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://bpsdm.sumutprov.go.id/admin/vendors/dropzone/dropzone.min.css">
  <link rel="stylesheet" href="https://bpsdm.sumutprov.go.id/admin/vendors/dropify/dist/dropify.min.css">
 	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
 <style>

 	
 </style>

 <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
 <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.3.0/ckeditor5.css">

 <style type="text/css">
 	
 	@import  url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap');
 	.main-container {
	font-family: 'Lato';
	width: fit-content;
	margin-left: auto;
	margin-right: auto;
}

.ck-content {
	font-family: 'Lato';
	line-height: 1.6;
	word-break: break-word;
}

.editor-container_classic-editor .editor-container__editor {
	min-width: 795px;
	max-width: 795px;
}
 </style>


</head>

<body onload="initMap()">
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="/adminabsensi" style="text-decoration: none;">
         <img src="{{asset('admin.png')}}" style="width:200px"><br><br><span>Administrator <br>Management pelanggan</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="/pelanggan">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Data Pelanggan</span>
            </a>
				</li>


					<li class="sidebar-item active">
						<a class="sidebar-link" href="/golongan">
              <i class="align-middle" data-feather="bar-chart"></i> <span class="align-middle">Data Golongan</span>
            </a>
				</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="/user">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Data User</span>
            </a>
				</li>

			<!--		<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-up.html">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.html">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
            </a>
					</li>

					<li class="sidebar-header">
						Tools & Components
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-buttons.html">
              <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-forms.html">
              <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-cards.html">
              <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-typography.html">
              <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="icons-feather.html">
              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
            </a>
					</li>

					<li class="sidebar-header">
						Plugins & Addons
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="charts-chartjs.html">
              <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="maps-google.html">
              <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
            </a>
					</li>-->
				</ul>
 
				<!-- <div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Upgrade to Pro</strong>
						<div class="mb-3 text-sm">
							Are you looking for more components? Check out our premium version.
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
						</div>
					</div>
				</div> -->

			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<!-- <a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a> -->

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                 <span class="text-dark"><?php echo session('username'); ?></span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								
								<a class="dropdown-item" href="/logout">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<?php if (session('hal') == ""){ ?>
				
			
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
														<h1 class="mt-1 mb-3">{{$jumpel}} Pelanggan</h1>
													</div>
													</div>
													
												
												</div>
												
					</div>
					</div>
					<div class="row" >
						

						<div class="col-xl-12 col-xxl-12">
							<div class="card flex-fill w-100" style="border-radius:20px;padding: 20px;">
								<div class="card-header">

									<h1 class="h3 mb-3">Data Pelanggan
									 </h1>
									 <div class="dropdown mb-2">
                    <a type="button" class="btn btn-dark" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Tambah Data
                      <i class="icon-sm text-muted pb-3px" data-feather="plus" style="color: white !important;"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                      <a class="dropdown-item d-flex align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#modaladdpel"><i data-feather="plus" class="icon-sm me-2"></i> <span class="">Tambah Data</span></a>

                     
                      
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
												<th>Nama Pelanggan</th>
												<th>Alamat Pelanggan</th>
												<th>No Hp Pelanggan</th>
												<th>No KTP Pelanggan </th>
												<th>Seri Pelanggan</th>
												<th>Meteran Pelanggan</th>
												<th>Status Aktif Pelanggan</th>
												<th>Id User Pelanggan</th>
												<th>Created At</th>
												<th>Update At</th>
												<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $no = 1; ?>
												<?php foreach ($pelanggan as $pelanggan): ?>
																								
																								
													<tr>
														<td><?php echo $no; ?></td>
														<td>{{$pelanggan->pel_nama}}</td>
														<td>{!! $pelanggan->pel_alamat!!}</td>
														<td>{{$pelanggan->pel_hp}}</td>
														<td>{{$pelanggan->pel_ktp}}</td>
														<td>{{$pelanggan->pel_seri}}</td>
														<td>{{$pelanggan->pel_meteran}}</td>
														<td>{{$pelanggan->pel_aktif}}</td>
														<td>{{$pelanggan->pel_id_user}}</td>
														<td>{{$pelanggan->created_at}}</td>
														<td>{{$pelanggan->update_at}}</td>
														<td><a href="/editpel?id=<?php echo $pelanggan->pel_id; ?>" class="btn btn-primary form-control">Edit</a><br><br><a href="/deletepel?id=<?php echo $pelanggan->pel_id; ?>" class="btn btn-danger">Hapus</a></td>
														
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
				<?php } elseif (session('hal') == "editpel") { ?>
							
								@include('edit')

				<?php } elseif (session('hal') == "golongan") { ?>
							
								@include('golongan')
				<?php } elseif (session('hal') == "editgol") { ?>
							
								@include('editgol')
						<?php	} ?>
				
<div class="modal fade" id="modaladdpel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelanggan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          
          <form method="POST" action="/tambahpelanggan" enctype="multipart/form-data">

            @csrf

         

          <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
            <div class="card" style="border: none;">
              <div class="card-body" style="padding: 10px;border: none;">

                <input type="hidden" name="idpel" value="<?php echo rand(1,	9999); ?>">
                <input type="hidden" name="pelno" value="<?php echo rand(1,	9999); ?>">
                <select class="form-control" name="pelidgol">
                	<option>Pilih Golongan User</option>
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
                <input type="text" style="z-index: 1056 !important;" class="form-control" name="nama" />
                
           
                
                <br>


                <p class="text-muted mb-3">Alamat Pelanggan <span style="color:red;">(Optional)</span></p>
            
								<textarea class="form-control" id="editor" name="pelalamat"></textarea></div>
					
                
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
                <input type="number" style="z-index: 1056 !important;" class="form-control" name="nohp" />
                
           
                
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
                <input type="number" style="z-index: 1056 !important;" class="form-control" name="noktp" />
                
           
                
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
                <input type="number" style="z-index: 1056 !important;" class="form-control" name="pelseri" />
                
           
                
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
                <input type="number" style="z-index: 1056 !important;" class="form-control" name="pelmeteran" />
                <br>
                <select class="form-control" name="peliduser">
                	<option>Pilih ID USERr</option>
                	<?php foreach ($user as $user): ?>
                		<option value="{{$user->user_id}}">{{$user->user_nama}}</option>
                	<?php endforeach ?>
                </select><br>


                <select class="form-control" name="status">
                	<option>Pilih STATUS AKTIF PELANGGAN</option>
                	
                		<option value="Y">Aktif</option>
                			<option value="N">Tidak Aktif</option>
                	
                </select><br>

                                

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

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Rizka</strong></a> &copy;
							</p>
						</div>
						
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="https://bpsdm.sumutprov.go.id/utama/adminabsen/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.8/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/r-2.5.0/datatables.min.js"></script>

<script src="https://bpsdm.sumutprov.go.id/admin/vendors/dropzone.min.js"></script>
<script src="https://bpsdm.sumutprov.go.id/admin/vendors/dropify.min.js"></script>

 <script src="https://bpsdm.sumutprov.go.id/admin/js/dropzone.js"></script>
 <script src="https://bpsdm.sumutprov.go.id/admin/js/dropify.js"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    

@if(session()->has('login'))
	
       <script>
  $(window).on('load',function(){
    Swal.fire({
  title: '',
  text: 'Berhasil Login',
  icon: 'success',
  backdrop: `
    rgba(0,0,123,0.4)
    url("/images/nyan-cat.gif")
    left top
    no-repeat
  `
})
  });
</script>
@endif
@if(session()->has('berhasilpel'))
	
       <script>
  $(window).on('load',function(){
    Swal.fire({
  title: '',
  text: 'Berhasil',
  icon: 'success',
  backdrop: `
    rgba(0,0,123,0.4)
    url("/images/nyan-cat.gif")
    left top
    no-repeat
  `
})
  });
</script>
@endif

@if(session()->has('gagalpel'))
	
       <script>
  $(window).on('load',function(){
    Swal.fire({
  title: '',
  text: 'Gagal',
  icon: 'error',
  backdrop: `
    rgba(0,0,123,0.4)
    url("/images/nyan-cat.gif")
    left top
    no-repeat
  `
})
  });
</script>
@endif
 





  
 <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <script>
  $( function() {
    var availableTags = [
      "SRI MUTHARIDAH, S.Ak",
      "NUR SYLFIDA AMANDA, SH",
      "SYAWALUDDIN AMIN, S.Kom",
      "IRMA SAFITRI NASUTION, SE",
      "WIDI PRATIWI HASIBUAN, S.I.Kom",
      "TIMBUL TAUFIK HASIBUAN, SE",
      "CHAIRANI ASMI, S.Akun",
      "WIDYA SAFITRI SIHALOHO, A.Md.Kom",
      "RIDHO ZAKARIA TAMBUNAN",
      "NAPTALINA SIMANUNGKALIT, S.Pd",
      "HOTMARTUA NASUTION, SH",
      "HENDI ADRIANSYAH, SE",
      "RAHMAD RIYADI HASIBUAN, SE",
      "ANSARI",
      "ARIBOWO SUSETYO, A.Md",
      "ASTRI DUFANI LUBIS, S.H.I",
      "MUHAMMAD SYAHRIZAL, SE",
      "M. FAZRUR RAHMAN, S.Pi",
      "AVER ZALUCHU",
      "ANA, SE",
      "INDAH PERMATA MARPAUNG, S.Kom",
      "FERI ANDI MALAU",
      "MUHAMMAD RIFALDI NASUTION, S.Sos",
      "ISMAIL AMNUR, S.PdI"
    ];
    $( "#nama" ).autocomplete({
      source: availableTags,
      appendTo: $('#modaladdebook	')
    });
  } );
  </script>

  



  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVB4Znhna_pQVJyVr7hbeeKUEkSyFMenc&callback=initMap&v=weekly"
      defer
    ></script>


  <script type="text/javascript">

   
    $(document).ready(function() {
       
      var table = $("#tableabsen").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
    "paginate": {
      'previous': '<span class="prev-icon"></span>',
      'next': '<span class="next-icon"></span>'
    }
 
    });

      


    table.on('click','.edit',function() {
            var ids = $(this).attr('data-bs-id');

            
            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
              $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);
            $('#idyu').val(ids);
            $('#namakeg').val(data[0]);
            $('#namapes').val(data[1]);
            $('#nip').val(data[2]);
            $('#nik').val(data[3]);
            $('#instansi').val(data[4]);
            $('#wa').val(data[8]);
            $('#unit').val(data[15]);
            $('#opd').val(data[16]);




            $('#modaleditebook').modal('show');
          });

    table.buttons().container().appendTo('#tableabsen_wrapper .col-md-6:eq(0)');
   

   


});
</script>
<script>
	function initMap() {
		var jumlah = document.getElementById('jumlah').value;
		var lati = document.getElementById('lat1').value;
		var longi = document.getElementById('long1').value;
		var lati1 = document.getElementById('lat2').value;
		var longi1 = document.getElementById('long2').value;
		var lati2 = document.getElementById('lat3').value;
		var longi2 = document.getElementById('long3').value;
		var lati3 = document.getElementById('lat4').value;
		var longi3 = document.getElementById('long4').value;
		var lati4 = document.getElementById('lat5').value;
		var longi4 = document.getElementById('long5').value;
		var lati5 = document.getElementById('lat6').value;
		var longi5 = document.getElementById('long6').value;
		var lati6 = document.getElementById('lat7').value;
		var longi6 = document.getElementById('long7').value;
		var lati7 = document.getElementById('lat8').value;
		var longi7 = document.getElementById('long8').value;
		var lati8 = document.getElementById('lat9').value;
		var longi8 = document.getElementById('long9').value;
		var lati9 = document.getElementById('lat10').value;
		var longi9 = document.getElementById('long10').value;
		var lati10 = document.getElementById('lat11').value;
		var longi10 = document.getElementById('long11').value;
		var lati11 = document.getElementById('lat12').value;
		var longi11 = document.getElementById('long12').value;
		var lati12 = document.getElementById('lat13').value;
		var longi12 = document.getElementById('long13').value;
		var lati13 = document.getElementById('lat14').value;
		var longi13 = document.getElementById('long14').value;
		var lati14 = document.getElementById('lat15').value;
		var longi14 = document.getElementById('long15').value;
		var lati15 = document.getElementById('lat16').value;
		var longi15 = document.getElementById('long16').value;
		
		
	
	

	// 	const long = [];

	// for (var i = 16; i >= 0; i--) {
	// 	Things[i]
	// }

		
  
  map1= new google.maps.Map(document.getElementById("map1"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });

   map2 = new google.maps.Map(document.getElementById("map2"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });

    map3 = new google.maps.Map(document.getElementById("map3"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });

     map4 = new google.maps.Map(document.getElementById("map4"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });


      map5 = new google.maps.Map(document.getElementById("map5"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });


       map6 = new google.maps.Map(document.getElementById("map6"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });


        map7 = new google.maps.Map(document.getElementById("map7"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });

         map8 = new google.maps.Map(document.getElementById("map8"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });


          map9 = new google.maps.Map(document.getElementById("map9"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });

           map10 = new google.maps.Map(document.getElementById("map10"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });
            map11 = new google.maps.Map(document.getElementById("map11"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });
            map12 = new google.maps.Map(document.getElementById("map12"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });
            map13 = new google.maps.Map(document.getElementById("map13"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });
            map14 = new google.maps.Map(document.getElementById("map14"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });

             map15 = new google.maps.Map(document.getElementById("map15"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });
              map16 = new google.maps.Map(document.getElementById("map16"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });
           



 // Define the LatLng coordinates for the polygon.
  const triangleCoords = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle = new google.maps.Polygon({
    paths: triangleCoords,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });

  const triangleCoords2 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle2 = new google.maps.Polygon({
    paths: triangleCoords2,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });

  const triangleCoords3 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle3 = new google.maps.Polygon({
    paths: triangleCoords3,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });


  const triangleCoords4 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle4 = new google.maps.Polygon({
    paths: triangleCoords4,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });


  const triangleCoords5 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle5 = new google.maps.Polygon({
    paths: triangleCoords5,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });


  const triangleCoords6 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle6 = new google.maps.Polygon({
    paths: triangleCoords6,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });


  const triangleCoords7 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle7 = new google.maps.Polygon({
    paths: triangleCoords7,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });


  const triangleCoords8 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle8 = new google.maps.Polygon({
    paths: triangleCoords8,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });


  const triangleCoords9 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle9 = new google.maps.Polygon({
    paths: triangleCoords9,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });

  const triangleCoords10 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle10 = new google.maps.Polygon({
    paths: triangleCoords10,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });


  const triangleCoords11 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle11 = new google.maps.Polygon({
    paths: triangleCoords11,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });


const triangleCoords12 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle12 = new google.maps.Polygon({
    paths: triangleCoords12,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });



  const triangleCoords13 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle13 = new google.maps.Polygon({
    paths: triangleCoords13,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });



  const triangleCoords14 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle14 = new google.maps.Polygon({
    paths: triangleCoords14,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });

  const triangleCoords15 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle15 = new google.maps.Polygon({
    paths: triangleCoords15,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });

  const triangleCoords16 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle16 = new google.maps.Polygon({
    paths: triangleCoords16,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });

 



 
  
var uluru1= {lat: +lati, lng: +longi };
        var marker1 = new google.maps.Marker({
          position: uluru1,
          map: map1,
          title: 'marker title'
        });

  bermudaTriangle.setMap(map1);
  // Add a listener for the click event.
  bermudaTriangle.addListener("click", showArrays);
  google.maps.event.addListener(marker1, 'click', function() {
    infowindow.open(map1,marker1);
  });

var uluru2 = {lat: +lati1, lng: +longi1 };
        var marker2 = new google.maps.Marker({
          position: uluru2,
          map: map2,
          title: 'marker title'
        });

  bermudaTriangle2.setMap(map2);
  // Add a listener for the click event.
  bermudaTriangle2.addListener("click", showArrays);
  google.maps.event.addListener(marker2, 'click', function() {
    infowindow.open(map2,marker2);
  });


  var uluru3 = {lat: +lati2, lng: +longi2 };
        var marker3 = new google.maps.Marker({
          position: uluru3,
          map: map3,
          title: 'marker title'
        });

  bermudaTriangle3.setMap(map3);
  // Add a listener for the click event.
  bermudaTriangle3.addListener("click", showArrays);
  google.maps.event.addListener(marker3, 'click', function() {
    infowindow.open(map3,marker3);
  });



  var uluru4 = {lat: +lati3, lng: +longi3 };
        var marker4 = new google.maps.Marker({
          position: uluru4,
          map: map4,
          title: 'marker title'
        });

  bermudaTriangle4.setMap(map4);
  // Add a listener for the click event.
  bermudaTriangle4.addListener("click", showArrays);
  google.maps.event.addListener(marker4, 'click', function() {
    infowindow.open(map4,marker4);
  });



  var uluru5 = {lat: +lati4, lng: +longi4 };
        var marker5 = new google.maps.Marker({
          position: uluru5,
          map: map5,
          title: 'marker title'
        });

  bermudaTriangle5.setMap(map5);
  // Add a listener for the click event.
  bermudaTriangle5.addListener("click", showArrays);
  google.maps.event.addListener(marker5, 'click', function() {
    infowindow.open(map5,marker5);
  });



  var uluru6 = {lat: +lati5, lng: +longi5 };
        var marker6 = new google.maps.Marker({
          position: uluru6,
          map: map6,
          title: 'marker title'
        });

  bermudaTriangle6.setMap(map6);
  // Add a listener for the click event.
  bermudaTriangle6.addListener("click", showArrays);
  google.maps.event.addListener(marker6, 'click', function() {
    infowindow.open(map6,marker6);
  });


  var uluru7 = {lat: +lati6, lng: +longi6 };
        var marker7 = new google.maps.Marker({
          position: uluru7,
          map: map7,
          title: 'marker title'
        });

  bermudaTriangle7.setMap(map7);
  // Add a listener for the click event.
  bermudaTriangle7.addListener("click", showArrays);
  google.maps.event.addListener(marker7, 'click', function() {
    infowindow.open(map7,marker7);
  });



  var uluru8 = {lat: +lati7, lng: +longi7 };
        var marker8 = new google.maps.Marker({
          position: uluru8,
          map: map8,
          title: 'marker title'
        });

  bermudaTriangle8.setMap(map8);
  // Add a listener for the click event.
  bermudaTriangle8.addListener("click", showArrays);
  google.maps.event.addListener(marker8, 'click', function() {
    infowindow.open(map8,marker8);
  });


  var uluru9 = {lat: +lati8, lng: +longi8 };
        var marker9 = new google.maps.Marker({
          position: uluru9,
          map: map9,
          title: 'marker title'
        });

  bermudaTriangle9.setMap(map9);
  // Add a listener for the click event.
  bermudaTriangle9.addListener("click", showArrays);
  google.maps.event.addListener(marker9, 'click', function() {
    infowindow.open(map9,marker9);
  });


  var uluru10 = {lat: +lati9, lng: +longi9 };
        var marker10 = new google.maps.Marker({
          position: uluru10,
          map: map10,
          title: 'marker title'
        });

  bermudaTriangle10.setMap(map10);
  // Add a listener for the click event.
  bermudaTriangle10.addListener("click", showArrays);
  google.maps.event.addListener(marker10, 'click', function() {
    infowindow.open(map10,marker10);
  });

  var uluru11 = {lat: +lati10, lng: +longi10 };
        var marker11 = new google.maps.Marker({
          position: uluru11,
          map: map11,
          title: 'marker title'
        });

  bermudaTriangle11.setMap(map11);
  // Add a listener for the click event.
  bermudaTriangle11.addListener("click", showArrays);
  google.maps.event.addListener(marker11, 'click', function() {
    infowindow.open(map11,marker11);
  });

  var uluru12 = {lat: +lati11, lng: +longi11 };
        var marker12 = new google.maps.Marker({
          position: uluru12,
          map: map12,
          title: 'marker title'
        });

  bermudaTriangle12.setMap(map12);
  // Add a listener for the click event.
  bermudaTriangle12.addListener("click", showArrays);
  google.maps.event.addListener(marker12, 'click', function() {
    infowindow.open(map12,marker12);
  });

  var uluru13 = {lat: +lati12, lng: +longi12 };
        var marker13 = new google.maps.Marker({
          position: uluru13,
          map: map13,
          title: 'marker title'
        });

  bermudaTriangle13.setMap(map13);
  // Add a listener for the click event.
  bermudaTriangle13.addListener("click", showArrays);
  google.maps.event.addListener(marker13, 'click', function() {
    infowindow.open(map13,marker13);
  });

  var uluru14 = {lat: +lati13, lng: +longi13 };
        var marker14 = new google.maps.Marker({
          position: uluru14,
          map: map14,
          title: 'marker title'
        });

  bermudaTriangle14.setMap(map14);
  // Add a listener for the click event.
  bermudaTriangle14.addListener("click", showArrays);
  google.maps.event.addListener(marker14, 'click', function() {
    infowindow.open(map14,marker14);
  });

  var uluru15 = {lat: +lati14, lng: +longi14 };
        var marker15 = new google.maps.Marker({
          position: uluru15,
          map: map15,
          title: 'marker title'
        });

  bermudaTriangle15.setMap(map15);
  // Add a listener for the click event.
  bermudaTriangle15.addListener("click", showArrays);
  google.maps.event.addListener(marker15, 'click', function() {
    infowindow.open(map15,marker15);
  });

  var uluru16 = {lat: +lati15, lng: +longi15 };
        var marker16 = new google.maps.Marker({
          position: uluru16,
          map: map16,
          title: 'marker title'
        });

  bermudaTriangle16.setMap(map16);
  // Add a listener for the click event.
  bermudaTriangle16.addListener("click", showArrays);
  google.maps.event.addListener(marker16, 'click', function() {
    infowindow.open(map16,marker16);
  });


if (jumlah = 17) {

	var lati16 = document.getElementById('lat17').value;
		var longi16 = document.getElementById('long17').value;
		

	map17 = new google.maps.Map(document.getElementById("map17"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });

	const triangleCoords17 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle17 = new google.maps.Polygon({
    paths: triangleCoords17,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });

	 var uluru17 = {lat: +lati16, lng: +longi16 };
        var marker17 = new google.maps.Marker({
          position: uluru17,
          map: map17,
          title: 'marker title'
        });

  bermudaTriangle17.setMap(map17);
  // Add a listener for the click event.
  bermudaTriangle17.addListener("click", showArrays);
  google.maps.event.addListener(marker17, 'click', function() {
    infowindow.open(map17,marker17);
  });


}

if (jumlah = 18) {

		
var lati17 = document.getElementById('lat18').value;
		var longi17 = document.getElementById('long18').value;
	map18 = new google.maps.Map(document.getElementById("map18"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });

	const triangleCoords18 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle18 = new google.maps.Polygon({
    paths: triangleCoords18,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });

	 var uluru18 = {lat: +lati17, lng: +longi17 };
        var marker18 = new google.maps.Marker({
          position: uluru18,
          map: map18,
          title: 'marker title'
        });

  bermudaTriangle18.setMap(map18);
  // Add a listener for the click event.
  bermudaTriangle18.addListener("click", showArrays);
  google.maps.event.addListener(marker18, 'click', function() {
    infowindow.open(map18,marker18);
  });


}


if (jumlah = 19) {

			var lati18 = document.getElementById('lat19').value;
		var longi18 = document.getElementById('long19').value;


	map19 = new google.maps.Map(document.getElementById("map19"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });

	const triangleCoords19 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle19 = new google.maps.Polygon({
    paths: triangleCoords19,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });

	 var uluru19 = {lat: +lati18, lng: +longi18 };
        var marker19 = new google.maps.Marker({
          position: uluru19,
          map: map19,
          title: 'marker title'
        });

  bermudaTriangle19.setMap(map19);
  // Add a listener for the click event.
  bermudaTriangle19.addListener("click", showArrays);
  google.maps.event.addListener(marker19, 'click', function() {
    infowindow.open(map19,marker19);
  });


}


if (jumlah = 20) {

			var lati19 = document.getElementById('lat20').value;
		var longi19 = document.getElementById('long20').value;


	map20 = new google.maps.Map(document.getElementById("map20"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });

	const triangleCoords20 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle20 = new google.maps.Polygon({
    paths: triangleCoords20,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });

	 var uluru20 = {lat: +lati19, lng: +longi19 };
        var marker20 = new google.maps.Marker({
          position: uluru20,
          map: map20,
          title: 'marker title'
        });

  bermudaTriangle20.setMap(map20);
  // Add a listener for the click event.
  bermudaTriangle20.addListener("click", showArrays);
  google.maps.event.addListener(marker20, 'click', function() {
    infowindow.open(map20,marker20);
  });


}


if (jumlah = 21) {

			var lati20 = document.getElementById('lat21').value;
		var longi20 = document.getElementById('long21').value;


	map21 = new google.maps.Map(document.getElementById("map21"), {
    zoom: 17,
    center: {
      lat: 3.5999622,
      lng: 98.6866699
    },
    mapTypeId: "terrain",
  });

	const triangleCoords21 = [
    {
      lng: 98.6866699,
      lat: 3.5999622
    },
    {
      lng: 98.6867746,
      lat: 3.5988941
    },
    {
      lng: 98.6875658,
      lat: 3.5988781
    },
    {
      lng: 98.6875846,
      lat: 3.5996731
    },
    {
      lng: 98.6878582,
      lat: 3.5997936
    },
    {
      lng: 98.6876650,
      lat: 3.6003343
    },
    {
      lng: 98.6871506,
      lat: 3.6001977
    },
      {
      lng: 98.6866753,
      lat: 3.5999649
    },
  ];
  // Construct the polygon.
  const bermudaTriangle21 = new google.maps.Polygon({
    paths: triangleCoords21,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });

	 var uluru21 = {lat: +lati20, lng: +longi20 };
        var marker21 = new google.maps.Marker({
          position: uluru21,
          map: map21,
          title: 'marker title'
        });

  bermudaTriangle21.setMap(map21);
  // Add a listener for the click event.
  bermudaTriangle21.addListener("click", showArrays);
  google.maps.event.addListener(marker21, 'click', function() {
    infowindow.open(map21,marker21);
  });


}
 

   
 
  document.getElementById("lat1").value = p.coords.latitude;
  document.getElementById("long1").value = p.coords.longitude;
  var infowindow = new google.maps.InfoWindow({
      content: '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h5 id="firstHeading" class="firstHeading">Badan Pengembangan Sumber Daya Manusia</h5s>' +
    '<div id="bodyContent">' +
    '<p>Alamat : Jl. Ngalengko No.1, Perintis, Kec. Medan Tim., Kota Medan, Sumatera Utara 20236</p>' +
    "</div>" +
    "</div>"
  });
  function showArrays(event) {
  // Since this polygon has only one path, we can call getPath() to return the
  // MVCArray of LatLngs.
  // @ts-ignore
  const polygon = this;
  const vertices = polygon.getPath();
  let contentString =
    "<b>Bermuda Triangle polygon</b><br>" +
    "Clicked location: <br>" +
    event.latLng.lat() +
    "," +
    event.latLng.lng() +
    "<br>";

  // Iterate over the vertices.
  for (let i = 0; i < vertices.getLength(); i++) {
    const xy = vertices.getAt(i);

    contentString +=
      "<br>" + "Coordinate " + i + ":<br>" + xy.lat() + "," + xy.lng();
  }

  // Replace the info window's content and position.
  infoWindow.setContent(contentString);
  infoWindow.setPosition(event.latLng);
  infoWindow.open(map);
}
}
</script>


<script type="importmap">
		{
			"imports": {
				"ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.3.0/ckeditor5.js",
				"ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.3.0/"
			}
		}
</script>
		<script type="module">
			import {
	ClassicEditor,
	AccessibilityHelp,
	Autoformat,
	Autosave,
	BlockQuote,
	Bold,
	Essentials,
	FullPage,
	GeneralHtmlSupport,
	Heading,
	HtmlComment,
	HtmlEmbed,
	Indent,
	IndentBlock,
	Italic,
	Link,
	Paragraph,
	SelectAll,
	ShowBlocks,
	SourceEditing,
	Table,
	TableCaption,
	TableCellProperties,
	TableColumnResize,
	TableProperties,
	TableToolbar,
	TextPartLanguage,
	TextTransformation,
	Title,
	Underline,
	Undo
} from 'ckeditor5';

const editorConfig = {
	toolbar: {
		items: [
			'undo',
			'redo',
			'|',
			'sourceEditing',
			'showBlocks',
			'textPartLanguage',
			'|',
			'heading',
			'|',
			'bold',
			'italic',
			'underline',
			'|',
			'link',
			'insertTable',
			'blockQuote',
			'htmlEmbed',
			'|',
			'outdent',
			'indent'
		],
		shouldNotGroupWhenFull: false
	},
	plugins: [
		AccessibilityHelp,
		Autoformat,
		Autosave,
		BlockQuote,
		Bold,
		Essentials,
		FullPage,
		GeneralHtmlSupport,
		Heading,
		HtmlComment,
		HtmlEmbed,
		Indent,
		IndentBlock,
		Italic,
		Link,
		Paragraph,
		SelectAll,
		ShowBlocks,
		SourceEditing,
		Table,
		TableCaption,
		TableCellProperties,
		TableColumnResize,
		TableProperties,
		TableToolbar,
		TextPartLanguage,
		TextTransformation,
		Title,
		Underline,
		Undo
	],
	heading: {
		options: [
			{
				model: 'paragraph',
				title: 'Paragraph',
				class: 'ck-heading_paragraph'
			},
			{
				model: 'heading1',
				view: 'h1',
				title: 'Heading 1',
				class: 'ck-heading_heading1'
			},
			{
				model: 'heading2',
				view: 'h2',
				title: 'Heading 2',
				class: 'ck-heading_heading2'
			},
			{
				model: 'heading3',
				view: 'h3',
				title: 'Heading 3',
				class: 'ck-heading_heading3'
			},
			{
				model: 'heading4',
				view: 'h4',
				title: 'Heading 4',
				class: 'ck-heading_heading4'
			},
			{
				model: 'heading5',
				view: 'h5',
				title: 'Heading 5',
				class: 'ck-heading_heading5'
			},
			{
				model: 'heading6',
				view: 'h6',
				title: 'Heading 6',
				class: 'ck-heading_heading6'
			}
		]
	},
	htmlSupport: {
		allow: [
			{
				name: /^.*$/,
				styles: true,
				attributes: true,
				classes: true
			}
		]
	},
	initialData:
		'',
	link: {
		addTargetToExternalLinks: true,
		defaultProtocol: 'https://',
		decorators: {
			toggleDownloadable: {
				mode: 'manual',
				label: 'Downloadable',
				attributes: {
					download: 'file'
				}
			}
		}
	},
	menuBar: {
		isVisible: true
	},
	placeholder: 'Type or paste your content here!',
	table: {
		contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells', 'tableProperties', 'tableCellProperties']
	}
};

ClassicEditor.create(document.querySelector('#editor'), editorConfig);
ClassicEditor.create(document.querySelector('#editor2'), editorConfig);

		</script>

 
	
	

</body>

</html>