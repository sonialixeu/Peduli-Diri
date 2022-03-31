@extends('layouts.app')
@section('content')
<div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data Perjalanan</h5>
              <form action="/perjalanan/store" method="post" class="row g-3">
                  @csrf
                <div class="col-12">
                  <label for="floating" class="form-label">Tanggal</label>
                  <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="col-12">
                  <label for="floating" class="form-label">Jam</label>
                  <input type="time" class="form-control" name="jam">
                </div>
                <div class="col-12">
                  <label for="floating" class="form-label">Lokasi</label>
                  <input type="text" name="id_kota" class="form-control">
                </div>
                <div class="col-12">
                  <label for="floating" class="form-label">Suhu Tubuh</label>
                  <input type="text" class="form-control" name="suhu_tubuh">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>

            </div>
          </div>
@endsection