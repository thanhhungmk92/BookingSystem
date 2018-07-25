@extends('templates.admin.master')
	@section('main') 
	<section id="main-content">
            <section class="wrapper">
                <div class="row">
                   <div class="col-md-12 mt">
                        <div class="content-panel">
                            <table class="table table-hover">
                                <h4><i class="fa fa-angle-right"></i> Faculty Table</h4>
                                <div style="margin-left: 25px"> <a type="" class="btn btn-round btn-primary" href="{{ route ('admin.faculty.add')}}">Add Doctor</a></div>
                                <hr>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>FullName</th>
                                        <th>UserName</th>
                                        <th>Faculty</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($objItems as $key=>$value)
                                    @php
                                        $id = $value->id;
                                        $fullname = $value->fullname;
                                        $username = $value->username;
                                        $faculty_id = $value->faculty_id;
                                        $phone = $value->phone;
                                        $address = $value->address;
                                    @endphp
                                    <tr>
                                        <td>{{ $id }}</td>
                                        <td>{{ $fullname }}</td>
                                        <td>{{ $username }}</td>
                                        <td>{{ $faculty_id}}</td>
                                        <td>{{ $phone }}</td>
                                        <td>{{ $address }}</td>
                                        <td>
                                           <div> 
                                                <a type="" class="btn btn-round btn-success" href="">Edit</a>
                                                <a type="" class="btn btn-round btn-info" href="">Delete</a>
                                           </div>
                                        </td>
                                    </tr> 
                                    @endforeach                                  
                                </tbody>
                            </table>
                        </div>                        
                    </div> 
                </div>
             </section>
        </section>
	@endsection