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
    <h1>Dashboard - Empresas</h1>
@stop

@section('content')

    <p>Consulte aqui a relação de empresas cadastradas na PrideJob.</p>
    @if($empresas->first() == [])
        <strong>Ainda não há nenhuma empresa cadastrada.</strong>
    @endif

    @php
        $heads = [
            'ID',
            'Empresa',
            'Representante',
            'Cargo',
            'E-mail',
            'Cidade',
            ['label' => 'Actions', 'no-export' => true, 'width' => 30],
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
            'data' => $empresas,
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp
       @if($empresas->first() != [])
        <x-adminlte-datatable id="table1" :heads="$heads" striped hoverable bordered>
            @foreach($empresas as $empresa)
                <tr>
                    <td>{{$empresa->id}}</td>
                    <td>{{$empresa->nome_empresa}}</td>
                    <td>{{$empresa->representante}}</td>
                    <td>{{$empresa->cargo}}</td>
                    <td>{{$empresa->email}}</td>
                    <td>{{$empresa->cidade}}</td>
                    <td>
                        <button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                        </button>
                        <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                            <i class="fa fa-lg fa-fw fa-pen"></i>
                        </button>
                        <form action="/dashboard/empresas/{{ $empresa->id }}" method="POST">
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
        @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop