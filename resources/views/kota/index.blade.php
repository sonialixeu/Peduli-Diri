@extends('layouts.app') 
@section('content')
<div class="pagetitle">
      <h1>Isi Data</h1>
</div>
 <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table Kota</h5>
              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Kota</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                @foreach($kota as $k)
                <tbody>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$k->kota}}</td>
                    <td>
                        <a href="/kota/delete/{{$k->id_kota}}"><i class="ri-delete-bin-5-line">Hapus</i></a>
                    </td>
                </tbody>
                 @endforeach
              </table>
                <br>
                <center><a href="/kota/tambah">Masukan Data</a></center>
            <!-- End Table with stripped rows -->
    </div> 
</div>
@endsection