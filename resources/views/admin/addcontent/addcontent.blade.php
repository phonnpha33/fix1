
  @include ('layouts/admin/head')


<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

  @include ('layouts/admin/header')

    <!--header end-->

    <!--sidebar start-->

  @include ('layouts/admin/sidebar')



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
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
              เพิ่มข้อมูลหน้าคอนเท้น
              </header>
              <div class="panel-body">
                <form role="form">
                  <div class="form-group">
                    <label for="exampleInputText1">เนื้อหา</label>
                    <input type="text" class="form-control" id="exampleInputText1" placeholder="Enter Text">
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                  </div>
                  <!-- <div class="checkbox">
                    <label>
                                          <input type="checkbox"> Check me out
                                      </label>
                  </div> -->
                  <button type="submit" class="btn btn-primary">เพิ่มข้อมูลคอนเท้น</button>
                </form>

              </div>
            </section>
          </div>
       
        </div>
      
      </section>
    </section>
    <!--main content end-->

       @include ('layouts/admin/footer')

  </section>


</body>

</html>
