@extends('backend.adminboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Donor's List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table" >
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>Blood-group</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection