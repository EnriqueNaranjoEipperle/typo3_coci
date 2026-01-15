<?php
class layout_Default_html_5e57f44bd003605d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'';
    }
    public function hasLayout() {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '

<div class="bg">
    <div class="header">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output6 = '';

$output6 .= ' 
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'ismap' => NULL,
'longdesc' => NULL,
'usemap' => NULL,
'loading' => NULL,
'decoding' => NULL,
'treatIdAsReference' => false,
'image' => NULL,
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => NULL,
'maxHeight' => NULL,
'absolute' => false,
'src' => $renderingContext->getVariableProvider()->getByPath('settings.logoFile'),
'width' => 150,
'height' => 50,
'alt' => $renderingContext->getVariableProvider()->getByPath('settings.logoAlt'),
'title' => $renderingContext->getVariableProvider()->getByPath('settings.logoTitle'),
];

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
            ';
return $output6;
};

$arguments4 = [
'target' => '',
'class' => '',
'title' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('settings.rootUid'),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
             ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'MainMenu',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output3 .= '
             
    </div>
</div>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$arguments11 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Rootline',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output3 .= '

<!--TYPOSEARCH begin-->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$array15 = [
'0' => 'true',
];

$expression16 = function($context) {return TRUE;};

$arguments13 = [
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'Body',
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression16(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)),
    $renderingContext
),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output3 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$array19 = [
'0' => 'true',
];

$expression20 = function($context) {return TRUE;};

$arguments17 = [
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'Einzelnrezept',
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression20(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)),
    $renderingContext
),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output3 .= '
<!--TYPOSEARCH end-->

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$array23 = [
'metaNav' => $renderingContext->getVariableProvider()->getByPath('metaNav'),
];

$arguments21 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Footer',
'arguments' => $array23,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output3 .= '

';
return $output3;
};

$arguments1 = [
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

    return $output0;
}

}

#