@extends('layouts.master')

@section('content')
    <div class="row mt-5">
        <form action="">
            <div class="mb-3">
                <label for="" class="form-label">Legenda</label>
                <input type="text" class="form-control" value="{{ @old('email') }}" name="email" id=""
                    aria-describedby="helpId" placeholder="">
                @error('email')
                    <span class="badge bg-warning">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Legenda</label>
                <input type="password" class="form-control" name="password" value="{{ @old('password') }}" id=""
                    aria-describedby="helpId" placeholder="">
                @error('password')
                    <span class="badge bg-warning">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-3">
                <label for="" class="form-label">Legenda</label>
                <input type="password" class="form-control" name="password" value="{{ @old('password') }}" id=""
                    aria-describedby="helpId" placeholder="">
                @error('password')
                    <span class="badge bg-warning">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Legenda</label>
                <input type="password" class="form-control" name="password" value="{{ @old('password') }}" id=""
                    aria-describedby="helpId" placeholder="">
                @error('password')
                    <span class="badge bg-warning">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-success">Salvar</button>
        </form>
    </div>
@endsection
