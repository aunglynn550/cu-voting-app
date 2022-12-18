@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="card" class="card">
                    <div class="card-header">
                       <p> Kings List</p>
                        <a href="{{ route('king.create') }}" class="button btn-sm" data-type="primary">Create</a>
                    </div>
                    
                    <div class="card-body">

                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        <table class="table user-approve-table">
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Votes</th>
                                <th></th>
                            </tr>
                        
                                <tr>
                                    <td>
                                        <div class="product-img">
                                        <img src="/img/King/{{ $king->image }}" alt="">
                                        </div>
                                        
                                    </td>
                                    <td>{{ $king->name }}</td>
                                    <td>{{ $king->email }}</td>
                                    <td>   
                                        <form id="update-form-{{$king->id}}" action="{{ route('king.update',$king->id) }}"method="post">
                                        @csrf @method('PATCH')
                                        <input type="text" value="{{ $king->vote }}" name="vote">
                                    </form>
                                    </td>
                                    <td>
                                    <a href="{{ route('king.index') }}" onclick="event.preventDefault();
                                     document.getElementById('update-form-{{$king->id}}').submit();">
                                    Update
                                    </a>
                                    </td>
                                    <td>
                                    <a href="{{ route('king.index') }}" onclick="event.preventDefault();
                                     document.getElementById('delete-form-{{$king->id}}').submit();">
                                    Delete
                                    </a>
                                    </td>
                                    <form id="delete-form-{{$king->id}}" action="{{ route('king.destroy',$king->id) }}"method="post">
                                        @csrf @method('DELETE')
                                    </form>
                                 
                                 
                                </tr>
                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection