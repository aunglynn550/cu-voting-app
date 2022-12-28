
@extends('layouts.app')

@section('content')
<div class="voting-card">
    <div class="voting-container">
    <form action="{{ route('voteallking') }}" method="post">
    @csrf
    <label for="roll_no" >Roll No</label>
    <input class="input" type="text" name='roll_no'>
    <label class="ff-tanger fs-1" for="roll_no">Format: <span class="ff-bunge fs-1">4CS-</span> </label>
    <button class="button" type="submit">Vote</button>
    </form>
    </div>
  
</div>
@endsection

