<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Penilaian</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #f4f6f9;
        }
        .sidebar {
            width: 220px;
            height: 100vh;
            background: #1abc9c;
            color: white;
            position: fixed;
            padding: 20px;
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
            max-width: 500px;
        }
        label {
            font-weight: 600;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        button {
            background: #16a085;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            background: #ecf0f1;
        }
        .lulus { color: green; font-weight: bold; }
        .tidak { color: red; font-weight: bold; }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>DASHBOARD</h2>
    <p>📝 Penilaian<br>📊 Mahasantri</p>
</div>

<div class="content">
    <div class="card">
        <h3>Form Penilaian (POST)</h3>

        <form method="post">
            <label>Username</label>
            <input type="text" name="username">

            <label>Mata Kuliah</label>
            <input type="text" name="matakuliah">

            <label>Nilai</label>
            <input type="number" name="nilai">

            <button type="submit">Proses Nilai</button>
        </form>

        <?php
        if (isset($_POST['username'])) {
            $nilai = $_POST['nilai'];
            $status = ($nilai >= 60) ? "LULUS" : "TIDAK LULUS";

            echo "<div class='result'>";
            echo "Username: ".$_POST['username']."<br>";
            echo "Mata Kuliah: ".$_POST['matakuliah']."<br>";
            echo "Nilai: $nilai <br>";
            echo "Status: <span class='".($status=="LULUS"?"lulus":"tidak")."'>$status</span>";
            echo "</div>";
        }
        ?>
    </div>
</div>

</body>
</html>
