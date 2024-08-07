<?php

use App\Components\FormComponent;
use App\Form\FormModel;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\UX\LiveComponent\Test\InteractsWithLiveComponents;

class FormComponentTest extends KernelTestCase
{
    use InteractsWithLiveComponents;


    public function testFormComponent(): void
    {
        // instantiate model with valid value
        $model = new FormModel();
        $model->password = 'some_password';

        dump("creating live component");
        // instantiate component and pass valid model.
        $testComponent = $this->createLiveComponent(FormComponent::class, ['initialFormData' => $model]);

        dump("retrieving component instance");
        /** @var FormComponent $component */
        $component = $testComponent->component();
        try {
            dump("invoking live action - password property will be null...");
            $component->save();
        } catch (Throwable $e) {
            self::assertFalse('Did not expect component to fail with message: '.$e->getMessage());
        }
    }
}