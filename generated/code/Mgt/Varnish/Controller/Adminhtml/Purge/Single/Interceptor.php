<?php
namespace Mgt\Varnish\Controller\Adminhtml\Purge\Single;

/**
 * Interceptor class for @see \Mgt\Varnish\Controller\Adminhtml\Purge\Single
 */
class Interceptor extends \Mgt\Varnish\Controller\Adminhtml\Purge\Single implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($context);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
