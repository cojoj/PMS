<?php

/* PmsProjectsBundle:Topic:wrongPassword.html.twig */
class __TwigTemplate_6fa4764adc58f9de63eed349bb02f4a89debab5500248a990983841766333812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "Sorry, given password is not correct.<br/>
<br>
<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("index");
        echo "\" class=\"btn\">back</a>
";
    }

    public function getTemplateName()
    {
        return "PmsProjectsBundle:Topic:wrongPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,);
    }
}
