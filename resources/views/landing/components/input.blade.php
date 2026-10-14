<section id="input-nilai" class="input-nilai-section">
    <div class="nilai-container">

        <div class="nilai-card">
            <div class="nilai-header">
                <h2>Input Nilai Siswa</h2>
                <p>Masukkan nilai untuk mengetahui hasil kelulusan</p>
            </div>

            <div class="nilai-body">
                <form id="formNilai">

                    <div class="form-group">
                        <label for="nilai1">Input Nilai 1</label>
                        <input type="number" id="nilai1"
                            min="0" max="100"
                            placeholder="Masukkan nilai pertama" required>
                    </div>

                    <div class="form-group">
                        <label for="nilai2">Input Nilai 2</label>
                        <input type="number" id="nilai2"
                            min="0" max="100"
                            placeholder="Masukkan nilai kedua" required>
                    </div>

                    <button type="submit" class="btn-hitung">
                        Hitung Nilai
                    </button>
                </form>

                <div id="hasilNilai" class="hasil-box" style="display:none;">
                    <h3>Hasil Penilaian</h3>

                    <div class="hasil-item">
                        <span>Nilai 1</span>
                        <strong id="hasil1"></strong>
                    </div>

                    <div class="hasil-item">
                        <span>Nilai 2</span>
                        <strong id="hasil2"></strong>
                    </div>

                    <div class="hasil-item">
                        <span>Rata-rata</span>
                        <strong id="rataRata"></strong>
                    </div>

                    <div id="keterangan" class="keterangan"></div>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
    .input-nilai-section {
        padding: 60px 20px;
        background: #eee7e1;
        font-family: Arial, sans-serif;
    }

    .nilai-container {
        max-width: 600px;
        margin: auto;
    }

    .nilai-card {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.10);
    }

    .nilai-header {
        background: #8B7A6D;
        color: white;
        text-align: center;
        padding: 28px 20px;
    }

    .nilai-header h2 {
        font-size: 25px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .nilai-header p {
        font-size: 14px;
        margin: 0;
    }

    .nilai-body {
        padding: 30px;
    }

    .form-group {
        margin-bottom: 22px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #62554b;
    }

    .form-group input {
        width: 100%;
        padding: 13px 15px;
        border: 1px solid #d6ccc4;
        border-radius: 9px;
        outline: none;
        font-size: 15px;
        box-sizing: border-box;
        transition: 0.3s;
    }

    .form-group input:focus {
        border-color: #8B7A6D;
        box-shadow: 0 0 0 3px rgba(139, 122, 109, 0.15);
    }

    .btn-hitung {
        width: 100%;
        padding: 14px;
        border: none;
        border-radius: 9px;
        background: #8B7A6D;
        color: white;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-hitung:hover {
        background: #62554b;
    }

    .hasil-box {
        margin-top: 28px;
        padding: 20px;
        border: 1px solid #e5ddd6;
        border-radius: 12px;
        background: #faf8f6;
    }

    .hasil-box h3 {
        font-size: 20px;
        color: #62554b;
        margin-bottom: 18px;
    }

    .hasil-item {
        display: flex;
        justify-content: space-between;
        padding: 12px 0;
        border-bottom: 1px solid #e5ddd6;
        color: #62554b;
    }

    .hasil-item strong {
        color: #333;
    }

    .keterangan {
        margin-top: 20px;
        padding: 15px;
        text-align: center;
        border-radius: 9px;
        font-weight: bold;
    }

    .keterangan.lulus {
        background: #d1e7dd;
        color: #0f5132;
    }

    .keterangan.tidak-lulus {
        background: #f8d7da;
        color: #842029;
    }

    @media (max-width: 576px) {
        .input-nilai-section {
            padding: 35px 15px;
        }

        .nilai-body {
            padding: 22px;
        }

        .nilai-header h2 {
            font-size: 22px;
        }
    }
</style>

<script>
    document.getElementById('formNilai').addEventListener('submit', function(e) {
        e.preventDefault();

        const nilai1 = Number(document.getElementById('nilai1').value);
        const nilai2 = Number(document.getElementById('nilai2').value);

        if (nilai1 < 0 || nilai1 > 100 || nilai2 < 0 || nilai2 > 100) {
            alert('Nilai harus antara 0 sampai 100!');
            return;
        }

        const rata = (nilai1 + nilai2) / 2;

        document.getElementById('hasil1').textContent = nilai1;
        document.getElementById('hasil2').textContent = nilai2;
        document.getElementById('rataRata').textContent = rata;

        const keterangan = document.getElementById('keterangan');

        if (rata > 70) {
            keterangan.textContent = 'SELAMAT, KAMU LULUS!';
            keterangan.className = 'keterangan lulus';
        } else {
            keterangan.textContent = 'MAAF, KAMU TIDAK LULUS.';
            keterangan.className = 'keterangan tidak-lulus';
        }

        document.getElementById('hasilNilai').style.display = 'block';
    });
</script>