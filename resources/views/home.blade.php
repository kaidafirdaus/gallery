@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
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
                           <a href="#" class="list-group-item list-group-item-action">Personal</a>
                           <a href="#" class="list-group-item list-group-item-action">Friends</a>
                           <a href="#" class="list-group-item list-group-item-action">Family</a>
                        </div>
                    </div>
                    <form class="col-md-9">


                        <div class="row">
                            <div class="col-md-12">
                                <button data-toggle="collapse" class="btn btn-success" data-target="#demo">Add Image</button>
                            </div>
                            <div class="col-md-12">
                                <div id="demo" class="collapse">
                                
                                   <form action="/action_page.php" id="image_upload_form">
                                   <div class="form-group">
                                      <label for="Caption">Image Caption</label>
                                      <input type="text" name="caption" class="form-control" placeholder="Enter Caption" id="email">
                                   </div>
                                   <div class="form-group">
                                       <div class="form-group">
                                           <label for="sel1">Select Category</label>
                                           <select name="category" class="form-control" id="category ">
                                             <option value="">Select a category</option>
                                             <option value="personal">Personal</option>
                                             <option value="friends">Friends</option>
                                             <option value="family">Family</option>
                                           </select>
                                         </div>              
                                         <div class="form-group">
                                           <label class="control-label">Upload Image</label>
                                           <div class="preview-zone hidden">
                                             <div class="box box-solid">
                                               <div class="box-header with-border">
                                                 <div><b>Preview</b></div>
                                                 <div class="box-tools pull-right">
                                                   <button type="button" class="btn btn-danger btn-xs remove-preview">
                                                     <i class="fa fa-times"></i> Reset This Form
                                                   </button>
                                                 </div>
                                               </div>
                                               <div class="box-body"></div>
                                             </div>
                                           </div>
                                           <div class="dropzone-wrapper">
                                             <div class="dropzone-desc">
                                               <i class="glyphicon glyphicon-download-alt"></i>
                                               <p>Choose an image file or drag it here.</p>
                                             </div>
                                             <input type="file" name="image" class="dropzone">
                                           </div>
                                         </div>
                                       
                                   </div>
                                   
                                       <button type="submit" class="btn btn-primary">Submit</button>
                                     </form>
       
                                      </div>
                                 </div>

                            </div>

                   </div>
              </div>
              <div class="col-md-12 nt-4">
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <a href="#">
                            <img src="https://via.placeholder.com/150/0000FF/808080 ?Text=Digital.com" height="100%" width="100%">
                        </a>
                    </div>
                    <div class="col-md-3 mb-4">
                        <a href="#">
                            <img src="https://via.placeholder.com/150/0000FF/808080 ?Text=Digital.com" height="100%" width="100%">
                        </a>
                    </div>
                    <div class="col-md-3 mb-4">
                        <a href="#">
                            <img src="https://via.placeholder.com/150/0000FF/808080 ?Text=Digital.com" height="100%" width="100%">
                        </a>
                    </div>
                    <div class="col-md-3 mb-4">
                        <a href="#">
                            <img src="https://via.placeholder.com/150/0000FF/808080 ?Text=Digital.com" height="100%" width="100%">
                        </a>
                    </div>
    </div>
</div> 
@endsection

@section('js')
<script type="text/javascript">
    function readFile(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
  
      reader.onload = function(e) {
        var htmlPreview =
          '<img width="200" src="' + e.target.result + '" />' +
          '<p>' + input.files[0].name + '</p>';
        var wrapperZone = $(input).parent();
        var previewZone = $(input).parent().parent().find('.preview-zone');
        var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');
  
        wrapperZone.removeClass('dragover');
        previewZone.removeClass('hidden');
        boxZone.empty();
        boxZone.append(htmlPreview);
      };
  
      reader.readAsDataURL(input.files[0]);
    }
  }
  
  function reset(e) {
    e.wrap('<form>').closest('form').get(0).reset();
    e.unwrap();
  }
  
  $(".dropzone").change(function() {
    readFile(this);
  });
  
  $('.dropzone-wrapper').on('dragover', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).addClass('dragover');
  });
  
  $('.dropzone-wrapper').on('dragleave', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).removeClass('dragover');
  });
  
  $('.remove-preview').on('click', function() {
    var boxZone = $(this).parents('.preview-zone').find('.box-body');
    var previewZone = $(this).parents('.preview-zone');
    var dropzone = $(this).parents('.form-group').find('.dropzone');
    boxZone.empty();
    previewZone.addClass('hidden');
    reset(dropzone);
  });
  

</script>
@endsection
