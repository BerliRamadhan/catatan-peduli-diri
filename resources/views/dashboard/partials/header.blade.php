<header class="container mt-5 clearfix">
    <img src="/img/default.png" style="width: 150px" alt="Gambar Saya" class="img-thumbnail float-start me-4">
    <h1>Peduli Diri</h1>
    <p>Catatan Perjalanan</p>
    <nav>
        <a href="/home" class="text-decoration-none">Home </a> |
        <a href="/catatan" class="text-decoration-none">Catatan Perjalanan </a> |
        <a href="/buat" class="text-decoration-none">Isi Data </a> |
        <form action="/logout" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="buttonliling" onclick="return confirm('Logout?')">Logout</button>
        </form>
    </nav>
</header>