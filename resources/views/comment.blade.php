<?php $page = App\Models\Comment::first(); ?>


@extends('layouts.app')

@section('content')
<!-- @can('browse', $page)
        <div class="comment">
            You can browse pages
        </div>
    @else
        <div class="comment">
            You do not have access to this pages
        </div>
    @endcan -->


<!-- vue 컴포넌트 삽입 -->
<comment-component></comment-component>

@endsection