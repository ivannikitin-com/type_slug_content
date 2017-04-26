<?php
/*
Plugin Name: type_slug_content
Description: Плагин для вывода контента в зависимости от типа контента.
Version: 1.0
Author: sergey_kariy
*/

function type_slug_content($tax, $content, $type_content){
	//определяем где мы находимся 
	$type = $_SERVER['QUERY_STRING'];
	$type_true = explode("=", $type);
	$slug = $type_true[0];

	//для вывода результа
	$result = null;
	//проверям что ввел пользовтаель
	switch ($tax) {
            //типы контента
            case 'product_cat':
		//сверяем место пользователя и где нужно выводить
                if($tax == $slug){
                    //проверка типа контента для вывода 
                    switch ($type_content) {
                        case 'style':
                            echo $result = "
                                <style>
                                   $content
                                </style>
                                ";
                            break;
                        case 'script':
                            echo $result = "
                                <script>
                                        $content
                                </script>
                                ";
                                break;
                                default:
                                    # code...
                                break;
                        }
		}
		break;
		//для постов
		case 'post':
                    if ($tax == $slug) {
			switch ($type_content) {
                            case 'style':
				echo $result = "
                                    <style>
                                            $content
                                    </style>
                                    ";
				break;
                            case 'script':
                                 echo $result = "
				<script>
                                    $content
				</script>
				";
				break;
                                default:
			# code...
                            break;
				}
			}
                    break;
		default:
		# code...
		break;
	}
}