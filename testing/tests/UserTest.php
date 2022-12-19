<?php

use \PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        require 'User.php';
        $user = new User;

        $user-> first_name = "Yasmin";
        $user-> surname = 'Archibald';

        $this->assertEquals('Yasmin Archibald', $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user = new User;

        $this->assertEquals("", $user->getFullName());
    }
    /**
     * @test
    */
        public function user_has_first_name() 
        {
            $user = new User;

            $user->first_name="Yasmin";

            $this->assertEquals("Yasmin", $user->first_name);
        }
    }
?>