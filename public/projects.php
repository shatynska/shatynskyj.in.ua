<?php

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
