@extends('layouts.master')
<!-- DataTables CSS -->
<link href="{{ asset('/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
<!-- DataTables Responsive CSS -->
<!--<link href="{{ asset('/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" type="text/css" rel="stylesheet" media="screen,projection">-->
@section('contenido')
<div class="col-lg-12">
    <h1 class="page-header">Lista de Carros</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            Lista de Carros
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                @if(empty($carros))
                <div><p>No hay carros disponibles</p></div>
                @else
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Almacen</th>
                            <th>Costo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carros as $carro)
                        <tr class="odd gradeX">
                            <td>{{ $carro->tipo }}</td>
                            <td>{{ $carro->stock}}</td>
                            <td>{{ $carro->costo}}</td>
                        </tr>
                        @endforeach   
                    </tbody>
                </table>
                @endif
            </div>
            <!-- /.table-responsive -->

        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
@endsection
<!-- DataTables JavaScript -->
<script type="text/javascript" src="{{ asset('/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('/dist/js/sb-admin-2.js') }}"></script>

<script type="text/javascript" src="{{ asset('/bower_components/datatables-responsive/js/dataTables.responsive.js') }}"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>