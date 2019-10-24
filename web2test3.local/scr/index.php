<?
require_once("../vendor/vlucas/valitron/src/Valitron/Validator.php");
//var_dump($_POST);
$v = new Valitron\Validator($_POST);
$v->rule('required', ['name', 'email', 'password', 'confirmPassword']);
$v->rules([
    'equals' => [
        ['password', 'confirmPassword']
    ]
]);
$v->rule('integer', 'age');
$v->rule('date', 'date');
$v->rule('regex', 'phone', '/^\+373[0-9]{8,8}$/');
$v->rules([
    'lengthBetween' => [
        ['name', 3, 15],
        ['password', 10, 20],
        ['confirmPassword', 10, 20]
    ]
]);
$v->rule('email', 'email');
$v->rules([
    'min' => [
        ['age', 1]
    ],
    'max' => [
        ['age', 100]
    ]
]);
if($v->validate()) {
    echo "Yay! We're all good!";
} else {
    // Errors
    print_r($v->errors());
}
?>

<form action="" method="post">
	Name: <input type="text" name="name">
	<br>
	Email: <input type="email" name="email" >
	<br>
	Phone: <input type="number" name="phone">
	<br>
	Age: <input type="number" name="age">
	<br>
	Password: <input type="password" name="password">
	<br>
	Confirm password: <input type="password" name="confirmPassword">
	<br>
	date: <input type="date" name="date">
	<br>
	<input type="submit">
</form>