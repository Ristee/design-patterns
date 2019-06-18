<?php

namespace DesignPatterns\Structural\Bridge\Php\PageRenderer\Test;

use DesignPatterns\Structural\Bridge\Php\PageRenderer\Page\Product;
use DesignPatterns\Structural\Bridge\Php\PageRenderer\Page\ProductPage;
use DesignPatterns\Structural\Bridge\Php\PageRenderer\Page\SimplePage;
use DesignPatterns\Structural\Bridge\Php\PageRenderer\Renderer\HTMLRenderer;
use DesignPatterns\Structural\Bridge\Php\PageRenderer\Renderer\JsonRenderer;
use PHPUnit\Framework\TestCase;

class PageRendererTest extends TestCase
{
    public function testSimplePage()
    {
        $pageHtml = new SimplePage(new HTMLRenderer, "Home", "Welcome!");
        $expectedHtml = "<html><body>\n<h1>Home</h1>\n<div class='text'>Welcome!</div>\n</body></html>";

        $pageJson = new SimplePage(new JsonRenderer, "Home", "Welcome!");
        $expectedJson = "{\n\"title\": \"Home\",\n\"text\": \"Welcome!\"\n}";

        $this->assertEquals($expectedHtml, $pageHtml->view());
        $this->assertEquals($expectedJson, $pageJson->view());
    }

    public function testProductPage()
    {
        $product = new Product(
            "5",
            "Product",
            "description",
            "star-wars.jpeg",
            39.95
        );

        $pageHtml = new ProductPage(new HTMLRenderer, $product);
        $expectedHtml = "<html><body>\n<h1>Product</h1>\n<div class='text'>description</div>\n<img src='star-wars.jpeg'>\n<a href='/cart/add/5'>Add to cart</a>\n</body></html>";

        $pageJson = new ProductPage(new JsonRenderer, $product);
        $expectedJson = "{\n\"title\": \"Product\",\n\"text\": \"description\",\n\"img\": \"star-wars.jpeg\",\n\"link\": {\"href\": \"Add to cart\", \"title\": \"Add to cart\"\"}\n}";

        $this->assertEquals($expectedHtml, $pageHtml->view());
        $this->assertEquals($expectedJson, $pageJson->view());
    }
}