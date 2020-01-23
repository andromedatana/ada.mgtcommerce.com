<?php
namespace Mgt\DeveloperToolbar\Controller\Adminhtml\Menu\Container;

/**
 * Interceptor class for @see \Mgt\DeveloperToolbar\Controller\Adminhtml\Menu\Container
 */
class Interceptor extends \Mgt\DeveloperToolbar\Controller\Adminhtml\Menu\Container implements \Magento\Framework\Interception\InterceptorInterface
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
