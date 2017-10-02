<?php

namespace AppBundle\Entity;


use AppBundle\Entity\Traits\DateTrait;
use AppBundle\Entity\Traits\FileTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="page")
 * @ORM\Entity()
 */
class Page extends EntitySuperclass
{
    use FileTrait,
        DateTrait;

    /**
     * @var string $url
     * @ORM\Column()
     */
    private $url;

    /**
     * @var string
     * @ORM\Column()
     */
    private $seoTitle;

    /**
     * @var string
     * @ORM\Column()
     */
    private $seoKeywords;

    /**
     * @var string
     * @ORM\Column()
     */
    private $seoDescription;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $inNavbar = 0;

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Page
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeoTitle()
    {
        return $this->seoTitle;
    }

    /**
     * @param string $seoTitle
     * @return Page
     */
    public function setSeoTitle(string $seoTitle)
    {
        $this->seoTitle = $seoTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeoKeywords()
    {
        return $this->seoKeywords;
    }

    /**
     * @param string $seoKeywords
     * @return Page
     */
    public function setSeoKeywords(string $seoKeywords)
    {
        $this->seoKeywords = $seoKeywords;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeoDescription()
    {
        return $this->seoDescription;
    }

    /**
     * @param string $seoDescription
     * @return Page
     */
    public function setSeoDecription(string $seoDescription)
    {
        $this->seoDescription = $seoDescription;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInNavbar()
    {
        return $this->inNavbar;
    }

    /**
     * @param bool $inNavbar
     */
    public function setInNavbar(bool $inNavbar)
    {
        $this->inNavbar = $inNavbar;
    }


}