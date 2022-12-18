<form action="{{ route('king.destroy',$user->id)) }}" method="delete" enctype="multipart/form-data">
                                        @csrf

                                        <div class="input-group mb-3">                   
                                            <a class="button btn-sm" data-type="primary" href="{{route('king.destroy', $user->id)}}">Delete</a>
                                        </div>
</form>