@extends('admin.layouts.app')

@section('content')


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

            <form action="{{ route('queen.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="input-group mb-3">                   
                    <input name="name" type="text" class="form-control" placeholder="Name.." aria-label="name" aria-describedby="basic-addon1">
                </div>

            
                <div class="input-group">
                <input type="file" name="image">
                </div>
                <div class="btn">
                    <input type="submit" class="button" data-type="primary" value="Create">
                </div>

            </form>
                  
         
                </div>
            </div>
        </div>

@endsection