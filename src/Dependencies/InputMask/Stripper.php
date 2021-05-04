<?php

namespace Ipulmisaja\Macoa\Dependencies\InputMask;

class Stripper
{
    public $text;
    public $options;
    public $defaults = ['alpha', 'num', 'comma', 'dot', 'space', 'dash', 'colon'];

    /**
     * @param string     $text    - the subject of our stripping
     * @param array|null $options - the selection you'd like to to regex
     */
    public function __construct($text, $options = null)
    {
        if (!is_string($text)) {
            throw new \InvalidArgumentException('Stripper expects a string');
        }
        if (is_null($options)) {
            $options = ['alpha', 'num', 'comma', 'dot', 'space', 'dash'];
        } elseif (!is_array($options)) {
            throw new \InvalidArgumentException('Stripper Options must be an array or NULL');
        }

        //check that stripper has atleast one option in the array
        if (!(
            in_array('alpha', $options) ||
            in_array('num', $options) ||
            in_array('comma', $options) ||
            in_array('dot', $options) ||
            in_array('space', $options) ||
            in_array('dash', $options) ||
            in_array('colon', $options)
        )) {
            throw new \InvalidArgumentException('strip function requires atleast one option');
        }

        $this->text = $text;
        $this->options = $options;
    }

    public function strip()
    {
        return preg_replace($this->getRegExString(), '', $this->text);
    }

    private function getRegExString()
    {
        return '/[^'
            .(in_array('alpha', $this->options) ? 'a-zA-Z' : '')
            .(in_array('num', $this->options) ? '0-9' : '')
            .(in_array('comma', $this->options) ? ',' : '')
            .(in_array('dot', $this->options) ? "\." : '')
            .(in_array('dash', $this->options) ? "\-" : '')
            .(in_array('space', $this->options) ? ' ' : '')
            .(in_array('colon', $this->options) ? ':' : '')
            .']/';
    }
}