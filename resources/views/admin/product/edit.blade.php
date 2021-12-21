
  @include ('layouts/admin/head')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    @include ('layouts/admin/header')
    <!--header end-->

    <!--sidebar start-->
    @include ('layouts/admin/sidebar')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>เพิ่มข้อมูลหน้าคอนเท้น</li>
            </ol>
          </div>
        </div>

        
        <div class="row">
    <!-- left column -->
    
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{url('/admin/product/update/'.$editproduct->id_product)}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$editproduct->name}}">
              @error('name')
              <span class="text-danger">{{$message}}</span>
            @enderror
            
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$editproduct->description}}">
                @error('description')
                <span class="text-danger">{{$message}}</span>
              @enderror
              
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price"  value="{{$editproduct->price}}">
                @error('price')
                <span class="text-danger">{{$message}}</span>
              @enderror
              
              </div>
              <!--<div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" id="category" name="category" placeholder="category">
                @error('category')
                <span class="text-danger">{{$message}}</span>
              @enderror
              
              </div>
            -->
           
              <!-- select -->
              <div class="form-group">
                <label for="category">category</label>
                <input type="text" class="form-control" id="category" name="category" value="{{$editproduct->category_id}}">
                @error('category')
                <span class="text-danger">{{$message}}</span>
              @enderror
              
              </div>
            
              <div class="form-group">
                <label for="image">Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                  </div>
                  <img id="showImage"src="{{asset('admin/images/'.$editproduct->image)}}" alt="" style="width: 250px">
                  @error('image')
                  <span class="text-danger">{{$message}}</span>
                @enderror
                
                </div>
              </div>
              
            
            
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
</div>

        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
    @include ('layouts/admin/footer')
  </section>


</body>

</html>
