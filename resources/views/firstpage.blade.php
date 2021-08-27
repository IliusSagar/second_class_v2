@extends('welcome')
@section('content')

	@php
                    $post=DB::table('newss')->get();
                    @endphp
                    @foreach($post as $row)
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="{{ URL::to('view-post/'.$row->id) }}">
                            <h2 class="post-title">{{ $row->title }}</h2>
                            <img src="{{ URL::to($row->image) }}" style="width: 100%; height: 300px;">
                            <h6 class="post-subtitle">{{ $row->details }}</h6>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">{{ $row->author }}</a>
                            on September 24, 2021
                        </p>
                    </div>
                    <hr>
                    @endforeach
                    

                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>


@endsection