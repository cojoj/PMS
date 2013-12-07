<?php

/* PmsProjectsBundle:Topic:wrongPassword.html.twig */
class __TwigTemplate_6fa4764adc58f9de63eed349bb02f4a89debab5500248a990983841766333812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "Sorry, given password is not correct.<br/>
<a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getUrl("index");
        echo "\">back</a>";
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
        return array (  22 => 3,  19 => 2,);
    }
}
