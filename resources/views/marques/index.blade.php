
@extends('marques.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Marques</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('marques.create') }}" class="btn btn-success btn-sm" title="Add New Marque">
                            <i class="fa fa-plus" aria-hidden="true">Add New</i> 
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Date de début</th>
                                        <th>Description</th>
                                        <th>Url site</th>
                                        <th>Téléphone</th>
                                        <th>Email</th>
                                        {{-- <th>Actions</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($marques as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->url }}</td>
                                        <td>{{ $item->telephone }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            <a href="{{ url('/marques/' . $item->id) }}" title="View Marque"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/marques/' . $item->id . '/edit') }}" title="Edit Marque"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/marques' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Marque" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
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