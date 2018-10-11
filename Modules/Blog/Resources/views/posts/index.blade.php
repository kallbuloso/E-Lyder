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
    <p><h4 class="card-title">Posts</h4></p>
    <!-- Basic card -->
    <div class="card">
        {{--  <div class="card-header header-elements-inline">
            <p><h3 class="card-title">Posts</h3></p>  --}}
            {{--  <div class="header-elements">
                <div class="list-icons">  --}}
                    {{--  <a class="list-icons-item" data-action="collapse"></a>  --}}
                    {{--  <a class="list-icons-item" data-action="reload"></a>  --}}
                    {{--  <a class="list-icons-item" data-action="remove"></a>  --}}
                {{--  </div>
            </div>  --}}
        {{--  </div>          --}}
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
        {{--  <table class="table data-table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Job Title</th>
                        <th>DOB</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Marth</td>
                        <td><a href="#">Enright</a></td>
                        <td>Traffic Court Referee</td>
                        <td>22 Jun 1972</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Jackelyn</td>
                        <td>Weible</td>
                        <td><a href="#">Airline Transport Pilot</a></td>
                        <td>3 Oct 1981</td>
                        <td><span class="badge badge-secondary">Inactive</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Aura</td>
                        <td>Hard</td>
                        <td>Business Services Sales Representative</td>
                        <td>19 Apr 1969</td>
                        <td><span class="badge badge-danger">Suspended</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Nathalie</td>
                        <td><a href="#">Pretty</a></td>
                        <td>Drywall Stripper</td>
                        <td>13 Dec 1977</td>
                        <td><span class="badge badge-info">Pending</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Sharan</td>
                        <td>Leland</td>
                        <td>Aviation Tactical Readiness Officer</td>
                        <td>30 Dec 1991</td>
                        <td><span class="badge badge-secondary">Inactive</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Maxine</td>
                        <td><a href="#">Woldt</a></td>
                        <td><a href="#">Business Services Sales Representative</a></td>
                        <td>17 Oct 1987</td>
                        <td><span class="badge badge-info">Pending</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Sylvia</td>
                        <td><a href="#">Mcgaughy</a></td>
                        <td>Hemodialysis Technician</td>
                        <td>11 Nov 1983</td>
                        <td><span class="badge badge-danger">Suspended</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Lizzee</td>
                        <td><a href="#">Goodlow</a></td>
                        <td>Technical Services Librarian</td>
                        <td>1 Nov 1961</td>
                        <td><span class="badge badge-danger">Suspended</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Kennedy</td>
                        <td>Haley</td>
                        <td>Senior Marketing Designer</td>
                        <td>18 Dec 1960</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Chantal</td>
                        <td><a href="#">Nailor</a></td>
                        <td>Technical Services Librarian</td>
                        <td>10 Jan 1980</td>
                        <td><span class="badge badge-secondary">Inactive</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Delma</td>
                        <td>Bonds</td>
                        <td>Lead Brand Manager</td>
                        <td>21 Dec 1968</td>
                        <td><span class="badge badge-info">Pending</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Roland</td>
                        <td>Salmos</td>
                        <td><a href="#">Senior Program Developer</a></td>
                        <td>5 Jun 1986</td>
                        <td><span class="badge badge-secondary">Inactive</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Coy</td>
                        <td>Wollard</td>
                        <td>Customer Service Operator</td>
                        <td>12 Oct 1982</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Maxwell</td>
                        <td>Maben</td>
                        <td>Regional Representative</td>
                        <td>25 Feb 1988</td>
                        <td><span class="badge badge-danger">Suspended</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Cicely</td>
                        <td>Sigler</td>
                        <td><a href="#">Senior Research Officer</a></td>
                        <td>15 Mar 1960</td>
                        <td><span class="badge badge-info">Pending</span></td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>  --}}
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
@endpush