@extends('layouts.app')
@section('title', 'Add Client')

@section('content')
    <style>
        .error {border: 1px solid #f00;}
    </style>
    <div class="container pt-5 mt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="row">
        <div class="col-12">
            <h2 class="modal-title">Add Client</h2>
            <form action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Email address</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" id="name" name="name" value="{{ old('name') }}" />
                </div>
                <div class="mb-3">
                    <label for="tel" class="form-label">Tel</label>
                    <input type="tel" class="form-control {{ $errors->has('tel') ? 'error' : '' }}" id="tel" name="tel" value="{{ old('tel') }}" />
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control {{ $errors->has('image') ? 'error' : '' }}" id="image" name="image" value="{{ old('image') }}" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
    </div>
@endsection
