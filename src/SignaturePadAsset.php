<?php

namespace bytesize\signature_pad;

use yii\web\AssetBundle;
/**
 * Asset bundle for [[SignaturePad]]
 *
 * @author 
 * @since 1.0
 */

class SignaturePadAsset extends AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('js', ['ts/*']);
        parent::init();
    }
}