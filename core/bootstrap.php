<?php
//Путь до директории с конфигурационными файлами
const DIR_CONFIG = '/../config';

//Подключение автозагрузчика composer
require_once __DIR__ . '/../vendor/autoload.php';

//Функция, возвращающая массив всех настроек приложения
function getConfigs(string $path = DIR_CONFIG): array
{
   $settings = [];
	@@ -26,4 +21,3 @@ function getConfigs(string $path = DIR_CONFIG): array
require_once __DIR__ . '/../routes/web.php';

return new Src\Application(new Src\Settings(getConfigs()));