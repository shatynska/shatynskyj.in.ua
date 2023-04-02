<?php

declare(strict_types=1);

$database_name = "./database.db";
$db = new SQLite3($database_name);

$leftProjects = [240, 130, 50, 250, 150, 40, 60, 200, 220, 70, 100, 80];
$rightProjects = [20, 30, 140, 120, 210, 160, 170, 180, 230, 190, 110, 90];

function renderProjects(array $projects): void
{
    for ($i = 0; $i <= count($projects) - 1; $i++) {
        echo '
            <a href="project.php?id=' . $projects[$i] . '">
                <figure>
                    <img src="projects/' . $projects[$i] . '/z1.jpg"
                    alt="">
                    <figcaption></figcaption>
                </figure>
            </a>
        ';
    }
}
