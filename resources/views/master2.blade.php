<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- nambah font lucu --}}
</head>
<body>
    <div class="container">

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
            <!-- Brand -->
            <a class="navbar-brand" href="#">5026221113 - Aufaa Hafizhah Brarida</a>

            <ul class="navbar-nav">

              <!-- Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Database
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/pegawai">Pegawai</a>
                </div>
              </li>
            </ul>
        </nav>

        <br/>

    <!-- bagian judul halaman blog -->
	@yield('judul_halaman')

	<!-- bagian konten blog -->
	@yield('konten')

	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="#">Aufaa Hafizhah Brarida</a>. 2023</p>
	</footer>
    </div>

</body>
</html>
