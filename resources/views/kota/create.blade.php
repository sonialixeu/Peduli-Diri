@extends('layouts.app') 
@section('content') 
<div class="pagetitle">
    <h1>Isi Data</h1>
</div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kota</h5>
              <!-- Vertical Form -->
              <form action="/kota/store" method="post" class="row g-3">
                  @csrf
                  <div class="col-12">
                  <label for="floating" class="form-label">Lokasi</label>
                  <select name="kota" id="id_kota" class="form-control">
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Depok">Depok</option>
                        <option value="Tangerang">Tangerang</option>
                        <option value="Bekasi">Bekasi</option>
                     </select>
                </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                    </div>
                </form><!-- Vertical Form -->
    </div>
</div>
@endsection