@extends('templates.admin.master')
	@section('main') 
	<section id="main-content">
            <section class="wrapper">
                <div class="row">
                    <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Form Add Faculty</h4>
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control">
                              </div>
                          </div>
                          <button type="submit" name="submit" class="btn btn-success btn-md">Add</button>
                      </form>
                  </div>
                </div>
                <! --/row -->
            </section>
        </section>
	@endsection