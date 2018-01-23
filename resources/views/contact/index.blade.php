@extends('layouts.app')

@section('title', 'Goodman Prices')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Contacts</h4>
                    </div>
                    <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone #</th>
                                    <th>Sq. Footage</th>
                                    <th>Notes</th>
                                    <th>Contacted on</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->name }}</td>
                                        <td><a href="mailto::{{ $contact->email }}">{{ $contact->email }}</a></td>
                                        <td><a href="tel:+1{{ $contact->phone }}">{{ $contact->phone }}</a></td>
                                        <td>{{ $contact->sq_footage }}</td>
                                        <td>{{ $contact->notes }}</td>
                                        <td>{{ \Carbon\Carbon::parse($contact->created_at)->format('m/d/Y g:i A ') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
