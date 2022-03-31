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
              <h5 class="card-title">Table Perjalanan</h5>
           
              <!-- search bar -->
                <div class="input-group rounded">
                <form class="search-form d-flex align-items-center" method="get" action="perjalanan/cari">
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
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Suhu Tubuh</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                @foreach ($user->perjalanan as $pj => $p)
                <tbody>
                    <tr>
                        <td>{{$pj+1}}</td>
                        <td>{{$p->tanggal}}</td>
                        <td>{{$p->jam}}</td>
                        <td>{{$p->id_kota}}</td>
                        <td>{{$p->suhu_tubuh}}</td>
                        <td>
                            <a href="/perjalanan/delete/{{$p->id_perjalanan}}"><i class="ri-delete-bin-5-line">Hapus</i></a>
                        </td>
                    </tr>
                </tbody>
                @endforeach

               
                </table>
                <br>
                <center><a href="/perjalanan/tambah">Masukan Data</a></center>
            <!-- End Table with stripped rows -->
            {{$perjalanan->links()}}
            
    </div> 
</div>
@endsection
