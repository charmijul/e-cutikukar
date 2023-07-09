 {{-- @dd(auth()->user()) --}}
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="/home" class="brand-link">
         <img src="{{ asset('/dist/img/pemkab.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
         <span class="brand-text font-weight-light">E-Cutikukar</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('storage/' . auth()->user()->pegawai->foto) }}" class="img-circle elevation-2"
                     alt="User Image">

             </div>
             <div class="info">
                 <a href="/pegawai/profile/{{ auth()->user()->id_pegawai }}"
                     class="d-block">{{ auth()->user()->pegawai->nama }}</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Menu
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>

                     <ul class="nav nav-treeview">

                         <li class="nav-item">
                             <a href="/home" class="nav-link">
                                 <i class="fas fa-home mr-2"></i>
                                 <p>Home</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="/pegawai/profile/{{ auth()->user()->id_pegawai }}" class="nav-link">
                                 <i class="fas fa-user mr-2"></i>
                                 <p>Profile</p>
                             </a>
                         </li>

                         @if (auth()->user()->level != 'Pegawai')
                             {{-- menu data pegawai --}}
                             <li class="nav-item">
                                 <a href="/pegawai" class="nav-link">
                                     <i class="fas fa-users mr-2"></i>
                                     <p>Data Pegawai</p>
                                 </a>
                             </li>
                         @endif


                         @if (auth()->user()->level == 'Admin' || auth()->user()->level == 'Kepegawaian')
                             <li class="nav-item">
                                 <a href="/atasan" class="nav-link">
                                     <i class="fas fa-users mr-2"></i>
                                     <p>Data Atasan</p>
                                 </a>
                             </li>
                         @endif

                         {{-- menu data cuti  --}}
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fas fa-book"></i>
                                 <p>
                                     Cuti
                                     <i class="fas fa-angle-left right"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">
                                {{-- menu pengajuan cuti  --}}
                                 @if (auth()->user()->level != 'Admin')
                                     <li class="nav-item">
                                         <a href="/cuti-approval" class="nav-link">
                                             <i class="far fa-circle nav-icon"></i>
                                             <p>Pengajuan Cuti</p>
                                         </a>
                                     </li>
                                 @endif

                                 {{-- menu data cuti  --}}
                                 <li class="nav-item">
                                     <a href="/cuti" class="nav-link">
                                         <i class="far fa-circle nav-icon"></i>
                                         <p>Data Cuti</p>
                                     </a>
                                 </li>

                                 {{-- menu cuti disetujui  --}}
                                 <li class="nav-item">
                                     <a href="/cuti-setuju" class="nav-link">
                                         <i class="far fa-circle nav-icon"></i>
                                         <p>Cuti Disetujuin</p>
                                     </a>
                                 </li>

                                 {{-- menu cuti ditangguhkan  --}}
                                 <li class="nav-item">
                                     <a href="/cuti-ditangguhkan" class="nav-link">
                                         <i class="far fa-circle nav-icon"></i>
                                         <p>Cuti Ditangguhkan</p>
                                     </a>
                                 </li>
                             </ul>
                             @if (auth()->user()->level == 'Admin')
                         <li class="nav-item">
                             <a href="/user" class="nav-link">
                                 <i class="fas fa-users mr-2"></i>
                                 <p>Data User</p>
                             </a>
                         </li>
                         @endif
                     </ul>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
