<?php

namespace FontAwesome\View\Helper;

use Cake\Core\Configure;
use Cake\Utility\Hash;
use Cake\View\Helper;
use Cake\View\Helper\HtmlHelper;

/**
 * Fontawesome Helper
 *
 * @property HtmlHelper $Html
 */
class FontAwesomeHelper extends Helper {

    /**
     * Default configuration
     *
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
     * Helpers
     *
     * @var array
     */
    public $helpers = ['Html'];

    /**
     * Creates a link element for Fontawesome CSS stylesheet.
     *
     * ### Usage
     *
     * Add the stylesheet to view block "css":
     *
     * ```
     * $this->Html->css(['block' => true]);
     * ```
     *
     * Add the stylesheet to a custom block:
     *
     * ```
     * $this->Html->css(['block' => 'layoutCss']);
     * ```
     *
     * ### Options
     *
     * - `block` Set to true to append output to view block "css" or provide
     *   custom block name.
     * - `plugin` False value will prevent parsing path as a plugin
     * - `rel` Defaults to 'stylesheet'. If equal to 'import' the stylesheet will be imported.
     * - `fullBase` If true the URL will get a full address for the css file.
     *
     * @param array $options Array of options and HTML arguments.
     * @return string|null CSS `<link />` or `<style />` tag, depending on the type of link.
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
     * Returns Fontawesome `<script>` tag.
     *
     * ### Usage
     *
     * Add the script file to a custom block:
     *
     * ```
     * $this->Html->script('styles.js', ['block' => 'bodyScript']);
     * ```
     *
     * ### Options
     *
     * - `block` Set to true to append output to view block "script" or provide
     *   custom block name.
     * - `plugin` False value will prevent parsing path as a plugin
     * - `fullBase` If true the url will get a full address for the script file.
     *
     * @param string|string[] $url String or array of javascript files to include
     * @param array $options Array of options, and html attributes see above.
     * @return string|null String of `<script />` tags or null if block is specified in options
     *   or if $once is true and the file has been included before.
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

    /**
     * Returns a formatted block tag <i>.
     *
     * ### Options
     *
     * - `escape` Whether or not the contents should be html_entity escaped.
     *
     * @param string|null $text String content that will appear inside the tag element.
     *   If null, only a start tag will be printed
     * @param array $options Additional HTML attributes of the <i> tag, see above.
     * @return string The formatted tag <i> element
     */
    public function i($class, array $options = []) {
        if (isset($options['class'])) {
            $class .= ' ' . $options['class'];
        }
        $options = Hash::merge($options, ['class' => $class]);
        return $this->Html->tag('i', '', $options);
    }

}
