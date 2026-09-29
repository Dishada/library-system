<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Library System</title>
</head>
<body>
    <header>
        <h1>Sistem Informasi Perpustakaan</h1>
        <nav>
            <a href="/dashboard">Dashboard</a> |
            <a href="/books">Books</a> |
            <a href="/categories">Categories</a> |
            <a href="/members">Members</a>
        </nav>
        <hr>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <hr>
        <p>&copy; 2026 Library System - Disha Dwi Arandi</p>
    </footer>
</body>
</html>