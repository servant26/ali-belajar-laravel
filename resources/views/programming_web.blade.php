@extends('layouts.mainlayout')
@section('title','Programming Web')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Bahasa Pemrograman Web</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th style="width: 10px">No.</th>
                    <th>Bahasa</th>
                    <th>Tipe</th>
                    <th>Penemu</th>
                    <th>Tahun ditemukan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>HTML</td>
                    <td>Front End</td>
                    <td>Sir Tim Berners-lee</td>
                    <td>Akhir tahun 1991</td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>CSS</td>
                    <td>Front End</td>
                    <td>Håkon Wium Lie</td>
                    <td>10 Oktober 1994</td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>JavaScript</td>
                    <td>Front End</td>
                    <td>Brendan Eich</td>
                    <td>1995</td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Jquery</td>
                    <td>Front End</td>
                    <td>John Resig</td>
                    <td>2006</td>
                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>Bootstrap</td>
                    <td>Front End</td>
                    <td>Mark Otto dan Jacob Thornton</td>
                    <td>19 Agustus 2011</td>
                  </tr>
                  <tr>
                    <td>6.</td>
                    <td>Tailwind</td>
                    <td>Front End</td>
                    <td>Adam Wathan</td>
                    <td>11 November 2017</td>
                  </tr>
                  <tr>
                    <td>7.</td>
                    <td>PHP</td>
                    <td>Back End</td>
                    <td>Rasmus Lerdorf</td>
                    <td>1995</td>
                  </tr>
                  <tr>
                    <td>8.</td>
                    <td>MySql</td>
                    <td>Back End</td>
                    <td>Michael "Monty" Widenius</td>
                    <td>1979</td>
                  </tr>
                  <tr>
                    <td>9.</td>
                    <td>Laravel</td>
                    <td>Back End</td>
                    <td>Taylor Otwell</td>
                    <td>2011</td>
                  </tr>
                </tbody>
              </table>
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
@endsection