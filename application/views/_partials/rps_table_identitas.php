<tr>
    <td class="py-3 px-0" colspan="4">
        <table class="table table-bordered border-dark m-0">
            <tr>
                <td class="p-2">Program studi</td>
                <td class="p-2">D3 Teknik Informatika</td>
                <td class="p-2">Semester</td>
                <td colspan="5" class="p-2">
                    <?= $identitas[0]['identitas'] ?? '.' ?>
                </td>
            </tr>
            <tr>
                <td class="p-2">Nama dan Kode Mata Kuliah</td>
                <td class="p-2">
                    <?= $rps[0]['matkul'] ?? '.' ?>
                    |
                    <?= $rps[0]['kode_matkul'] ?? '.' ?>
                </td>
                <td class="p-2">Bobot SKS</td>
                <td colspan="5" class="p-2">
                    <?= $identitas[0]['bobot_sks'] ?? '.' ?>
                </td>
            </tr>
            <tr>
                <td rowspan="3" class="p-2">Detail Presentasi Penilaian</td>
                <td rowspan="3" class="p-2">
                    <?= $rps[0]['detail_penilaian'] ?? '.' ?>
                </td>
            </tr>
            <tr>
                <td class="p-2">Dosen Pengampu</td>
                <td colspan="5" class="p-2 text-capitalize">
                    <?= $dosen[0]['nama'] ?? '.' ?>
                    -
                    NIK: <?= $dosen[0]['nik'] ?? '.' ?>
                </td>
            </tr>
            <tr>
                <td>Klasifikasi Nilai</td>
                <td class="p-0">
                    <table class="table table-borderless m-0">
                        <tr class="border-bottom border-dark">
                            <td class="p-2 border-end border-dark text-capitalize">> 80%</td>
                            <td class="p-2 border-end border-dark text-capitalize">>= 60 & < 80</td>
                            <td class="p-2 border-end border-dark text-capitalize">>= 40 & < 60</td>
                            <td class="p-2 border-end border-dark text-capitalize">>= 20 & < 40 </td>
                            <td class="p-2 text-capitalize">
                                < 20%</td>
                        </tr>
                        <tr>
                            <td class="p-2 border-end border-dark text-capitalize"><span class="d-block text-center">A</span></td>
                            <td class="p-2 border-end border-dark text-capitalize"><span class="d-block text-center">B</span></td>
                            <td class="p-2 border-end border-dark text-capitalize"><span class="d-block text-center">C</span></td>
                            <td class="p-2 border-end border-dark text-capitalize"><span class="d-block text-center">D</span></td>
                            <td class="p-2 text-capitalize"><span class="d-block text-center">E</span></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>