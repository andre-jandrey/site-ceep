<div class='content-header-left col-md-6 col-12 mb-2'>
<h3 class='content-header-title'>Categoria <a class='btn btn-success text-bold-600' href="{{ route('planejamento_retorno.create')}}">Criar Planejamento_retorno</a> </h3>
    <div class='row breadcrumbs-top'>
        <div class='breadcrumb-wrapper col-12'>
            <ol class='breadcrumb'>
                <li class='breadcrumb-item'><a href='{{ url('/') }}'>Home</a>
                </li>
                <li class='breadcrumb-item active'>planejamento_retorno
                </li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content-body')
<section id=''>
    <div class='row'>
        <div class='col-12'>
            <div class='card'>
                <div class='card-header'>                    
                    <a class='heading-elements-toggle'><i class='la la-ellipsis-v font-medium-3'></i></a>
                    <div class='heading-elements'>
                        <ul class='list-inline mb-0'>
                            <li><a data-action='collapse'><i class='ft-minus'></i></a></li>
                            <li><a data-action='expand'><i class='ft-maximize'></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class='card-content collapse show'>
                    <div class='card-body card-dashboard'>
                        
                        <table class='table table-striped table-bordered ' style='' id='table_Planejamento_retorno'>
                            <thead>
                                <tr class=''><th>idplanejamento_retorno</th>
<th>idplanejamento</th>
<th>idusuario</th>
<th>data</th>
<th>observacao</th>
<th>arquivo</th>
<th>situacao</th>
</tr>
                            </thead>
                            <tbody>
                                @foreach ($planejamento_retorno as $dados)
                                    <tr>    <td> {{ $dados->IDPLANEJAMENTO_RETORNO }} </td>
    <td> {{ $dados->IDPLANEJAMENTO }} </td>
    <td> {{ $dados->IDUSUARIO }} </td>
    <td> {{ $dados->DATA }} </td>
    <td> {{ $dados->OBSERVACAO }} </td>
    <td> {{ $dados->ARQUIVO }} </td>
    <td> {{ $dados->SITUACAO }} </td>
<td> 
                                            <a href="{{ route('planejamento_retorno.edit', $dados->id) }}" title='Editar' class='btn btn-sm btn-primary  edit'>
                                                <i class='icon-edit'></i> <span class='hidden-xs hidden-sm'>Editar</span>
                                            </a> 
                                            <a href='javascript:;' title='Remover' class='btn btn-sm btn-danger  delete' data-id='{{ $dados->id}}' id='delete-2'>
                                                <i class='icon-trash'></i> <span class='hidden-xs hidden-sm'>Remover</span>
                                            </a>
                                        </td>
                                    </tr>  
                                @endforeach                            
                            </tbody>
                        </table>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Zero configuration table -->

<div class='modal modal-danger fade' tabindex='-1' id='delete_modal' role='dialog'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Fechar'><span aria-hidden='true'>&times;</span></button>
                <h4 class='modal-title'><i class='voyager-trash'></i> Tem certeza de que deseja remover esta Planejamento_retorno?</h4>
            </div>
            <div class='modal-footer'>
                <form action='#' id='delete_form' method='POST'>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type='submit' class='btn btn-danger pull-right delete-confirm' value='Sim, Remover!'>
                </form>
                <button type='button' class='btn btn-default pull-right' data-dismiss='modal'>Cancelar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection

@section('js')  
    {{-- <script src='{{ asset('js/jquery.dynatable.js') }}'></script>  --}}
    <script src='//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script> 

    <script>
    $(document).ready(function(){
        // $('#table_anuncios').dynatable();   
        $('#table_Planejamento_retorno').DataTable();        
    });
    var deleteFormAction;
    $('td').on('click', '.delete', function (e) {
        $('#delete_form')[0].action = 'Planejamento_retorno/__id'.replace('__id', $(this).data('id'));
        $('#delete_modal').modal('show');
    });
    </script>
@endsection