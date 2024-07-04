<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Rak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .modal {
            display: block;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
        
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
          
        }
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .modal-header h2 {
            margin: 0;
        }
        .modal-body {
            margin: 20px 0;
        }
        .modal-body label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .modal-body input, .modal-body select, .modal-body textarea {
            width: 96%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .modal-footer {
            display: flex;
            justify-content: flex-end;
        }
        .modal-footer button {
            padding: 10px 20px;
            margin-left: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .modal-footer .btn-close {
            background-color: #ccc;
        }
        .modal-footer .btn-save {
            background-color: #808080;
            color: white;
        }
        .output {
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            
        }
    </style>
</head>
<body>

<div id="tambahDataRakModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Tambah Data Rak</h2>
            <span class="close" onclick="closeModal()">&times;</span>
        </div>
        <div class="modal-body">
            <label for="namaGedung">Nama Gedung</label>
            <select id="namaGedung">
                <option value="" disabled selected>Pilih Gedung</option>
                <option value="Gedung A">Gedung A</option>
                <option value="Gedung B">Gedung B</option>
                <option value="Gedung C">Gedung C</option>
            </select>
             
            <label for="namaLantai">Nama Lantai</label>
            <select id="namaLantai">
                <option value="" disabled selected>Pilih Lantai</option>
                <option value="Lantai 1">Lantai 1</option>
                <option value="Lantai 2">Lantai 2</option>
                <option value="Lantai 3">Lantai 3</option>
            </select>
           

            <label for="namaRuang">Nama Ruang*</label>
            <select id="namaRuang" required>
                <option value="" disabled selected>Pilih Ruang</option>
                <option value="Ruang 101">Ruang 101</option>
                <option value="Ruang 102">Ruang 102</option>
                <option value="Ruang 103">Ruang 103</option>
            </select>
            

            <label for="kodeRak">Kode Rak*</label>
            <input type="text" id="kodeRak" required>

            <label for="namaRak">Nama Rak*</label>
            <input type="text" id="namaRak" required>

            <label for="kapasitasBaris">Kapasitas (Baris)*</label>
            <input type="number" id="kapasitasBaris" required>

            <label for="keterangan">Keterangan</label>
            <textarea id="keterangan" rows="4"></textarea>
        </div>
        <div class="modal-footer">
            <button class="btn-close" onclick="closeModal()">Tutup</button>
            <button class="btn-save" onclick="saveData()">Simpan</button>
        </div>
    </div>
</div>

<div id="output" class="output" style="display: none;">
    <h2>Data Rak yang Disimpan</h2>
    <p><strong>Nama Gedung:</strong> <span id="outputNamaGedung"></span></p>
    <p><strong>Nama Lantai:</strong> <span id="outputNamaLantai"></span></p>
    <p><strong>Nama Ruang:</strong> <span id="outputNamaRuang"></span></p>
    <p><strong>Kode Rak:</strong> <span id="outputKodeRak"></span></p>
    <p><strong>Nama Rak:</strong> <span id="outputNamaRak"></span></p>
    <p><strong>Kapasitas (Baris):</strong> <span id="outputKapasitasBaris"></span></p>
    <p><strong>Keterangan:</strong> <span id="outputKeterangan"></span></p>
</div>

<script>
    function closeModal() {
        document.getElementById('tambahDataRakModal').style.display = 'none';
    }

    function addGedung() {
        const gedung = document.getElementById('inputGedung').value;
        if (gedung) {
            const option = document.createElement('option');
            option.value = gedung;
            option.text = gedung;
            document.getElementById('namaGedung').add(option);
            document.getElementById('inputGedung').value = '';
        }
    }

    function addLantai() {
        const lantai = document.getElementById('inputLantai').value;
        if (lantai) {
            const option = document.createElement('option');
            option.value = lantai;
            option.text = lantai;
            document.getElementById('namaLantai').add(option);
            document.getElementById('inputLantai').value = '';
        }
    }

    function addRuang() {
        const ruang = document.getElementById('inputRuang').value;
        if (ruang) {
            const option = document.createElement('option');
            option.value = ruang;
            option.text = ruang;
            document.getElementById('namaRuang').add(option);
            document.getElementById('inputRuang').value = '';
        }
    }

    function saveData() {
        const namaGedung = document.getElementById('namaGedung').value;
        const namaLantai = document.getElementById('namaLantai').value;
        const namaRuang = document.getElementById('namaRuang').value;
        const kodeRak = document.getElementById('kodeRak').value;
        const namaRak = document.getElementById('namaRak').value;
        const kapasitasBaris = document.getElementById('kapasitasBaris').value;
        const keterangan = document.getElementById('keterangan').value;

        if (!namaRuang || !kodeRak || !namaRak || !kapasitasBaris) {
            alert('Field yang ditandai dengan * harus diisi.');
            return;
        }

        document.getElementById('outputNamaGedung').innerText = namaGedung;
        document.getElementById('outputNamaLantai').innerText = namaLantai;
        document.getElementById('outputNamaRuang').innerText = namaRuang;
        document.getElementById('outputKodeRak').innerText = kodeRak;
        document.getElementById('outputNamaRak').innerText = namaRak;
        document.getElementById('outputKapasitasBaris').innerText = kapasitasBaris;
        document.getElementById('outputKeterangan').innerText = keterangan;

        document.getElementById('output').style.display = 'block';

        // Code to save the data can be added here

        closeModal();
    }
</script>

</body>
</html>
