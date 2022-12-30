<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UIForm
{
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

    public function converting_type($type)
    {
        switch (strtolower($type)) {
            case 'int':
                return 'number';
            case 'rpsdate':
                return 'date';
            case 'rpsemail':
                return 'email';
            case 'rpspassword':
                return 'password';
            default:
                return 'string';
        }
    }

    public function getValue(ReflectionProperty $val)
    {
        if (!$val->isInitialized($this->class)) return null;
        $v = $val->getValue($this->class);
        if ($v instanceof RpsDate || $v instanceof RpsEmail || $v instanceof RpsPassword) return $v->value;
        return $v;
    }

    public function build(CI_Loader $load)
    {
        foreach ($this->reflect->getProperties() as $k => $v) {
            $name = $v->getName();
            $shouldRender = true;

            foreach ($this->blacklists as $key => $val) {
                if ($name === $val) {
                    $shouldRender = false;
                    break;
                }
            }

            if ($shouldRender) {
                $type = $v->getType()->getName();
                $title = ucfirst(str_replace('_', ' ', $name));
                $value = $this->getValue($v);
                $type = $this->converting_type($type);

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
