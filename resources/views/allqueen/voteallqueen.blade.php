
@extends('layouts.app')

@section('content')
<div class="voting-card">
    <div class="voting-container">
    <form action="{{ route('voteallqueen') }}" method="post">
    @csrf
    <label for="roll_no">Roll No</label>
    <input class="input" type="text" name='roll_no'>
    <button class="button" type="submit">Vote</button>
    </form>
    </div>
  
</div>
@endsection

