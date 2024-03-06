@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                     <div class="d-flex justify-content-between">
                        <div>Images</div>
                     <div> 

                        <form class="form-inline">
                            <select class="form-control">
                                <option>Oldest</option>
                                <option>Latest</option>
                            </select>
                        </form>
                     </div>
                </div>
            </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-3">
                           <div class="list-group">
                           <a href="#" class="list-group-item list-group-item-action">First item</a>
                           <a href="#" class="list-group-item list-group-item-action">Second item</a>
                           <a href="#" class="list-group-item list-group-item-action">Third item</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                         <button data-toggle="collapse" class="btn-success" data-target="#demo">Add Image</button>

                         <div id="demo" class="collapse">
                         
                            <form action="/action_page.php">
                            <div class="form-group">
                               <label for="email">Image Caption</label>
                               <input type="text" class="form-control" placeholder="Enter email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                            </div>
                            <div class="form-group form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember me
                              </label>
                            </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                         </div>
                   </div>
                  </div>
        </div>
@endsection
