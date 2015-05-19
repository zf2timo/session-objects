<?php


namespace src;


class DAO {

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var \src\PersonDAO
     */
    protected $person;

    function __construct($id, $name, $value, $person)
    {
        $this->id = $id;
        $this->person = $person;
        $this->name = $name;
        $this->value = $value;
    }


    /**
     * @return \DateTime
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
} 