<?php
class Default_action_ToolbarItems_ToolbarItem_542fed193d62e936 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => '@typo3/workspaces/toolbar/workspaces-menu.js',
];

$array4 = [
'Workspaces.workspaceTitle' => $renderingContext->getVariableProvider()->getByPath('workspaceTitle'),
];

$arguments1 = [
'pageTitle' => '',
'includeCssFiles' => NULL,
'includeJsFiles' => NULL,
'includeRequireJsModules' => NULL,
'addInlineSettings' => NULL,
'includeJavaScriptModules' => $array3,
'addJsInlineLabels' => $array4,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'overlay' => NULL,
'state' => 'default',
'title' => NULL,
'identifier' => 'apps-toolbar-menu-workspace',
'size' => 'small',
'alternativeMarkupIdentifier' => 'inline',
];

$array7 = [
'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:toolbarItems.workspace',
'icon' => TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext),
'name' => $renderingContext->getVariableProvider()->getByPath('workspaceTitle'),
];

$arguments5 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'ToolbarItems/ToolbarItem',
'arguments' => $array7,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '

';

    return $output0;
}

}

#