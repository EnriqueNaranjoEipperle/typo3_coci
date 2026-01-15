<?php
class partial_Form_65672a6a2fe0fb5b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
<div class="tx-indexedsearch-searchbox">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
        <div class="tx-indexedsearch-hidden-fields">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
'name' => 'search[_sections]',
'value' => 0,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'class' => NULL,
'dir' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
'name' => 'search[_freeIndexUid]',
'id' => 'tx_indexedsearchfreeIndexUid',
'value' => '',
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'class' => NULL,
'dir' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
'name' => 'search[pointer]',
'id' => 'tx_indexedsearch_pointer',
'value' => 0,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
'name' => 'search[ext]',
'value' => $renderingContext->getVariableProvider()->getByPath('searchParams.ext'),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};

$arguments12 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
'name' => 'search[searchType]',
'value' => $renderingContext->getVariableProvider()->getByPath('searchParams.searchType'),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$arguments14 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
'name' => 'search[defaultOperand]',
'value' => $renderingContext->getVariableProvider()->getByPath('searchParams.defaultOperand'),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
'name' => 'search[mediaType]',
'value' => $renderingContext->getVariableProvider()->getByPath('searchParams.mediaType'),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
'name' => 'search[sortOrder]',
'value' => $renderingContext->getVariableProvider()->getByPath('searchParams.sortOrder'),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
'name' => 'search[group]',
'value' => $renderingContext->getVariableProvider()->getByPath('searchParams.group'),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$arguments22 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
'name' => 'search[languageUid]',
'value' => $renderingContext->getVariableProvider()->getByPath('searchParams.languageUid'),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$arguments24 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
'name' => 'search[desc]',
'value' => $renderingContext->getVariableProvider()->getByPath('searchParams.desc'),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
'name' => 'search[numberOfResults]',
'value' => $renderingContext->getVariableProvider()->getByPath('searchParams.numberOfResults'),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
'name' => 'search[extendedSearch]',
'value' => $renderingContext->getVariableProvider()->getByPath('searchParams.extendedSearch'),
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output3 .= '
        </div>



                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'autofocus' => NULL,
'disabled' => NULL,
'maxlength' => NULL,
'readonly' => NULL,
'size' => NULL,
'placeholder' => NULL,
'pattern' => NULL,
'errorClass' => 'f3-form-error',
'dir' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'required' => false,
'type' => 'text',
'name' => 'search[sword]',
'value' => $renderingContext->getVariableProvider()->getByPath('sword'),
'id' => 'tx-indexedsearch-searchbox-sword',
'class' => 'tx-indexedsearch-searchbox-sword',
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output3 .= '



                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$arguments34 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'form.submit',
];

$arguments32 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'property' => NULL,
'disabled' => NULL,
'dir' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => 'search[submitButton]',
'value' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext),
'id' => 'tx-indexedsearch-searchbox-button-submit',
'class' => 'tx-indexedsearch-searchbox-button suchbutton',
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output3 .= '

    ';
return $output3;
};

$arguments1 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'arguments' => [],
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'object' => NULL,
'pageType' => 0,
'noCache' => false,
'section' => '',
'format' => '',
'additionalParams' => [],
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'fieldNamePrefix' => NULL,
'actionUri' => NULL,
'objectName' => NULL,
'hiddenFieldClassName' => NULL,
'requestToken' => NULL,
'signingType' => NULL,
'enctype' => NULL,
'name' => NULL,
'onreset' => NULL,
'onsubmit' => NULL,
'target' => NULL,
'novalidate' => NULL,
'class' => NULL,
'dir' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'action' => 'search',
'method' => 'post',
'id' => 'tx_indexedsearch',
'pageUid' => $renderingContext->getVariableProvider()->getByPath('settings.targetPid'),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</div>

';

    return $output0;
}

}

#