<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ?? 'Students CRUD' ?></title>
</head>
<body>
    <nav><a href="<?= route('students.index') ?>">Students</a></nav>
    <?= $content ?? '' ?>
</body>
</html>
