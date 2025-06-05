@extends('admin.master.admin_master')
@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 m-b-15 header-title">Team List</h4>

                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <div class="mb-3">
                                <a href="{{ route('admin.team.add') }}" class="btn btn-primary">Add</a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($teams as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td> {{ $item->name }}</td>
                                                <td><img src="{{ asset($item->image) }}" width="70" alt="Image"></td>
                                                <td>{!! \Illuminate\Support\Str::limit($item->description, 60) !!}</td>
                                                <td>
                                                    <a href="{{ route('admin.team.edit', $item->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>
                                                    <a href="{{ route('admin.team.delete', $item->id) }}"
                                                        class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this item?')">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center text-muted">No data found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end row -->

        </div><!-- container-fluid -->

    </div>
@endsection
