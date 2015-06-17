<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\PageBundle\Block;

use Sonata\BlockBundle\Block\Service\ContainerBlockService as BaseContainerBlockService;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Render children pages.
 *
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
class ContainerBlockService extends BaseContainerBlockService
{
    /**
     * {@inheritdoc}
     */
    public function setDefaultSettings(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'code'        => '',
            'layout'      => '{{ CONTENT }}',
            'class'       => '',
            'template'    => 'SonataPageBundle:Block:block_container.html.twig',
        ));
    }
}
