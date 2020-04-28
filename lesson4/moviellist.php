<?php
require_once("dbconnect.php");
$pagetitle = "Movie List";
include("header.php");
$query = $dbc->prepare("SELECT title, length, mpaRating FROM films");
$query->execute();

echo "<table>";
echo "<tr>";
echo "<th>Title</th>";
echo "<th>Length</th>";
echo "<th>Rating</th>";
echo "</tr>";

while($row = $query->fetch())
{
    echo "<tr>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['length'] . "</td>";
    echo "<td>" . $row['mpaRating'] . "</td>";
    echo "</tr>";
}
echo "</table>";
    include("footer.php");
?>