@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <!--Flash Message--> 
  <div class="container-fluid">
        <div class="row">
            @if(session('msg'))
            <div class="alert alert-success msg text-center" role="alert">
                <strong>OK! </strong>{{ session('msg')}}
            </div>
            @endif
            @yield('content')
        </div>
    </div>
    <h1>Dashboard - Candidatos</h1>
@stop

@section('content')

    <p>Consulte aqui a relação de candidatos cadastradas na PrideJob.</p>
    @php
        $heads = [
            'ID',
            'Nome',
            'Cpf',
            'Rg',
            'E-mail',
            ['label' => 'Actions', 'no-export' => true, 'width' => 15],
        ];

        $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                        <i class="fa fa-lg fa-fw fa-pen"></i>
                    </button>';
        $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                        <i class="fa fa-lg fa-fw fa-trash"></i>
                    </button>';
        $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                    </button>';

        $config = [
            'data' => $candidatos,
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp
        <x-adminlte-datatable id="table1" :heads="$heads" striped hoverable bordered>
            @foreach($candidatos as $candidato)
                <tr>
                    <td>{{$candidato->id}}</td>
                    <td>{{$candidato->nome_completo}}</td>
                    <td>{{$candidato->cpf}}</td>
                    <td>{{$candidato->rg}}</td>
                    <td>{{$candidato->email}}</td>
                    <td>
                        <button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                        </button>
                        <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                            <i class="fa fa-lg fa-fw fa-pen"></i>
                        </button>
                        <form action="/dashboard/candidatos/{{ $candidato->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach 
        </x-adminlte-datatable>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop