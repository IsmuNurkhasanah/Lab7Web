<h3 class="title">Artikel Terkini</h3>
<ul>
    <?php foreach ($artikel as $a): ?>
        <li>
            <a href="artikel/<?= esc($a['slug']) ?>"><?= esc($a['judul']) ?></a>
        </li>
    <?php endforeach; ?>
</ul>