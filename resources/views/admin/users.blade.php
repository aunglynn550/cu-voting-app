@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="card" class="card">
                    <div class="card-header">Users List</div>

                    <div class="card-body">

                     

                        <table class="table user-approve-table">
                        <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Votes</th>
                                <th></th>
                            </tr>
                            @forelse ($users as $user)
                                <tr>
                                    <td>
                                        <div class="product-img">
                                        <img src="/img/King/{{ $user->image }}" alt="">
                                        </div>
                                        
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->vote }}</td>
                                    <td><a href="#"
                                           class="button btn-sm" data-type="primary">Edit</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No users found.</td>
                                </tr>
                            @endforelse
                          
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection