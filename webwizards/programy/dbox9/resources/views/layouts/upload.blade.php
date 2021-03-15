@extends('welcome')

@section('content')
<!-- <form action="/store" method="POST" enctype="multipart/form-data" >
        <input type="file" name="btnenviar" id="btnenviar"/>
        <input type="submit" class="btn btn-small btn-success"/>
</form> -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Wybierz Plik') }}</div>
                <div class="card-body">
                    <form method="POST" action="/store" enctype="multipart/form-data">
                        @csrf
<!-- Select a File -->
                        <div class="form-group row">
                            <label for="file_name" class="col-md-4 col-form-label text-md-right">File name</label>

                            <div class="col-md-6">
                                <input id="file_name" type="text" class="form-control @error('file_name') is-invalid @enderror" name="file_name">

                                @error('file_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <div class="col-md-6">
                                <input id="file_name" type="file" name="file_name">
                            </div>
                        </div> -->
<!-- Register Button -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Dodaj') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@csrf
<!-- Type pass number -->
                        <!-- <div class="form-group row">
                            <label for="pass_number" class="col-md-4 col-form-label text-md-right">{{ __('Pass number') }}</label>
                            <div class="col-md-6">
                                <input id="pass_number" type="text" class="form-control @error('pass_number') is-invalid @enderror" name="pass_number">
                            </div>
                        </div> -->