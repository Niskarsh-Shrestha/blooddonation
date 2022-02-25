@extends('backend.adminboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/blood-group/create" class="btn btn-primary" >Add Blood-group</a>
                    </div>
                    <div class="card-body">
                        <table class="table" >
                            <tr>
                                <th>SN</th>
                                <th>Blood-group</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($donor as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->blood_group }}</td>
                                    <td>
                                        <a href="/donor/show" class="badge badge-success" >Show</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection