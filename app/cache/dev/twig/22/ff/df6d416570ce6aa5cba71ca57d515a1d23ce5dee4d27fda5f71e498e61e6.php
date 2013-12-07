<?php

/* PmsProjectsBundle:Topic:actionForm.html.twig */
class __TwigTemplate_22ffdf6d416570ce6aa5cba71ca57d515a1d23ce5dee4d27fda5f71e498e61e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 6
        echo "
";
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PmsProjectsBundle:Topic:actionForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  30 => 3,  27 => 2,  22 => 6,  20 => 2,);
    }
}
