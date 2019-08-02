<?php


class Lion extends Felin
{

    public function move()
    {
        // %s pour string. Ici %s prendra valeur de 'Simba' et second %s prend valeur de 'Chat'
        printf(
            'Je suis %s et je me déplace comme un %s',
            $this->getName(),
            get_class($this)
        );
    }
}