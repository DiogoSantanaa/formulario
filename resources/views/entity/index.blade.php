@extends('layouts.app2')

@section('content')
<!-- data table -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Social Denomination</th>
                        <th scope="col">NIF</th>
                        <th scope="col">Company Type</th>
                        <th scope="col">Access Aplication</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Active</th>
                        <th scope="col">Created By</th>
                        <th scope="col">Updated By</th>
                  </tr>
                </thead>
                <tbody>
                    
                    <tr>
                    <th scope="row">id</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection