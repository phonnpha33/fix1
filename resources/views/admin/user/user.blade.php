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
              <li><i class="fa fa-th-list"></i>Basic Table</li>
            </ol>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Responsive tables
              </header>
              <form action="{{route('user')}}" method="POST" enctype="multipart/form-data">

                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>id_user</th>
                        <th>name</th>        
                        <th>phone</th>
                        <th>address</th>
                        <th>email</th>
                        <th>ลบข้อมูล</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($user as $users)


                      <tr>
                        <th scope="row">{{$users->id}}</th>
                        <td>{{$users-> name}}</td>
                        <td>{{$users-> phone}}</td>
                        <td>{{$users-> address}}</td>
                        <td>{{$users-> email}}</td> 
                       

                        <td>
                        <a href="{{url('/admin/user/delete/'.$users->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>

            </section>
          </div>
        </div>
        </form>
        
      </section>
    </section>
    <!--main content end-->

    @include ('layouts/admin/footer')

  </section>


</body>

</html>