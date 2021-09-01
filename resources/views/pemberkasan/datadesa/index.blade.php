@extends('layouts.layout')
@section('title', 'Data Desa')
@section('content')
<div class="x_panel">
	<div class="x_title">
        <h2>Data<small><i>Desa</i></small></h2>
        <div class="clearfix"></div>
	</div>
	<div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table id="datatable_responsive" class="table table-striped responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kecamatan</th>
                            <th>Kode Desa</th>
                            <th>Desa</th>
                            <th>Reje Kampung</th>
                            <th>Camat</th>
                            <th>NIP</th>
                            <th>Alamat</th>
                            <th>Kode Pos</th>
                            <th>Proses</th>
                        </tr>
                    </thead>
                    <tbody style="color: black">
                        @forelse ($desa as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->kecamatan->nama_kecamatan }}</td> {{-- ambil data 'nama_kecamatan' dari tabel 'kecamatan' menggunakan function yang dibuat pada Models 'DataDesa' --}}
                                <td>{{ $item->kode_desa}}</td>
                                <td>{{ $item->nama_desa}}</td>
                                <td>{{ $item->reje_kampung}}</td>
                                <td>{{ $item->nama_camat}}</td>
                                <td>{{ $item->nip}}</td>
                                <td>{{ $item->alamat}}</td>
                                <td>{{ $item->kode_pos}}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                                </td>
                                @empty
                                <tr>
                                    <td colspan="15" align="center">Data tidak tersedia</td>
                                </tr>
                            </tr>
                        @endforelse
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
