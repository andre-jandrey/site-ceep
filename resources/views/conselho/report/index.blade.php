
@extends('layouts.app')
@section('css')
<style>
    h3, h5, p {
        margin:0; 
    }
    h2{
        margin-bottom: 1.5em;
    }

    
/*         h2 { 
                page-break-before: always; 
            }
        h2:first-of-type {
            page-break-before: avoid;
        } */
   
        .new-page{
            page-break-before: always;
        }

        .new-page:first{
            page-break-before: auto;
        }
</style>

@endsection

@section('content')
    @php
        $turmas = array(
            1 => "Turma A",
            2 => "Turma B",
            3 => "Turma C",
            4 => "Turma B (Tarde)",
            5 => "Turma (Noturno)"
        );
        $cursos = array(
            1 => "",
            2 => "",
            3 => "",
            4 => ""
        );
    @endphp

    @php
        $count = 0;
        $idaluno = 0;
        $idcurso = 0;
        $idserie = 0;
        $idturma = 0;
        $disciplina = "Não Informada";
    @endphp
    @foreach ($registros as $r) 
    @php $count++; @endphp

        @if($idcurso != $r->curso)
            @php
                $idcurso = $r->curso;
                $idserie = $r->serie;
                $idturma = $r->turma;
            @endphp
            @if(isset($tipo) && $tipo==0)
                <h2 @if($count > 1) class="new-page" @endif>Curso: {{$r->disciplina2->curso2->nome}} - Série: {{$r->serie}} Série/Semestre - Turma: {{$turmas[$r->turma]}}</h2>
        
                @endif
        @endif
        @if($idserie != $r->serie)
            @php
                $idcurso = $r->curso;
                $idserie = $r->serie;
                $idturma = $r->turma;
            @endphp
            <h2  class="new-page">Curso: {{$r->disciplina2->curso2->nome}} - Série: {{$r->serie}} Série/Semestre - Turma: {{$turmas[$r->turma]}}</h2>
        @endif

        @if($idturma != $r->turma)
            @php
                $idcurso = $r->curso;
                $idserie = $r->serie;
                $idturma = $r->turma;
            @endphp
            <h2  class="new-page">Curso: {{$r->disciplina2->curso2->nome}} - Série: {{$r->serie}} Série/Semestre - Turma: {{$turmas[$r->turma]}}</h2>
        @endif


        @if ($idaluno != $r->aluno)
            @php
                $idaluno = $r->aluno;
                $disciplina = "Não informada";
                
            @endphp
            @if(isset($tipo) && $tipo==1)
                <h2  @if($count > 1) class="new-page" @endif>Curso: {{$r->disciplina2->curso2->nome}} - Série: {{$r->serie}} Série/Semestre - Turma: {{$turmas[$r->turma]}}</h2>
{{--                 <div class="new-page"></div>
 --}}            @endif
            <h3>ALUNO N°: {{$r->aluno}} </h3>
        @endif

        @if ($disciplina !=$r->disciplina)
            @php
                $disciplina = $r->disciplina;
            @endphp
            <h5>DISCIPLINA: {{ strtoupper($r->disciplina) }} - PROFESSOR: {{ strtoupper($r->disciplina2->professor) }}</h5>
          
            
        @endif
            <p>{{ $r->created_at->format('d/m/Y') }} - {{$r->informacao->descricao}}</p>  
    @endforeach

        {{--   <tr> 
                <th colspan='2'>Professor:</th>
                <th colspan='4'> {{$r->professor}}</th>
                <th colspan='2'>Disciplina:</th>
                <th colspan='4'> {{$r->disciplina}}</th>
            </tr>
        </table>


        <table border='1'><tr>
            <tr>
                <td>Aluno Nº:  {{ $r->aluno }} </td> 
                <td>{{$r->informacao->nome }}</td></tr>
            </tr>
        </table>
    @endforeach
   

   <!-- <table class='table table-striped table-bordered table-hover'>
        <tr>
            <th>Criado em</th>
            <th>Informação</th>
<!-             <th>Ações</th>
 --       </tr>
        

        {{--<td colspan="2">Registro de: {{ $registros[0]->disciplina->professor }}
         para: {{ $registros[0]->disciplina->curso2->nome }} - 
         {{ $registros[0]->disciplina->serie }} Série/Semestre - 
         {{ $turmas[$registros[0]->disciplina->turma] }} -
          {{ $registros[0]->disciplina->disciplina }}</td>--}

        <tr>
        </tr>
        @php 
            $aluno = 0;
        @endphp
        @foreach ($registros as $r)
            @if($aluno != $r->aluno)
                <tr>
                    <td colspan="2">Aluno: {{ $r->aluno}}</td>
                </tr>
                @php $aluno = $r->aluno @endphp
            @endif
            <tr>
            <!-- <td>{{ $r}}</td> -->
            
            <td>{{ $r->created_at->format('d/m/Y') }}</td>
            <td>{{ $r->informacao->nome}}</td>
            {{--<td>{{$c->informacao_id}}</td>
            <td>{{$c->created_at->format("d/m/Y")}}</td>
            <td>
                <a class='btn btn-success' href='{{action('ConselhoCategoriaController@show', $d->id)}}'>
                    <i class='material-icons'>info</i>
                </a>
                <form action='/conselho-categoria/{{$d->id}}' method='post'>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class='btn btn-danger'>
                        <i class='material-icons'>delete</i>
                    </button>
                </form>
                <a class='btn btn-warning' href='{{action('ConselhoCategoriaController@edit', $d->id)}}'>
                    <i class='material-icons'>edit</i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>-->--}}
    {{-- Total de registros: {{ $count}} --}} 

@stop
