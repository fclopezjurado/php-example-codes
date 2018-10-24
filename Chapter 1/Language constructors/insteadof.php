<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 16:03
 *
 * If two Traits insert a method with the same name, a fatal error is produced, if the conflict is not explicitly
 * resolved. To resolve naming conflicts between Traits used in the same class, the "insteadof" operator needs to be
 * used to choose exactly one of the conflicting methods.
 * https://secure.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

trait A
{
    public function smallTalk()
    {
        echo 'a' . PHP_EOL;
    }

    public function bigTalk()
    {
        echo 'A' . PHP_EOL;
    }
}

trait B
{
    public function smallTalk()
    {
        echo 'b' . PHP_EOL;
    }

    public function bigTalk()
    {
        echo 'B' . PHP_EOL;
    }
}

class Talker
{
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class Aliased_Talker
{
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}

$talker = new Talker();
$aliasedTalker = new Aliased_Talker();
$talker->bigTalk();
$talker->smallTalk();
$aliasedTalker->bigTalk();
$aliasedTalker->smallTalk();
$aliasedTalker->talk();