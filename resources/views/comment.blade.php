<?php $page = App\Models\Comment::first(); ?>

@extends('layouts.app')

@section('content')
    @can('browse', $page)
        <div class="comment">
            You can browse pages
        </div>
    @endcan
@endsection
