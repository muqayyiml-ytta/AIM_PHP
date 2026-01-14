<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Pendaftaran</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #f4f6f9;
        }
        .sidebar {
            width: 220px;
            height: 100vh;
            background: #2c3e50;
            color: white;
            position: fixed;
            padding: 20px;
        }
        .sidebar h2 {
            text-align: center;
        }
        .sidebar p {
            margin-top: 30px;
            font-size: 14px;
        }
        .content {
            margin-left: 240px;
            padding: 30px;
        }
        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            max-width: 700px;
        }
        h3 {
            color: #34495e;
        }
        label {
            font-weight: 600;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        .inline {
            margin-bottom: 15px;
        }
        button {
            background: #3498db;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
        }
        button:hover {
            background: #2980b9;
        }
        .result {
            margin-top: 25px;
            background: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>DASHBOARD</h2>
    <p>📋 Pendaftaran<br>👨‍🎓 Mahasantri</p>
</div>

<div class="content">
    <div class="card">
        <h3>Form Pendaftaran Mahasantri (GET)</h3>

        <form method="get">
            <label>Nama Lengkap</label>
            <input type="text" name="nama">

            <label>NIM</label>
            <input type="text" name="nim">

            <label>Jenis Kelamin</label>
            <div class="inline">
                <input type="radio" name="jk" value="Laki-laki"> Laki-laki
                <input type="radio" name="jk" value="Perempuan"> Perempuan
            </div>

            <label>Program Studi</label>
            <select name="prodi">
                <option value="">-- Pilih Prodi --</option>
                <option>PPL</option>
                <option>DM</option>
                <option>IT</option>
            </select>

            <label>Hobi</label>
            <div class="inline">
                <input type="checkbox" name="hobi[]" value="Membaca"> designer
                <input type="checkbox" name="hobi[]" value="Olahraga"> mobile app
                <input type="checkbox" name="hobi[]" value="Coding"> Coding
            </div>

            <label>Alamat</label>
            <textarea name="alamat"></textarea>

            <button type="submit">Simpan Data</button>
        </form>

        <?php
        if (isset($_GET['nama'])) {
            echo "<div class='result'>";
            echo "<b>Data Mahasantri</b><br><br>";
            echo "Nama: ".$_GET['nama']."<br>";
            echo "NIM: ".$_GET['nim']."<br>";
            echo "Jenis Kelamin: ".$_GET['jk']."<br>";
            echo "Prodi: ".$_GET['prodi']."<br>";
            if (isset($_GET['hobi'])) {
                echo "Hobi: ".implode(", ", $_GET['hobi'])."<br>";
            }
            echo "Alamat: ".$_GET['alamat'];
            echo "</div>";
        }
        ?>
    </div>
</div>

</body>
</html>
