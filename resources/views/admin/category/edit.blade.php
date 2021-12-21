
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
          <h3 class="card-title">Edit Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{url('/admin/category/update/'.$editcategory->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{$editcategory->title}}">
            
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$editcategory->name}}">
              </div>
           
              <!-- select -->
            
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
    @include ('layouts/admin/footer')
  </section>


</body>

</html>
