<?php

if (isset($_POST['submit'])){
    $way = [$_POST['text']];
}else {
    $way = ['../'];
};

foreach (new DirectoryIterator(implode("",$way)) as $fileInfo) {
    if($fileInfo->isDot()) continue;
    echo $fileInfo->getFilename() . "<br>\n";
}
?>

<form method="post">
    <label for="text">Введите адрес</label>
    <input type="text" title="в формате 'C:/'" name="text" id="text" required>
    <br>
    <button type="submit" name="submit"> ok </button>
</form>

