<?php
/**
- User

- A user of the system
*/

Class User 
{
    /**
    - first namespace
    - @var string
    */

    public $first_name;

    /**
    - last name
    - @var string
    */
    public $surname;

    /**
    - Get the user's full name from their first name and surname
    - @return string // the user's full name
    */
    public function getFullName()
    {
        return trim("$this->first_name $this->surname");
    }
}

?>