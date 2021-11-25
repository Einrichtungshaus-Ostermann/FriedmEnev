<?php

class Shopware_Controllers_Backend_FriedmEnev extends Shopware_Controllers_Backend_Article
{
    private $config = null;

    /**
     * enable script renderer and json request plugin
     *
     * @return void
     * @throws RuntimeException
     */
    public function init()
    {
        $this->config = Shopware()->Plugins()->Frontend()->FriedmEnev()->Config();
        parent::init();
    }

    /**
     * Pre dispatch method
     */
    public function indexAction()
    {
        $this->returnData($this->config->klasse);
    }

    /**
     * execute helper methode to return config klasse
     *
     * @return void
     */
    public function klasseAction()
    {
        $this->returnData($this->config->klasse);
    }

    /**
     * execute helper methode to return config colors
     *
     * @return void
     */
    public function colorAction()
    {
        $this->returnData($this->config->color);
    }

    /**
     * helper methode to return config values for extjs combobox
     *
     * @param string $value
     *
     * @return void
     */
    public function returnData($value)
    {
        $arr = explode(';', $value);
        $data = [];
        foreach ($arr as $v) {
            $data[] = ['value' => $v, 'name' => $v];
        }
        $this->View()->assign(['success' => true, 'data' => $data]);
    }
}
