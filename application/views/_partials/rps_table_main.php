<table class="table table-borderless">
    <thead class="align-middle border border-dark">
        <tr>
            <th rowspan="3" class="border border-dark">
                <img width="200" src="<?= base_url('public/logo.jpg') ?>" alt="logo" class="mx-auto d-block">
            </th>
            <th rowspan="3" class="fw-normal text-center border border-dark">
                Rencana Pembelajaran Semester
                <br>
                Program Studi D3 Teknik Informatika
                <br>
                <span class="h4 fw-normal">Mata Kuliah <?= $rps[0]['matkul'] ?? '' ?></span>
                <br>
                <span class="h4 fw-normal">DT<?= $rps[0]['kode_matkul'] ?? '' ?></span>
            </th>
        </tr>
        <tr>
            <th class="border border-dark fw-normal">
                Nomor
                <br>
                Tgl. Disusun
                <br>
                Revisi
            </th>
            <th class="border border-dark fw-normal">
                RPS-D3TI-DT<?= $rps[0]['kode_matkul'] ?? '' ?>
                <br>
                <?= $rps[0]['tgl_disusun'] ?? '' ?>
                <br>
                00
            </th>
        </tr>
        <tr>
            <th class="border border-dark fw-normal">
                Halaman
            </th>
            <th class="border border-dark fw-normal">
                00/00
            </th>
        </tr>
    </thead>
    <tbody>