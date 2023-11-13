<!DOCTYPE html>
<html>
<head>
	<title>5026221113 - Aufaa Hafizhah Brarida</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <header>

            <h2>Blog Aufaa Hafizhah Brarida</h2>
            <nav>
                <a href="/blog">HOME</a>
                |
                <a href="/blog/tentang">TENTANG</a>
                |
                <a href="/blog/kontak">KONTAK</a>
                |
                <a href="/blog/formulir">FORMULIR</a>
            </nav>
        </header>
        <hr/>
        <br/>

        @yield('header')
        @yield('isihalaman')

    <!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>

	<!-- bagian konten blog -->
	@yield('konten')

	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="https://www.malasngoding.com">Aufaa Hafizhah Brarida</a>. 2023</p>
	</footer>
    </div>

</body>
</html>
