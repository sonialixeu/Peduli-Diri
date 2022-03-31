@extends('layouts.app')
@section('content') 
<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
 <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data User</h5>
           
              <!-- search bar -->
                <div class="input-group rounded">
                <form class="search-form d-flex align-items-center" method="get" action="data/cari">
                  <input type="text" class="form-control" placeholder="Cari pengguna" name="cari">
                  <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">
                      <i class="bi bi-search"></i>
                    </button>
                  </div>
                  </form>
                </div>

              <!-- Table with stripped rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Telp</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                  </tr>
                </thead>
                @foreach ($user as $us => $u)
                <tbody>
                    <tr>
                        <td>{{$us+1}}</td>
                        <td>{{$u->nik}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->telp ?? "-"}}</td>
                        <td>{{$u->username ?? "-"}}</td>
                        <td>{{$u->email ?? "-"}}</td>
                        <td>{{$u->alamat ?? "-"}}</td>
                        <td>
                            <a href="/data/delete/{{$u->id}}"><i class="ri-delete-bin-5-line">Hapus</i></a>
                        </td>
                    </tr>
                </tbody>
                @endforeach

               
                </table>
                <br>
                <center><a class="btn btn-success" href="/data/cetak_pdf"><i class="ri-download-2-fill">Cetak Data</i></a></center>
            <!-- End Table with stripped rows -->
            {{$user->links()}}
            
    </div> 
</div>
@endsection
