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
                                        <img src="/img/Queen/{{ $queen->image }}" alt="">
                                        </div>
                                        
                                    </td>
                                    <td>{{ $queen->name }}</td>
                                    <td>{{ $queen->email }}</td>
                                    <td>{{ $queen->vote }}</td>
                                    <td>
                                    <a href="{{ route('queen.index') }}" onclick="event.preventDefault();
                                     document.getElementById('delete-form-{{$queen->id}}').submit();">
                                    Delete
                                    </a>
                                    </td>
                                    <form id="delete-form-{{$queen->id}}" action="{{ route('queen.destroy',$queen->id) }}"method="post">
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