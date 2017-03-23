<?php

namespace ZielinskiLukasz\QuizBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Basic quiz object
 */
abstract class Quiz implements QuizInterface
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var bool
     */
    protected $enabled;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->enabled = false;
    }

    /**
     * {@inheritdoc}
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->title,
            $this->enabled
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($serialized)
    {
        $data = unserialize($serialized);
        $data = array_values($data);

        list(
            $this->id,
            $this->title,
            $this->enabled
        ) = $data;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle() : string 
    {
        return $this->title;
    }

    /**
     * {@inheritdoc}
     */
    public function setEnabled($boolean)
    {
        $this->enabled = (bool) $boolean;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setDisabled($boolean)
    {
        $this->enabled = (bool) !$boolean;

        return $this;
    }    

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getTitle();
    }

    /**
     * Sets the quiz title.
     *
     * @param string $quizname
     *
     * @return self
     */
    public function setTitle(string $title)
    {
    	$this->title = $title;

    	return $this;
    }

}
