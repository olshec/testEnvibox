<?php

namespace MyCompany\Contact;

interface ContactStorage
{
    public function save(string $name, string $numberTelephone, string $message);
}

