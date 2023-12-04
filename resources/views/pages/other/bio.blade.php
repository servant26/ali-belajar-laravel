@extends('layouts.mainlayout')
@section('title','Bio')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Bio Pembuat Web</h3>
              </div>
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/ali_khatami.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Ali Khatami</h3>

                <p class="text-muted text-center">Motto hidup : Jalani, pelajari, manfaatkan dan terapkan</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item text-white">
                    <b>Github</b> <a href="https://github.com/servant26" target="_blank" class="btn btn-dark float-right"><b>Follow</b></a>
                  </li>
                  <li class="list-group-item text-white">
                    <b>Tiktok</b> <a href="https://www.tiktok.com/@servant_arthur07" target="_blank" class="btn btn-dark float-right"><b>Follow</b></a>
                  </li>
                  <li class="list-group-item text-white">
                    <b>Facebook</b> <a href="https://www.facebook.com/otaku.art.35" target="_blank" class="btn btn-primary float-right"><b>Follow</b></a>
                  </li>
                  <li class="list-group-item text-white">
                    <b>Instagram</b> <a href="https://www.instagram.com/servant_arthur07/" target="_blank" class="btn btn-danger float-right"><b>Follow</b></a>
                  </li>
                  <li class="list-group-item text-white">
                    <b>Youtube</b> <a href="https://www.youtube.com/@alikhatami3910" target="_blank" class="btn btn-danger float-right"><b>Follow</b></a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tentang saya</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Asal Kampus</strong>

                <p class="text-muted">
                  Universitas Mulawarman
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Lokasi</strong>

                <p class="text-muted">Samarinda, Kalimantan Timur</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">HTML</span>
                  <span class="tag tag-success">CSS</span>
                  <span class="tag tag-info">PHP</span>
                  <span class="tag tag-warning">Mysql</span>
                  <span class="tag tag-primary">Laravel</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Hobi</strong>

                <p class="text-muted">Sepakbola dan bermain game</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection