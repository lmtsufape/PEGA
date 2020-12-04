
@extends('../templates.principal')

@section('title')
    Editar Depósito
@endsection

@section('content')

    <div style="border-bottom: #949494 2px solid; padding-bottom: 5px; margin-bottom: 10px">
        <h2>EDITAR DEPÓSITO</h2>
    </div>

    <form action="{{ route('deposito.update', $deposito->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-row" style="border-bottom: #cfc5c5 1px solid; padding: 0 0 20px 0; margin-bottom: 20px">
            <div class="form-group col-md-3">
                <label for="nome">Nome do depósito</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" placeholder="Depósito" value="{{ old('nome', $deposito->nome) }}">
                @error('nome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-2" >
                <label for="inputCodigo">Código</label>
                <input type="text" class="form-control @error('codigo') is-invalid @enderror" id="inputCodigo" name="codigo" placeholder="Código" value="{{ old('codigo', $deposito->codigo) }}">
                @error('codigo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="col-sm-1">
                <Button class="btn btn-secondary" type="button" onClick="location.href='../'"> Cancelar </Button>
            </div>
            <div class="col-sm-1">
                <Button type="button" class="btn btn-danger"> Remover </Button>
            </div>
            <div class="col-sm-1">
                <Button class="btn btn-success" type="submit"> Atualizar </Button>
            </div>
        </div>
    </form>
    {{-- <form action="{{ route('deposito.destroy', $deposito->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <Button class="btn btn-danger" type="submit"> Remover </Button>
    </form> --}}

@endsection
