<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 16:46
 *
 * array_column ( array $input , mixed $column_key [, mixed $index_key = NULL ] ) : array
 *
 * Return the values from a single column of the input, identified by the column_key. Optionally, an index_key may be
 * provided to index the values in the returned array by the values from the index_key column of the input array.
 * @param array $input a multi-dimensional array or an array of objects from which to pull a column of values from. If
 * an array of objects is provided, then public properties can be directly pulled. In order for protected or private
 * properties to be pulled, the class must implement both the __get() and __isset() magic methods.
 * @param int|string|null $column_key the column of values to return. This value may be an integer key of the column
 * you wish to retrieve, or it may be a string key name for an associative array or property name. It may also be NULL
 * to return complete arrays or objects (this is useful together with index_key to reindex the array).
 * @param int|string|object $index_key the column to use as the index/keys for the returned array. This value may be
 * the integer key of the column, or it may be the string key name. The value is cast as usual for array keys
 * (however, objects supporting conversion to string are also allowed).
 * @return array of values representing a single column from the input array.
 */

# Example #1 Get the column of first names from a record set.

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

var_dump(array_column($records, 'first_name'));

# Example #2 Get the column of last names from a record set, indexed by the "id" column.

var_dump(array_column($records, 'last_name', 'id'));

# Example #3 Get the column of user names from the public "username" property of an object.

class User
{
    public $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }
}

$users = [
    new User('user 1'),
    new User('user 2'),
    new User('user 3'),
];

var_dump(array_column($users, 'username'));

# Example #4 Get the column of names from the private "name" property of an object using the magic __get() method.

class Person
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __isset($prop) : bool
    {
        return isset($this->$prop);
    }
}

$people = [
    new Person('Fred'),
    new Person('Jane'),
    new Person('John'),
];

var_dump(array_column($people, 'name'));
