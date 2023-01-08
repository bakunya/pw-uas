<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
<script src="<?= public_file('bs.min.js') ?>"></script>
<script src="<?= public_file('main.js') ?>"></script>
<?php if (isset($js)) : ?>
    <?php foreach ($js as $j) : ?>
        <script src="<?= public_file($j) ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
</body>

</html>