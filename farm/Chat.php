<?php


class Chat extends Felin
{
    /**
     * @inheritDoc
     */
    public function move()
    {
        // %s pour string
        printf(
            'Je suis %s et je me déplace comme un %s',
            $this->getName(),
            get_class($this)
        );
    }

}