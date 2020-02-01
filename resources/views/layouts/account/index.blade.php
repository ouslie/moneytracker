@extends('index')

@section('title')

@endsection

@section('extra-css')

{{Html::style('bsbmd/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}

@endsection

@section('content')
<div class="container-fluid">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Categories
                    </h2>
                    <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">MODAL - DEFAULT SIZE</button>

                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Ajouter</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="categories-table">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Montant open </th>

                                    </tr>
                                </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-script')
<script>
    $(function() {
        $('#categories-table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: '{!! route('datatables.account') !!}',
            columns: [
                { data: 'name', name: 'name' },
                { data: 'start_amount', name: 'start_amount' },

            ]
        });
    });
</script>
{{Html::script('bsbmd/plugins/jquery-datatable/jquery.dataTables.js')}}
{{Html::script('bsbmd/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}
{{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}
{{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}
@endsection

