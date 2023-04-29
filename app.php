<?php

declare(strict_types=1);

$database_name = "../database.db";
$db = new SQLite3($database_name) or die('Unable to open database');

function renderProjects($db, $limit, $offset, bool $figcaption): void
{
    $query = "SELECT id, title, place, number_of_images FROM projects LIMIT $limit OFFSET $offset";
    $results = $db->query($query);

    while ($row = $results->fetchArray()) {
        echo '
        <figure>
        <img src="/images/projects/' . $row["id"] . '/0.jpg" alt="' . $row["title"] . '" number="' . $row["number_of_images"] . '" id="' . $row["id"] . '">
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
        ';
    }
}


function renderText($db, $id): void
{
    $query = "SELECT title, text FROM texts WHERE id = $id";
    $results = $db->query($query);

    while ($row = $results->fetchArray()) {
        echo '
        <div>
        <h3>
        ' . $row["title"] . '
        </h3>
        <div>
        ' . $row["text"] . '
        </div>
        </div>
        ';
    }
}
