@extends('layouts.mainlayout')
@section('title','Programming Language')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Bahasa Pemrograman</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th style="width: 10px">No.</th>
                    <th>Bahasa</th>
                    <th>Penemu</th>
                    <th>Tahun ditemukan</th>
                    <th style="width: 25%">Software</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>C</td>
                    <td>Dennis Ritchie</td>
                    <td>1972</td>
                    <td>Gimp, VLC, Unreal Engine</td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>C++</td>
                    <td>Bjarne Stroustrup</td>
                    <td>Sekitar 1980-an</td>
                    <td>Adobe Photoshop, Microsoft Office, GTA 5, League of Legends</td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>C#</td>
                    <td>Dikembangkan oleh Microsoft</td>
                    <td>Juli 2000</td>
                    <td>Visual Studio, Microsoft Edge, Unity, Minecraft, Forza Horizon 5</td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Java</td>
                    <td>James Gosling </td>
                    <td>1990</td>
                    <td>Eclipse, Intellij IDEA, Minecraft, Roblox, Among Us</td>
                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>Python</td>
                    <td>Guido van Rossum</td>
                    <td>Akhir 1980-an</td>
                    <td>Jupyter Notebook, Django, Flask</td>
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