<?php
class partial_MainMenu_4d9d6a2ae2e07e36 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '
        <div class="menu">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'1' => ' != ',
'2' => $renderingContext->getVariableProvider()->getByPath('settings.searchTargetPid'),
];

$expression3 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression3(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output4 = '';

$output4 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'data' => NULL,
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.searchField',
];
$renderChildrenClosure6 = ($arguments5['data'] !== null) ? function() use ($arguments5) { return $arguments5['data']; } : $renderChildrenClosure6;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
            ';
return $output4;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
$output9 = '';

$output9 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array11 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.children'),
];

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments10 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output13 = '';

$output13 .= '
                        <div class="dropdown">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
$output17 = '';

$output17 .= '
                                ';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title')]);

$output17 .= '
                            ';
return $output17;
};

$array16 = [
'aria-expanded' => 'false',
];

$arguments14 = [
'language' => NULL,
'additionalParams' => '',
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('item.data.uid'),
'target' => $renderingContext->getVariableProvider()->getByPath('item.target'),
'title' => $renderingContext->getVariableProvider()->getByPath('item.title'),
'class' => 'menu-link dropdown-toggle',
'additionalAttributes' => $array16,
];

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '

                            <div class="dropdown-menu">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
$output20 = '';

$output20 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
$output23 = '';

$output23 .= '
                                        ';

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);

$output23 .= '
                                    ';
return $output23;
};

$arguments21 = [
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('child.data.uid'),
'target' => $renderingContext->getVariableProvider()->getByPath('child.target'),
'title' => $renderingContext->getVariableProvider()->getByPath('child.title'),
'class' => 'dropdown-item',
];

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
                                ';
return $output20;
};

$arguments18 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('item.children'),
'as' => 'child',
];

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output13 .= '
                            </div>
                        </div>
                    ';
return $output13;
},
'__else' => function() use ($renderingContext) {
$output24 = '';

$output24 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
$output31 = '';

$output31 .= '
                            ';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title')]);

$output31 .= '
                        ';
return $output31;
};
$output27 = '';

$output27 .= 'menu-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array29 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.current'),
];

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments28 = [
'then' => ' nav-current',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression30(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)),
    $renderingContext
),
];

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, static fn() => '', $renderingContext)
;

$arguments25 = [
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('item.data.uid'),
'target' => $renderingContext->getVariableProvider()->getByPath('item.target'),
'title' => $renderingContext->getVariableProvider()->getByPath('item.title'),
'class' => $output27,
];

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
                    ';
return $output24;
},
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, static fn() => '', $renderingContext)
;

$output9 .= '
            ';
return $output9;
};

$arguments7 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('mainMenu'),
'as' => 'item',
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
             ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'LanguageMenu',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output0 .= '
        </div>

';

    return $output0;
}

}

#