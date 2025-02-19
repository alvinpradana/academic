<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Academics</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Akademik
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#academicTab" aria-expanded="true" aria-controls="academicTab">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Akademik</span>
        </a>
        <div id="academicTab" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Akademik</h6>
                <a class="collapse-item" href="{{ route('students.index') }}">Data Semester</a>
                <a class="collapse-item" href="{{ route('majors.index') }}">Data Jurusan</a>
                <a class="collapse-item" href="{{ route('class-level.index') }}">Data Level Kelas</a>
                <a class="collapse-item" href="{{ route('grades.index') }}">Data Grade Kelas</a>
                <a class="collapse-item" href="{{ route('students.index') }}">Data Nilai</a>
                <a class="collapse-item" href="{{ route('students.index') }}">Data Presensi</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Kesiswaan
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#studentsTab" aria-expanded="true" aria-controls="studentsTab">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Pelajar</span>
        </a>
        <div id="studentsTab" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Pelajar</h6>
                <a class="collapse-item" href="{{ route('students.index') }}">Data Siswa</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#classTab" aria-expanded="true" aria-controls="classTab">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Data Kelas</span>
        </a>
        <div id="classTab" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Kelas</h6>
                <a class="collapse-item" href="{{ route('class-group.index') }}">Semua Kelas</a>
                <a class="collapse-item" href="{{ route('class.index') }}">Data Kelas</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#scholarshipTab" aria-expanded="true" aria-controls="scholarshipTab">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Data Beasiswa</span>
        </a>
        <div id="scholarshipTab" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Beasiswa</h6>
                <a class="collapse-item" href="{{ route('student-scholarship.index') }}">Beasiswa Pelajar</a>
                <a class="collapse-item" href="{{ route('scholarships.index') }}">Data Beasiswa</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Pengajar
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('teachers.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Pengajar</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Karyawan
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('employees.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Karyawan</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Jabatan
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('positions.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Jabatan</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>