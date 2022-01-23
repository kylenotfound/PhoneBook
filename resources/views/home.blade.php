@extends('layouts.app')

@section('content')
  @if($records != null)
    @foreach($records as $record)
      <span>{{$record->building_name}}</span>
    @endforeach
  @endif
@endsection