<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/php/core.php';

if (!empty($_POST)) {
    $to = EMAIL;
    $from = $_POST['Email'] ?? EMAIL;
    $first_name = (strlen($_POST['Name']) != 0) ? $_POST['Name'] : 'User';
    $second_name = (strlen($_POST['Name']) != 0) ? $_POST['Name'] : 'User';

    if (isset($_POST['id'])) {
        if ($_POST['id'] == 1) {
            if (isset($_POST['Phone']) && strlen($_POST['Phone']) == strlen('+7(039)009-90-09')) {
                $phone = $_POST['Phone'];
                $subject = "Форма отправки сообщений с сайта (Заказать звонок)";
                $message = $first_name . ' ' . $second_name . ' оставил сообщение:' . "\n" . $phone . "\nПерезвоните, пожалуйста";
                $headers = "From" . $from;

                $result = 'Операция прошла успешно';
                if (mail($to, $subject, $message, $headers)) {
                    echo json_encode($result);
                } else {
                    echo json_encode('Error');
                }
            } else {
                echo json_encode('Нет номера телефона:(');
                return;
            }
        }

        if ($_POST['id'] == 2) {
            if (strlen($_POST['Email']) != 0) {
                $subject = "Форма отправки сообщений с сайта (Заказать услугу)";
                $message = $first_name . ' оставил сообщение:' . "\n" . "Почта - " . $_POST['Email'] . "\n" . $_POST['text'];
                $headers = "From" . $from;

                $result = 'Операция прошла успешно';
                if (mail($to, $subject, $message, $headers)) {
                    echo json_encode($result);
                } else {
                    echo json_encode('Error');
                }
            } else {
                echo json_encode('А почта где?:(');
                return;
            }
        }
    }
}



?>