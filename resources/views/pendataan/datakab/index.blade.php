@extends('layouts.layout')
@section('title', 'Data Kabupaten')
@section('content')
<div class="x_panel">
	<div class="x_title">
        <h2>Data<small><i>Kabupaten</i></small></h2>
        <div style="float: right;">
            <a href="{{ url('/datakab/create') }}" class="btn btn-success" title="Tambah" style="color: black"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
        <div class="clearfix"></div>
	</div>
	<div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table id="datatable_responsive" class="table table-striped responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kabupaten</th>
                            <th>Proses</th>
                        </tr>
                    </thead>
                    <tbody style="color: black">
                        @forelse ($kab as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama_kabupaten }}</td>
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
