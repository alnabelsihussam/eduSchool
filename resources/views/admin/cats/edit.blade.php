@extends('admin.layouts.master')
@section('title')
    Edit Category
@endsection
@section('page_name')
    Edit Category
@endsection
@section('main_page')
    Edit Category
@endsection
@section('sub_page')
    Edit
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Category</h3>
            </div>


            <form method="post" action="{{ route('cats.update', $cat->id) }}">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name </label>
                        <input type="text" value="{{ $cat->name }}" name="name" class="form-control" id="name"
                            placeholder="Enter Category Name">
                    </div>

                    <div class="col-sm-6">

                        <div class="form-group clearfix">

                            <label for="name">
                                Status
                            </label>

                            <div class="icheck-primary d-inline mx-3">
                                <input type="radio" id="radioPrimary1" name="active" value="1"
                                    {{ $cat->active == 1 ? 'checked' : '' }}>
                                <label for="radioPrimary1">
                                    Active
                                </label>
                            </div>
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="radioPrimary2" name="active" value="0"
                                    {{ $cat->active == 0 ? 'checked' : '' }}>

                                <label for="radioPrimary2">
                                    Not Active
                                </label>
                            </div>

                        </div>
                    </div>


                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
