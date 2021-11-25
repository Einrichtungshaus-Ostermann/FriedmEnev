<?php

namespace Shopware\CustomModels\FriedmEnev;

use Shopware\Components\Model\ModelEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Repository")
 * @ORM\Table(name="s_plugin_FriedmEnev")
 */
class Attribute extends ModelEntity
{

    /**
     * @var integer $id
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer $active
     * @ORM\Column(name="active", type="boolean", nullable=false, length=1)
     */
    private $active = 0;

    /**
     * @var integer $articleId
     * @ORM\Column(name="articleID", type="integer", nullable=false)
     */
    private $articleId;

    /**
     * @var float ean
     * @ORM\Column(name="ean", type="string", nullable=true)
     */
    private $ean = null;

    /**
     * @var string $klasse
     * @ORM\Column(name="klasse", type="string", nullable=false, length=10)
     */
    private $klasse;

    /**
     * @var string $color
     * @ORM\Column(name="color", type="string", nullable=false, length=6)
     */
    private $color;

    /**
     * @var string $download
     * @ORM\Column(name="download", type="string", nullable=true, length=255)
     */
    private $download = null;

    /**
     * @var string $image
     * @ORM\Column(name="image", type="string", nullable=true, length=255)
     */
    private $image = null;

    /**
     * @var string $spectrum
     * @ORM\Column(name="spectrum", type="string", nullable=true, length=10)
     */
    private $spectrum = null;

    /**
     * @var string $spectrum_from
     * @ORM\Column(name="spectrum_from", type="string", nullable=true, length=10)
     */
    private $spectrumFrom = null;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get active
     *
     * @return integer
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set active
     *
     * @param integer $value
     *
     * @return Attribute
     */
    public function setActive($value)
    {
        $this->active = $value;

        return $this;
    }

    /**
     * Get articleId
     *
     * @return integer
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * Set articleId
     *
     * @param $value
     *
     * @return Attribute
     */
    public function setArticleId($value)
    {
        $this->articleId = $value;

        return $this;
    }

    /**
     * @return float
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param float $value
     *
     * @return Attribute
     */
    public function setEan($value)
    {
        $this->ean = $value;

        return $this;
    }

    /**
     * Get klasse
     */
    public function getKlasse()
    {
        return $this->klasse;
    }

    /**
     * Set klasse
     *
     * @param $value
     *
     * @return Attribute
     */
    public function setKlasse($value)
    {
        $this->klasse = $value;

        return $this;
    }

    /**
     * Get color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set color
     *
     * @param $value
     *
     * @return Attribute
     */
    public function setColor($value)
    {
        $this->color = $value;

        return $this;
    }

    /**
     * Get download
     */
    public function getDownload()
    {
        return $this->download;
    }

    /**
     * Set download
     *
     * @param $value
     *
     * @return Attribute
     */
    public function setDownload($value)
    {
        $this->download = $value;

        return $this;
    }

    /**
     * Get image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set image
     *
     * @param $value
     *
     * @return Attribute
     */
    public function setImage($value)
    {
        $this->image = $value;

        return $this;
    }

    /**
     * Get spectrum
     */
    public function getSpectrum()
    {
        return $this->spectrum;
    }

    /**
     * Set spectrum
     *
     * @param $value
     *
     * @return Attribute
     */
    public function setSpectrum($value)
    {
        $this->spectrum = $value;

        return $this;
    }

    /**
     * Get spectrum
     */
    public function getSpectrumFrom()
    {
        return $this->spectrumFrom;
    }

    /**
     * Set spectrum
     *
     * @param $value
     *
     * @return Attribute
     */
    public function setSpectrumFrom($value)
    {
        $this->spectrumFrom = $value;

        return $this;
    }
}
