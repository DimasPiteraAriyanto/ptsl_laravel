@extends('layouts.layout')
@section('title', 'Data Kabupaten')
@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow h-100">
                    <div class="card-header border-0">
                        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between text-center text-md-left">
                            <div class="mb-3">
                                <h2 class="mb-0">Pendataan</h2>
                            </div>
                            <div class="mb-3">
                                <a href="{{ url("/datakab") }}" class="btn btn-success" title="Kembali"> Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card-body">
            <form autocomplete="off" action="{{ url('/datakab') }}" method="post">
                @csrf
                <div class="row">
                    <div class="form-group col-lg-6 col-md-6">
                        <label class="form-control-label" for="first-name">Nama Kabupaten <span class="required">*</span></label>
                            <input type="text" id="nama_kabupaten" name="nama_kabupaten" required="required" class="form-control ">
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <label class="form-control-label" for="first-name">Nama Kecamatan <span class="required">*</span></label>
                            <input type="text" id="nama_kecamatan" name="nama_kecamatan" required="required" class="form-control ">
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <label class="form-control-label" for="first-name">kode Desa <span class="required">*</span></label>
                            <input type="text" id="kode_desa" name="kode_desa" required="required" class="form-control ">
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <label class="form-control-label" for="first-name">Nama Desa <span class="required">*</span></label>
                            <input type="text" id="nama_desa" name="nama_desa" required="required" class="form-control ">
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <label class="form-control-label" for="first-name">Reje Kampung <span class="required">*</span></label>
                            <input type="text" id="reje_kampung" name="reje_kampung" required="required" class="form-control ">
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <label class="form-control-label" for="first-name">Nama Camat <span class="required">*</span></label>
                            <input type="text" id="nama_camat" name="nama_camat" required="required" class="form-control ">
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <label class="form-control-label" for="first-name">Kode Pos <span class="required">*</span></label>
                            <input type="text" id="kode_pos" name="kode_pos" required="required" class="form-control ">
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <label class="form-control-label" for="first-name">NIP <span class="required">*</span></label>
                            <input type="text" id="nip" name="nip" required="required" class="form-control ">
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <label class="form-control-label" for="first-name">Alamat <span class="required">*</span></label>
                            <input type="text" id="alamat" name="alamat" required="required" class="form-control ">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" id="simpan">SIMPAN</button>
            </form>
        </div>
    </div>
</div>
@endsection
