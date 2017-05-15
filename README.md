WordPress replace images dev [![AUR](https://img.shields.io/aur/license/yaourt.svg)](https://www.gnu.org/licenses/gpl-3.0.en.html) [![WordPress](https://img.shields.io/badge/wordpress-4.7.3%20tested-brightgreen.svg)](https://ru.wordpress.org/releases/) 
=======================

## WordPress Плагин
Плагин дает возможность использовать файлы изображений расположенные на продакшeне в dev окружении

## Полезность
Не нужно скачивать файлы на локальную машину что бы оценить верстку и внешний вид сайта, для работы с файлами их изменения и так далее скачать все же придется.

## Использование 
Скачиваем файл  	wordpress-replace-images-dev.php  в каталог  wp-content/mu-plugins меняем url в свойстве $romote_domine  класса VpDevImages на строку содержащую домен вашего продакшен сайта.
Наслаждаемся результатом.

## Бонус 
Вновь загруженные изображения и изображения файлы которых присутствуют на dev сервере будут взяты с него без запроса к продакшену
