<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#">SIAS DISDUKCAPIL</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">SIAS</a>
      </div>
        <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="{{set_active('dashboard')}}">
            <a href="{{ route('login')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="menu-header">Starter</li>
          {{-- <li class="{{set_active('surat-masuk')}}">
            <a href="{{ route('surat-masuk')}}" class="nav-link"><i class="fas fa-inbox"></i></i><span>Surat Masuk</span></a>
          </li>
          <li class="{{set_active('surat-keluar')}}">
            <a href="{{ route('surat-keluar')}}" class="nav-link"><i class="fas fa-paper-plane"></i><span>Surat Keluar</span></a>
          </li> --}}
          <li class="{{ set_active('arsip') }}">
            <a href="{{ route('arsip')}}" class="nav-link"><i class="fas fa-folder-open"></i><span>Daftar Arsip</span></a>
          </li>
          <li class="nav-item dropdown {{ set_active(['op-berkas', 'op-buku'])}}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cubes"></i> <span>Stock Opname</span></a>
            <ul class="dropdown-menu">
              <li class="{{ set_active(['op-berkas', 'op-berkas/tambah', 'op-berkas/edit/$1']) }}"><a class="nav-link" href="{{ route('op-berkas')}}">Stock Opname Berkas</a></li>
              <li class="{{ set_active('op-buku') }}"><a class="nav-link" href="{{ route('op-buku')}}">Stock Opname Buku</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown {{ set_active(['peminjaman-berkas', 'peminjaman-buku'])}}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file-upload"></i><span>Peminjaman Arsip</span></a>
            <ul class="dropdown-menu">
              <li class="{{ set_active(['peminjaman-berkas', 'peminjaman-berkas/tambah', 'peminjaman-berkas/edit/$1']) }}"><a class="nav-link" href="{{ route('peminjaman-berkas')}}">Peminjaman Arsip Berkas</a></li>
              <li class="{{ set_active(['peminjaman-buku' , 'peminjaman-buku/tambah', 'peminjaman-buku/edit/$1']) }}"><a class="nav-link" href="{{ route('peminjaman-buku')}}">Peminjaman Arsip Buku</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown {{ set_active(['pengembalian-berkas', 'pengembalian-buku'])}}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file-download"></i> <span>Pengembalian Arsip</span></a>
            <ul class="dropdown-menu">
              <li class="{{ set_active(['pengembalian-berkas', 'pengembalian-berkas/tambah', 'pengembalian-berkas/edit/$1']) }}"><a class="nav-link" href="{{ route('pengembalian-berkas')}}">Pengembalian Arsip Berkas</a></li>
              <li class="{{ set_active(['pengembalian-buku' , 'pengembalian-buku/tambah', 'pengembalian-buku/edit/$1']) }}"><a class="nav-link" href="{{ route('pengembalian-buku')}}">Pengembalian Arsip Buku</a></li>
            </ul>
          </li>
          <li class="{{ set_active('operator') }}">
            <a href="{{ route('operator')}}" class="nav-link"><i class="fas fa-user"></i><span>Daftar Operator</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-chart-bar"></i> <span>Laporan/Report</span></a>
            <ul class="dropdown-menu">
              <li class="{{ set_active('arsip.ct') }}"><a class="nav-link" href="{{ route('arsip.ct')}}">Daftar Arsip</a></li>
              <li class="{{ set_active('op-berkas.ct') }}"><a class="nav-link" href="{{ route('op-berkas.ct')}}"> <p>Laporan Stock Opname Berkas</p></a> </li>
              <li class="{{ set_active('op-buku.ct') }}"><a class="nav-link" href="{{ route('op-buku.ct')}}"> <p> Laporan Stock Opname Buku</p></a></li>
              <li class="{{ set_active('peminjaman-berkas.ct') }}"><a class="nav-link" href="{{ route('peminjaman-berkas.ct')}}"> <p>Laporan Peminjaman Berkas</p> </a></li>
              <li class="{{ set_active('peminjaman-buku.ct') }}"><a class="nav-link" href="{{ route('peminjaman-buku.ct')}}"> <p>Laporan Peminjaman Buku</p> </a></li>
              <li class="{{ set_active('pengembalian-berkas.ct') }}"><a class="nav-link" href="{{ route('pengembalian-berkas.ct')}}"> <p>Laporan Pengembalian Berkas</p> </a></li>
              <li class="{{ set_active('pengembalian-buku.ct') }}"><a class="nav-link" href="{{ route('pengembalian-buku.ct')}}"> <p>Laporan Pengembalian Buku</p> </a></li>
              <hr>
{{-- 
              <li class="{{ set_active('op-berkas.cf') }}"><a class="nav-link" href="{{ route('op-berkas.cf')}}">Cetak Opname Berkas Pertanggal</a></li> --}}

            </ul>
          </li>
        </ul>

        {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
          </a>
        </div> --}}
    </aside>
  </div>
