<?php
class Default_action_Default_45861bb77bf26490 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Default';
    }
    public function hasLayout() {
        return true;
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
 * section Body
 */
public function section_57105510802f2e74(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    <div class="content">

      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('content0');
};

$arguments1 = [
'value' => NULL,
];

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '



    </div>

    <div class="new">
       ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('content1');
};

$arguments3 = [
'value' => NULL,
];

$output0 .= isset($arguments3['value']) ? $arguments3['value'] : $renderChildrenClosure4();

$output0 .= '
    </div>

    <div class="tips">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('content2');
};

$arguments5 = [
'value' => NULL,
];

$output0 .= isset($arguments5['value']) ? $arguments5['value'] : $renderChildrenClosure6();

$output0 .= '


 
 

       


    </div>
  ';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output7 = '';

$output7 .= '

  ';

$output7 .= '';

$output7 .= '

  ';

$output7 .= '';

$output7 .= '

';

    return $output7;
}

}

#