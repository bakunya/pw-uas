<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UIForm {
    private $class;
    private ReflectionClass $reflect;
    private array $blacklists;

    public function set_class($class)
    {
        $this->class = $class;
        $this->reflect = new ReflectionClass($class);
        $this->blacklists = $this->reflect->getDefaultProperties()['blacklists'] ?? null;
        return $this;
    }

    public function build($load)
    {
        foreach ($this->reflect->getProperties() as $k => $v) {
            $name = $v->getName();
            $shouldRender = true;
            
            foreach ($this->blacklists as $key => $val) {
                if($name === $val) {
                    $shouldRender = false;
                    break;
                }
            }

            if($shouldRender) {
                $type = $v->getType()->getName();
                $title = ucfirst(str_replace('_', ' ', $name));
                $value = $v->isInitialized($this->class) ? $v->getValue($this->class) : null;
                
                switch(strtolower($type)) {
                    case 'int':
                        $type = 'number';
                        break;
                    default:
                        $type = 'string';
                        break;
                }

                $load->view('_partials/input', [
                    'name' => $name,
                    'title' => $title,
                    'type' => $type,
                    'value' => $value,
                ]);
            }

        }
    }
}