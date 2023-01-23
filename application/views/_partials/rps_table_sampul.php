<table class="table table-borderless">
    <tbody>
        <tr>
            <td><strong class="h4 m-0 text-center d-block">RENCANA PEMBELAJARAN SEMESTER (RPS)</strong></td>
        </tr>
        <tr>
            <td><small class="text-center d-block">FM-PJM-011/Rev.00/25 Jan 2018</small></td>
        </tr>
        <tr>
            <td><img src="<?= base_url('public/logo.jpg') ?>" alt="logo" width="300" class="d-block mx-auto py-2"></td>
        </tr>
        <tr>
            <td><strong class="h5 m-0 text-center d-block">Mata Kuliah: <?= $rps[0]['matkul'] ?? '' ?> (<?= $rps[0]['kode_matkul'] ?? '' ?>)</strong></td>
        </tr>
        <tr>
            <td><strong class="h5 m-0 text-center d-block">Program Studi: D3 Teknik Informatika</strong></td>
        </tr>
    </tbody>
</table>

<table class="mt-3 table table-bordered border-dark align-middle">
    <tbody>
        <tr>
            <td><span class="text-center d-block m-0">Nomor</span></td>
            <td><span class="text-center d-block m-0">Tgl. Berlaku Mulai</span></td>
            <td><span class="text-center d-block m-0">Tgl. Disusun</span></td>
            <td><span class="text-center d-block m-0">Revisi</span></td>
        </tr>
        <tr>
            <td><span class="text-center d-block m-0">RPS-DT-<?= $rps[0]['kode_matkul'] ?? '' ?></span></td>
            <td><span class="text-center d-block m-0"><?= $rps[0]['tgl_berlaku'] ?? '' ?></span></td>
            <td><span class="text-center d-block m-0"><?= $rps[0]['tgl_disusun'] ?? '' ?></span></td>
            <td><span class="text-center d-block m-0">00</span></td>
        </tr>
    </tbody>
</table>

<table class="mt-3 table table-bordered border-dark align-top">
    <tbody>
        <tr>
            <td>
                <span class="text-center d-block m-0">Disetujui oleh,</span>
                <span class="text-center d-block m-0">Dekan Ilmu Komputer</span>
            </td>
            <td>
                <span class="text-center d-block m-0">Diperiksa oleh,</span>
                <span class="text-center d-block m-0">Kaprodi D3 Teknik Informatika</span>
            </td>
            <td>
                <span class="text-center d-block m-0">Disusun oleh,</span>
            </td>
            <td>
                <span class="text-center d-block m-0">Dikendalikan oleh,</span>
                <span class="text-center d-block m-0">Sekretaris Prodi D3 Teknik Informatika</span>
            </td>
        </tr>
        <tr>
            <td>
                <span class="text-center d-block m-0 py-4 signature"></span>
                <span class="text-center d-block m-0 fw-semibold"><small>Hanif Al Fatta, M.Kom</small></span>
                <span class="text-center d-block m-0"><small>NIK. 190302096</small></span>
            </td>
            <td>
                <span class="text-center d-block m-0 py-4 signature"></span>
                <span class="text-center d-block m-0 fw-semibold"><small>Barka Satya, M.Kom</small></span>
                <span class="text-center d-block m-0"><small>NIK. 190302126</small></span>
            </td>
            <td>
                <span class="text-center d-block m-0 py-4 signature"></span>
                <span class="text-center d-block m-0 fw-semibold"><small><?= $penyusun[0]['nama'] ?? '' ?></small></span>
                <span class="text-center d-block m-0"><small>NIK. <?= $penyusun[0]['nik'] ?? '' ?></small></span>
            </td>
            <td>
                <span class="text-center d-block m-0 py-4 signature"></span>
                <span class="text-center d-block m-0 fw-semibold"><small>Lukman, M.Kom</small></span>
                <span class="text-center d-block m-0"><small>NIK. 190302151</small></span>
            </td>
        </tr>
    </tbody>
</table>

<table class="table table-borderless w-full">
    <tbody>
        <tr>
            <td><strong class="h4 m-0 text-center d-block">UNIVERSITAS AMIKOM YOGYAKARTA</strong></td>
        </tr>
        <tr>
            <td><strong class="h4 m-0 text-center d-block">YOGYAKARTA</strong></td>
        </tr>
        <tr>
            <td><strong class="h4 m-0 text-center d-block">2021</strong></td>
        </tr>
    </tbody>
</table>

<div class="pagebreak"></div>