<?php
if (isset($_POST['submit'])) {
    echo rand($_POST["x"], $_POST['y']);
}