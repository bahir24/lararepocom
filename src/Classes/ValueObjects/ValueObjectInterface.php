<?php
namespace Bahir24\Lararepocom\Classes\ValueObjects;

interface ValueObjectInterface
{
    public function getValue();

    public function getRules();

    public function getMessages();

    public function getAttributes();


    public function setValue($value);

    public function setRules(array $rules);

    public function setMessages(array $messages);

    public function setAttributes(array $attributes);

    public function validate();
}
