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
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
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
            background-color: #007bff;
            color: white;
        }
        .output {
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            background-color: #f9f9f9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table td {
            padding: 10px;
        }
        table td input, table td select, table td textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        table td textarea {
            resize: none;
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
            <table>
                <tr>
                    <td><label for="namaGedung">Nama Gedung</label></td>
                    <td>
                        <select id="namaGedung">
                            <option value="" disabled selected>Pilih Gedung</option>
                            <option value="Gedung A">Gedung A</option>
                            <option value="Gedung B">Gedung B</option>
                            <option value="Gedung C">Gedung C</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    
                      
                    </td>
                </tr>
                <tr>
                    <td><label for="namaLantai">Nama Lantai</label></td>
                    <td>
                        <select id="namaLantai">
                            <option value="" disabled selected>Pilih Lantai</option>
                            <option value="Lantai 1">Lantai 1</option>
                            <option value="Lantai 2">Lantai 2</option>
                            <option value="Lantai 3">Lantai 3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="inputLantai">Tambah Lantai</label></td>
                    <td>
                        <input type="text" id="inputLantai" placeholder="Tambah Lantai">
                        <button onclick="addLantai()">Tambah</button>
                    </td>
                </tr>
                <tr>
                    <td><label for="namaRuang">Nama Ruang*</label></td>
                    <td>
                        <select id="namaRuang" required>
                            <option value="" disabled selected>Pilih Ruang</option>
                            <option value="Ruang 101">Ruang 101</option>
                            <option value="Ruang 102">Ruang 102</option>
                            <option value="Ruang 103">Ruang 103</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="inputRuang">Tambah Ruang</label></td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td><label for="kodeRak">Kode Rak*</label></td>
                    <td><input type="text" id="kodeRak" required></td>
                </tr>
                <tr>
                    <td><label for="namaRak">Nama Rak*</label></td>
                    <td><input type="text" id="namaRak" required></td>
                </tr>
                <tr>
                    <td><label for="kapasitasBaris">Kapasitas (Baris)*</label></td>
                    <td><input type="number" id="kapasitasBaris" required></td>
                </tr>
                <tr>
                    <td><label for="keterangan">Keterangan</label></td>
                    <td><textarea id="keterangan" rows="4"></textarea></td>
                </tr>
            </table>
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

        if (!namaRuang || !kodeRak || !
