<?php

namespace DesignPatterns\Structural\Decorator\PHP\TextFilter\Test;

use DesignPatterns\Structural\Decorator\Php\TextFilter\Decorator\DangerousHTMLTagsFilter;
use DesignPatterns\Structural\Decorator\Php\TextFilter\Decorator\MarkdownFormat;
use DesignPatterns\Structural\Decorator\Php\TextFilter\Decorator\PlainTextFilter;
use DesignPatterns\Structural\Decorator\Php\TextFilter\TextInput;
use PHPUnit\Framework\TestCase;

class TextFilterTest extends TestCase
{
    public function testPlainText()
    {
        $dangerousComment = <<<HERE
Hello! Nice blog post!
Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;
        $resultPlain = <<<HERE
Hello! Nice blog post!
Please visit my homepage.

  performXSSAttack();

HERE;

        $input = new TextInput;
        $plainFilter = new PlainTextFilter($input);


        $this->assertEquals($dangerousComment, $input->formatText($dangerousComment));
        $this->assertEquals($resultPlain, $plainFilter->formatText($dangerousComment));
    }

    public function testMarkdownWithDangerousHTMLTagsFilter()
    {
        $dangerousForumPost = <<<HERE
# Welcome

This is my first post on this **gorgeous** forum.

<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;
        $resultMarkdown = <<<HERE
# Welcome

This is my first post on this <strong>gorgeous</strong> forum.

<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;
        $resultDangerousHTMLTagsFilter = <<<HERE
# Welcome

This is my first post on this <strong>gorgeous</strong> forum.


HERE;

        $input = new TextInput;
        $markdown = new MarkdownFormat($input);
        $filteredInput = new DangerousHTMLTagsFilter($markdown);

        $this->assertEquals($resultMarkdown, $markdown->formatText($dangerousForumPost));
        $this->assertEquals($resultDangerousHTMLTagsFilter, $filteredInput->formatText($dangerousForumPost));
    }
}