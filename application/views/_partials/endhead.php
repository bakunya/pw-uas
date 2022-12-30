<script src="<?= public_file('bs.min.js') ?>"></script>
<?php if (isset($js)) : ?>
    <?php foreach ($js as $j) : ?>
        <script src="<?= public_file($j) ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
</body>

</html>