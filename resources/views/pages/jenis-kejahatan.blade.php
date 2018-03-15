@extends('master')
@section('title', 'SMARTPOLDA | Jenis Kejahatan')
@section('style')

  <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')

<div class="col-12">
  <div class="page-title-box">
    <h4 class="page-title float-left">Jenis Kejahatan</h4>

    <ol class="breadcrumb float-right">
      <button type="button" class="btn btn-outline-info waves-light waves-effect btn-sm btn-rounded" id="tambahKategori">
        <i class="fa fa-plus-circle m-r-5"></i>
        Tambah Kategori
      </button>
    </ol>

    <div class="clearfix"></div>
  </div>
</div>

<div class="container-fluid">

  <div class="col-md-12">

    <div class="card-box">
      <h4 class="m-t-0 header-title">Jenis Kejahatan</h4>
      <p class="text-muted font-14 m-b-20">Berikut adalah <b>Jenis Jenis Kejahatan</b> yang ada saat ini.</p>
      <table class="table" id="table-list-jenis-kejahatan">
        <thead>
          <th>Jenis Kejahatan</th>
          <th>Deskripsi</th>
          <th>Action</th>
        </thead>
        <tbody>
          @foreach($jenis_kejahatan as $item)
            <tr>
              <td>
                {{ $item->nama_jenis_kejahatan }}
              </td>
              <td>{{ $item->deskripsi }}</td>
              <td>
                <a href="/do/delete/jenis-kejahatan/{{ $item->id }}" class="btn btn-danger waves-light waves-effect">
                  Delete
                </a>
                <a href="#" class="btn btn-info waves-light waves-effect">
                  Sub-Kategori
                  @if(count($item->subJenis) > 0)
                    <span class="badge badge-danger badge-pill"> {{ count($item->subJenis) }} </span>
                  @endif
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>

</div>

@endsection
@section('script')

  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables/buttons.bootstrap4.min.js"></script>
  <script src="plugins/datatables/jszip.min.js"></script>
  <script src="plugins/datatables/pdfmake.min.js"></script>
  <script src="plugins/datatables/vfs_fonts.js"></script>
  <script src="plugins/datatables/buttons.html5.min.js"></script>
  <script src="plugins/datatables/buttons.print.min.js"></script>
  <script src="plugins/datatables/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables/responsive.bootstrap4.min.js"></script>
  <script src="js/jenis-kejahatan.js"></script>

@endsection
