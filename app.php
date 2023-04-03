<?php

declare(strict_types=1);

$database_name = "../database.db";
$db = new SQLite3($database_name);

function renderProjects($db, $limit, $offset, bool $figcaption): void
{
    $query = "SELECT * FROM projects LIMIT $limit OFFSET $offset";
    $results = $db->query($query);

    while ($row = $results->fetchArray()) {
        echo '
        <a href="project.php?id=' . $row["id"] . '">
        <figure>
        <img src="/images/projects/' . $row["id"] . '/title.jpg" alt="">
        ';
        if ($figcaption == true) {
            echo '
            <figcaption>
            ' . $row["title"] . '
            </br>
            ' . $row["place"] . '
            </figcaption>
            ';
        }
        echo '
        </figure>
        </a>
        ';
    }
}
