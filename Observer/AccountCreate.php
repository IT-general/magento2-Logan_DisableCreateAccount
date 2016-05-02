<?php

/**
 * Namespace
 */
namespace Logan\DisableCreateAccount\Observer;

/**
 * Dependencies
 */
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

/**
 * Observer Class
 */
class AccountCreate implements ObserverInterface {

    protected $_url;
    protected $_http;

    /**
     * Constructor
     */
    public function __construct(
        \Magento\Framework\UrlInterface $url,
        \Magento\Framework\App\Response\Http $http
    ) {
        $this->_url = $url;
        $this->_http = $http;
    }

    /**
     * Manages redirect
     */
    public function execute(Observer $observer) {
        $this->_http->setRedirect( $this->_url->getBaseUrl(), 301 );
    }
}
