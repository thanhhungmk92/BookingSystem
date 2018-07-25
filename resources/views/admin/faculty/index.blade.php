@extends('templates.admin.master')
	@section('main') 
	<section id="main-content">
            <section class="wrapper">
                <div class="row">
                   <div class="col-md-12 mt">
                        <div class="content-panel">
                            <table class="table table-hover">
                                <h4><i class="fa fa-angle-right"></i> Faculty Table</h4>
                                <div style="margin-left: 25px"> <a type="" class="btn btn-round btn-primary" href="{{ route ('admin.faculty.add')}}">Add Faculty</a></div>
                                <hr
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>
                                           <div> 
                                                <a type="" class="btn btn-round btn-success" href="">Edit</a>
                                                <a type="" class="btn btn-round btn-info" href="">Delete</a>
                                           </div>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                        <! --/content-panel -->
                    </div> 
                </div>
                <! --/row -->
            </section>
        </section>
	@endsection