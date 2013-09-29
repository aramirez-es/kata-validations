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
}
