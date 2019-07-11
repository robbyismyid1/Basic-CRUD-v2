@extends('layouts.master')

@section('header') Index @endsection
@section('content')
    Halo {{ Auth::user()->name }}
@endsection
