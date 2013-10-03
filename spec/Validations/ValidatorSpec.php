<?php

namespace spec\Validations;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ValidatorSpec extends ObjectBehavior
{
    public function it_should_return_true_if_number_is_valid()
    {
        $this->isValid(4, ['I'])->shouldReturn(true);
    }

    public function it_should_return_false_if_number_is_not_valid()
    {
        $this->isValid('4', ['I'])->shouldReturn(false);
    }

    public function it_should_return_true_if_string_is_valid()
    {
        $this->isValid('4', ['S'])->shouldReturn(true);
    }

    public function it_should_return_false_if_string_is_not_valid()
    {
        $this->isValid(4, ['S'])->shouldReturn(false);
    }

    public function it_should_return_true_if_length_of_number_is_valid()
    {
        $this->isValid(40, ['I', 2])->shouldReturn(true);
    }

    public function it_should_return_false_if_length_of_number_is_not_valid()
    {
        $this->isValid(40, ['I', 3])->shouldReturn(false);
    }

    public function it_should_return_true_if_length_of_string_is_valid()
    {
        $this->isValid('40', ['S', 2])->shouldReturn(true);
    }

    public function it_should_return_false_if_length_of_string_is_not_valid()
    {
        $this->isValid('40', ['S', 3])->shouldReturn(false);
    }

    public function it_should_return_true_if_there_are_no_validations_to_do()
    {
        $this->isValid('40', [])->shouldReturn(true);
    }

    public function it_should_throw_an_exception_if_validation_type_is_not_expected()
    {
        $this
            ->shouldThrow(new \UnexpectedValueException('Validation type unknow'))
            ->duringIsValid('40', ['U']);
    }
}
