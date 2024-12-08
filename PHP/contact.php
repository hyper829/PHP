<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Kontak Kami</h1>
        </div>
    </header>
    <nav>
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">Tentang</a></li>
                <li><a href="services.php">Layanan</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="container">
            <h2>Kontak Kami</h2>
            <p>Silakan isi formulir di bawah ini untuk menghubungi kami:</p>
            <form>
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="message">Pesan:</label>
                    <textarea id="message" name="message"></textarea>
                </div>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 homepage</p>
    </footer>
</body>
</html>
