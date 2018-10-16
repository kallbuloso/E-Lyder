@extends('blog::admin.app')
{{--  stylesheets  --}}
@push('stylesheets')

@endpush

@section('header')
    
    {{--  <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Starters</span> - Navbars Fixed</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <a href="#" class="btn btn-labeled btn-labeled-right bg-pink-400">Button <b><i class="icon-menu7"></i></b></a>
        </div>
    </div>  --}}

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="#" class="breadcrumb-item">Link</a>
                    <span class="breadcrumb-item active">Posts</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    {{--  <a href="#" class="breadcrumb-elements-item">
                        Link
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            Dropdown
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separate action</a>
                        </div>
                    </div>  --}}
                </div>
            </div>
        </div>
    
@endsection
@section('content')
    {{--  <p><h4 class="card-title">Posts</h4></p>  --}}
    <!-- Basic card -->
    
    <div class="card box-shadow-1">
        <div class="card-header header-elements-inline">
            <h3 class="card-title">{{ __('Lista de Posts de...') }}</h3>
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                {{ __('Criar novo Post') }} 
                <i class="icon-paperplane ml-2">
            </i></button>
        </div>
        {{--  <div class="card-body ">  --}}
                    
                {{--  </div>   --}}
            {{--  </fieldset>         --}}
            {{--  <div class="card-body">
                    This example shows the basic use case of the <code>ColReorder</code> plugin. With ColReorder enabled for a table, the user has the ability to click and drag any table header cell, and drop it where they wish the column to be inserted. The insert point is shown visually, and the column reordering is done as soon as the mouse button is released. ColReorder is added to a DataTable through the <code>R</code> character added to the <code>dom</code>.
            </div>  --}}
            
            <table class="table data-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Prévia</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->excerpt }}</td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="fa fa-eye"></i> {{ __('Ver') }}</a>
                                            <a href="#" class="dropdown-item"><i class="fa fa-edit"></i> {{ __('Editar') }}</a>
                                            <a href="#" class="dropdown-item"><i class="fa fa-close"></i> {{ __('Excluir') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        {{--  </div>  --}}
    </div>
    <!-- /basic card -->
@endsection
{{--  scripts  --}}
@push('scripts')
    <script src="{{ asset('ll/global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('ll/global_assets/js/demo_pages/datatables_extension_reorder.js') }}"></script>
    <script src="{{ asset('ll/global_assets/js/plugins/tables/datatables/extensions/col_reorder.min.js') }}"></script>
    <script src="{{ asset('ll/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script> // Modelo 2
        $('document').ready(function(){
            $('.data-table').DataTable({
                scrollCollapse: false,
                lengthChange: true, 
                searching: false,
                autoWidth: true,
                ordering: false,
                info: true,
                responsive: true,
                columnDefs: [{
                    targets: "datatable-nosort",
                    orderable: false,
                }],
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
                "language":
                    {
                        "sEmptyTable"     : "Nenhum registro encontrado",
                        "sInfo"           : "Exibindo de _START_ até _END_ de _TOTAL_ registros",
                        "sInfoEmpty"      : "Exibindo 0 até 0 de 0 registros",
                        "sInfoFiltered"   : "(Filtrados de _MAX_ registros)",
                        "sInfoPostFix"    : "",
                        "decimal"         : ",",
                        "sInfoThousands"  : ".",
                        "sLengthMenu"     : "Mostrar _MENU_ resultados por página",
                        "sLoadingRecords" : "Carregando...",
                        "sProcessing"     : "Processando...",
                        "sZeroRecords"    : "Nenhum registro encontrado",
                        "sSearch"         : "Pesquisar:",
                        "oPaginate": 
                            {
                                "sNext"           : "Próximo",
                                "sPrevious"       : "Anterior",
                                "sFirst"          : "Primeiro",
                                "sLast"           : "Último"
                                },
                        "oAria": 
                            {
                                "sSortAscending"  : ": Ordenar colunas de forma ascendente",
                                "sSortDescending" : ": Ordenar colunas de forma descendente"
                                }
                    },
            });
        });
    </script>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            {!! Form::open(['class' => "form-horizontal", 'method' => 'POST','action' => 'Admin\PostsController@store']) !!}
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">{{ __('Informe o título do novo post') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            {{--  Text  --}}
                            {{ Form::textGroup('12','title', null, ['placeholder' => 'Título do novo post'], 'Título', $errors) }}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Cancelar') }}</button>
                        <button class="btn btn-primary">{{ __('Criar post') }}</button>
                    </div>
                </div>            
            {!! Form::close() !!}            
        </div>
    </div>   
@endpush