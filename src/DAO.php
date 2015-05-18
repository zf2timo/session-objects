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
     * @var \DateTime
     */
    protected $dateTime;

    function __construct($id, $name, $value, $dateTime)
    {
        $this->id = $id;
        $this->dateTime = $dateTime;
        $this->name = $name;
        $this->value = $value;
    }


    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
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