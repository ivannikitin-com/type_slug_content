# type_slug_content
Используйте для вывода контента на определенных таксономиях 
v1
Плагин работает с такими таксономиями как: post, product_type (по надобности расширяйте под свои задачи)
///////////////////////////
как пользоваться

$tax - где выводить контент (таксонимия) /n

$content - выш контент /n

$type_content - тип контента, например скрипты или стили /n


function type_slug_content($tax, $content, $type_content)

//////////////////////////////

пример использования
$style = "
    ul#primary-menu li.menu-item-19 a {
       color: #0d619c;
    }
";

type_slug_content("product_cat", $style, "style");
