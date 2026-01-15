<?php
class partial_Footer_c9f47ee64112d20a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '<div class="impressum1" id="impressum">
    <div class="impressum">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= ' 
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
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

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
       ';
return $output3;
};

$arguments1 = [
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

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

 <a>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'data' => NULL,
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.copyright',
];
$renderChildrenClosure7 = ($arguments6['data'] !== null) ? function() use ($arguments6) { return $arguments6['data']; } : $renderChildrenClosure7;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
 </a>
        


        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
$output10 = '';

$output10 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
$output13 = '';

$output13 .= '
                ';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title')]);

$output13 .= '
            ';
return $output13;
};

$arguments11 = [
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('item.data.uid'),
'title' => $renderingContext->getVariableProvider()->getByPath('item.title'),
'target' => $renderingContext->getVariableProvider()->getByPath('item.target'),
'class' => 'f:if(condition.current, then: \'metanav-currrent\')',
];

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
        ';
return $output10;
};

$arguments8 = [
'key' => NULL,
'reverse' => false,
'each' => $renderingContext->getVariableProvider()->getByPath('metaNav'),
'as' => 'item',
'iteration' => 'i',
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
    </div>

    <div class="impressumend">
        Created my free logo at <a href="https://logomakr.com/" target="_blank">LogoMakr.com</a>
        The icons are provided by <a href="https://fontawesome.com/" rel="nofollow" target="_blank">FontAwesome</a>
        unter the <a href="https://fontawesome.com/license" target="_blank" rel="nofollow">
            Creative Commons Attribution 4.0 International license
        </a>.
    </div>
</div>


';

    return $output0;
}

}

#