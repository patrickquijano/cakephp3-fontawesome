<?php

namespace FontAwesome\View\Helper;

use Cake\Core\Configure;
use Cake\View\Helper;

/**
 * @property \Cake\View\Helper\HtmlHelper $Html
 */
class FontAwesomeHelper extends Helper {

    /**
     * @var array
     */
    protected $_defaultConfig = [
        'css' => [
            'url' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css',
            'integrity' => 'sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=',
        ],
        'script' => [
            'url' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js',
            'integrity' => 'sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=',
        ],
    ];

    /**
     * @var array
     */
    public $helpers = ['Html'];

    /**
     * @param array $options
     * @return string|null
     */
    public function css(array $options = []) {
        if (!isset($options['block'])) {
            $options['block'] = false;
        }
        $options['once'] = true;
        if (Configure::read('debug')) {
            return $this->Html->css('FontAwesome.all.min', $options);
        } else {
            $options['integrity'] = $this->getConfig('css.integrity');
            $options['crossorigin'] = 'anonymous';
            return $this->Html->css($this->getConfig('css.url'), $options);
        }
    }

    /**
     * @param array $options
     * @return string|null
     */
    public function script(array $options = []) {
        if (!isset($options['block'])) {
            $options['block'] = false;
        }
        $options['once'] = true;
        if (Configure::read('debug')) {
            return $this->Html->script('FontAwesome.all.min', $options);
        } else {
            $options['integrity'] = $this->getConfig('script.integrity');
            $options['crossorigin'] = 'anonymous';
            return $this->Html->script($this->getConfig('script.url'), $options);
        }
    }

}
