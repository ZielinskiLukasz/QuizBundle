<?php

namespace ZielinskiLukasz\QuizBundle\Model;

interface QuizInterface extends \Serializable
{
    /**
     * Returns the quiz unique id/uuid
     *
     * @return mixed
     */
    public function getId();

    /**
     * Sets the quiz title.
     *
     * @param string $quizname
     *
     * @return self
     */
    public function setTitle(string $title);

    /**
     * Returns quiz title
     *
     * @return string $title
     */
    public function getTitle() : string;

    /**
     * Enables a quiz
     *
     * @return self
     */
    public function setEnabled($boolean);

    /**
     * Disables a quiz
     *
     * @return self
     */
    public function setDisabled($boolean);    
}
