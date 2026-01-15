<?php
class partial_Header_Header_3562db84afbfeec1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('header'),
];

$expression3 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
$output37 = '';

$output37 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
$output40 = '';

$output40 .= '
            <h1 class="';

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output40 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments41 = [
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
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
            </h1>
        ';
return $output40;
};

$arguments38 = [
'value' => 1,
];

$output37 .= '';

$output37 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
$output45 = '';

$output45 .= '
            <h2 class="';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output45 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments46 = [
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
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
            </h2>
        ';
return $output45;
};

$arguments43 = [
'value' => 2,
];

$output37 .= '';

$output37 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
$output50 = '';

$output50 .= '
            <h3 class="';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output50 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments51 = [
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
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
            </h3>
        ';
return $output50;
};

$arguments48 = [
'value' => 3,
];

$output37 .= '';

$output37 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
$output55 = '';

$output55 .= '
            <h4 class="';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output55 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments56 = [
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
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
            </h4>
        ';
return $output55;
};

$arguments53 = [
'value' => 4,
];

$output37 .= '';

$output37 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
$output60 = '';

$output60 .= '
            <h5 class="';

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output60 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments61 = [
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
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
            </h5>
        ';
return $output60;
};

$arguments58 = [
'value' => 5,
];

$output37 .= '';

$output37 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
$output65 = '';

$output65 .= '
            <h6 class="';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output65 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments66 = [
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
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
            </h6>
        ';
return $output65;
};

$arguments63 = [
'value' => 6,
];

$output37 .= '';

$output37 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
$output70 = '';

$output70 .= '
            ';

$output70 .= '';

$output70 .= '
        ';
return $output70;
};

$arguments68 = [
'value' => 100,
];

$output37 .= '';

$output37 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
$output73 = '';

$output73 .= '<h1 class="';

$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output73 .= ' bg">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments74 = [
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
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '</h1>
        ';
return $output73;
};

$arguments71 = [
'value' => 200,
];

$output37 .= '';

$output37 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
$output78 = '';

$output78 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array80 = [
'0' => $renderingContext->getVariableProvider()->getByPath('default'),
];

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments79 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression81(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output82 = '';

$output82 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
return NULL;
};

$array85 = [
'header' => $renderingContext->getVariableProvider()->getByPath('header'),
'layout' => $renderingContext->getVariableProvider()->getByPath('default'),
'positionClass' => $renderingContext->getVariableProvider()->getByPath('positionClass'),
'link' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$arguments83 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Header/Header',
'arguments' => $array85,
];

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
            ';
return $output82;
},
];

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, static fn() => '', $renderingContext)
;

$output78 .= '
        ';
return $output78;
};

$arguments76 = [
];

$output37 .= '';

$output37 .= '
    ';
return $output37;
};

$arguments5 = [
'expression' => $renderingContext->getVariableProvider()->getByPath('layout'),
];

$output4 .= call_user_func_array(function($arguments) use ($renderingContext) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext) {

return 1;
}): return call_user_func(function() use ($renderingContext) {
$output7 = '';

$output7 .= '
            <h1 class="';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output7 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments8 = [
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
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
            </h1>
        ';
return $output7;
});
case call_user_func(function() use ($renderingContext) {

return 2;
}): return call_user_func(function() use ($renderingContext) {
$output10 = '';

$output10 .= '
            <h2 class="';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output10 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments11 = [
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
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
            </h2>
        ';
return $output10;
});
case call_user_func(function() use ($renderingContext) {

return 3;
}): return call_user_func(function() use ($renderingContext) {
$output13 = '';

$output13 .= '
            <h3 class="';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output13 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments14 = [
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
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
            </h3>
        ';
return $output13;
});
case call_user_func(function() use ($renderingContext) {

return 4;
}): return call_user_func(function() use ($renderingContext) {
$output16 = '';

$output16 .= '
            <h4 class="';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output16 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments17 = [
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
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
            </h4>
        ';
return $output16;
});
case call_user_func(function() use ($renderingContext) {

return 5;
}): return call_user_func(function() use ($renderingContext) {
$output19 = '';

$output19 .= '
            <h5 class="';

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output19 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments20 = [
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
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
            </h5>
        ';
return $output19;
});
case call_user_func(function() use ($renderingContext) {

return 6;
}): return call_user_func(function() use ($renderingContext) {
$output22 = '';

$output22 .= '
            <h6 class="';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output22 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments23 = [
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
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
            </h6>
        ';
return $output22;
});
case call_user_func(function() use ($renderingContext) {

return 100;
}): return call_user_func(function() use ($renderingContext) {
$output25 = '';

$output25 .= '
            ';

$output25 .= '';

$output25 .= '
        ';
return $output25;
});
case call_user_func(function() use ($renderingContext) {

return 200;
}): return call_user_func(function() use ($renderingContext) {
$output26 = '';

$output26 .= '<h1 class="';

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output26 .= ' bg">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header')]);
};

$arguments27 = [
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
'parameter' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '</h1>
        ';
return $output26;
});
default: return call_user_func(function() use ($renderingContext) {
$output29 = '';

$output29 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array31 = [
'0' => $renderingContext->getVariableProvider()->getByPath('default'),
];

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments30 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression32(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output33 = '';

$output33 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$array36 = [
'header' => $renderingContext->getVariableProvider()->getByPath('header'),
'layout' => $renderingContext->getVariableProvider()->getByPath('default'),
'positionClass' => $renderingContext->getVariableProvider()->getByPath('positionClass'),
'link' => $renderingContext->getVariableProvider()->getByPath('link'),
];

$arguments34 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Header/Header',
'arguments' => $array36,
];

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
            ';
return $output33;
},
];

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, static fn() => '', $renderingContext)
;

$output29 .= '
        ';
return $output29;
});
}
}, array($arguments5));

$output4 .= '
';
return $output4;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}

}

#