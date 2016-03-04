<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-20
 * Time: 下午4:19
 * Description: PHP 过滤器（Filter）
 * Url: http://www.w3school.com.cn/php/php_filter.asp
 */

/**
 * 知识点１：用于验证和过滤来自非安全来源的数据
 */

/**
 * 知识点２：函数和过滤器
 * 如需过滤变量，请使用下面的过滤器函数之一：
    filter_var() - 通过一个指定的过滤器来过滤单一的变量
    filter_var_array() - 通过相同的或不同的过滤器来过滤多个变量
    filter_input - 获取一个输入变量，并对它进行过滤
    filter_input_array - 获取多个输入变量，并通过相同的或不同的过滤器对它们进行过滤
 */
$int = 123;

if(!filter_var($int, FILTER_VALIDATE_INT))
{
    echo("Integer is not valid<br>");
}
else
{
    echo("Integer is valid<br>");
}

/**
 * 知识点３：Validating 和 Sanitizing
    有两种过滤器：
    Validating 过滤器：
    用于验证用户输入
    严格的格式规则（比如 URL 或 E-Mail 验证）
    如果成功则返回预期的类型，如果失败则返回 FALSE
    Sanitizing 过滤器：
    用于允许或禁止字符串中指定的字符
    无数据格式规则
    始终返回字符串
 */
$var=300;
$int_options = array(//定义整数的条件范围
    "options"=>array
    (
        "min_range"=>0,
        "max_range"=>256
    )
);

if(!filter_var($var, FILTER_VALIDATE_INT, $int_options))
{
    echo("Integer is not valid<br>");
}
else
{
    echo("Integer is valid<br>");
}

/**
 * 知识点４：验证表单输入
 */
if(!filter_has_var(INPUT_GET,"email")){//是否存在我们要验证的数据类型
    echo("Input type does not exist<br>");
}else{
    if(!filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL)){//验证邮箱格式是否正确
        echo "Email is not valid<br>";
    }
    else{
        echo "Email is valid<br>";
    }
}


if(!filter_has_var(INPUT_POST,"url")){
    echo "Input type does not exist<br>";
}else{
    $url=filter_input(INPUT_POST,"url",FILTER_SANITIZE_URL);
}



/**
 * 知识点５：过滤多个输入
 */
$filters=array(//定义多个过滤条件
    "name"=>array(
        "filter"=>FILTER_SANITIZE_STRING
    ),
    "age"=>array(
        "filter"=>FILTER_VALIDATE_INT,
        "options"=>array(
            "min_range"=>1,
            "max_range"=>120
        )
    ),
    "email"=>FILTER_VALIDATE_EMAIL
);
$result = filter_input_array(INPUT_GET, $filters);

if (!$result["age"])
{
    echo("Age must be a number between 1 and 120.<br />");
}
elseif(!$result["email"])
{
    echo("E-Mail is not valid.<br />");
}
else
{
    echo("User input is valid");
}


/**
 * 知识点６： FILTER_CALLBACK 过滤器
 */
function convertSpace($string)
{
    return str_replace("_", " ", $string);
}
$string = "Peter_is_a_great_guy!";
echo filter_var($string, FILTER_CALLBACK, array("options"=>"convertSpace"));
?>