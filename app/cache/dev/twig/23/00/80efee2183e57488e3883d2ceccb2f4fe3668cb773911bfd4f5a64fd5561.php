<?php

/* PmsProjectsBundle:Topic:teamList.html.twig */
class __TwigTemplate_230080efee2183e57488e3883d2ceccb2f4fe3668cb773911bfd4f5a64fd5561 extends Twig_Template
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
        // line 1
        echo "
<ul>
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 4
            echo "    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "name"), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "PmsProjectsBundle:Topic:teamList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
