@extends('backend.adminboard')
@section('content')  
            <form action="/blood-group" method="post">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href="/blood-group" class="btn btn-primary" >Back</a>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="blood_group">Blood-group</label>
                                        <select id="blood_group" class="form-control" name="blood_group">
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                            <option>O+</option>
                                            <option>O-</option>
                                        </select>
                                       <div class="my-3">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>  
@endsection