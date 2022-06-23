@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#add_store">
                    Add Store
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($n=1)
                    @foreach($stores as $s)
                        <tr>
                            <th scope="row">{{ $n++ }}</th>
                            <td>{{ $s->name }}</td>
                            <td>
                                <form action="{{ route('store.destroy',$s->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-success" href="{{ route('store.show',$s->id) }}">
                                        <i class="fa-solid fa-eye text-white"></i>
                                    </a>
                                    <a class="btn btn-warning" href="{{ route('store.edit',$s->id) }}">
                                        <i class="fa-solid fa-user-pen"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-user-xmark"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="add_store" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('store.create')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Store Name</label>
                            <input type="text" class="form-control" id="name" name="name" />
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
