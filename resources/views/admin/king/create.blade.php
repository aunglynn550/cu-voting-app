@extends('admin.layouts.app')

@section('content')

<div class="main-content">
<div class="admin container">
    <h3 class="ff-tanger">Create New King</h3>
        <div class="row">
            <div class="col-md-12">

            <form action="{{ route('king.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="input-group mb-3">                   
                    <input name="name" type="text" class="form-control" placeholder="Name.." aria-label="name" aria-describedby="basic-addon1">
                </div>

            
                <div class="input_group">
                    <input class="btn" type="file" name="image">
                    <input type="submit" class="btn" value="Create">
          
                </div>
                

            </form>
                  
         
                </div>
            </div>
        </div>
</div>


@endsection