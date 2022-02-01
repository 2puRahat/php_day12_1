<?php


namespace App\classes;
use App\classes\User;


class Calculator
{
    public $firstNumber;
    protected $secondNumber;
    private $operator;
    public $result;
    private $user;

    public function __construct($data)
    {
//        echo is_array($data) ? 'data is array' : 'Data is single variable';
        $this->firstNumber  = $data['first_number'];
        $this->secondNumber = $data['second_number'];
        $this->operator     = $data['operator'];

    }

    public function index()
    {


//        without extend
//        $this->user = new User();
//        echo $this->user->city;


//         with extendens
//        echo $this->city.' ';
//        echo $this->country.' ';
//        echo $this->logout();

//        echo $this->multiplication();

        switch ($this->operator){
            case '+':
                $this->result = $this->add();
                break;
            case '-':
                $this->result = $this->sub();
                break;
            case '*':
                $this->result = $this->multiplication();
                break;
            case '/':
                $this->result = $this->division();
                break;
            case '%':
                $this->result = $this->modulus();
                break;
        }
        return $this->result;

    }


    protected function add()
    {
        return $this->firstNumber + $this->secondNumber;
    }
    protected function sub()
    {
        return $this->firstNumber - $this->secondNumber;
    }
    protected function multiplication()
    {
        return $this->firstNumber * $this->secondNumber;
    }
    protected function division()
    {
        return $this->firstNumber / $this->secondNumber;
    }
    protected function modulus()
    {
        return $this->firstNumber % $this->secondNumber;
    }

}