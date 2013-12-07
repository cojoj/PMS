<?php

/* PmsProjectsBundle:Main:index.html.twig */
class __TwigTemplate_1dbbe098caa55d153740cc96c3ca3236d210a136fb1337dca59e58341f8d350c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "PmsProjectsBundle:Main:index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Projects Management Service</h1>

<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("topic_add");
        echo "\">Dodaj projekt</a>

<h2>Awaiting projects</h2>
<table border=\"1px solid\">
    <tr>
        <th>subject</th>
        <th>lecturer</th>
        <th>entry date</th>
        <th>action</th>
        <th>students</th>
        <th>status</th>
    </tr>
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "awaiting"));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 21
            echo "    <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "subject"), "html", null, true);
            echo " </td><td> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "lecturer"), "name"), "html", null, true);
            echo " </td><td> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "entryDate"), "html", null, true);
            echo "</td><td> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("changeStatus", array("id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "id"))), "html", null, true);
            echo "\">change</a><br/><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteProject", array("id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "id"))), "html", null, true);
            echo "\">remove</a></td><td>";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PmsProjectsBundle:Topic:studentList", array("teamId" => $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "team"), "id"))));
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "status"), "html", null, true);
            echo "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</table>

<h2>Accepted projects</h2>
<table border=\"1px solid\">
    <tr>
        <th>subject</th>
        <th>lecturer</th>
        <th>entry date</th>
        <th>change datet</th>
        <th>comment</th>
        <th>students</th>
        <th>status</th>
    </tr>
    ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "accepted"));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 37
            echo "    <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "subject"), "html", null, true);
            echo " </td><td> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "lecturer"), "name"), "html", null, true);
            echo " </td><td> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "entryDate"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "changeDate"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "comment"), "html", null, true);
            echo "</td><td>";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PmsProjectsBundle:Topic:studentList", array("teamId" => $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "team"), "id"))));
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "status"), "html", null, true);
            echo "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</table>

<h2>Canceled projects</h2>
<table border=\"1px solid\">
    <tr>
        <th>subject</th>
        <th>lecturer</th>
        <th>entry date</th>
        <th>change datet</th>
        <th>comment</th>
        <th>students</th>
        <th>status</th>
    </tr>
    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "canceled"));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 53
            echo "    <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "subject"), "html", null, true);
            echo " </td><td> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "lecturer"), "name"), "html", null, true);
            echo " </td><td> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "entryDate"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "changeDate"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "comment"), "html", null, true);
            echo "</td><td>";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PmsProjectsBundle:Topic:studentList", array("teamId" => $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "team"), "id"))));
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "status"), "html", null, true);
            echo "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</table>

<br/>
<a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getUrl("topic_add");
        echo "\">Dodaj projekt</a>

";
    }

    public function getTemplateName()
    {
        return "PmsProjectsBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 58,  162 => 55,  141 => 53,  137 => 52,  122 => 39,  101 => 37,  97 => 36,  82 => 23,  61 => 21,  57 => 20,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
