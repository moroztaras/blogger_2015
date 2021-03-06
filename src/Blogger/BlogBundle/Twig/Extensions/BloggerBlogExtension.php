<?php

namespace Blogger\BlogBundle\Twig\Extensions;

class BloggerBlogExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'created_ago' => new \Twig_Filter_Method($this, 'createdAgo'),
        );
    }

    public function createdAgo(\DateTime $dateTime)
    {
        $delta = time() - $dateTime->getTimestamp();
        if ($delta < 0)
            throw new \InvalidArgumentException("createdAgo is unable to handle dates in the future");

        $duration = "";
        if ($delta < 60)
        {
            // Seconds
            $time = $delta;
            $duration = $time . " секунд". (($time > 1) ? "и" : "а") . " тому";
        }
        else if ($delta < 3600)
        {
            // Mins
            $time = floor($delta / 60);
            $duration = $time . " хвилин" . (($time > 1) ? "и" : "а") . " тому";
        }
        else if ($delta < 86400)
        {
            // Hours
            $time = floor($delta / 3600);
            $duration = $time . " годин" . (($time > 1) ? "и" : "а") . " тому";
        }
        else
        {
            // Days
            $time = floor($delta / 86400);
            $duration = $time . " д" . (($time > 1) ? "нів" : "ень") . " тому";
        }

        return $duration;
    }

    public function getName()
    {
        return 'blogger_blog_extension';
    }
}