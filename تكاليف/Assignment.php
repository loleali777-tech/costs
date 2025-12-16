<?php
//  دوال النصوص (Strings Functions)

// strlen() - إرجاع طول النص
echo strlen("Hello World") . "<br><br>";

// trim() - إزالة الفراغات من بداية ونهاية النص
echo trim("  Hello  ") . "<br><br>";

// ltrim() - إزالة الفراغات من بداية النص فقط
echo ltrim("  Hello  ") . "<br><br>";

// rtrim() - إزالة الفراغات من نهاية النص فقط
echo rtrim("  Hello  ") . "<br><br>";

// strtolower() - تحويل النص إلى أحرف صغيرة
echo strtolower("HELLO") . "<br><br>";

// strtoupper() - تحويل النص إلى أحرف كبيرة
echo strtoupper("hello") . "<br><br>";

// str_replace() - استبدال نص داخل النص
echo str_replace("world", "PHP", "Hello world") . "<br><br>";

// substr() - قص جزء من النص
echo substr("Hello World", 0, 5) . "<br><br>";

// strpos() - إيجاد موقع نص داخل نص آخر
echo strpos("Hello World", "World") . "<br><br>";

// str_contains() - التحقق إن النص يحتوي نص معين (PHP 8+)
echo '<pre>';
var_dump(str_contains("Hello World", "World"));
echo '</pre><br>';

// explode() - تحويل نص إلى مصفوفة
echo '<pre>';
print_r(explode(",", "a,b,c"));
echo '</pre><br>';

// implode() - تحويل مصفوفة إلى نص
echo implode("-", ["a", "b", "c"]) . "<br><br>";

// json_encode() - تحويل بيانات إلى JSON
echo json_encode(["name" => "Ali", "age" => 25]) . "<br><br>";

// json_decode() - تحويل JSON إلى بيانات PHP
$data = json_decode('{"name":"Ali","age":25}', true);
echo '<pre>';
print_r($data);
echo '</pre><br>';

//  دوال المصفوفات (Array Functions)

// count() - إرجاع عدد عناصر المصفوفة
echo count([1, 2, 3]) . "<br><br>";

// array_push() - إضافة عنصر لنهاية المصفوفة
$arr = [1, 2];
array_push($arr, 3);
echo '<pre>';
print_r($arr);
echo '</pre><br>';

// array_pop() - إزالة آخر عنصر من المصفوفة
array_pop($arr);
echo '<pre>';
print_r($arr);
echo '</pre><br>';

// array_shift() - إزالة أول عنصر من المصفوفة
array_shift($arr);
echo '<pre>';
print_r($arr);
echo '</pre><br>';

// array_unshift() - إضافة عنصر في بداية المصفوفة
array_unshift($arr, 1);
echo '<pre>';
print_r($arr);
echo '</pre><br>';

// in_array() - التحقق من وجود قيمة داخل المصفوفة
echo '<pre>';
var_dump(in_array(2, $arr));
echo '</pre><br>';

// array_key_exists() - التحقق من وجود مفتاح داخل المصفوفة الترابطية
$user = ["name" => "Ali", "age" => 25];
echo '<pre>';
var_dump(array_key_exists("name", $user));
echo '</pre><br>';

// array_merge() - دمج مصفوفتين أو أكثر
$a = [1, 2];
$b = [3, 4];
echo '<pre>';
print_r(array_merge($a, $b));
echo '</pre><br>';

// array_keys() - إرجاع مفاتيح المصفوفة
echo '<pre>';
print_r(array_keys($user)); // ["name", "age"]
echo '</pre><br>';

// array_values() - إرجاع قيم المصفوفة
echo '<pre>';
print_r(array_values($user)); // ["Ali", 25]
echo '</pre><br>';

// sort() - ترتيب المصفوفة تصاعدياً
$arr = [3, 1, 2];
sort($arr);
echo '<pre>';
print_r($arr);
echo '</pre><br>';

// rsort() - ترتيب المصفوفة تنازلياً
rsort($arr);
echo '<pre>';
print_r($arr);
echo '</pre><br>';

// asort() - ترتيب المصفوفة مع الحفاظ على المفاتيح
$arr = ["b" => 2, "a" => 3, "c" => 1];
asort($arr);
echo '<pre>';
print_r($arr);
echo '</pre><br>';

// ksort() - ترتيب المفاتيح تصاعدياً
ksort($arr);
echo '<pre>';
print_r($arr);
echo '</pre><br>';

// array_map() - تطبيق دالة على كل عناصر المصفوفة
$arr = [1, 2, 3];
$newArr = array_map(fn($n) => $n * 2, $arr);
echo '<pre>';
print_r($newArr);
echo '</pre><br>';
?>