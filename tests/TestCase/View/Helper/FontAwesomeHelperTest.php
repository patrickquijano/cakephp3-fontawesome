<?php

namespace FontAwesome\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use FontAwesome\View\Helper\FontAwesomeHelper;

class FontAwesomeHelperTest extends TestCase {

    /**
     * @var \FontAwesome\View\Helper\FontAwesomeHelper
     */
    public $FontAwesome;

    /**
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $view = new View();
        $this->FontAwesome = new FontAwesomeHelper($view);
    }

    /**
     * @return void
     */
    public function tearDown() {
        unset($this->FontAwesome);
        parent::tearDown();
    }

    /**
     * @return void
     */
    public function testInitialization() {
        $this->markTestIncomplete('Not implemented yet.');
    }

}
