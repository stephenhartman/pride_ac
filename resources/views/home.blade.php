@extends('layouts.app')

@section('meta')
    <meta name="description" content="Heating and Air Conditioning Service and Installation Company serving Northeast Florida and the Greater Jacksonville Area">
    <meta name="keywords" content="Air Conditioning, Heating, HVAC, Jacksonville, Northeast Florida, Heating and Air, AC Service, AC Installation">
    <meta name="robots" content="index,follow">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Welcome to Pride AC Jacksonville</h4>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                @foreach($serve as $count => $serves)
                                    <li role="goodman" @if($count == 0) class="active" @endif>
                                        <a href="#tab-{{ $serves->id }}" aria-controls="#tab-{{ $serves->id }}" role="tab" data-toggle="tab">{{ $serves->service }}</a
                                    </li>
                                @endforeach
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                @foreach($serve as $count => $serves)
                                    <div role="tabpanel" @if($count == 0) class="tab-pane active" @else class="tab-pane" @endif id="tab-{{ $serves->id }}">
                                        <h2>{{ $serves->service }}</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim obcaecati praesentium repellat. Est explicabo facilis fuga illum iusto, obcaecati saepe voluptates! Dolores eaque porro quaerat sunt totam ut, voluptas.</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="text-center">
                            <h2>More coming soon!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
