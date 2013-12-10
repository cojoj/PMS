<?php

/* PmsProjectsBundle:Main:index.html.twig */
class __TwigTemplate_1dbbe098caa55d153740cc96c3ca3236d210a136fb1337dca59e58341f8d350c extends Twig_Template
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
        echo "<html>
    <head>
        <title>PMS</title>
        <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <body bgcolor='#F0F0F0'>
        <center><h1 align='center'><b>Projects Management Service</b></h1></center>

        <hr>
        
        <h2><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tools.png"), "html", null, true);
        echo "\" />  Tools</h2>

        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("topic_add");
        echo "\" title='Add project' class=\"btn\">Add project</a>
            <br><br>
        <hr>
            
        <h2><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("wait.png"), "html", null, true);
        echo "\" />   Awaiting projects</h2>
        <table id=\"hor-minimalist-a\">
            <tr>
                <th>subject</th>
                <th>lecturer</th>
                <th>entry date</th>
                <th>action</th>
                <th>students</th>
                <th>status</th>
            </tr>
            ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "awaiting"));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 28
            echo "            <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "subject"), "html", null, true);
            echo " </td><td> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "lecturer"), "name"), "html", null, true);
            echo " </td><td> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "entryDate"), "html", null, true);
            echo "</td><td> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("changeStatus", array("id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("edit.png"), "html", null, true);
            echo "\" Title='Edit'/></a><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteProject", array("id" => $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("delete.png"), "html", null, true);
            echo "\" Title='Remove'/></a></td><td>";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PmsProjectsBundle:Topic:studentList", array("teamId" => $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "team"), "id"))));
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "status"), "html", null, true);
            echo "</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </table>

        <br><hr>
        
        <h2><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("accepted.png"), "html", null, true);
        echo "\" />  Accepted projects</h2>
        <table id=\"hor-minimalist-a\">
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
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "accepted"));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 46
            echo "            <tr><td>";
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
        // line 48
        echo "        </table>

         <br><hr>
        
        <h2><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("removed.png"), "html", null, true);
        echo "\" />  Canceled projects</h2>
        <table id=\"hor-minimalist-a\">
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
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "canceled"));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 64
            echo "            <tr><td>";
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
        // line 66
        echo "        </table>

</body>
</html>

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
        return array (  178 => 66,  157 => 64,  153 => 63,  139 => 52,  133 => 48,  112 => 46,  108 => 45,  94 => 34,  88 => 30,  63 => 28,  59 => 27,  46 => 17,  39 => 13,  34 => 11,  24 => 4,  19 => 1,);
    }
}
