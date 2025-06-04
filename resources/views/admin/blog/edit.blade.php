@extends('admin.master.admin_master')

@section('content')
<div class="page-content-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Edit Blog</h4>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.blog.update',$blogs->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset($blogs->image) }}" width="70" alt="Image">
                            </div>

                            <div class="form-group">
                                <label for="title">Title <span class="text-danger"></span></label>
                                <input type="text" name="title" class="form-control" value="{{ $blogs->title }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" rows="4">{{ $blogs->description }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">Back</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container-fluid -->
</div> <!-- page-content-wrapper -->
@endsection
