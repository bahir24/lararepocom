<?php
namespace Bahir24\Lararepocom\Classes\ValueObjects;

use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

abstract class ValueObject implements ValueObjectInterface
{
    private int $value = 0;
    private array $attributes = [];
    private array $rules = [];
    private array $messages = [];

    public function getRules(): array
    {
        return $this->rules;
    }
    public function getMessages(): array
    {
        return $this->messages;
    }
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function setValue($value): void
    {
        $this->value = $value;
    }
    public function setRules(array $rules): void
    {
        $this->rules = $rules;
    }
    public function setMessages(array $messages): void
    {
        $this->messages = $messages;
    }
    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

    public function validate(): void
    {
        $validator = Validator::make(['value' => $this->value], $this->rules, $this->messages, $this->attributes = null);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }
    }
}
