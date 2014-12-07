<?php

class Champion_Johnny_Model_Renderer extends Aoe_TemplateHints_Model_Renderer_Abstract
{
    /**
     * Set up renderer
     *
     * This includes CSS and JS files into the page
     *
     * @param string $content
     * @return string
     */
    public function init($content)
    {
        $content .= '<link rel="stylesheet" type="text/css" href="' . Mage::getDesign()->getSkinUrl('aoe_templatehints/css/aoe_templatehints.css') . '" />';
        $content .= '<link rel="stylesheet" type="text/css" href="' . Mage::getDesign()->getSkinUrl('champion/johnny/css/hints.css') . '" />';
        $content .= '<script src="' . Mage::getDesign()->getSkinUrl('champion/johnny/js/hints.js') . '"></script>';

        return $content;
    }

    public function render(Mage_Core_Block_Abstract $block, $blockContent, $id)
    {
        /* @var $helper Aoe_TemplateHints_Helper_BlockInfo */
        $helper = Mage::helper('aoe_templatehints/blockInfo');

        $path = $helper->getBlockPath($block);
        $blockInfo = $helper->getBlockInfo($block);

        $wrappedHtml = sprintf(
            '<div id="tpl-hint-%1$s" class="tpl-hint tpl-hint-border %2$s">
                <div class="template-hint-header">
                    %3$s
                </div>
                %4$s
            </div>',
            $id,
            $blockInfo['cache-status'],
            $this->getBlockTitle($block) . $this->getBlockBox($block),
            $blockContent
        );

        return $wrappedHtml;
    }

    /**
     * Render the block title
     *
     * Includes the remote call link if enabled
     *
     * @param Mage_Core_Block_Abstract $block
     * @return string
     */
    public function getBlockTitle(Mage_Core_Block_Abstract $block)
    {
        /* @var $helper Aoe_TemplateHints_Helper_BlockInfo */
        $helper = Mage::helper('aoe_templatehints/blockInfo');
        $html = '';
        $tag = 'span';
        $templateFile = $block->getTemplateFile();

        if ($helper->getRemoteCallEnabled()) {
            $url = '';

            if ($templateFile) {
                $url = sprintf($helper->getRemoteCallUrlTemplate(), Mage::getBaseDir('design') . DS . $templateFile, 0);
            } else {
                $fileAndLine = Mage::helper('aoe_templatehints/classInfo')->findFileAndLine(get_class($block));
                if ($fileAndLine) {
                    $url = sprintf($helper->getRemoteCallUrlTemplate(), $fileAndLine['file'], $fileAndLine['line']);
                }
            }

            if ($url) {
                $html .= '<a href="' . $url . '" class="block-name">';
                $tag = 'a';
            }
        }

        if ($html == '') {
            $html = '<span class="block-name">';
            $tag = 'span';
        }

        if ($templateFile) {
            $html .= $templateFile;
        } else {
            $html .= get_class($block);
        }

        $html .= '</' . $tag . '>';

        return $html;
    }

    /**
     * Render block info box
     *
     * @todo fill this out, similar to the opentip one
     *
     * @param Mage_Core_Block_Abstract $block
     * @return string
     */
    public function getBlockBox(Mage_Core_Block_Abstract $block)
    {
        return '';
    }
}