<?php

namespace Blogger\BlogBundle\Tests\Twig\Extensions;

use Blogger\BlogBundle\Twig\Extensions\BloggerBlogExtension;

class BloggerBlogExtensionTest extends \PHPUnit_Framework_TestCase
{
    public function testCreatedAgo()
    {
        $blog = new BloggerBlogExtension();

        $this->assertEquals("1 секунда тому", $blog->createdAgo($this->getDateTime(-1)));
        $this->assertEquals("34 секунди тому", $blog->createdAgo($this->getDateTime(-34)));
        $this->assertEquals("1 хвилина тому", $blog->createdAgo($this->getDateTime(-60)));
        $this->assertEquals("2 хвилини тому", $blog->createdAgo($this->getDateTime(-120)));
        $this->assertEquals("1 година тому", $blog->createdAgo($this->getDateTime(-3600)));
        $this->assertEquals("1 година тому", $blog->createdAgo($this->getDateTime(-3603)));
        $this->assertEquals("2 години тому", $blog->createdAgo($this->getDateTime(-7200)));
        $this->assertEquals("5 днів тому", $blog->createdAgo($this->getDateTime(-432000)));

        $this->assertEquals("5 днів тому", $blog->createdAgo($this->getDateTime(-32000)));//error test

        // Cannot create time in the future
        $this->setExpectedException('\InvalidArgumentException');
        $blog->createdAgo($this->getDateTime(60));
    }

    protected function getDateTime($delta)
    {
        return new \DateTime(date("Y-m-d H:i:s", time()+$delta));
    }

    public function createdAgo(\DateTime $dateTime)
    {
        if ($delta < 60)
        {
            // Seconds
            $time = $delta;
            $duration = $time . " секунд" . (($time > 1) ? "и" : "а") . " тому";
        }
    }
}