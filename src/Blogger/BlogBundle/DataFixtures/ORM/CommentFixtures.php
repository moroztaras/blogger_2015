<?php

namespace Blogger\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blogger\BlogBundle\Entity\Comment;
use Blogger\BlogBundle\Entity\Blog;

class CommentFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('To make a long story short. You can\'t go wrong by choosing Symfony! And no one has ever been fired for using Symfony.');
        $comment->setBlog($manager->merge($this->getReference('blog-1')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('To make a long story short. Choosing a framework must not be taken lightly; it is a long-term commitment.
        Make sure that you make the right selection!');
        $comment->setBlog($manager->merge($this->getReference('blog-1')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('Anything else, mom? You want me to mow the lawn? Oops! I forgot, New York, No grass.');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('Are you challenging me? ');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime());
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('Name your stakes.');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime());
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('If I win, you become my slave.');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime());
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('Your SLAVE?');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime());
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('You wish! You\'ll do shitwork, scan, crack copyrights...');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime());
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('And if I win?');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime());
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('Make it my first-born!');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime());
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('Make it our first-date!');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime());
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('I don\'t DO dates. But I don\'t lose either, so you\'re on!');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime());
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('It\'s not gonna end like this.');
        $comment->setBlog($manager->merge($this->getReference('blog-3')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('Oh, come on, Stan. Not everything ends the way you think it should. Besides, audiences love happy endings.');
        $comment->setBlog($manager->merge($this->getReference('blog-3')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('Doesn\'t Bill Gates have something like that?');
        $comment->setBlog($manager->merge($this->getReference('blog-5')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Moroz Taras');
        $comment->setComment('Bill Who?');
        $comment->setBlog($manager->merge($this->getReference('blog-5')));
        $manager->persist($comment);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}