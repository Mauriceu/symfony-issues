<?php

namespace App\Form;

use Symfony\Component\Validator\Constraints\NotBlank;

class FormModel
{
    #[NotBlank]
    public ?string $password = null;
}