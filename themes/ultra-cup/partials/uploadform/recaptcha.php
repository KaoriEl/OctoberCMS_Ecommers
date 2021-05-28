<?php // Проверяем была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

    // Создаем POST запрос
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LdLX28aAAAAAOGLRjgkBydJ-h-L3n7GRrvhDUfO';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Отправляем POST запрос и декодируем результаты ответа
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Принимаем меры в зависимости от полученного результата
    if ($recaptcha->score >= 0.5) {
        echo "<div class='notification is-info'>Проверка пройдена - отправляем сообщение <br>";
        echo "Успех: ".$recaptcha->success."<br>";
        echo "Баллы: ".$recaptcha->score."<br>";
        echo "Дата: ".$recaptcha->challenge_ts."<br></div>";


    } else {
        echo "<div class='notification is-danger'>Проверка не пройдена. Показываем ошибку.</div>";
    }

} ?>
