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
        $model = new FormModel();
        $model->password = 'some_password';

        dump("creating live component");
        $testComponent = $this->createLiveComponent(FormComponent::class, ['initialFormData' => $model]);

        dump("retrieving component instance");
        $component = $testComponent->component();
        try {
            dump("invoking live action");
            $response = $component->save();
        } catch (Throwable $e) {
            self::assertFalse('Did not expect component to fail with message: '.$e->getMessage());
        }

    }
}