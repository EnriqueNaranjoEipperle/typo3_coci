<?php
class Default_action_ToolbarItems_DropDown_8b919b3ecd6d4052 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
 * section workspaceItem
 */
public function section_b585d5d7915980a0(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
    <li class="t3js-workspace-item">
        <a href="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link')]);

$output0 .= '" data-workspaceid="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.workspaceId')]);

$output0 .= '" class="dropdown-item t3js-workspaces-switchlink ';
// Rendering TernaryExpression node
$array1 = array (
  0 => '{item.isActive ? \'active\' : \'\'}',
  1 => '{item.isActive ? \'active\' : \'\'}',
);
$ternaryExpression2 = function($context, $renderingContext) {
    $check = 'item.isActive';
    $parser = new \TYPO3Fluid\Fluid\Core\Parser\BooleanParser();
    $checkResult = $parser->evaluate($check, $context);
    if ($checkResult) {
        return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\TernaryExpressionNode::getTemplateVariableOrValueItself('\'active\'', $renderingContext);
    }
    return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\TernaryExpressionNode::getTemplateVariableOrValueItself('\'\'', $renderingContext);
};

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$ternaryExpression2(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\TernaryExpressionNode::gatherContext($renderingContext, $array1[1]), $renderingContext)]);

$output0 .= '">
            <span class="dropdown-item-columns">
                <span class="dropdown-item-column dropdown-item-column-title">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('item.label');
};

$arguments3 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value5 = ($arguments3['value'] !== null ? $arguments3['value'] : $renderChildrenClosure4());

$output0 .= !is_string($value5) && !(is_object($value5) && method_exists($value5, '__toString')) ? $value5 : htmlspecialchars($value5, ($arguments3['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments3['encoding'], $arguments3['doubleEncode']);

$output0 .= '
                </span>
            </span>
        </a>
    </li>
';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output6 = '';

$output6 .= '

<p class="h3 dropdown-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:toolbarItems.workspace',
];

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '</p>
<ul class="dropdown-list">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array10 = [
'0' => $renderingContext->getVariableProvider()->getByPath('topItem'),
];

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments9 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression11(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output12 = '';

$output12 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$array15 = [
'item' => $renderingContext->getVariableProvider()->getByPath('topItem'),
];

$arguments13 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'workspaceItem',
'arguments' => $array15,
];

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
        ';
return $output12;
},
'__else' => function() use ($renderingContext) {
$output16 = '';

$output16 .= '
            <li>
                ';

$output16 .= '';

$output16 .= '
                <p class="dropdown-item-text">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$arguments17 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:bookmark_noWSfound',
];

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= '
                </p>
            </li>
        ';
return $output16;
},
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, static fn() => '', $renderingContext)
;

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array20 = [
'0' => $renderingContext->getVariableProvider()->getByPath('additionalItems'),
];

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments19 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression21(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output22 = '';

$output22 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
$output25 = '';

$output25 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$array28 = [
'item' => $renderingContext->getVariableProvider()->getByPath('item'),
];

$arguments26 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'workspaceItem',
'arguments' => $array28,
];

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
        ';
return $output25;
};

$arguments23 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('additionalItems'),
'as' => 'item',
];

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
    ';
return $output22;
},
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, static fn() => '', $renderingContext)
;

$output6 .= '
</ul>


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array30 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showLinkToModule'),
];

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments29 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression31(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output32 = '';

$output32 .= '
    <hr class="dropdown-divider" aria-hidden="true">
    <a href="#" target="list_frame" data-module="workspaces_admin" class="dropdown-item t3js-workspaces-modulelink">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};

$arguments33 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:bookmark_workspace',
];

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output32 .= '
    </a>
';
return $output32;
},
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, static fn() => '', $renderingContext)
;

$output6 .= '

';

$output6 .= '';

$output6 .= '


';

    return $output6;
}

}

#