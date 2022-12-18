@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="card" class="card">
                    <div class="card-header">
                       <p> Users List</p>
                      
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
                            
                                <th></th>
                            </tr>
                        
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                   
                                    @foreach($user->categories as $category)
                                    <td>{{ $category->type }}</td>
                                    @endforeach
                                    <td>
                                    <a href="{{ route('users.index') }}" onclick="event.preventDefault();
                                     document.getElementById('delete-form-{{$user->id}}').submit();">
                                    Delete
                                    </a>
                                    </td>
                                    <form id="delete-form-{{$user->id}}" action="{{ route('users.destroy',$user->id) }}"method="post">
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