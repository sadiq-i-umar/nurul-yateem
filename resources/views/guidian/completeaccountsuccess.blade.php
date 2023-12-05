@extends('layouts.app')
  
@section('title', '')
  
@section('contents')

<h1>Thank you for completing your info.<br/>Your details have been sent for review before approval</h1>
<button>
    <a href="{{route('guidian/profile')}}">Return to Profile Page</a>
</button>

@endsection