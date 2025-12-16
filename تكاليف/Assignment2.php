<?php

// 1. دالة تطبع "مرحبًا بك يا طالب".
function welcomeStudent() {
    echo "مرحبًا بك يا طالب<br>";
}

// 2. دالة تستقبل اسمًا وتطبع رسالة ترحيب.
function greet($name) {
    echo "مرحباً يا $name!<br>";
}

// 3. دالة تستقبل رقمين وتعيد ناتج ضربهما.
function multiply($a, $b) {
    return $a * $b;
}

// 4. دالة تعيد متوسط ثلاثة أرقام.
function average($a, $b, $c) {
    return ($a + $b + $c) / 3;
}

// 5. دالة تستقبل العمر وتعيد "بالغ" أو "طفل".
function checkAge($age) {
    return ($age >= 18) ? "بالغ" : "طفل";
}

// 6. دالة تستقبل عددًا غير محدود من الأرقام وتعيد أكبر رقم.
function maxNumber(...$numbers) {
    return max($numbers);
}

// 7. دالة تستقبل نصًا وتعيد عدد الكلمات فيه.
function wordCount($text) {
    return str_word_count($text);
}

// 8. دالة مجهولة (Anonymous) لطباعة "مرحبًا".
$anonymousHello = function() {
    echo "مرحبًا<br>";
};

// 9. دالة Callback لتنفيذ رسالة "تم الانتهاء" بعد مهمة ما.
function performTask($callback) {
    echo "جار تنفيذ المهمة...<br>";
    $callback();
}

// 10. استخدام array_filter لتصفية المنتجات ذات السعر الأكبر من 100.
function filterExpensiveProducts($products) {
    return array_filter($products, function($product) {
        return $product['price'] > 100;
    });
}

// 11. كلاس Product مع خصائص ودوال
class Product {
    public $name;
    public $price;
    private $finalPrice;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
        $this->finalPrice = $price;
    }

    public function applyDiscount($percent) {
        $discount = $this->price * ($percent / 100);
        $this->finalPrice = $this->price - $discount;
    }

    public function getFinalPrice() {
        return $this->finalPrice;
    }
}

// 12. دالة عودية لطباعة شجرة أقسام
function printCategories($categories, $level = 0) {
    foreach ($categories as $category => $subcategories) {
        echo str_repeat("-", $level * 4) . $category . "<br>";
        if (is_array($subcategories)) {
            printCategories($subcategories, $level + 1);
        }
    }
}

// 13. دالة Higher-Order ترجع دالة تطبق نسبة خصم على سعر
function discountFunction($percent) {
    return function($price) use ($percent) {
        return $price - ($price * $percent / 100);
    };
}

// 14. استخدام array_filter + Closure لتصفية المنتجات ذات سعر > 100
function filterExpensiveObjects($products) {
    return array_filter($products, fn($product) => $product->price > 100);
}

// 15. Closure يحتفظ بمتغير Currency
function currencyClosure() {
    $currency = "USD";
    return function($amount) use ($currency) {
        return $amount . " " . $currency;
    };
}

// 16. Currying Function: تأخذ نسبة ضريبة، ثم السعر، وتعيد السعر شامل الضريبة
function taxCalculator($taxPercent) {
    return function($price) use ($taxPercent) {
        return $price + ($price * $taxPercent / 100);
    };
}

// 17. Lambda Function لحساب مربع رقم
$square = fn($n) => $n * $n;

// 18. Higher-Order Function تستقبل مصفوفة أرقام ودالة وتُعيد مصفوفة مُعدَّلة
function mapArray(array $arr, callable $fn) {
    $result = [];
    foreach ($arr as $item) {
        $result[] = $fn($item);
    }
    return $result;
}

// 19. Function Composition لدمج دالتين: double ثم subtractFive
function double($n) {
    return $n * 2;
}

function subtractFive($n) {
    return $n - 5;
}

function compose($f, $g) {
    return function($x) use ($f, $g) {
        return $f($g($x));
    };
}

$combined = compose('double', 'subtractFive');

// -------------
// تجربة الأكواد:

// 1-5
welcomeStudent();
greet("أحمد");
echo "5 * 3 = " . multiply(5, 3) . "<br>";
echo "متوسط 4, 7, 9 = " . average(4, 7, 9) . "<br>";
echo "العمر 17 هو: " . checkAge(17) . "<br>";

// 6-7
echo "أكبر رقم هو: " . maxNumber(10, 5, 20, 8) . "<br>";
echo "عدد الكلمات: " . wordCount("مرحباً بالعالم البرمجي") . "<br>";

// 8-9
$anonymousHello();
performTask(function() { echo "تم الانتهاء!<br>"; });

// 10
$productsArr = [
    ['name' => 'منتج1', 'price' => 50],
    ['name' => 'منتج2', 'price' => 150],
    ['name' => 'منتج3', 'price' => 200],
];
$expensive = filterExpensiveProducts($productsArr);
echo "المنتجات الغالية:<br>";
foreach ($expensive as $p) {
    echo $p['name'] . " بسعر " . $p['price'] . "<br>";
}

// 11
$product = new Product("لاب توب", 1200);
$product->applyDiscount(10);
echo "السعر بعد الخصم: " . $product->getFinalPrice() . "<br>";

// 12
$categories = [
    "Electronics" => [
        "Phones" => [],
        "Laptops" => []
    ],
    "Clothing" => [
        "Men" => [],
        "Women" => []
    ]
];
echo "شجرة الأقسام:<br>";
printCategories($categories);

// 13
$discount10 = discountFunction(10);
echo "السعر بعد خصم 10% على 100: " . $discount10(100) . "<br>";

// 14
$productsObj = [
    new Product("هاتف", 90),
    new Product("سماعة", 110),
    new Product("كاميرا", 250),
];
$filtered = filterExpensiveObjects($productsObj);
echo "المنتجات ذات السعر > 100:<br>";
foreach ($filtered as $p) {
    echo $p->name . " بسعر " . $p->price . "<br>";
}

// 15
$showCurrency = currencyClosure();
echo $showCurrency(100) . "<br>";

// 16
$tax15 = taxCalculator(15);
echo "السعر بعد ضريبة 15% على 200: " . $tax15(200) . "<br>";

// 17
echo "مربع 6 = " . $square(6) . "<br>";

// 18
$nums = [1, 2, 3, 4];
$doubled = mapArray($nums, fn($n) => $n * 2);
echo "مصفوفة مضاعفة: ";
print_r($doubled);
echo "<br>";

// 19
echo "نتيجة دمج الدوال: " . $combined(10) . "<br>";
?>