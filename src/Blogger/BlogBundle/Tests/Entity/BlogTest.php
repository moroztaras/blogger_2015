<?php

namespace Blogger\BlogBundle\Tests\Entity;

use Blogger\BlogBundle\Entity\Blog;

class BlogTest extends \PHPUnit_Framework_TestCase
{
    public function testSlugify()
    {
        $blog = new Blog();
        $this->assertEquals('hello-world', $blog->slugify('Hello World'));
        $this->assertEquals('hi-moroz-taras', $blog->slugify('Hi Moroz Taras'));
        $this->assertEquals('hello-world', $blog->slugify('Hello    world'));
        $this->assertEquals('blogger', $blog->slugify('blogger '));
        $this->assertEquals('blogger', $blog->slugify(' blogger'));
    }
}