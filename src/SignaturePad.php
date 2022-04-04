<?php

    class SignaturePad extends InputWidget
    {

    public function init()
    {
        parent::init();
        $this->registerAssets();
    }

    protected function registerAssets()
    { 
        $view = $this->getView();
        SignaturePadAsset::register($view);
        $this->registerPlugin($this->pluginName);        
    }
}