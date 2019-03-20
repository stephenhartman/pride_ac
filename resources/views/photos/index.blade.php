@extends('layouts.app')

@section('title', 'Browse Photos')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-4">
                <h2>Browse Photos</h2>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-2 col-sm-12">
                @if (Auth::check())
                    <a href="{{ route('photos.create') }}" class="btn btn-block btn-primary btn-lg"><i class="fas fa-plus-square"></i> New Photo</a>
                @endif
            </div>
        </div>
    </div>
    <div class="card-body">
        <div id="carousel-photos" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach( $photos as $photo )
                    <li data-target="#carousel-photos" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach( $photos as $photo )
                    <div class="carousel-item {{ $loop->first ? ' active' : '' }}" >
                        <img class="d-block w-100" src="{{ $photo->photo_url }}" alt="Photo {{ $photo->id }}">
                        <div class="carousel-caption" style="padding-top: 40px;">
                            <p>{{ $photo->caption }}</p>
                            @if (Auth::check())
                                <a href="{{ route('photos.edit', $photo) }}" class="btn btn-default btn-sm">Edit Photo</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Controls -->
            <a class="carousel-control-prev" href="#carousel-photos" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-photos" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="text-center">
            {{ $photos->links() }}
        </div>
    </div>
    </div>
</div>
@stop
