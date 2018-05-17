<?php namespace BookStack\Exceptions;

class NotifyException extends \Exception
{

    public $message;
    public $redirectLocation;

    /**
     * NotifyException constructor.
     * @param string $message
     * @param string    $redirectLocation
     */
    public function __construct($message, $redirectLocation)
    {
        $this->message = $message;
        $this->redirectLocation = $redirectLocation;
        parent::__construct();
    }
}
