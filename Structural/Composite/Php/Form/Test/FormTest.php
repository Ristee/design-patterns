<?php

namespace DesignPatterns\Structural\Composite\Php\Form\Test;

use DesignPatterns\Structural\Composite\Php\Form\Composite\Fieldset;
use DesignPatterns\Structural\Composite\Php\Form\Composite\Form;
use DesignPatterns\Structural\Composite\Php\Form\Element\Input;
use PHPUnit\Framework\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $form = new Form('product', "Add product", "/product/add");
        $form->add(new Input('name', "Name", 'text'));
        $form->add(new Input('description', "Description", 'text'));

        $picture = new Fieldset('photo', "Product photo");
        $picture->add(new Input('caption', "Caption", 'text'));
        $picture->add(new Input('image', "Image", 'file'));
        $form->add($picture);

        $data = [
            'name' => 'Apple MacBook',
            'description' => 'A decent laptop.',
            'photo' => [
                'caption' => 'Front photo.',
                'image' => 'photo1.png',
            ],
        ];
        $form->setData($data);

        $result = $form->render();
        $expectedHtml = "<form action=\"/product/add\">\n<h3>Add product</h3>\n<label for=\"name\">Name</label>\n<input name=\"name\" type=\"text\" value=\"Apple MacBook\">\n<label for=\"description\">Description</label>\n<input name=\"description\" type=\"text\" value=\"A decent laptop.\">\n<fieldset><legend>Product photo</legend>\n<label for=\"caption\">Caption</label>\n<input name=\"caption\" type=\"text\" value=\"Front photo.\">\n<label for=\"image\">Image</label>\n<input name=\"image\" type=\"file\" value=\"photo1.png\">\n</fieldset>\n</form>\n";

        $this->assertEquals($expectedHtml, $result);
    }
}